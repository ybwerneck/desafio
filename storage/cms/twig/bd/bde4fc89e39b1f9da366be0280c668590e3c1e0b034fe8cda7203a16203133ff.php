<?php

/* C:\xampp\sites\desafio\desafio/themes/jtherczeg-multi/partials/contato.htm */
class __TwigTemplate_bc528b8fe195be925600a6c9679253a4218abe81c8059aba36975bce1de7ee68 extends Twig_Template
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
        echo "<div class=\"container-wrapper\">
            <div class=\"container\">
                
                <div class=\"section-header\">
                    <h2 class=\"section-title text-center wow fadeInDown\">Fale conosco</h2>
                    <p class=\"text-center wow fadeInDown\">Tire suas duvidas conosco atraves do nosso formulário online<br> 
                        e veja como chegar na nossa sede</p>
                </div>

                <div class=\"row\">
                    
                    <div class=\"col-sm-6 wow fadeInRight animated\" style=\"visibility: visible; animation-name: fadeInLeft;\">
                        <div class=\"contact-form\">
                            <h3 class=\"column-title\">Contato</h3>

                            <address>
                              <strong>Biblioteca Nacional</strong><br>
                              Av. Rio Branco, 219 - Centro<br>
                              Rio de Janeiro, RJ<br>
                              <abbr title=\"Telefone\">(21) 2220-3040</abbr>
                            </address>
                            ";
        // line 22
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 23
        echo "                            <!-- <form id=\"main-contact-form\" name=\"contact-form\" method=\"post\" action=\"#\">
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Nome\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"E-mail\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"subject\" class=\"form-control\" placeholder=\"Assunto\" required>
                                </div>
                                <div class=\"form-group\">
                                    <textarea name=\"message\" class=\"form-control\" rows=\"8\" placeholder=\"Mensagem\" required></textarea>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary contato-botn\">Enviar Mensagem</button>
                            </form> -->
                        </div>
                    </div>
                    <div class=\"col-sm-6 wow fadeInRight animated\" style=\"visibility: visible; animation-name: fadeInRight;\">
                        <h3 class=\"column-title\">Mapa</h3>
                        <iframe 
                            class=\"gps\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7348.966897227532!
                            2d-43.185951!3d-22.932416!3m2!1i1024
                            !2i768!4f13.1!3m3!1m2!1s0x0%3A0xb60630aea21f4a4b!2sCasa+da+Leitura!5e0!3m2!1spt-BR!2sbr!4v1548285891710\" 
                            width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen>
                        </iframe>
                    </div>


                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\sites\\desafio\\desafio/themes/jtherczeg-multi/partials/contato.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 23,  46 => 22,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-wrapper\">
            <div class=\"container\">
                
                <div class=\"section-header\">
                    <h2 class=\"section-title text-center wow fadeInDown\">Fale conosco</h2>
                    <p class=\"text-center wow fadeInDown\">Tire suas duvidas conosco atraves do nosso formulário online<br> 
                        e veja como chegar na nossa sede</p>
                </div>

                <div class=\"row\">
                    
                    <div class=\"col-sm-6 wow fadeInRight animated\" style=\"visibility: visible; animation-name: fadeInLeft;\">
                        <div class=\"contact-form\">
                            <h3 class=\"column-title\">Contato</h3>

                            <address>
                              <strong>Biblioteca Nacional</strong><br>
                              Av. Rio Branco, 219 - Centro<br>
                              Rio de Janeiro, RJ<br>
                              <abbr title=\"Telefone\">(21) 2220-3040</abbr>
                            </address>
                            {% component 'contactForm' %}
                            <!-- <form id=\"main-contact-form\" name=\"contact-form\" method=\"post\" action=\"#\">
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Nome\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"E-mail\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"subject\" class=\"form-control\" placeholder=\"Assunto\" required>
                                </div>
                                <div class=\"form-group\">
                                    <textarea name=\"message\" class=\"form-control\" rows=\"8\" placeholder=\"Mensagem\" required></textarea>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary contato-botn\">Enviar Mensagem</button>
                            </form> -->
                        </div>
                    </div>
                    <div class=\"col-sm-6 wow fadeInRight animated\" style=\"visibility: visible; animation-name: fadeInRight;\">
                        <h3 class=\"column-title\">Mapa</h3>
                        <iframe 
                            class=\"gps\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7348.966897227532!
                            2d-43.185951!3d-22.932416!3m2!1i1024
                            !2i768!4f13.1!3m3!1m2!1s0x0%3A0xb60630aea21f4a4b!2sCasa+da+Leitura!5e0!3m2!1spt-BR!2sbr!4v1548285891710\" 
                            width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen>
                        </iframe>
                    </div>


                </div>
            </div>
        </div>", "C:\\xampp\\sites\\desafio\\desafio/themes/jtherczeg-multi/partials/contato.htm", "");
    }
}
