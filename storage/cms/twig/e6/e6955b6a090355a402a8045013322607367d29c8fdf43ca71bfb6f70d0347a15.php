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

/* /var/www/u1253217/data/www/zavproc.ru/themes/zavproc/partials/cat.htm */
class __TwigTemplate_b3f8f046470156f795e4befb798e3e94627b14834eca3329dc36a7b32cfc7997 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "    <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
        <article class=\"tg-themepost tg-newspost\">
            <figure class=\"tg-featuredimg\">
                <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "\">
                    ";
            // line 6
            if ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 6), 0, 1) == true)) {
                // line 7
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 7), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 8
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                    echo "\" style = \"height: 140px; width: 100%; object-fit: cover;\">
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "                    ";
            } else {
                // line 11
                echo "                        <img src=\"";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/noimage.jpg");
                echo "\" alt=\" \" style=\"width: 100%; height: 143px; object-fit: cover;\">
                    ";
            }
            // line 13
            echo "                </a>
            </figure>
            <div class=\"tg-themepostcontent\">
                <ul class=\"tg-matadata\">
                    <li>
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\">
                            <i class=\"fa fa-calendar\"></i>
                            <span>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 20), 20, $this->source), "d F Y", "Europe/Ulyanovsk"), "html", null, true);
            echo "</span>
                        </a>
                    </li>
                </ul>
                <div class=\"tg-themeposttitle\">
                    <h3><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</a></h3>
                </div>
                <div class=\"tg-description\">
                    <p style = \"
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;\">";
            // line 31
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/partials/cat.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 32,  110 => 31,  99 => 25,  91 => 20,  86 => 18,  79 => 13,  73 => 11,  70 => 10,  59 => 8,  54 => 7,  52 => 6,  48 => 5,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/partials/cat.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 1, "if" => 6);
        static $filters = array("escape" => 5, "slice" => 6, "theme" => 11, "date" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
