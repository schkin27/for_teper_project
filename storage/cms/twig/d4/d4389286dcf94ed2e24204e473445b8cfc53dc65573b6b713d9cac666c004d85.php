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

/* /var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/404.htm */
class __TwigTemplate_c99e881ff56b318b5da9b4f932663fd725eb91c68c378e884238cfaf9fcee59d extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!--************************************
\t\t\t\tInner Banner Start
\t\t*************************************-->
<div class=\"tg-innerbanner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <ol class=\"tg-breadcrumb\">
                    <li><a href=\"\">Главная</a></li>
                    <li class=\"tg-active\">404</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"tg-404error\">
                <figure class=\"tg-errorimg\">
                    
                </figure>
                <div class=\"tg-errorcontent\">
                    <div class=\"col-sm-10 col-sm-offset-1\">
                        <h2>404!</h2>
                        <h3>Кажется такой страницы<span>не существует?</span></h3>
                        <div class=\"tg-description\">
                            <p>Но всегда можно вернуться <a href=\"/\">главную страницу</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->";
    }

    public function getTemplateName()
    {
        return "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/404.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
