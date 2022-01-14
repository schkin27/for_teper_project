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

/* /var/www/u1253217/data/www/zavproc.ru/themes/zavproc/partials/sidebar_left.htm */
class __TwigTemplate_4d539d850df1ee580a7becac82190d4e810d40dc4bfff172ed6bb532acc34210 extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        echo "
<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left\">
    <aside id=\"tg-sidebar\" class=\"tg-sidebar\">
        <div class=\"tg-widget tg-widgetlatestcourses\">
            <div class=\"tg-widgettitle\">
                <h3>Последние новости</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "                <article class=\"tg-campus tg-campusleftthumb\">
                    <figure class=\"tg-featuredimg\">
                        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\">
                            ";
            // line 14
            if ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 14), 0, 1) == true)) {
                // line 15
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 15), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 16
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                    echo "\" alt=\"image description\" style=\"width: 70px; height: 70px; object-fit: cover;\">
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                            ";
            } else {
                // line 19
                echo "                                <img src=\"";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/noimage.jpg");
                echo "\" alt=\" \" style=\"width: 70px; height: 70px; object-fit: cover;\">
                            ";
            }
            // line 21
            echo "                        </a>
                    </figure>
                    <div class=\"tg-campuscontent\">
                        <div class=\"tg-datetime\">
                            <i class=\"fa fa-calendar\"></i>
                            <span>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 26), 26, $this->source), "d F Y", "Europe/Ulyanovsk"), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"tg-campustitle\">
                            <h3><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "</a></h3>
                        </div>
                    </div>
                </article>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </div>
        </div>
        <div class=\"tg-widget tg-widgetcoursecategories\">
            <div class=\"tg-widgettitle\">
                <h3>Категории</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                    ";
        // line 41
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 42
        echo "                   
            </div>
        </div>
    </aside>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/partials/sidebar_left.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 42,  123 => 41,  114 => 34,  101 => 29,  95 => 26,  88 => 21,  82 => 19,  79 => 18,  70 => 16,  65 => 15,  63 => 14,  59 => 13,  55 => 11,  51 => 10,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/partials/sidebar_left.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 10, "if" => 14, "component" => 41);
        static $filters = array("escape" => 13, "slice" => 14, "theme" => 19, "date" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'component'],
                ['escape', 'slice', 'theme', 'date'],
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
