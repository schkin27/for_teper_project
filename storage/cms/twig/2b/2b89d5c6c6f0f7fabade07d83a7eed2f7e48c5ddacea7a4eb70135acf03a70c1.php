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

/* /var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/blog/category.htm */
class __TwigTemplate_21d90bde7dffce0efb2969fb90b15627c7816ccda6cdac5f5ae9f3c6853add8d extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["News"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        echo "
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                <div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right\">
                    <div id=\"tg-content\" class=\"tg-content\">
                        <div class=\"tg-titleborder\">
                            ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, true, 10)) {
            // line 11
            echo "                            <h2>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</h2>
                            ";
        } else {
            // line 13
            echo "                            <h2>Новости</h2>
                            ";
        }
        // line 15
        echo "                        </div>
                        ";
        // line 16
        if ((($context["count_posts"] ?? null) == 0)) {
            // line 17
            echo "                        <div style =\"padding: 50px;\" class=\"tg-errorcontent\">
                            <div class=\"col-sm-10 col-sm-offset-1\">
                                <div class=\"tg-description\">
                                    <p>Кажется в разделе ";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo " <b>не содержится новостей</b></p>
                                </div>
                                <div class=\"tg-description\">
                                    <p>Но всегда можно вернуться <a href=\"/\">главную страницу</a></p>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 28
        echo "                        <div class=\"tg-newsandarticle tg-grid\">
                            <div id = \"news-id\" class=\"row\">
                                ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cat.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "                            </div>
                        </div>
                        
                        ";
        // line 34
        if ((($context["count_posts"] ?? null) > 15)) {
            // line 35
            echo "                        <nav class=\"tg-pagination\">
                            <ul>
                                <DIV class=\"tg-btnsbox\" id=\"load-more-button\">
                                    <A class=\"tg-btn\" style=\"float:none;\" data-request=\"onLoadMore\" data-request-data=\"page: 1\" href=\"#\">Загрузить еще 15 новостей</A>
                                </DIV>
                            </ul>
                        </nav>
                        ";
        }
        // line 43
        echo "                    </div>
                </div>
                ";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar_left.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "            </div>
        </div>
    </div>
</main>";
    }

    public function getTemplateName()
    {
        return "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/blog/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  113 => 45,  109 => 43,  99 => 35,  97 => 34,  92 => 31,  88 => 30,  84 => 28,  73 => 20,  68 => 17,  66 => 16,  63 => 15,  59 => 13,  53 => 11,  51 => 10,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/blog/category.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 10, "partial" => 30);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'partial'],
                ['escape'],
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
