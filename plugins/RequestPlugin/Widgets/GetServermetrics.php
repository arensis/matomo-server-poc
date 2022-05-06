<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\RequestPlugin\Widgets;

use Exception;
use Piwik\Widget\Widget;
use Piwik\Widget\WidgetConfig;
use Piwik\Common;
use Piwik\Db;

/**
 * This class allows you to add your own widget to the Piwik platform. In case you want to remove widgets from another
 * plugin please have a look at the "configureWidgetsList()" method.
 * To configure a widget simply call the corresponding methods as described in the API-Reference:
 * http://developer.piwik.org/api-reference/Piwik/Plugin\Widget
 */
class GetServermetrics extends Widget {
 
    private $date;
    private $period;
    private $idSite;

    public function __construct()
    {   
        try {
            $this->idSite = Common::getRequestVar('idSite', false, 'int');
            $this->period = Common::getRequestVar('period', 'day', 'string');
            $this->date = Common::getRequestVar('date', 'yesterday', 'string');
            if ($this->date === 'today') {
                $this->date = date('Y-m-d');
            } else if ($this->date === 'yestarday') {
                $this->date = date('Y-m-d', strtotime("-1 days"));
            }
        } catch (Exception $e) {
            // the date looks like YYYY-MM-DD,YYYY-MM-DD or other format
            $this->date = null;
            $this->idSite = null;
            $this->period = null;
        }
    }

    public static function configure(WidgetConfig $config)
    {
        /**
         * Set the category the widget belongs to. You can reuse any existing widget category or define
         * your own category.
         */
        // $config->setCategoryId('General_Actions');
        $config->setCategoryId('RequestPlugin_Requests');

        /**
         * Set the subcategory the widget belongs to. If a subcategory is set, the widget will be shown in the UI.
         */
        // $config->setSubcategoryId('General_Overview');

        /**
         * Set the name of the widget belongs to.
         */
        $config->setName('RequestPlugin_Servermetrics');

        /**
         * Set the order of the widget. The lower the number, the earlier the widget will be listed within a category.
         */
        $config->setOrder(99);

        /**
         * Optionally set URL parameters that will be used when this widget is requested.
         * $config->setParameters(array('myparam' => 'myvalue'));
         */

        /**
         * Define whether a widget is enabled or not. For instance some widgets might not be available to every user or
         * might depend on a setting (such as Ecommerce) of a site. In such a case you can perform any checks and then
         * set `true` or `false`. If your widget is only available to users having super user access you can do the
         * following:
         *
         * $config->setIsEnabled(\Piwik\Piwik::hasUserSuperUserAccess());
         * or
         * if (!\Piwik\Piwik::hasUserSuperUserAccess())
         *     $config->disable();
         */
    }

    /**
     * This method renders the widget. It's on you how to generate the content of the widget.
     * As long as you return a string everything is fine. You can use for instance a "Piwik\View" to render a
     * twig template. In such a case don't forget to create a twig template (eg. myViewTemplate.twig) in the
     * "templates" directory of your plugin.
     *
     * @return string
     */
    public function render() {
        $dateRanges = $this->calculateDateRanges();
        $query = $this->buildQuery();

        $reports = Db::get()->fetchAll($query);

        return $this->renderTemplate('requestPluginTemplate', array(
            'reports' => $reports,
            'idSite' => $this->idSite,
            'date' => $this->date,
            'period' => $this->period,
            'dateRange' => $dateRanges[0] . ',' . $dateRanges[1]
        ));
    }

    private function buildQuery() {
        $EVENT_CATEGORY_TYPE = 10;
        $EVENT_ACTION_TYPE = 11;
        $EVENT_NAME_TYPE = 12;

        $dateRanges = $this->calculateDateRanges();

        return "SELECT COUNT(event_action.name) AS results, event_category.name AS category, event_action.name AS action_value, event_name.name AS name 
            FROM matomo_log_link_visit_action AS id 
            JOIN matomo_log_action AS event_action 
            ON id.idaction_event_action = event_action.idaction AND id.idsite = {$this->idSite} AND CAST(server_time AS DATE) >= '{$dateRanges[0]}' AND CAST(server_time AS DATE) <= '{$dateRanges[1]}' AND event_action.type = {$EVENT_ACTION_TYPE}
            JOIN matomo_log_action AS event_category
            ON id.idaction_event_category = event_category.idaction AND event_category.type = {$EVENT_CATEGORY_TYPE}
            JOIN matomo_log_action AS event_name
            ON id.idaction_name = event_name.idaction AND event_name.type = {$EVENT_NAME_TYPE}
            GROUP BY category, action_value, name";
    }

    private function calculateDateRanges() {
        $finishDate = $this->date;        

        switch($this->period) {
            case 'day':
                $startDate = $this->date;
                break;
            case 'week':
                $startDate = $this->calculateFirstDayWeek($this->date);
                $finishDate = $this->calculateLastDayWeek($this->date);
                break;
            case 'month':
                $startDate = $this->calculateFirstDayMonth($this->date);
                break;
            case 'year':
                $startDate = $this->calculateFirstDayYear($this->date);
                break;
            case 'range':
                if ($this->date) {
                    $startDate = preg_split ("/\,/", $this->date)[0];
                    $finishDate = preg_split ("/\,/", $this->date)[1];
                }
                break;       
        }

        return [$startDate, $finishDate];
    }

    private function calculateFirstDayWeek($date) {
        return date("Y-m-d", strtotime('monday this week', strtotime($date)));
    }

    private function calculateLastDayWeek($date) {
        return date("Y-m-d", strtotime('sunday this week', strtotime($date)));
    }

    private function calculateFirstDayMonth($date) {
        $dateSplitted = preg_split("/\-/", $date);

        return "{$dateSplitted[0]}-{$dateSplitted[1]}-01";
    }

    private function calculateFirstDayYear($date) {
        $dateSplitted = preg_split("/\-/", $date);

        return "{$dateSplitted[0]}-01-01";
    }
}