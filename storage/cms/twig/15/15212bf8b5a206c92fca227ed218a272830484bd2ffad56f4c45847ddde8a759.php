<?php

/* C:\xampp\htdocs\desafio/plugins/laminsanneh/flexicontact/components/contactform/confirm.htm */
class __TwigTemplate_79722db1f3e12b37822009dd67b28059259fdd21d6aacfe447f351491ec9c62a extends Twig_Template
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
        if (($context["errorHappened"] ?? null)) {
            // line 2
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::flash-messages")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 4
            echo "    <h2>E-mail enviado com sucesso</h2>
    <p>
        ";
            // line 6
            echo twig_escape_filter($this->env, ($context["confirmation_text"] ?? null), "html", null, true);
            echo "
    </p>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\desafio/plugins/laminsanneh/flexicontact/components/contactform/confirm.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if errorHappened %}
    {% partial __SELF__~'::flash-messages' %}
{% else %}
    <h2>E-mail enviado com sucesso</h2>
    <p>
        {{confirmation_text}}
    </p>
{% endif %}", "C:\\xampp\\htdocs\\desafio/plugins/laminsanneh/flexicontact/components/contactform/confirm.htm", "");
    }
}
