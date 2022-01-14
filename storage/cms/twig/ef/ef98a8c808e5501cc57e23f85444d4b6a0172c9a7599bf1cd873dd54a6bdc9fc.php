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

/* /var/www/u1253217/data/www/zavproc.ru/plugins/samuell/contenteditor/components/contenteditor/render.htm */
class __TwigTemplate_4918741440c3a64cd9c69c1c31428ee11d91fec8a1a39f40b6706e58a6cf3854 extends \Twig\Template
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
        echo "
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 2)) {
            echo "<";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, true, 2)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
                echo "\"";
            }
            echo ">";
        }
        // line 3
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 3, $this->source);
        echo "
";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 4)) {
            echo "</";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo ">";
        }
        // line 5
        echo "
";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "renderCount", [], "any", false, false, true, 6) == 1)) {
            // line 7
            echo "    ";
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'            );
            // line 8
            echo "        <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
    ";
            // line 7
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
        }
    }

    public function getTemplateName()
    {
        return "/var/www/u1253217/data/www/zavproc.ru/plugins/samuell/contenteditor/components/contenteditor/render.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 7,  73 => 8,  70 => 7,  68 => 6,  65 => 5,  59 => 4,  54 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u1253217/data/www/zavproc.ru/plugins/samuell/contenteditor/components/contenteditor/render.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "put" => 7);
        static $filters = array("escape" => 2, "raw" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'put'],
                ['escape', 'raw'],
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
