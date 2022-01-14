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

/* /var/www/u1253217/data/www/zavproc.ru/themes/zavproc/partials/slider.htm */
class __TwigTemplate_39b9e068369e6ec310db15133dcdc682bdf84f8a3bc63aa29e5c26d40e7d15c6 extends \Twig\Template
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
<div class=\"clearfix\"></div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"tg-homebannervtwo\">
                <div id=\"tg-homeslider\" class=\"tg-homeslider owl-carousel tg-btnround tg-haslayout\">
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "                    <div class=\"item\">
                        <figure>
                            ";
            // line 12
            if ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 12), 0, 1) == true)) {
                // line 13
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 13), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 14
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                    echo "\" style = \"height: 415px; width: 873px; object-fit: cover;\">
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "                            ";
            } else {
                // line 17
                echo "                                <img src=\"";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/noimage.jpg");
                echo "\" alt=\" \" style=\"height: 415px; width: 873px; object-fit: cover;\">
                            ";
            }
            // line 19
            echo "                            <figcaption class=\"tg-slidercontent\">
                                <div class=\"tg-slidercontentbox\">
                                    <a class=\"tg-btn\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "\">Читать далее...</a>
                                    <div class=\"tg-titledescription\">
                                        <h1><b>";
            // line 23
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</b></h1>
                                        <div class=\"tg-description\"><p>";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</p></div>
                                        <div class=\"tg-description\" style=\"margin-top:10px;\"><i>Опубликовано: ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 25), 25, $this->source), "d F Y", "Europe/Ulyanovsk"), "html", null, true);
            echo "</i></div>
                                        <!-- <div class=\"tg-description\"><i>Просмотрено: ";
            // line 26
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "views", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "</i></div> -->
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </div>
                <div class=\"tg-noticeboardarea\">
                    
                    <div class=\"tg-widget tg-widgetadmissionform\">
                        <div class=\"tg-widgetcontent\">
                            ";
        // line 38
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "index/special_title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h3"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 39
        echo "                            <div class=\"tg-description\">
                                ";
        // line 40
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "index/special_content.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 41
        echo "                            </div>
                            <a class=\"bvi-open tg-btn tg-btnicon\" href=\"#\">
                                <span>Переключиться</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"tg-widget tg-widgetadmissionform\">
                        <div class=\"tg-widgetcontent\">
                            ";
        // line 49
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "index/contacts_title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h3"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 50
        echo "                            <div class=\"tg-description\">
                                <span>
                                    <i class=\"icon-phone-handset\"> </i><b>Телефон:</b>
                                    ";
        // line 53
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "index/contacts_phone.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 54
        echo "                                </br>
                                </span>
                                <span>
                                    <i class=\"icon-printer\"> </i><b>Факс: </b>
                                    ";
        // line 58
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "index/contacts_fax.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 59
        echo "                                </br>
                                </span>
                                <span>
                                    <i class=\"icon-location\"> </i><b>Адрес: </b>
                                    ";
        // line 63
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "index/contacts_adress.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 64
        echo "                                </br>
                                </span>
                                <span>
                                    <i class=\"icon-envelope\"> </i><b>Skype: </b>
                                    ";
        // line 68
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "index/contacts_skype.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 69
        echo "                                </span>
                            
                            </div>
                            
                            <a class=\"tg-btn tg-btnicon\" href=\"mailto:zav@ulproc.ru\" style=\"margin-top: 20px;\">
                                <i class=\"icon-envelope\"></i>
                                <span>Написать письмо</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/partials/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 69,  198 => 68,  192 => 64,  186 => 63,  180 => 59,  174 => 58,  168 => 54,  162 => 53,  157 => 50,  151 => 49,  141 => 41,  135 => 40,  132 => 39,  126 => 38,  119 => 33,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  89 => 21,  85 => 19,  79 => 17,  76 => 16,  65 => 14,  60 => 13,  58 => 12,  54 => 10,  50 => 9,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/partials/slider.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 9, "if" => 12, "component" => 38);
        static $filters = array("slice" => 12, "escape" => 14, "theme" => 17, "date" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'component'],
                ['slice', 'escape', 'theme', 'date'],
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
