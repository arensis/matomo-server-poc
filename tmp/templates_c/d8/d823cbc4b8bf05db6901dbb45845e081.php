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

/* @Goals/manageGoals.twig */
class __TwigTemplate_89cb9d48d488284992eee2be4ce14ee9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_ManageGoals"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@Goals/manageGoals.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@Goals/manageGoals.twig", 6)->display($context);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("@Goals/_addEditGoal.twig", "@Goals/manageGoals.twig", 11)->display($context);
        // line 12
        echo "
    <style type=\"text/css\">
        .entityAddContainer {
            position:relative;
        }

        .entityAddContainer > .entityCancel:first-child {
            position: absolute;
            right:0;
            bottom:100%;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "@Goals/manageGoals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 12,  68 => 11,  65 => 10,  61 => 9,  56 => 6,  52 => 5,  47 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'Goals_ManageGoals'|translate }}{% endset %}

{% block topcontrols %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
{% endblock %}

{% block content %}

    {% include \"@Goals/_addEditGoal.twig\" %}

    <style type=\"text/css\">
        .entityAddContainer {
            position:relative;
        }

        .entityAddContainer > .entityCancel:first-child {
            position: absolute;
            right:0;
            bottom:100%;
        }
    </style>
{% endblock %}
", "@Goals/manageGoals.twig", "/Users/alfonsorodriguezmadrid/Documents/copaEurope/poc/poc-matomo-nestjs/matomo/plugins/Goals/templates/manageGoals.twig");
    }
}
