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

/* /var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/contact.htm */
class __TwigTemplate_a8c1b85a347a6fefb1595d0e927485a1039da474f55381ad8d5867cef02c2300 extends \Twig\Template
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
        echo "<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <div class=\"tg-contactus tg-contactusvone\">
                    <div class=\"tg-titleborder\">
                        <h2>Связаться с нами</h2>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-7 col-lg-8\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2325.953122830502!2d48.560971115922186!3d54.340136680199365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415d38c0755a066b%3A0x544ed224c60fb5ff!2z0JzQtdC70LXQutC10YHRgdC60LDRjyDRg9C7LiwgNCwg0KPQu9GM0Y_QvdC-0LLRgdC6LCDQo9C70YzRj9C90L7QstGB0LrQsNGPINC-0LHQuy4sIDQzMjA0Ng!5e0!3m2!1sru!2sru!4v1612470225333!5m2!1sru!2sru\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                            <!-- <iframe src=\"https://yandex.ru/map-widget/v1/?um=constructor%3Aa0b7766fd6e23a2b6adf831603579923b6d2731966ac3c06b6a2c5126ce4b40a&amp;source=constructor\" width=\"708\" height=\"422\" frameborder=\"0\"></iframe> -->
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-5 col-lg-4\">
                            <!-- <form class=\"tg-formtheme tg-formcontactus\">
                                <fieldset>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Имя\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Номер телефона\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
                                    </div>
                                    <div class=\"form-group\">
                                        <textarea class=\"form-control\" placeholder=\"Комментарий\"></textarea>
                                    </div>
                                    <button class=\"tg-btn\" type=\"submit\">Отправить</button>
                                </fieldset>
                            </form> -->

                            <div class=\"tg-widget tg-widgetadmissionform\">
                                <div class=\"tg-widgetcontent\">
                                    ";
        // line 35
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "index/contacts_title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h3"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 36
        echo "                                    <div class=\"tg-description\">
                                        <span>
                                            <i class=\"icon-phone-handset\"> </i><b>Телефон:</b>
                                            ";
        // line 39
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "index/contacts_phone.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 40
        echo "                                        </br>
                                        </span>
                                        <span>
                                            <i class=\"icon-printer\"> </i><b>Факс: </b>
                                            ";
        // line 44
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "index/contacts_fax.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 45
        echo "                                        </br>
                                        </span>
                                        <span>
                                            <i class=\"icon-location\"> </i><b>Адрес: </b>
                                            ";
        // line 49
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "index/contacts_adress.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 50
        echo "                                        </br>
                                        </span>
                                        <span>
                                            <i class=\"icon-envelope\"> </i><b>Skype: </b>
                                            ";
        // line 54
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "index/contacts_skype.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 55
        echo "                                        </span>
                                    
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
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->";
    }

    public function getTemplateName()
    {
        return "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 55,  122 => 54,  116 => 50,  110 => 49,  104 => 45,  98 => 44,  92 => 40,  86 => 39,  81 => 36,  75 => 35,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/contact.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 35);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                [],
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
