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

/* /var/www/u1253217/data/www/zavproc.ru/plugins/anandpatel/seoextension/components/blogpost/default.htm */
class __TwigTemplate_2f70ebde142e762708bc7b0f6e16005b36597a8f7c759799e60d1bcbb3d2199b extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('meta'        );
        // line 2
        echo '<!-- X_OCTOBER_DEFAULT_BLOCK_CONTENT -->';
        // line 3
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "redirect_url", [], "any", false, false, true, 3)) {
            // line 4
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "redirect_url", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "\" />
    ";
        }
        // line 6
        echo "
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_title", [], "any", false, false, true, 7)) {
            // line 8
            echo "        <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_title", [], "any", false, false, true, 8), 8, $this->source)]);
            echo "</title>
    ";
        } else {
            // line 10
            echo "        <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 10), 10, $this->source)]);
            echo "</title>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_description", [], "any", false, false, true, 13)) {
            // line 14
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_description", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\">
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_keywords", [], "any", false, false, true, 17)) {
            // line 18
            echo "        <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_keywords", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\">
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "canonical_url", [], "any", false, false, true, 21)) {
            // line 22
            echo "        <link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "canonical_url", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 24
            echo "        ";
            echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), [""]);
            echo "
    ";
        }
        // line 26
        echo "
        <meta name=\"robots\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "robot_index", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "robot_follow", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "\">

    ";
        // line 29
        echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), [""]);
        echo "

    ";
        // line 31
        echo call_user_func_array($this->env->getFilter('generateOgTags')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["post"] ?? null), 31, $this->source)]);
        echo "
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/u1253217/data/www/zavproc.ru/plugins/anandpatel/seoextension/components/blogpost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 1,  123 => 31,  118 => 29,  111 => 27,  108 => 26,  102 => 24,  96 => 22,  94 => 21,  91 => 20,  85 => 18,  83 => 17,  80 => 16,  74 => 14,  72 => 13,  69 => 12,  63 => 10,  57 => 8,  55 => 7,  52 => 6,  46 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u1253217/data/www/zavproc.ru/plugins/anandpatel/seoextension/components/blogpost/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("put" => 1, "default" => 2, "if" => 3);
        static $filters = array("escape" => 4, "generateTitle" => 8, "generateCanonicalUrl" => 24, "raw" => 29, "otherMetaTags" => 29, "generateOgTags" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['put', 'default', 'if'],
                ['escape', 'generateTitle', 'generateCanonicalUrl', 'raw', 'otherMetaTags', 'generateOgTags'],
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
