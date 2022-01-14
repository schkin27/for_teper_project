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

/* /var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/documents.htm */
class __TwigTemplate_c584896ff9243589108fe6394928acc716b02b9341918814e0ad5bf72f9a3f92 extends \Twig\Template
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
            <div class=\"tg-newsandarticle tg-grid\">
                <div class=\"tg-titleborder\">
                    <h2>Документы</h2>
                </div>
                <div class=\"row\">
                                      
                    <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                        <article class=\"tg-themepost tg-newspost\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"https://zavproc.ru/storage/app/media/documents/u-codeks.pdf\">
                                    <img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/documents/1.jpg");
        echo "\" alt=\" \" style=\"width: 100%; height: 540px; object-fit: cover;\">
                                </a>
                            </figure>
                            <div class=\"tg-themepostcontent\">
                                <div class=\"tg-themeposttitle\">
                                    <h3><a href=\"https://zavproc.ru/storage/app/media/documents/u-codeks.pdf\">Уголовно-процессуальный кодекс</a></h3>
                                </div>
                                <div class=\"tg-description\">
                                    <form action=\"https://zavproc.ru/storage/app/media/documents/u-codeks.pdf\" target=\"_blank\">
                                        <button class=\"tg-btn\">Скачать</button>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                        <article class=\"tg-themepost tg-newspost\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"https://zavproc.ru/storage/app/media/documents/uk-rf.pdf\">
                                    <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/documents/2.jpg");
        echo "\" alt=\" \" style=\"width: 100%; height: 540px; object-fit: cover;\">
                                </a>
                            </figure>
                            <div class=\"tg-themepostcontent\">
                                <div class=\"tg-themeposttitle\">
                                    <h3><a href=\"https://zavproc.ru/storage/app/media/documents/uk-rf.pdf\">Уголовный кодекс</a></h3>
                                </div>
                                <div class=\"tg-description\">
                                    <form action=\"https://zavproc.ru/storage/app/media/documents/uk-rf.pdf\" target=\"_blank\">
                                        <button class=\"tg-btn\">Скачать</button>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                        <article class=\"tg-themepost tg-newspost\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"https://zavproc.ru/storage/app/media/documents/fz.pdf\">
                                    <img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/documents/3.jpg");
        echo "\" alt=\" \" style=\"width: 100%; height: 540px; object-fit: cover;\">
                                </a>
                            </figure>
                            <div class=\"tg-themepostcontent\">
                                <div class=\"tg-themeposttitle\">
                                    <h3><a href=\"https://zavproc.ru/storage/app/media/documents/fz.pdf\">ФЗ о Прокуратуре РФ</a></h3>
                                </div>
                                <div class=\"tg-description\">
                                    <form action=\"https://zavproc.ru/storage/app/media/documents/fz.pdf\" target=\"_blank\">
                                        <button class=\"tg-btn\">Скачать</button>
                                    </form>
                                </div>
                                
                            </div>
                        </article>
                    </div>

                    <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                        <article class=\"tg-themepost tg-newspost\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"https://zavproc.ru/storage/app/media/documents/gp-codeks.pdf\">
                                    <img src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/documents/4.jpg");
        echo "\" alt=\" \" style=\"width: 100%; height: 540px; object-fit: cover;\">
                                </a>
                            </figure>
                            <div class=\"tg-themepostcontent\">
                                <div class=\"tg-themeposttitle\">
                                    <h3><a href=\"https://zavproc.ru/storage/app/media/documents/gp-codeks.pdf\">Гражданский процессуальный кодекс</a></h3>
                                </div>
                                <div class=\"tg-description\">
                                    <form action=\"https://zavproc.ru/storage/app/media/documents/gp-codeks.pdf\" target=\"_blank\">
                                        <button class=\"tg-btn\">Скачать</button>
                                    </form>
                                </div>
                                
                            </div>
                        </article>
                    </div>

                    <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                        <article class=\"tg-themepost tg-newspost\">
                            
                            <figure class=\"tg-featuredimg\">
                                <a href=\"https://zavproc.ru/storage/app/media/documents/const.pdf\">
                                    <img src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/documents/5.jpg");
        echo "\" alt=\" \" style=\"width: 100%; height: 540px; object-fit: cover;\">
                                </a>
                            </figure>
                            
                            <div class=\"tg-themepostcontent\">
                                <div class=\"tg-themeposttitle\">
                                    <h3><a href=\"https://zavproc.ru/storage/app/media/documents/const.pdf\">Конституция РФ</a></h3>
                                </div>
                                <div class=\"tg-description\">
                                    <form action=\"https://zavproc.ru/storage/app/media/documents/const.pdf\" target=\"_blank\">
                                        <button class=\"tg-btn\">Скачать</button>
                                    </form>
                                </div>
                                
                            </div>
                        </article>
                    </div>
                    

                </div>
            </div>

            

        </div>
    </div>
</main>";
    }

    public function getTemplateName()
    {
        return "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/documents.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 97,  124 => 75,  100 => 54,  77 => 34,  54 => 14,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/u1253217/data/www/zavproc.ru/themes/zavproc/pages/documents.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
