<?php

/* C:\xampp\htdocs\desafio/themes/jtherczeg-multi/layouts/fallback.htm */
class __TwigTemplate_c832075c55114897c7fbc10b1c4d1af50afd753c8616a92efabc84209680ffbf extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\desafio/themes/jtherczeg-multi/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "C:\\xampp\\htdocs\\desafio/themes/jtherczeg-multi/layouts/fallback.htm", "");
    }
}
