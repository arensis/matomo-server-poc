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

/* @Marketplace/_updateCommunicationEmail.twig */
class __TwigTemplate_4b0ee282034e5f81a1dfa51693bd375b extends Template
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
        echo "<p>";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_EmailHello"]), "html", null, true);
        echo "</p>
<p>";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreUpdater_ThereIsNewPluginVersionAvailableForUpdate"]), "html", null, true);
        echo "</p>

<ul>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pluginsToBeNotified"]) || array_key_exists("pluginsToBeNotified", $context) ? $context["pluginsToBeNotified"] : (function () { throw new RuntimeError('Variable "pluginsToBeNotified" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 6
            echo "<li>";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 6), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "latestVersion", [], "any", false, false, false, 6), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>

";
        // line 10
        if ((isset($context["hasThemeUpdate"]) || array_key_exists("hasThemeUpdate", $context) ? $context["hasThemeUpdate"] : (function () { throw new RuntimeError('Variable "hasThemeUpdate" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "<p>
";
            // line 12
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreUpdater_NotificationClickToUpdateThemes"]), "html", null, true);
            echo "<br/>
<a href=\"";
            // line 13
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 13, $this->source); })()), "html_attr");
            echo "index.php?module=CorePluginsAdmin&action=themes\">";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "index.php?module=CorePluginsAdmin&action=themes</a>
</p>
";
        }
        // line 16
        echo "
";
        // line 17
        if ((isset($context["hasPluginUpdate"]) || array_key_exists("hasPluginUpdate", $context) ? $context["hasPluginUpdate"] : (function () { throw new RuntimeError('Variable "hasPluginUpdate" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "<p>
";
            // line 19
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreUpdater_NotificationClickToUpdatePlugins"]), "html", null, true);
            echo "<br/>
<a href=\"";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 20, $this->source); })()), "html_attr");
            echo "index.php?module=CorePluginsAdmin&action=plugins\">";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "index.php?module=CorePluginsAdmin&action=plugins</a>
</p>
";
        }
        // line 23
        echo "
<p>
";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_HappyAnalysing"]), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "@Marketplace/_updateCommunicationEmail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 25,  104 => 23,  96 => 20,  92 => 19,  89 => 18,  87 => 17,  84 => 16,  76 => 13,  72 => 12,  69 => 11,  67 => 10,  63 => 8,  52 => 6,  48 => 5,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>{{ 'ScheduledReports_EmailHello'|translate }}</p>
<p>{{ 'CoreUpdater_ThereIsNewPluginVersionAvailableForUpdate'|translate }}</p>

<ul>
{% for plugin in pluginsToBeNotified %}
<li>{{ plugin.name }} {{ plugin.latestVersion }}</li>
{% endfor %}
</ul>

{% if hasThemeUpdate %}
<p>
{{ 'CoreUpdater_NotificationClickToUpdateThemes'|translate }}<br/>
<a href=\"{{ host|e('html_attr') }}index.php?module=CorePluginsAdmin&action=themes\">{{ host }}index.php?module=CorePluginsAdmin&action=themes</a>
</p>
{% endif %}

{% if hasPluginUpdate %}
<p>
{{ 'CoreUpdater_NotificationClickToUpdatePlugins'|translate }}<br/>
<a href=\"{{ host|e('html_attr') }}index.php?module=CorePluginsAdmin&action=plugins\">{{ host }}index.php?module=CorePluginsAdmin&action=plugins</a>
</p>
{% endif %}

<p>
{{ 'Installation_HappyAnalysing'|translate }}
</p>
", "@Marketplace/_updateCommunicationEmail.twig", "/Users/alfonsorodriguezmadrid/Documents/copaEurope/poc/poc-matomo-nestjs/matomo/plugins/Marketplace/templates/_updateCommunicationEmail.twig");
    }
}
