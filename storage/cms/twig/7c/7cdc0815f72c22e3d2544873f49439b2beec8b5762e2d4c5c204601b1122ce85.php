<?php

/* C:\Users\maxstell\Code\desafio/themes/jtherczeg-multi/layouts/fallback.htm */
class __TwigTemplate_8e52dc30cbbf3228afb094eb01b74cadb09fc03fa1bde34d75b195db3bf619ab extends Twig_Template
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
        return "C:\\Users\\maxstell\\Code\\desafio/themes/jtherczeg-multi/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "C:\\Users\\maxstell\\Code\\desafio/themes/jtherczeg-multi/layouts/fallback.htm", "");
    }
}
