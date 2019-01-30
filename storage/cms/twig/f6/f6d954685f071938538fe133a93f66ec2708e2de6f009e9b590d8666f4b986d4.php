<?php

/* C:\Users\maxstell\Code\desafio/themes/jtherczeg-multi/pages/blogspost.htm */
class __TwigTemplate_594a859cdaf736389776f2d14f77702ba3b13e28ad303962c9ceb47b55c86b2c extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\Users\\maxstell\\Code\\desafio/themes/jtherczeg-multi/pages/blogspost.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPost' %}", "C:\\Users\\maxstell\\Code\\desafio/themes/jtherczeg-multi/pages/blogspost.htm", "");
    }
}
