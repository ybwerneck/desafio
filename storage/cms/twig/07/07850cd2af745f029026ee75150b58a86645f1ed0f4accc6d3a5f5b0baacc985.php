<?php

/* C:\xampp\htdocs\desafio/themes/jtherczeg-multi/partials/blogs.htm */
class __TwigTemplate_f3b82d7c3d433746b53a32904341ac17ecd6364b5c425c9be767a52a49756a22 extends Twig_Template
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
            
            {
                    
                <h2 class=\"section-title text-center wow fadeInDown\">Latest Blogs</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class=\"row\">
                    
                <div class=\"col-sm-6\">
                    <div class=\"blog-post blog-large wow fadeInLeft\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\">
                            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["posts"] ?? null), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 15
            echo "                        <article>
                            
                            <header class=\"entry-header\">
                                <div class=\"entry-thumbnail\">
                                    <img class=\"img-responsive\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", array())), "path", array()), "html", null, true);
            echo "\" alt=\"\">
                                     </div>
                                <div class=\"entry-date\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "</div>
                                <h2 class=\"entry-title\"><a href=\"#\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "summary", array()), "html", null, true);
            echo "      </header>

                            <div class=\"entry-content\">
                                <P>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "text", array()), "html", null, true);
            echo "</P>
                                <a class=\"btn btn-primary\" href=\"blog/post/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", array()), "html", null, true);
            echo "\">Leia Mais</a>
                            </div>

                           
                        </article>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </div><!--/.col-sm-6-->
                </div>

                <div class=\"col-sm-6\">
                    
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["posts"] ?? null), 1, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 38
            echo "                    
                    <div class=\"blog-post blog-media wow fadeInRight\" data-wow-duration=\"300ms\" data-wow-delay=\"100ms\">
                        <article class=\"media clearfix\">
                            <div class=\"entry-thumbnail pull-left\">             
                                <img class=\"img-responsive\" src=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", array())), "path", array()), "html", null, true);
            echo "\" alt=\"\">
                              </div>
                              <br>
                            <div class=\"media-body\">
                                <header class=\"entry-header\">
                                    <div class=\"entry-date\">";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "</div>
                                    <h2 class=\"entry-title\"><a href=\"#\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</a></h2>
                                </header>

                                <div class=\"entry-content\">
                                    <P>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "summary", array()), "html", null, true);
            echo "</P>
                                    <a class=\"btn btn-primary\" href=\"index.php/blog/post/";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", array()), "html", null, true);
            echo "\">Leia Mais</a>
                                </div>

                                
                            </div>
                        </article>
                    </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    
                    
                </div>
            </div>

        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\desafio/themes/jtherczeg-multi/partials/blogs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 62,  119 => 53,  115 => 52,  108 => 48,  104 => 47,  96 => 42,  90 => 38,  86 => 37,  79 => 32,  67 => 26,  63 => 25,  57 => 22,  53 => 21,  48 => 19,  42 => 15,  38 => 14,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">

    <div class=\"section-header\">
            
            {
                    
                <h2 class=\"section-title text-center wow fadeInDown\">Latest Blogs</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class=\"row\">
                    
                <div class=\"col-sm-6\">
                    <div class=\"blog-post blog-large wow fadeInLeft\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\">
                            {%for post in posts| slice(0,1)%}
                        <article>
                            
                            <header class=\"entry-header\">
                                <div class=\"entry-thumbnail\">
                                    <img class=\"img-responsive\" src=\"{{ post.featured_images|first.path }}\" alt=\"\">
                                     </div>
                                <div class=\"entry-date\">{{ post.published_at|date('M d, Y') }}</div>
                                <h2 class=\"entry-title\"><a href=\"#\">{{post.summary}}      </header>

                            <div class=\"entry-content\">
                                <P>{{post.text}}</P>
                                <a class=\"btn btn-primary\" href=\"blog/post/{{post.slug}}\">Leia Mais</a>
                            </div>

                           
                        </article>
                                    {% endfor %}
                </div><!--/.col-sm-6-->
                </div>

                <div class=\"col-sm-6\">
                    
                    {% for post in posts| slice(1,2)%}
                    
                    <div class=\"blog-post blog-media wow fadeInRight\" data-wow-duration=\"300ms\" data-wow-delay=\"100ms\">
                        <article class=\"media clearfix\">
                            <div class=\"entry-thumbnail pull-left\">             
                                <img class=\"img-responsive\" src=\"{{ post.featured_images|first.path }}\" alt=\"\">
                              </div>
                              <br>
                            <div class=\"media-body\">
                                <header class=\"entry-header\">
                                    <div class=\"entry-date\">{{ post.published_at|date('M d, Y') }}</div>
                                    <h2 class=\"entry-title\"><a href=\"#\">{{post.title}}</a></h2>
                                </header>

                                <div class=\"entry-content\">
                                    <P>{{post.summary}}</P>
                                    <a class=\"btn btn-primary\" href=\"index.php/blog/post/{{post.slug}}\">Leia Mais</a>
                                </div>

                                
                            </div>
                        </article>
                    </div>

                    {%   endfor    %}
                    
                    
                </div>
            </div>

        </div>", "C:\\xampp\\htdocs\\desafio/themes/jtherczeg-multi/partials/blogs.htm", "");
    }
}
