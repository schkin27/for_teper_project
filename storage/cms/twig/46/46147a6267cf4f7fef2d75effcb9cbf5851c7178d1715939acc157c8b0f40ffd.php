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

/* /var/www/u1253217/data/www/zavproc.ru/themes/zavproc/partials/header.htm */
class __TwigTemplate_4a739cd736db858b140a3112e4c5cac8e1a9e324f1e4d668a522064ddd9b9cd4 extends \Twig\Template
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
        $context["categories"] = twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", [], "any", false, false, true, 1);
        // line 2
        echo "
<div id=\"tg-wrapper\" class=\"tg-wrapper\">
    <header id=\"tg-header\" class=\"tg-header tg-haslayout\">
        <div class=\"clearfix\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                    <div class=\"tg-logoandnoticeboard\">
                        <strong class=\"tg-logo\"><a href=\"/\"><img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"Прокуратура\"></a></strong>
                        
                    </div>
                    <div class=\"tg-navigationarea\">
                        <nav id=\"tg-nav\" class=\"tg-nav\">
                            <div class=\"navbar-header\">
                                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#tg-navigation\" aria-expanded=\"false\">
                                    <span class=\"sr-only\">Навигация</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                            </div>
                            <div id=\"tg-navigation\" class=\"collapse navbar-collapse tg-navigation\">
                                <ul> 
                                    <!-- class=\"current-menu-item\" -->
                                    
                                    ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 27), "title", [], "any", false, false, true, 27) == "Главная")) {
            // line 28
            echo "                                    <li class = \"current-menu-item\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\">Главная</a></li>
                                    ";
        } else {
            // line 30
            echo "                                    <li><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\">Главная</a></li>
                                    ";
        }
        // line 32
        echo "
                                    <li class=\"menu-item-has-children\">
                                        <a href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/category");
        echo "\">Новости</a>
                                        <ul class=\"sub-menu\">
                                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 37
            echo "                                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "</a></li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                        </ul>
                                    </li>

                                    ";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 42), "title", [], "any", false, false, true, 42) == "Документы")) {
            // line 43
            echo "                                    <li class = \"current-menu-item\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("documents");
            echo "\">Документы</a></li>
                                    ";
        } else {
            // line 45
            echo "                                    <li><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("documents");
            echo "\">Документы</a></li>
                                    ";
        }
        // line 47
        echo "
                                    ";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 48), "title", [], "any", false, false, true, 48) == "Контактная информация")) {
            // line 49
            echo "                                    <li class = \"current-menu-item\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
            echo "\">Контактная информация</a></li>
                                    ";
        } else {
            // line 51
            echo "                                    <li><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
            echo "\">Контактная информация</a></li>
                                    ";
        }
        // line 53
        echo "
                                    <li><a href=\"mailto:zav@ulproc.ru\">Заяви о Коррупции</a></li>
                                    
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>";
    }

    public function getTemplateName()
    {
        return "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 53,  139 => 51,  133 => 49,  131 => 48,  128 => 47,  122 => 45,  116 => 43,  114 => 42,  109 => 39,  98 => 37,  94 => 36,  89 => 34,  85 => 32,  79 => 30,  73 => 28,  71 => 27,  51 => 10,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/partials/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 27, "for" => 36);
        static $filters = array("theme" => 10, "page" => 28, "escape" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['theme', 'page', 'escape'],
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
