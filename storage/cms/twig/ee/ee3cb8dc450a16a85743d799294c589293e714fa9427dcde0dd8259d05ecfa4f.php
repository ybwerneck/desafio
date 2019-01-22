<?php

/* C:\Users\maxstell\Code\desafio\desafio/themes/jtherczeg-multi/layouts/default.htm */
class __TwigTemplate_9dbb48f8cbe95af644663e63a28390c327f135af018fdfd6175ae04fb1e084b9 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "

<body id=\"home\" class=\"homepage\">

<header id=\"header\">
    ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "</header><!--/header-->

<section id=\"main-slider\">
    ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slides"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "</section><!--/#main-slider-->
    
<section id=\"cta\" class=\"wow fadeIn\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 19
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("cta.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 20
        echo "        </div>
    </div>
</section><!--/#cta-->

<section id=\"features\">
    ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("features"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "</section><!--/#features-->

<section id=\"cta2\">
    <div class=\"container\">
        <div class=\"text-center\">
            ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cta2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "        </div>
    </div>
</section>

<section id=\"services\" >
    ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "</section><!--/#services-->

<section id=\"portfolio\">
    ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("portfolio"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "</section><!--/#portfolio-->

<section id=\"about\">
    ";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "</section><!--/#about-->

<section id=\"work-process\">
    <div class=\"container\">
        ";
        // line 50
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("process.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 51
        echo "    </div>
</section><!--/#work-process-->

<section id=\"meet-team\">
    ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("team"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "</section><!--/#meet-team-->

<section id=\"animated-number\">
    ";
        // line 59
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("facts.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 60
        echo "</section><!--/#animated-number-->

<section id=\"pricing\">
    ";
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pricing"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "</section><!--/#pricing-->

<section id=\"testimonial\">
    ";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("feedback"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 68
        echo "</section><!--/#testimonial-->

<section id=\"blog\">
    ";
        // line 71
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blogs"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 72
        echo "</section><!--/#blog-->

<section id=\"get-in-touch\">
    <div class=\"container\">
        <div class=\"section-header\">
            ";
        // line 77
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("precontact.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 78
        echo "        </div>
    </div>
</section><!--/#get-in-touch-->

<section id=\"contact\">
    ";
        // line 83
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("contact"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 84
        echo "</section><!--/#contact-->

<footer id=\"footer\">
    ";
        // line 87
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 88
        echo "</footer><!--/#footer-->

    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mousescroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/smoothscroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.inview.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
";
        // line 101
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 102
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 103
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\maxstell\\Code\\desafio\\desafio/themes/jtherczeg-multi/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 103,  260 => 102,  245 => 101,  241 => 100,  237 => 99,  233 => 98,  229 => 97,  225 => 96,  221 => 95,  217 => 94,  213 => 93,  209 => 92,  205 => 91,  200 => 88,  196 => 87,  191 => 84,  187 => 83,  180 => 78,  176 => 77,  169 => 72,  165 => 71,  160 => 68,  156 => 67,  151 => 64,  147 => 63,  142 => 60,  138 => 59,  133 => 56,  129 => 55,  123 => 51,  119 => 50,  113 => 46,  109 => 45,  104 => 42,  100 => 41,  95 => 38,  91 => 37,  84 => 32,  80 => 31,  73 => 26,  69 => 25,  62 => 20,  58 => 19,  51 => 14,  47 => 13,  42 => 10,  38 => 9,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    {% partial \"meta\" %}


<body id=\"home\" class=\"homepage\">

<header id=\"header\">
    {% partial \"nav\" %}
</header><!--/header-->

<section id=\"main-slider\">
    {% partial \"slides\" %}
</section><!--/#main-slider-->
    
<section id=\"cta\" class=\"wow fadeIn\">
    <div class=\"container\">
        <div class=\"row\">
            {% content 'cta.htm' %}
        </div>
    </div>
</section><!--/#cta-->

<section id=\"features\">
    {% partial \"features\" %}
</section><!--/#features-->

<section id=\"cta2\">
    <div class=\"container\">
        <div class=\"text-center\">
            {% partial \"cta2\" %}
        </div>
    </div>
</section>

<section id=\"services\" >
    {% partial \"services\" %}
</section><!--/#services-->

<section id=\"portfolio\">
    {% partial \"portfolio\" %}
</section><!--/#portfolio-->

<section id=\"about\">
    {% partial \"about\" %}
</section><!--/#about-->

<section id=\"work-process\">
    <div class=\"container\">
        {% content 'process.htm' %}
    </div>
</section><!--/#work-process-->

<section id=\"meet-team\">
    {% partial \"team\" %}
</section><!--/#meet-team-->

<section id=\"animated-number\">
    {% content 'facts.htm' %}
</section><!--/#animated-number-->

<section id=\"pricing\">
    {% partial \"pricing\" %}
</section><!--/#pricing-->

<section id=\"testimonial\">
    {% partial \"feedback\" %}
</section><!--/#testimonial-->

<section id=\"blog\">
    {% partial \"blogs\" %}
</section><!--/#blog-->

<section id=\"get-in-touch\">
    <div class=\"container\">
        <div class=\"section-header\">
            {% content 'precontact.htm' %}
        </div>
    </div>
</section><!--/#get-in-touch-->

<section id=\"contact\">
    {% partial \"contact\" %}
</section><!--/#contact-->

<footer id=\"footer\">
    {% partial \"footer\" %}
</footer><!--/#footer-->

    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/mousescroll.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/smoothscroll.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.prettyPhoto.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.isotope.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.inview.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/main.js'|theme }}\"></script>
{% framework extras %}
{% scripts %}

</body>
</html>", "C:\\Users\\maxstell\\Code\\desafio\\desafio/themes/jtherczeg-multi/layouts/default.htm", "");
    }
}
