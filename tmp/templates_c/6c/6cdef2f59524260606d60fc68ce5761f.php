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

/* @ProfessionalServices/promoFunnel.twig */
class __TwigTemplate_100409dd3432388c1064f5dbb8b08181 extends Template
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
        echo "<p style=\"margin-top:3em;margin-bottom:3em\" class=\"alert-info alert\">Did you know?
    A Funnel defines a series of actions that you expect your visitors to take on their way to converting a goal.
    <br/>With <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/recommends/conversion-funnel/\">Funnels for Matomo</a>,
    you can easily determine your funnel and see where your visitors drop off and how to focus efforts to increase your conversions.
</p>
";
    }

    public function getTemplateName()
    {
        return "@ProfessionalServices/promoFunnel.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p style=\"margin-top:3em;margin-bottom:3em\" class=\"alert-info alert\">Did you know?
    A Funnel defines a series of actions that you expect your visitors to take on their way to converting a goal.
    <br/>With <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/recommends/conversion-funnel/\">Funnels for Matomo</a>,
    you can easily determine your funnel and see where your visitors drop off and how to focus efforts to increase your conversions.
</p>
", "@ProfessionalServices/promoFunnel.twig", "/Users/alfonsorodriguezmadrid/Documents/copaEurope/poc/poc-matomo-nestjs/matomo/plugins/ProfessionalServices/templates/promoFunnel.twig");
    }
}
