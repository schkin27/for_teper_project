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

/* /var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/home.htm */
class __TwigTemplate_68db50d39620b552e00ee0c3d5125d7e2cbdadf939c1a40361a16dda98df69cc extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 2);
        // line 3
        echo "
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                <div class=\"col-xs-12 col-sm-8 col-md-9 col-lg-9\">
                    <div id=\"tg-content\" class=\"tg-content\">
                        <section class=\"tg-sectionspace tg-haslayout\">
                            <div class=\"tg-latestnews\">
                                <div class=\"tg-borderheading\">
                                    <h2>Последние новости</h2>
                                </div>
                                <div id=\"tg-latestnewsslider\" class=\"tg-latestnewsslider owl-carousel tg-posts\">
                                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "                                    <div class=\"item\">
                                        <article class=\"tg-themepost tg-newspost\">
                                            <figure class=\"tg-featuredimg\">
                                                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\">
                                                    ";
            // line 21
            if ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 21), 0, 1) == true)) {
                // line 22
                echo "                                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 22), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 23
                    echo "                                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                    echo "\" style=\"width: 100%; height: 143px; object-fit: cover;\">
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                                                    ";
            } else {
                // line 26
                echo "                                                    <img src=\"";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/noimage.jpg");
                echo "\" alt=\" \" style=\"width: 100%; height: 143px; object-fit: cover;\">
                                                    ";
            }
            // line 28
            echo "                                                </a>
                                                
                                            </figure>
                                            <div class=\"tg-themepostcontent\">
                                                <ul class=\"tg-matadata\">
                                                    <li>
                                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "\">
                                                            <i class=\"fa fa-calendar\"></i>
                                                            <span>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 36), 36, $this->source), "d F Y", "Europe/Ulyanovsk"), "html", null, true);
            echo "</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class=\"tg-themeposttitle\">
                                                    <h3><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "</a></h3>
                                                </div>
                                                <div class=\"tg-description\">
                                                    <p style = \"
                                                    white-space: nowrap; 
                                                    overflow: hidden;
                                                    text-overflow: ellipsis;\">";
            // line 47
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo " </p>
                                                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "\">Читать далее</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                </div>
                                <div class=\"tg-btnsbox\">
                                    <a class=\"tg-btn\" href=\"/blog/category/default\">Показать все новости</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                ";
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "
            </div>
        </div>
    </div>
</main>";
    }

    public function getTemplateName()
    {
        return "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 64,  159 => 63,  148 => 54,  136 => 48,  132 => 47,  121 => 41,  113 => 36,  108 => 34,  100 => 28,  94 => 26,  91 => 25,  80 => 23,  75 => 22,  73 => 21,  69 => 20,  64 => 17,  60 => 16,  45 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "set" => 2, "for" => 16, "if" => 21);
        static $filters = array("escape" => 20, "slice" => 21, "theme" => 26, "date" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'set', 'for', 'if'],
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
