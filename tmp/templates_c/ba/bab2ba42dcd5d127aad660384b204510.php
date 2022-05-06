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

/* @Goals/_addEditGoal.twig */
class __TwigTemplate_7d1499db232b28eeead4ce8923c08b93 extends Template
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
        echo "
";
        // line 2
        $macros["ajax"] = $this->macros["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@Goals/_addEditGoal.twig", 2)->unwrap();
        // line 3
        echo twig_call_macro($macros["ajax"], "macro_errorDiv", [], 3, $context, $this->getSourceContext());
        echo "

<script type=\"text/javascript\">
    ";
        // line 6
        if ((isset($context["userCanEditGoals"]) || array_key_exists("userCanEditGoals", $context) ? $context["userCanEditGoals"] : (function () { throw new RuntimeError('Variable "userCanEditGoals" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        ";
            if ( !array_key_exists("onlyShowAddNewGoal", $context)) {
                // line 8
                echo "            piwik.goals = ";
                echo (isset($context["goalsJSON"]) || array_key_exists("goalsJSON", $context) ? $context["goalsJSON"] : (function () { throw new RuntimeError('Variable "goalsJSON" does not exist.', 8, $this->source); })());
                echo ";
        ";
            }
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        piwik.goals = ";
            echo (isset($context["goalsJSON"]) || array_key_exists("goalsJSON", $context) ? $context["goalsJSON"] : (function () { throw new RuntimeError('Variable "goalsJSON" does not exist.', 11, $this->source); })());
            echo ";
    ";
        }
        // line 13
        echo "
</script>

<div
    piwik-manage-goals
    user-can-edit-goals=\"";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["userCanEditGoals"]) || array_key_exists("userCanEditGoals", $context) ? $context["userCanEditGoals"] : (function () { throw new RuntimeError('Variable "userCanEditGoals" does not exist.', 18, $this->source); })())), "html_attr");
        echo "\"
    only-show-add-new-goal=\"";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("onlyShowAddNewGoal", $context)) ? (_twig_default_filter((isset($context["onlyShowAddNewGoal"]) || array_key_exists("onlyShowAddNewGoal", $context) ? $context["onlyShowAddNewGoal"] : (function () { throw new RuntimeError('Variable "onlyShowAddNewGoal" does not exist.', 19, $this->source); })()), false)) : (false))), "html_attr");
        echo "\"
    ecommerce-enabled=\"";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["ecommerceEnabled"]) || array_key_exists("ecommerceEnabled", $context) ? $context["ecommerceEnabled"] : (function () { throw new RuntimeError('Variable "ecommerceEnabled" does not exist.', 20, $this->source); })())), "html_attr");
        echo "\"
    ";
        // line 21
        if ((isset($context["userCanEditGoals"]) || array_key_exists("userCanEditGoals", $context) ? $context["userCanEditGoals"] : (function () { throw new RuntimeError('Variable "userCanEditGoals" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "        ";
            if (( !array_key_exists("onlyShowAddNewGoal", $context) ||  !(isset($context["onlyShowAddNewGoal"]) || array_key_exists("onlyShowAddNewGoal", $context) ? $context["onlyShowAddNewGoal"] : (function () { throw new RuntimeError('Variable "onlyShowAddNewGoal" does not exist.', 22, $this->source); })()))) {
                // line 23
                echo "            goals=\"";
                echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["goals"]) || array_key_exists("goals", $context) ? $context["goals"] : (function () { throw new RuntimeError('Variable "goals" does not exist.', 23, $this->source); })())), "html_attr");
                echo "\"
            ";
                // line 24
                if ((isset($context["idGoal"]) || array_key_exists("idGoal", $context) ? $context["idGoal"] : (function () { throw new RuntimeError('Variable "idGoal" does not exist.', 24, $this->source); })())) {
                    // line 25
                    echo "                show-goal=\"";
                    echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["idGoal"]) || array_key_exists("idGoal", $context) ? $context["idGoal"] : (function () { throw new RuntimeError('Variable "idGoal" does not exist.', 25, $this->source); })()), "js"), "html", null, true);
                    echo "\"
            ";
                }
                // line 27
                echo "        ";
            } else {
                // line 28
                echo "            show-add-goal=\"true\"
        ";
            }
            // line 30
            echo "    ";
        } else {
            // line 31
            echo "        goals=\"";
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["goals"]) || array_key_exists("goals", $context) ? $context["goals"] : (function () { throw new RuntimeError('Variable "goals" does not exist.', 31, $this->source); })())), "html_attr");
            echo "\"
    ";
        }
        // line 33
        echo "    ";
        if (array_key_exists("addNewGoalIntro", $context)) {
            echo "add-new-goal-intro=\"";
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["addNewGoalIntro"]) || array_key_exists("addNewGoalIntro", $context) ? $context["addNewGoalIntro"] : (function () { throw new RuntimeError('Variable "addNewGoalIntro" does not exist.', 33, $this->source); })())), "html_attr");
            echo "\"";
        }
        // line 34
        echo "    goal-trigger-type-options=\"";
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["goalTriggerTypeOptions"]) || array_key_exists("goalTriggerTypeOptions", $context) ? $context["goalTriggerTypeOptions"] : (function () { throw new RuntimeError('Variable "goalTriggerTypeOptions" does not exist.', 34, $this->source); })())), "html_attr");
        echo "\"
    goal-match-attribute-options=\"";
        // line 35
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["goalMatchAttributeOptions"]) || array_key_exists("goalMatchAttributeOptions", $context) ? $context["goalMatchAttributeOptions"] : (function () { throw new RuntimeError('Variable "goalMatchAttributeOptions" does not exist.', 35, $this->source); })())), "html_attr");
        echo "\"
    event-type-options=\"";
        // line 36
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["eventTypeOptions"]) || array_key_exists("eventTypeOptions", $context) ? $context["eventTypeOptions"] : (function () { throw new RuntimeError('Variable "eventTypeOptions" does not exist.', 36, $this->source); })())), "html_attr");
        echo "\"
    pattern-type-options=\"";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["patternTypeOptions"]) || array_key_exists("patternTypeOptions", $context) ? $context["patternTypeOptions"] : (function () { throw new RuntimeError('Variable "patternTypeOptions" does not exist.', 37, $this->source); })())), "html_attr");
        echo "\"
    numeric-comparison-type-options=\"";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["numericComparisonTypeOptions"]) || array_key_exists("numericComparisonTypeOptions", $context) ? $context["numericComparisonTypeOptions"] : (function () { throw new RuntimeError('Variable "numericComparisonTypeOptions" does not exist.', 38, $this->source); })())), "html_attr");
        echo "\"
    allow-multiple-options=\"";
        // line 39
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["allowMultipleOptions"]) || array_key_exists("allowMultipleOptions", $context) ? $context["allowMultipleOptions"] : (function () { throw new RuntimeError('Variable "allowMultipleOptions" does not exist.', 39, $this->source); })())), "html_attr");
        echo "\"
    before-goal-list-actions-body=\"";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("beforeGoalListActionsBodyEventResult", $context)) ? (_twig_default_filter((isset($context["beforeGoalListActionsBodyEventResult"]) || array_key_exists("beforeGoalListActionsBodyEventResult", $context) ? $context["beforeGoalListActionsBodyEventResult"] : (function () { throw new RuntimeError('Variable "beforeGoalListActionsBodyEventResult" does not exist.', 40, $this->source); })()), null)) : (null))), "html_attr");
        echo "\"
    end-edit-table=\"";
        // line 41
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("endEditTable", $context)) ? (_twig_default_filter((isset($context["endEditTable"]) || array_key_exists("endEditTable", $context) ? $context["endEditTable"] : (function () { throw new RuntimeError('Variable "endEditTable" does not exist.', 41, $this->source); })()), null)) : (null))), "html_attr");
        echo "\"
    before-goal-list-actions-head=\"";
        // line 42
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("beforeGoalListActionsHead", $context)) ? (_twig_default_filter((isset($context["beforeGoalListActionsHead"]) || array_key_exists("beforeGoalListActionsHead", $context) ? $context["beforeGoalListActionsHead"] : (function () { throw new RuntimeError('Variable "beforeGoalListActionsHead" does not exist.', 42, $this->source); })()), null)) : (null))), "html_attr");
        echo "\"
