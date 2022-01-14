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

/* /var/www/u1253217/data/www/zavproc.ru/plugins/rainlab/blog/components/categories/items.htm */
class __TwigTemplate_0d13b1c20adc9e755301b447f8289f71136e394357a24dd1d032216bc81b96de extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "    ";
            $context["postCount"] = twig_get_attribute($this->env, $this->source, $context["category"], "post_count", [], "any", false, false, true, 2);
            // line 3
            echo "    <li ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 3) == ($context["currentCategorySlug"] ?? null))) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "</a> 
        ";
            // line 5
            if (($context["postCount"] ?? null)) {
                // line 6
                echo "            <span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["postCount"] ?? null), 6, $this->source), "html", null, true);
                echo "</span>
        ";
            }
            // line 8
            echo "
        ";
            // line 9
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, true, 9)) > 0)) {
                // line 10
                echo "            <ul>
                ";
                // line 11
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['categories'] = twig_get_attribute($this->env, $this->source,                 // line 12
$context["category"], "children", [], "any", false, false, true, 12)                ;
                $context['__cms_partial_params']['currentCategorySlug'] =                 // line 13
($context["currentCategorySlug"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((                // line 11
($context["__SELF__"] ?? null) . "::items")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 15
                echo "            </ul>
        ";
            }
            // line 17
            echo "    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/u1253217/data/www/zavproc.ru/plugins/rainlab/blog/components/categories/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 17,  84 => 15,  81 => 11,  79 => 13,  77 => 12,  75 => 11,  72 => 10,  70 => 9,  67 => 8,  61 => 6,  59 => 5,  53 => 4,  46 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u1253217/data/www/zavproc.ru/plugins/rainlab/blog/components/categories/items.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 1, "set" => 2, "if" => 3, "partial" => 11);
        static $filters = array("escape" => 4, "length" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'partial'],
                ['escape', 'length'],
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
