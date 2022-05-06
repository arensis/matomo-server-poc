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

/* @RequestPlugin/requestPluginTemplate.twig */
class __TwigTemplate_5b323d96ba31179384573207b62c4724 extends Template
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
        // line 27
        echo "<div>
    <ul>
        <li>
            <span><strong>Id Site:</strong> ";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "</span>
        </li>
        <li>
            <span><strong>date:</strong> ";
        // line 33
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "</span>
        </li>
        <li>
            <span><strong>period:</strong> ";
        // line 36
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "</span>
        </li>
        <li>
            <span><strong>dateRange:</strong> ";
        // line 39
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["dateRange"]) || array_key_exists("dateRange", $context) ? $context["dateRange"] : (function () { throw new RuntimeError('Variable "dateRange" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "</span>
        </li>
    </ul>
    <div class=\"dataTable dataTableVizHtmlTable\" data-table-type\"DataTable\">
        <div class=\"dataTableWrapper\">
            <div class=\"dataTableScroller\">
                <table class=\"dataTable\">
                    <thead>
                        <tr>
                            <th>Servicio</th>
                            <th>Evento</th>
                            <th>Respuesta</th>
                            <th>Resultados</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event_name"]) {
            echo " 
                            <tr> 
                                <td>";
            // line 57
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event_name"], "category", [], "array", false, false, false, 57), "html", null, true);
            echo "</td>
                                <td>";
            // line 58
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event_name"], "action_value", [], "array", false, false, false, 58), "html", null, true);
            echo "</td>
                                <td>";
            // line 59
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event_name"], "name", [], "array", false, false, false, 59), "html", null, true);
            echo "</td>
                                <td>";
            // line 60
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event_name"], "results", [], "array", false, false, false, 60), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@RequestPlugin/requestPluginTemplate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 63,  98 => 60,  94 => 59,  90 => 58,  86 => 57,  79 => 55,  60 => 39,  54 => 36,  48 => 33,  42 => 30,  37 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("{# <div>
    <h2>{{ vizTitle }}</h2>

    <table class=\"dataTable\">
        <thead>
            <tr>
                {% for name in properties.columns_to_display %}
                    {% if name in properties.translations|keys %}
                        <th>{{ properties.translations[name]|translate }}</th>
                    {% else %}
                        <th>{{ name }}</th>
                    {% endif %}
                {% endfor %}
            </tr>
        </thead>
        <tbody>
            {% for tableRow in dataTable.getRows %}
            <tr>
                {% for column in properties.columns_to_display %}
                    <td>{{ tableRow.getColumn(column)|default('-')|truncate(50)|rawSafeDecoded }}</td>
                {% endfor %}
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div> #}
<div>
    <ul>
        <li>
            <span><strong>Id Site:</strong> {{ idSite }}</span>
        </li>
        <li>
            <span><strong>date:</strong> {{ date }}</span>
        </li>
        <li>
            <span><strong>period:</strong> {{ period }}</span>
        </li>
        <li>
            <span><strong>dateRange:</strong> {{ dateRange }}</span>
        </li>
    </ul>
    <div class=\"dataTable dataTableVizHtmlTable\" data-table-type\"DataTable\">
        <div class=\"dataTableWrapper\">
            <div class=\"dataTableScroller\">
                <table class=\"dataTable\">
                    <thead>
                        <tr>
                            <th>Servicio</th>
                            <th>Evento</th>
                            <th>Respuesta</th>
                            <th>Resultados</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for event_name in reports %} 
                            <tr> 
                                <td>{{ event_name['category'] }}</td>
                                <td>{{ event_name['action_value'] }}</td>
                                <td>{{ event_name['name'] }}</td>
                                <td>{{ event_name['results'] }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>", "@RequestPlugin/requestPluginTemplate.twig", "/Users/alfonsorodriguezmadrid/Documents/copaEurope/poc/poc-matomo-nestjs/matomo/plugins/RequestPlugin/templates/requestPluginTemplate.twig");
    }
}
