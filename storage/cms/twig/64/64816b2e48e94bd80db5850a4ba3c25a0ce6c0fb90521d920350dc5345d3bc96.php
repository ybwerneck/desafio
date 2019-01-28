<?php

/* C:\xampp\htdocs\desafio/themes/jtherczeg-multi/partials/slides.htm */
class __TwigTemplate_5dc25093ee249a538cee0b97ee7731095c1b23d1de013e81dfbaff9cddc3f7a4 extends Twig_Template
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
        $context["slides"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 3
            echo "
<div class=\"owl-carousel\">
           <div class=\"item\" style=\"background-image: url(";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", array()), "thumb", array(0 => 400, 1 => 400, 2 => "crop"), "method"), "html", null, true);
            echo ");\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        
        </div><!--/.owl-carousel-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\desafio/themes/jtherczeg-multi/partials/slides.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  33 => 5,  29 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set slides = builderList.records %}
{% for slide in slides %}

<div class=\"owl-carousel\">
           <div class=\"item\" style=\"background-image: url({{ slide.image.thumb (400,400,'crop') }});\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
            
            {% endfor %}
        
        </div><!--/.owl-carousel-->", "C:\\xampp\\htdocs\\desafio/themes/jtherczeg-multi/partials/slides.htm", "");
    }
}
