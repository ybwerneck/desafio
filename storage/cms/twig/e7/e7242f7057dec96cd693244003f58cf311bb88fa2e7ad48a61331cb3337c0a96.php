<?php

/* C:\xampp\sites\desafio/themes/jtherczeg-multi/partials/quemsomos.htm */
class __TwigTemplate_e0699aa5f461dfdc452bcd59c7313b61fcb7098036fe87eaf494bea115ea83f5 extends Twig_Template
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
        echo "<div class=\"container\">

            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Quem somos</h2>
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 6
            echo "                <p class=\"text-center wow fadeInDown\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "quemsomos", array()), "html", null, true);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            </div>

            <div class=\"row\" >
                    <div class=\"col-sm-6 section-header\">
                        <h2 class=\"section-title text-center wow fadeInDown\">Nossa Missão</h2>
                        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 14
            echo "                        <p class=\"text-center wow fadeInDown\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "missao", array()), "html", null, true);
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                    </div>
                    <div class=\"col-sm-6 section-header\">
                        <h2 class=\"section-title text-center wow fadeInDown\">Nossos Valores</h2>
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 20
            echo "                        <p class=\"text-center wow fadeInDown\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "valores", array()), "html", null, true);
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    ";
        // line 27
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about/video.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 28
        echo "                </div>

                <div class=\"col-sm-6 wow fadeInRight\">
                    ";
        // line 31
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about/capabilities.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 32
        echo "                </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\sites\\desafio/themes/jtherczeg-multi/partials/quemsomos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 32,  96 => 31,  91 => 28,  87 => 27,  80 => 22,  71 => 20,  67 => 19,  62 => 16,  53 => 14,  49 => 13,  42 => 8,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">

            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Quem somos</h2>
                {% for record in records %}
                <p class=\"text-center wow fadeInDown\">{{record.quemsomos}}</p>
                {% endfor %}
            </div>

            <div class=\"row\" >
                    <div class=\"col-sm-6 section-header\">
                        <h2 class=\"section-title text-center wow fadeInDown\">Nossa Missão</h2>
                        {% for record in records %}
                        <p class=\"text-center wow fadeInDown\">{{record.missao}}</p>
                        {% endfor %}
                    </div>
                    <div class=\"col-sm-6 section-header\">
                        <h2 class=\"section-title text-center wow fadeInDown\">Nossos Valores</h2>
                        {% for record in records %}
                        <p class=\"text-center wow fadeInDown\">{{record.valores}}</p>
                        {% endfor %}
                    </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    {% content 'about/video.htm' %}
                </div>

                <div class=\"col-sm-6 wow fadeInRight\">
                    {% content 'about/capabilities.htm' %}
                </div>
        </div>", "C:\\xampp\\sites\\desafio/themes/jtherczeg-multi/partials/quemsomos.htm", "");
    }
}
