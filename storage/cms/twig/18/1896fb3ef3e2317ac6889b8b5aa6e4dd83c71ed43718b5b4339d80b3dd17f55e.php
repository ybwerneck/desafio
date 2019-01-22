<?php

/* C:\Users\maxstell\Code\desafio\desafio/themes/jtherczeg-multi/partials/cta2.htm */
class __TwigTemplate_fde162dbc71115ccd2ded95dd77d152e93ebcd7fc3e8f9279004fb0ef46c4172 extends Twig_Template
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
        echo "<h2 class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\"><span>MULTI</span> IS A CREATIVE HTML TEMPLATE</h2>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"100ms\">Mauris pretium auctor quam. Vestibulum et nunc id nisi fringilla <br />iaculis. Mauris pretium auctor quam.</p>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"200ms\"><a class=\"btn btn-primary btn-lg\" href=\"https://github.com/jtherczeg/multi-theme/archive/master.zip\">Free Download</a></p>
                <img class=\"img-responsive wow fadeIn\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cta2/cta2-img.png");
        echo "\" alt=\"\" data-wow-duration=\"300ms\" data-wow-delay=\"300ms\">";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\maxstell\\Code\\desafio\\desafio/themes/jtherczeg-multi/partials/cta2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2 class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\"><span>MULTI</span> IS A CREATIVE HTML TEMPLATE</h2>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"100ms\">Mauris pretium auctor quam. Vestibulum et nunc id nisi fringilla <br />iaculis. Mauris pretium auctor quam.</p>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"200ms\"><a class=\"btn btn-primary btn-lg\" href=\"https://github.com/jtherczeg/multi-theme/archive/master.zip\">Free Download</a></p>
                <img class=\"img-responsive wow fadeIn\" src=\"{{ 'assets/images/cta2/cta2-img.png'|theme }}\" alt=\"\" data-wow-duration=\"300ms\" data-wow-delay=\"300ms\">", "C:\\Users\\maxstell\\Code\\desafio\\desafio/themes/jtherczeg-multi/partials/cta2.htm", "");
    }
}
