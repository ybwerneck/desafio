<?php

/* C:\xampp\sites\desafio/themes/jtherczeg-multi/partials/nav.htm */
class __TwigTemplate_0c986d045560529d022201c3ad06a2cd64d074bb9d07e09c181eff7d75748c42 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/desafio/index.php#home\"><img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\"></a>
                </div>
\t\t\t\t
                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"scroll active\"><a href=\"/desafio/index.php#home\">Home</a></li>
                        <li class=\"scroll\"><a href=\"/desafio/index.php#servicos\">Serviços</a></li>
                        <li class=\"scroll\"><a href=\"/desafio/index.php#quemsomos\">Quem Somos</a></li>
                        <li class=\"scroll\"><a href=\"/desafio/index.php#blog\">Blog</a></li> 
                        <li class=\"scroll\"><a href=\"/desafio/index.php#contato\">Contato</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\sites\\desafio/themes/jtherczeg-multi/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/desafio/index.php#home\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"logo\"></a>
                </div>
\t\t\t\t
                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"scroll active\"><a href=\"/desafio/index.php#home\">Home</a></li>
                        <li class=\"scroll\"><a href=\"/desafio/index.php#servicos\">Serviços</a></li>
                        <li class=\"scroll\"><a href=\"/desafio/index.php#quemsomos\">Quem Somos</a></li>
                        <li class=\"scroll\"><a href=\"/desafio/index.php#blog\">Blog</a></li> 
                        <li class=\"scroll\"><a href=\"/desafio/index.php#contato\">Contato</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->", "C:\\xampp\\sites\\desafio/themes/jtherczeg-multi/partials/nav.htm", "");
    }
}
