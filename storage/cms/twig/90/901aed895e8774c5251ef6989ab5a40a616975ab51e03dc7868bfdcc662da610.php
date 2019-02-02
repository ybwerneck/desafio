<?php

/* C:\xampp\htdocs\desafio/themes/jtherczeg-multi/partials/servicos.htm */
class __TwigTemplate_ec3d01a5a961bfd693c4560486e1fcea7cd912f4ef4ce72c67511e651787fcb4 extends Twig_Template
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
        $context["servicos"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 2
        echo "

<div class=\"container\">
        
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Nossos Serviços</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                  
            </div>


            <div class=\"row\">
               
                <div class=\"features\">              
                   
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["servicos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["servico"]) {
            // line 18
            echo "                    
                       
                    <div class=\"col-md-4 col-sm-6 wow fadeInUp animated\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\" style=\"visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInUp;\">                    
                           
                            <div class=\"media service-box\">
                                
                                <div class=\"pull-left\">
                                        <img class=\"img-responsive\" style=\"border-radius: 100%;\"src=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["servico"], "imagem", array()), "thumb", array(0 => 150, 1 => 150, 2 => "crop"), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servico"], "nome", array()), "html", null, true);
            echo "\">
                                        
                                </div>
                                <div class=\"media-body\">
                                
                                    <h4 class=\"media-heading\" >";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servico"], "nome", array()), "html", null, true);
            echo "</h4>                                               
                                        
                                    <p>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servico"], "descricao", array()), "html", null, true);
            echo "</p>
                                                                                
                                </div>
                            </div>
                    </div><!--/.col-md-4-->  
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo " 
                </div>          
            </div><!--/.row-->    
        </div><!--/.container-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\desafio/themes/jtherczeg-multi/partials/servicos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 37,  70 => 32,  65 => 30,  55 => 25,  46 => 18,  42 => 17,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set servicos = builderList.records %}


<div class=\"container\">
        
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Nossos Serviços</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                  
            </div>


            <div class=\"row\">
               
                <div class=\"features\">              
                   
                    {% for servico in servicos %}
                    
                       
                    <div class=\"col-md-4 col-sm-6 wow fadeInUp animated\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\" style=\"visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInUp;\">                    
                           
                            <div class=\"media service-box\">
                                
                                <div class=\"pull-left\">
                                        <img class=\"img-responsive\" style=\"border-radius: 100%;\"src=\"{{ servico.imagem.thumb(150, 150, 'crop') }}\" alt=\"{{servico.nome}}\">
                                        
                                </div>
                                <div class=\"media-body\">
                                
                                    <h4 class=\"media-heading\" >{{servico.nome}}</h4>                                               
                                        
                                    <p>{{servico.descricao}}</p>
                                                                                
                                </div>
                            </div>
                    </div><!--/.col-md-4-->  
                     {% endfor %} 
                </div>          
            </div><!--/.row-->    
        </div><!--/.container-->", "C:\\xampp\\htdocs\\desafio/themes/jtherczeg-multi/partials/servicos.htm", "");
    }
}