>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Goals/_addEditGoal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 42,  157 => 41,  153 => 40,  149 => 39,  145 => 38,  141 => 37,  137 => 36,  133 => 35,  128 => 34,  121 => 33,  115 => 31,  112 => 30,  108 => 28,  105 => 27,  99 => 25,  97 => 24,  92 => 23,  89 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  68 => 13,  62 => 11,  59 => 10,  53 => 8,  50 => 7,  48 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% import 'ajaxMacros.twig' as ajax %}
{{ ajax.errorDiv() }}

<script type=\"text/javascript\">
    {% if userCanEditGoals %}
        {% if onlyShowAddNewGoal is not defined %}
            piwik.goals = {{ goalsJSON|raw }};
        {% endif %}
    {% else %}
        piwik.goals = {{ goalsJSON|raw }};
    {% endif %}

</script>

<div
    piwik-manage-goals
    user-can-edit-goals=\"{{ userCanEditGoals|json_encode|e('html_attr') }}\"
    only-show-add-new-goal=\"{{ onlyShowAddNewGoal|default(false)|json_encode|e('html_attr') }}\"
    ecommerce-enabled=\"{{ ecommerceEnabled|json_encode|e('html_attr') }}\"
    {% if userCanEditGoals %}
        {% if onlyShowAddNewGoal is not defined or not onlyShowAddNewGoal %}
            goals=\"{{ goals|json_encode|e('html_attr') }}\"
            {% if idGoal %}
                show-goal=\"{{ idGoal|e('js') }}\"
            {% endif %}
        {% else %}
            show-add-goal=\"true\"
        {% endif %}
    {% else %}
        goals=\"{{ goals|json_encode|e('html_attr') }}\"
    {% endif %}
    {% if addNewGoalIntro is defined %}add-new-goal-intro=\"{{ addNewGoalIntro|json_encode|e('html_attr') }}\"{% endif %}
    goal-trigger-type-options=\"{{ goalTriggerTypeOptions|json_encode|e('html_attr') }}\"
    goal-match-attribute-options=\"{{ goalMatchAttributeOptions|json_encode|e('html_attr') }}\"
    event-type-options=\"{{ eventTypeOptions|json_encode|e('html_attr') }}\"
    pattern-type-options=\"{{ patternTypeOptions|json_encode|e('html_attr') }}\"
    numeric-comparison-type-options=\"{{ numericComparisonTypeOptions|json_encode|e('html_attr') }}\"
    allow-multiple-options=\"{{ allowMultipleOptions|json_encode|e('html_attr') }}\"
    before-goal-list-actions-body=\"{{ beforeGoalListActionsBodyEventResult|default(null)|json_encode|e('html_attr') }}\"
    end-edit-table=\"{{ endEditTable|default(null)|json_encode|e('html_attr') }}\"
    before-goal-list-actions-head=\"{{ beforeGoalListActionsHead|default(null)|json_encode|e('html_attr') }}\"
>
</div>
", "@Goals/_addEditGoal.twig", "/Users/alfonsorodriguezmadrid/Documents/copaEurope/poc/poc-matomo-nestjs/matomo/plugins/Goals/templates/_addEditGoal.twig");
    }
}
