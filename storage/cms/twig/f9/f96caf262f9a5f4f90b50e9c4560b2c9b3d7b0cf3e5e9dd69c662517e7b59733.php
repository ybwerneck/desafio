<?php

/* C:\Users\maxstell\Code\desafio/plugins/laminsanneh/flexicontact/components/contactform/default.htm */
class __TwigTemplate_368cc4492e0440cdf076a2635e7ad2389dd73dbdb574b5620a427199ad048862 extends Twig_Template
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
        echo "<div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->
</div>
<form class=\"flexiContactForm\" role=\"form\"
      data-request=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onMailSent\"
      data-request-update=\"'";
        // line 6
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::confirm': '.confirm-container'\">

    <div class=\"form-groups\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"Nome\" required>
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"E-mail\" required>
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"Assunto\" required>
        </div>
        <div class=\"form-group\">
            <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"Insira sua mensagem\" required cols=\"15\" rows=\"5\"></textarea>
        </div>
        ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "enableCaptcha", array())) {
            // line 22
            echo "            <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "siteKey", array()), "html", null, true);
            echo "\"></div>
            </div>
        ";
        }
        // line 26
        echo "        <button type=\"submit\" class=\"btn btn-primary contato-botn\">Enviar</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\maxstell\\Code\\desafio/plugins/laminsanneh/flexicontact/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 26,  56 => 23,  53 => 22,  51 => 21,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->
</div>
<form class=\"flexiContactForm\" role=\"form\"
      data-request=\"{{ __SELF__ }}::onMailSent\"
      data-request-update=\"'{{ __SELF__ }}::confirm': '.confirm-container'\">

    <div class=\"form-groups\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"Nome\" required>
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"E-mail\" required>
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"Assunto\" required>
        </div>
        <div class=\"form-group\">
            <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"Insira sua mensagem\" required cols=\"15\" rows=\"5\"></textarea>
        </div>
        {% if __SELF__.enableCaptcha %}
            <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-sitekey=\"{{ __SELF__.siteKey }}\"></div>
            </div>
        {% endif %}
        <button type=\"submit\" class=\"btn btn-primary contato-botn\">Enviar</button>
    </div>
</form>
", "C:\\Users\\maxstell\\Code\\desafio/plugins/laminsanneh/flexicontact/components/contactform/default.htm", "");
    }
}
