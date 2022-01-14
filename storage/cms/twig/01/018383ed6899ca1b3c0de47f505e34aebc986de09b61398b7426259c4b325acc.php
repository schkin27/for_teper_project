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

/* /var/www/u1253217/data/www/zavproc.ru/themes/zavproc/layouts/default.htm */
class __TwigTemplate_b32f5fe13ae1610776a6f45cb41f67c8eb2e7cbc40af81816b90d891f881bda4 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Прокуратура Заволжского района | ";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"Официальный сайт Прокуратуры Заволжского района г.Ульяновска позволяет просматривать актуальные новости, создавать заявки для обращения в учреждение, а также скачивать специальные документы и распоряжения. Адрес: г.Ульяновск, ул. Мелекесская, д.4. Номер телефона: +7 (8422) 73-55-24.\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Прокуратура Заволжского района\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"Прокуратура Заволжского района\">
        
        <meta name=\"google-site-verification\" content=\"hEiuAjd37idbIfeuP3YKu0oPWR9VjPiFxtzLkkR7gDo\" />
        
        <meta name=\"yandex-verification\" content=\"70f9be6a7f381d00\" />

        <meta property=\"og:locale\" content=\"ru_RU\">
        <meta property=\"og:image\" content=\"https://zavproc.ru/storage/app/media/icon.png\">
        <meta property=\"og:image:width\" content=\"300\">
        <meta property=\"og:image:height\" content=\"48\">

        <meta name=\"twitter:image:src\" content=\"https://zavproc.ru/storage/app/media/icon.png\">

        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon.png");
        echo "\">

        <!-- Yandex.Metrika counter -->
        <script type=\"text/javascript\" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");
 
        ym(71938681, \"init\", {
         clickmap:true,
         trackLinks:true,
         accurateTrackBounce:true
        });
        </script>
        <noscript><div><img src=\"https://mc.yandex.ru/watch/71938681\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>
        <!-- /Yandex.Metrika counter -->


        
        ";
        // line 42
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 43
        echo "
        <!-- Button visually impaired CSS -->
        ";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 46
        echo "        
        <script src=\"https://code.jquery.com/jquery-1.12.4.min.js\"></script>

        <link rel=\"stylesheet\" href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bvi.min.css");
        echo "\" type=\"text/css\">

        <link rel=\"stylesheet\" href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/normalize.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/icomoon.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/prettyPhoto.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.theme.default.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/transitions.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/color.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\">
        <script src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js");
        echo "\"></script>
        
        ";
        // line 65
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 66
        echo "        

    </head>
    <body>
        <div style=\"min-height: calc(100vh - 40px);\">
        <!-- Header -->
            ";
        // line 72
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 73
        echo "
        
        
        <!-- Content -->
            ";
        // line 77
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 78
        echo "        
        </div></div>

        <!-- Footer -->
            ";
        // line 82
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 83
        echo "
        <!-- Scripts -->
        ";
        // line 85
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 86
        echo "        <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/js.cookie.js");
        echo "\"></script>
        <script src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bvi-init.js");
        echo "\"></script>
        <script src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bvi.min.js");
        echo "\"></script>
        <script src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/jquery-library.js");
        echo "\"></script>
        <script src=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/bootstrap.min.js");
        echo "\"></script>
        <script src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mapclustering/data.json");
        echo "\"></script>
        <script src=\"https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en\"></script>
        <script src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mapclustering/markerclusterer.min.js");
        echo "\"></script>
        <script src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mapclustering/infobox.js");
        echo "\"></script>
        <script src=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mapclustering/map.js");
        echo "\"></script>
        <script src=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
        <script src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/isotope.pkgd.js");
        echo "\"></script>
        <script src=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/prettyPhoto.js");
        echo "\"></script>
        <script src=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/countdown.js");
        echo "\"></script>
        <script src=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/collapse.js");
        echo "\"></script>
        <script src=\"";
        // line 101
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/moment.js");
        echo "\"></script>
        <script src=\"";
        // line 102
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/gmap3.js");
        echo "\"></script>
        <script src=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 103,  268 => 102,  264 => 101,  260 => 100,  256 => 99,  252 => 98,  248 => 97,  244 => 96,  240 => 95,  236 => 94,  232 => 93,  227 => 91,  223 => 90,  219 => 89,  215 => 88,  211 => 87,  206 => 86,  203 => 85,  199 => 83,  195 => 82,  189 => 78,  187 => 77,  181 => 73,  177 => 72,  169 => 66,  165 => 65,  160 => 63,  156 => 62,  152 => 61,  148 => 60,  144 => 59,  140 => 58,  136 => 57,  132 => 56,  128 => 55,  124 => 54,  120 => 53,  116 => 52,  112 => 51,  107 => 49,  102 => 46,  99 => 45,  95 => 43,  91 => 42,  69 => 23,  50 => 7,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 42, "styles" => 45, "framework" => 65, "partial" => 72, "page" => 77, "scripts" => 85);
        static $filters = array("escape" => 5, "theme" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'styles', 'framework', 'partial', 'page', 'scripts'],
                ['escape', 'theme'],
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
