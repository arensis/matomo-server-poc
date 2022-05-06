<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Goals/conversionOverview.twig */
class __TwigTemplate_b396d04531f3f38860bbd76baf9daf5a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div piwik-content-block
     content-title=\"";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_ConversionsOverview"]), "html_attr");
        echo "\">
    <ul class=\"ulGoalTopElements\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["topDimensions"] ?? null), "country", [], "any", true, true, false, 4)) {
            // line 5
            echo "            <li>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_BestCountries"]), "html", null, true);
            echo " ";
            $this->loadTemplate("@Goals/_listTopDimension.twig", "@Goals/conversionOverview.twig", 5)->display(twig_array_merge($context, ["topDimension" => twig_get_attribute($this->env, $this->source, (isset($context["topDimensions"]) || array_key_exists("topDimensions", $context) ? $context["topDimensions"] : (function () { throw new RuntimeError('Variable "topDimensions" does not exist.', 5, $this->source); })()), "country", [], "any", false, false, false, 5)]));
            echo "</li>
        ";
        }
        // line 7
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["topDimensions"] ?? null), "keyword", [], "any", true, true, false, 7) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topDimensions"]) || array_key_exists("topDimensions", $context) ? $context["topDimensions"] : (function () { throw new RuntimeError('Variable "topDimensions" does not exist.', 7, $this->source); })()), "keyword", [], "any", false, false, false, 7)) > 0))) {
            // line 8
            echo "            <li>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_BestKeywords"]), "html", null, true);
            echo " ";
            $this->loadTemplate("@Goals/_listTopDimension.twig", "@Goals/conversionOverview.twig", 8)->display(twig_array_merge($context, ["topDimension" => twig_get_attribute($this->env, $this->source, (isset($context["topDimensions"]) || array_key_exists("topDimensions", $context) ? $context["topDimensions"] : (function () { throw new RuntimeError('Variable "topDimensions" does not exist.', 8, $this->source); })()), "keyword", [], "any", false, false, false, 8)]));
            echo "</li>
        ";
        }
        // line 10
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["topDimensions"] ?? null), "website", [], "any", true, true, false, 10) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topDimensions"]) || array_key_exists("topDimensions", $context) ? $context["topDimensions"] : (function () { throw new RuntimeError('Variable "topDimensions" does not exist.', 10, $this->source); })()), "website", [], "any", false, false, false, 10)) > 0))) {
            // line 11
            echo "            <li>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_BestReferrers"]), "html", null, true);
            echo " ";
            $this->loadTemplate("@Goals/_listTopDimension.twig", "@Goals/conversionOverview.twig", 11)->display(twig_array_merge($context, ["topDimension" => twig_get_attribute($this->env, $this->source, (isset($context["topDimensions"]) || array_key_exists("topDimensions", $context) ? $context["topDimensions"] : (function () { throw new RuntimeError('Variable "topDimensions" does not exist.', 11, $this->source); })()), "website", [], "any", false, false, false, 11)]));
            echo "</li>
        ";
        }
        // line 13
        echo "        <li>
            ";
        // line 14
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_ReturningVisitorsConversionRateIs", (("<strong>" . (isset($context["conversion_rate_returning"]) || array_key_exists("conversion_rate_returning", $context) ? $context["conversion_rate_returning"] : (function () { throw new RuntimeError('Variable "conversion_rate_returning" does not exist.', 14, $this->source); })())) . "</strong>")]);
        echo "
            , ";
        // line 15
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_NewVisitorsConversionRateIs", (("<strong>" . (isset($context["conversion_rate_new"]) || array_key_exists("conversion_rate_new", $context) ? $context["conversion_rate_new"] : (function () { throw new RuntimeError('Variable "conversion_rate_new" does not exist.', 15, $this->source); })())) . "</strong>")]);
        echo "
        </li>
    </ul>
";
        // line 18
        if ((isset($context["visitorLogEnabled"]) || array_key_exists("visitorLogEnabled", $context) ? $context["visitorLogEnabled"] : (function () { throw new RuntimeError('Variable "visitorLogEnabled" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "<a href=\"javascript:;\" class=\"segmentedlog\" onclick=\"SegmentedVisitorLog.show('Goals.getMetrics', 'visitConvertedGoalId==";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["idGoal"]) || array_key_exists("idGoal", $context) ? $context["idGoal"] : (function () { throw new RuntimeError('Variable "idGoal" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "', {})\">
    <span class=\"icon-visitor-profile rowActionIcon\"></span> ";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_RowActionTooltipWithDimension", call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Goal"])]), "html", null, true);
            echo "
</a>
";
        }
        // line 23
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.afterGoalConversionOverviewReport"]);
        echo "
<br style=\"clear:left\"/>

</div>";
    }

    public function getTemplateName()
    {
        return "@Goals/conversionOverview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 23,  97 => 20,  92 => 19,  90 => 18,  84 => 15,  80 => 14,  77 => 13,  69 => 11,  66 => 10,  58 => 8,  55 => 7,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div piwik-content-block
     content-title=\"{{ 'Goals_ConversionsOverview'|translate|e('html_attr') }}\">
    <ul class=\"ulGoalTopElements\">
        {% if topDimensions.country is defined %}
            <li>{{ 'Goals_BestCountries'|translate }} {% include '@Goals/_listTopDimension.twig' with {'topDimension':topDimensions.country} %}</li>
        {% endif %}
        {% if topDimensions.keyword is defined and topDimensions.keyword|length > 0 %}
            <li>{{ 'Goals_BestKeywords'|translate }} {% include '@Goals/_listTopDimension.twig' with {'topDimension':topDimensions.keyword} %}</li>
        {% endif %}
        {% if topDimensions.website is defined and topDimensions.website|length > 0 %}
            <li>{{ 'Goals_BestReferrers'|translate }} {% include '@Goals/_listTopDimension.twig' with {'topDimension':topDimensions.website} %}</li>
        {% endif %}
        <li>
            {{ 'Goals_ReturningVisitorsConversionRateIs'|translate(\"<strong>\"~conversion_rate_returning~\"</strong>\")|raw }}
            , {{ 'Goals_NewVisitorsConversionRateIs'|translate(\"<strong>\"~conversion_rate_new~\"</strong>\")|raw }}
        </li>
    </ul>
{% if visitorLogEnabled %}
<a href=\"javascript:;\" class=\"segmentedlog\" onclick=\"SegmentedVisitorLog.show('Goals.getMetrics', 'visitConvertedGoalId=={{ idGoal }}', {})\">
    <span class=\"icon-visitor-profile rowActionIcon\"></span> {{ 'Live_RowActionTooltipWithDimension'|translate('General_Goal'|translate) }}
</a>
{% endif %}
{{ postEvent(\"Template.afterGoalConversionOverviewReport\") }}
<br style=\"clear:left\"/>

</div>", "@Goals/conversionOverview.twig", "/Users/alfonsorodriguezmadrid/Documents/copaEurope/poc/poc-matomo-nestjs/matomo/plugins/Goals/templates/conversionOverview.twig");
    }
}
