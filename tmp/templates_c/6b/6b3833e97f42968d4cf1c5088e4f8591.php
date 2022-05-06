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

/* @Goals/_listTopDimension.twig */
class __TwigTemplate_9957af303c31b1e5d48d13f97c6b13b6 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topDimension"]) || array_key_exists("topDimension", $context) ? $context["topDimension"] : (function () { throw new RuntimeError('Variable "topDimension" does not exist.', 1, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 2
            echo "    ";
            $context["goal_nb_conversion"] = twig_get_attribute($this->env, $this->source, $context["element"], "nb_conversions", [], "any", false, false, false, 2);
            // line 3
            echo "    ";
            $context["goal_conversion_rate"] = twig_get_attribute($this->env, $this->source, $context["element"], "conversion_rate", [], "any", false, false, false, 3);
            // line 4
            echo "    <span class='goalTopElement' title='";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_Conversions", (("<b>" . call_user_func_array($this->env->getFilter('number')->getCallable(), [(isset($context["goal_nb_conversion"]) || array_key_exists("goal_nb_conversion", $context) ? $context["goal_nb_conversion"] : (function () { throw new RuntimeError('Variable "goal_nb_conversion" does not exist.', 4, $this->source); })())])) . "</b>")]);
            echo ",
\t\t";
            // line 5
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_ConversionRate", (("<b>" . call_user_func_array($this->env->getFilter('number')->getCallable(), [(isset($context["goal_conversion_rate"]) || array_key_exists("goal_conversion_rate", $context) ? $context["goal_conversion_rate"] : (function () { throw new RuntimeError('Variable "goal_conversion_rate" does not exist.', 5, $this->source); })())])) . "</b>")]);
            echo "'>
\t    ";
            // line 6
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["element"], "name", [], "any", false, false, false, 6)]);
            echo "
    </span>

    ";
            // line 9
            $macros["piwik"] = $this->macros["piwik"] = $this->loadTemplate("macros.twig", "@Goals/_listTopDimension.twig", 9)->unwrap();
            // line 10
            echo "    ";
            echo twig_call_macro($macros["piwik"], "macro_logoHtml", [twig_get_attribute($this->env, $this->source, $context["element"], "metadata", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, $context["element"], "name", [], "any", false, false, false, 10)], 10, $context, $this->getSourceContext());
            echo "
    ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 11) == (twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 11) - 1))) {
                // line 12
                echo "        and
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 13
$context["loop"], "index", [], "any", false, false, false, 13) < (twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 13) - 1))) {
                // line 14
                echo "        ,
    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Goals/_listTopDimension.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 14,  87 => 13,  84 => 12,  82 => 11,  77 => 10,  75 => 9,  69 => 6,  65 => 5,  60 => 4,  57 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for element in topDimension %}
    {% set goal_nb_conversion=element.nb_conversions %}
    {% set goal_conversion_rate=element.conversion_rate %}
    <span class='goalTopElement' title='{{ 'Goals_Conversions'|translate(\"<b>\"~goal_nb_conversion|number~\"</b>\")|raw }},
\t\t{{ 'Goals_ConversionRate'|translate(\"<b>\"~goal_conversion_rate|number~\"</b>\")|raw }}'>
\t    {{ element.name|rawSafeDecoded }}
    </span>

    {% import 'macros.twig' as piwik %}
    {{ piwik.logoHtml(element.metadata, element.name) }}
    {% if loop.index == loop.length-1 %}
        and
    {% elseif loop.index < loop.length-1 %}
        ,
    {% endif %}
{% endfor %}
", "@Goals/_listTopDimension.twig", "/Users/alfonsorodriguezmadrid/Documents/copaEurope/poc/poc-matomo-nestjs/matomo/plugins/Goals/templates/_listTopDimension.twig");
    }
}
