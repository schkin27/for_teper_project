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

/* /var/www/u1253217/data/www/zavproc.ru/themes/zavproc/partials/footer.htm */
class __TwigTemplate_7da85eccd3b2a6b07882afeb2ddc96b0153a19c6b9baf9b2b28222f6788b64d9 extends \Twig\Template
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
        echo "<footer style = \"height: 40px;\">
    <div class=\"tg-footerbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                    <span class=\"tg-copyright\">
                        ";
        // line 7
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "index/footer_text.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "                    </span>
                    <nav class=\"tg-addnav\">
                        <ul>
                            <li><a href=\"http://www.genproc.gov.ru/\">Генеральная Прокуратура РФ</a></li>
                            <li><a href=\"https://youtouch.dev/\">Разработчики сайта</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/partials/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 7);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
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
