<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\RequestPlugin;

class RequestPlugin extends \Piwik\Plugin
{
    public function registerEvents()
    {
        return array(
            'CronArchive.getArchivingAPIMethodForPlugin' => 'getArchivingAPIMethodForPlugin',
            'AssetManager.getStylesheetFiles' => 'getStylesheetFiles',
            'AssetManager.getJavaScriptFiles' => 'getJsFiles'
        );
    }

     /**
     * Adds css files for this plugin to the list in the event notification.
     */
    public function getStylesheetFiles(&$stylesheets)
    {
        $stylesheets[] = "plugins/RequestPlugin/stylesheets/requestPlugin.css";
    }

    /**
     * Adds js files for this plugin to the list in the event notification.
     */
    public function getJsFiles(&$jsFiles)
    {
        $jsFiles[] = "plugins/RequestPlugin/javascripts/requestPlugin.js";
    }

    // support archiving just this plugin via core:archive
    public function getArchivingAPIMethodForPlugin(&$method, $plugin)
    {
        if ($plugin == 'RequestPlugin') {
            $method = 'RequestPlugin.getExampleArchivedMetric';
        }
    }
}
