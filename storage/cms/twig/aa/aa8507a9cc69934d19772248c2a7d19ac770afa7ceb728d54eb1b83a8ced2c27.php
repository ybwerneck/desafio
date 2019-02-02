<?php

/* C:\xampp\htdocs\desafio/themes/jtherczeg-multi/partials/quemsomos.htm */
class __TwigTemplate_e7e26fc34f20246d6cbbc4542214c055e5524975124697b58be13d90defd074b extends Twig_Template
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
        $context["quemsomos"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 2
        $context["missao"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "records", array());
        // line 3
        $context["valores"] = twig_get_attribute($this->env, $this->source, ($context["builderList3"] ?? null), "records", array());
        // line 4
        echo "
<div class=\"container\">

            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Quem somos</h2>
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quemsomos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["quemsomo"]) {
            // line 10
            echo "                <p class=\"text-center wow fadeInDown\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quemsomo"], "quemsomos", array()), "html", null, true);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quemsomo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            </div>   
            
            <div class=\"row\" >
                    <div class=\"col-sm-6 section-header\">
                        <h2 class=\"section-title text-center wow fadeInDown\">Nossa Missão</h2>
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["missao"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["missa"]) {
            // line 18
            echo "                        <p class=\"text-center wow fadeInDown\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["missa"], "missao", array()), "html", null, true);
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['missa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                        
                    </div>
                    <div class=\"col-sm-6 section-header\">
                        <h2 class=\"section-title text-center wow fadeInDown\">Nossos Valores</h2>
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["valores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["valore"]) {
            // line 25
            echo "                        <p class=\"text-center wow fadeInDown\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["valore"], "valores", array()), "html", null, true);
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valore'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\desafio/themes/jtherczeg-multi/partials/quemsomos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  79 => 25,  75 => 24,  69 => 20,  60 => 18,  56 => 17,  49 => 12,  40 => 10,  36 => 9,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set quemsomos = builderList.records %}
{% set missao = builderList2.records %}
{% set valores = builderList3.records %}

<div class=\"container\">

            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Quem somos</h2>
                {% for quemsomo in quemsomos %}
                <p class=\"text-center wow fadeInDown\">{{quemsomo.quemsomos}}</p>
                {% endfor %}
            </div>   
            
            <div class=\"row\" >
                    <div class=\"col-sm-6 section-header\">
                        <h2 class=\"section-title text-center wow fadeInDown\">Nossa Missão</h2>
                        {% for missa in missao %}
                        <p class=\"text-center wow fadeInDown\">{{missa.missao}}</p>
                        {% endfor %}
                        
                    </div>
                    <div class=\"col-sm-6 section-header\">
                        <h2 class=\"section-title text-center wow fadeInDown\">Nossos Valores</h2>
                        {% for valore in valores %}
                        <p class=\"text-center wow fadeInDown\">{{valore.valores}}</p>
                        {% endfor %}
                    </div>
            </div>", "C:\\xampp\\htdocs\\desafio/themes/jtherczeg-multi/partials/quemsomos.htm", "");
    }
}
