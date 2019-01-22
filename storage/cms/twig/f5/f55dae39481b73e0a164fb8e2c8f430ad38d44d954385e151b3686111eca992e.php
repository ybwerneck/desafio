<?php

/* C:\Users\maxstell\Code\desafio\desafio/themes/jtherczeg-multi/partials/feedback.htm */
class __TwigTemplate_916d4b14289df7cb80f122ceccc97497c273e42ebf5c51fbba33af2ecb5b4a3e extends Twig_Template
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
            <div class=\"row\">
                <div class=\"col-sm-8 col-sm-offset-2\">

                    <div id=\"carousel-testimonial\" class=\"carousel slide text-center\" data-ride=\"carousel\">
                        <!-- Wrapper for slides -->
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"item active\">
                                <p><img class=\"img-circle img-thumbnail\" src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial/01.jpg");
        echo "\" alt=\"\"></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                            <div class=\"item\">
                                <p><img class=\"img-circle img-thumbnail\" src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial/01.jpg");
        echo "\" alt=\"\"></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class=\"btns\">
                            <a class=\"btn btn-primary btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"btn btn-primary btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"next\">
                                <span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\maxstell\\Code\\desafio\\desafio/themes/jtherczeg-multi/partials/feedback.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8 col-sm-offset-2\">

                    <div id=\"carousel-testimonial\" class=\"carousel slide text-center\" data-ride=\"carousel\">
                        <!-- Wrapper for slides -->
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"item active\">
                                <p><img class=\"img-circle img-thumbnail\" src=\"{{ 'assets/images/testimonial/01.jpg'|theme }}\" alt=\"\"></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                            <div class=\"item\">
                                <p><img class=\"img-circle img-thumbnail\" src=\"{{ 'assets/images/testimonial/01.jpg'|theme }}\" alt=\"\"></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class=\"btns\">
                            <a class=\"btn btn-primary btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"btn btn-primary btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"next\">
                                <span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>", "C:\\Users\\maxstell\\Code\\desafio\\desafio/themes/jtherczeg-multi/partials/feedback.htm", "");
    }
}
