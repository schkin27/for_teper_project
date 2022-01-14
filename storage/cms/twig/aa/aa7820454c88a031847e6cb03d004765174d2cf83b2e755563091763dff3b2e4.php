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

/* /var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/blog/post.htm */
class __TwigTemplate_e0c6539bb33ef7b8259f0dde38088cd241580f95e036bb6843eba3c54b309104 extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['data'] = ($context["post"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoBlogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                <div class=\"col-xs-12 col-sm-8 col-md-9 col-lg-9 pull-right\">
                    <div id=\"tg-content\" class=\"tg-content\">
                        <div class=\"tg-detailpage tg-newsdetailpage\">
                            <article class=\"tg-themepost tg-newspost\">
                                <div class=\"tg-themepostcontent\">
                                    <div class=\"tg-themeposttitle\">
                                        <h1><b>";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</b></h1>
                                    </div>

                                    <ul class=\"tg-themepostinfo\">
                                        <li>
                                            <div class=\"tg-infodata\">
                                                <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 19), 19, $this->source), "d M Y", "Europe/Ulyanovsk"), "html", null, true);
        echo "</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"tg-infodata\">
                                                ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "views", [], "any", false, false, true, 24) != 2)) {
            // line 25
            echo "                                                <p><b>Посмотрели: </b> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "views", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo " раз</p>
                                                ";
        } else {
            // line 27
            echo "                                                <p><b>Посмотрели: </b> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "views", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo " раза</p>
                                                ";
        }
        // line 29
        echo "                                                
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"tg-infodata\">
                                                <p><b>Категория: </b>
                                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 36
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</p>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <figure class=\"tg-featuredimg\">
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 44), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 45
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "\" style=\"width: 100%; height: 300px; object-fit: cover;\">
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                                </figure>
                                
                                ";
        // line 49
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 49), 49, $this->source);
        echo "

                            </article>
                        </div>
                    </div>
                </div>




                ";
        // line 59
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar_left.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 60
        echo "

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
        return "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 60,  150 => 59,  137 => 49,  133 => 47,  122 => 45,  118 => 44,  109 => 37,  100 => 36,  96 => 35,  88 => 29,  82 => 27,  76 => 25,  74 => 24,  66 => 19,  57 => 13,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/blog/post.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 1, "if" => 24, "for" => 35, "partial" => 59);
        static $filters = array("escape" => 13, "date" => 19, "slice" => 44, "raw" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'if', 'for', 'partial'],
                ['escape', 'date', 'slice', 'raw'],
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
