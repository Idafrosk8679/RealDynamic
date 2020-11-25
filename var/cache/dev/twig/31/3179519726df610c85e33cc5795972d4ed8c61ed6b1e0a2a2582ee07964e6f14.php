<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* gallery/gallery.html.twig */
class __TwigTemplate_86f8c260224a0292ea6c236e8bb6fc59c1a15f1121014f0ccbca5f6a7d7678c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section' => [$this, 'block_section'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallery/gallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallery/gallery.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "gallery/gallery.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 5
        echo "
<body>

    <div class=\"tm-container\">
        <div class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/real-dynamic-banner-03.jpg"), "html", null, true);
        echo "\"></div>
    </div>

    <div class=\"tm-container bg-white\">
        <div class=\"tm-header-stripe w-100\"></div>
        <div class=\"container-fluid\">
            <div class=\"row tm-mb-1\">
                <div class=\"col-12\">
                    <h2 class=\"tm-text-primary text-center tm-my-1 tm-mb-5 tm-intro-text\">Multiple Image Gallery</h2>
                </div>

                ";
        // line 21
        echo "
                ";
        // line 23
        echo "    

                        <h1>";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["titulo"]) || array_key_exists("titulo", $context) ? $context["titulo"] : (function () { throw new RuntimeError('Variable "titulo" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</h1>

                        <ul class=\"project-list clearfix\">

                                ";
        // line 29
        $context["imagesPerPage"] = 4;
        // line 30
        echo "                                ";
        $context["minimo"] = ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 30, $this->source); })()) - 1) * (isset($context["imagesPerPage"]) || array_key_exists("imagesPerPage", $context) ? $context["imagesPerPage"] : (function () { throw new RuntimeError('Variable "imagesPerPage" does not exist.', 30, $this->source); })())) + 1);
        // line 31
        echo "                                ";
        $context["maximo"] = (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 31, $this->source); })()) * (isset($context["imagesPerPage"]) || array_key_exists("imagesPerPage", $context) ? $context["imagesPerPage"] : (function () { throw new RuntimeError('Variable "imagesPerPage" does not exist.', 31, $this->source); })())) + 1);
        // line 32
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
            // line 33
            echo "                                    ";
            if (((0 <= twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 33), (isset($context["minimo"]) || array_key_exists("minimo", $context) ? $context["minimo"] : (function () { throw new RuntimeError('Variable "minimo" does not exist.', 33, $this->source); })()))) && (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 33), (isset($context["maximo"]) || array_key_exists("maximo", $context) ? $context["maximo"] : (function () { throw new RuntimeError('Variable "maximo" does not exist.', 33, $this->source); })()))))) {
                // line 34
                echo "                                    <li class=\"images-thumb\">
                                        <div class=\"thumb\">
                                        ";
                // line 36
                $context["numImages"] = (twig_get_attribute($this->env, $this->source, $context["images"], "id", [], "any", false, false, false, 36) - 1);
                // line 37
                echo "                                            ";
                // line 38
                echo "                                        </div>
                                        <h3 class=\"entry-title\">";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["images"], "titulo", [], "any", false, false, false, 39), "html", null, true);
                echo "</h3>
                                        <img src=\"/img/gallery/";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["images"], "imagenes", [], "any", false, false, false, 40), "html", null, true);
                echo "\" alt=\"Image\"/>
                                    </li>
                                    ";
            }
            // line 43
            echo "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                                
                        </ul>
                        <div class=\"paginador\">
                            ";
        // line 47
        $context["totalPages"] = (twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })())) % 4);
        // line 48
        echo "                            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery", ["currentPage" => 1]);
        echo "\"><<</a>

                            ";
        // line 50
        $context["paginaSiguiente"] = (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 50, $this->source); })());
        // line 51
        echo "                            ";
        if ((0 >= twig_compare((isset($context["paginaSiguiente"]) || array_key_exists("paginaSiguiente", $context) ? $context["paginaSiguiente"] : (function () { throw new RuntimeError('Variable "paginaSiguiente" does not exist.', 51, $this->source); })()), (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 51, $this->source); })())))) {
            // line 52
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery", ["currentPage" => (isset($context["paginaSiguiente"]) || array_key_exists("paginaSiguiente", $context) ? $context["paginaSiguiente"] : (function () { throw new RuntimeError('Variable "paginaSiguiente" does not exist.', 52, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["paginaSiguiente"]) || array_key_exists("paginaSiguiente", $context) ? $context["paginaSiguiente"] : (function () { throw new RuntimeError('Variable "paginaSiguiente" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "</a>
                           
                            ";
        }
        // line 55
        echo "
                            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery", ["currentPage" => (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 56, $this->source); })())]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "</a>

                            ";
        // line 58
        $context["paginaAnterior"] = ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 58, $this->source); })()) + 1);
        // line 59
        echo "                            ";
        if ((1 === twig_compare((isset($context["paginaAnterior"]) || array_key_exists("paginaAnterior", $context) ? $context["paginaAnterior"] : (function () { throw new RuntimeError('Variable "paginaAnterior" does not exist.', 59, $this->source); })()), 0))) {
            // line 60
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery", ["currentPage" => (isset($context["paginaAnterior"]) || array_key_exists("paginaAnterior", $context) ? $context["paginaAnterior"] : (function () { throw new RuntimeError('Variable "paginaAnterior" does not exist.', 60, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["paginaAnterior"]) || array_key_exists("paginaAnterior", $context) ? $context["paginaAnterior"] : (function () { throw new RuntimeError('Variable "paginaAnterior" does not exist.', 60, $this->source); })()), "html", null, true);
            echo "</a>
                            
                            ";
        }
        // line 63
        echo "
                            <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery", ["currentPage" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 64, $this->source); })())]), "html", null, true);
        echo "\">>></a>
                        </div>

                        ";
        // line 68
        echo "                    ";
        // line 69
        echo "
                </div>
            </div>

            <!-- Testimonials -->
            <div class=\"tm-mb-2\">
                <h2 class=\"text-center tm-text-primary tm-h2-big tm-mb-6\">Our Happy Customers</h2>
                <!-- Carousel -->
                <div class=\"col-lg-6 mx-auto tm-mb-4\">
                    <div class=\"tm-carousel\">
                        <div class=\"text-center\">
                            <h3 class=\"tm-mb-4 tm-text-dark-gray\">Vivamus vitae condimentum</h3>
                            <p class=\"tm-mb-4\">Vestibulum condimentum, elit nec tempus suscipit, enim nibh aliquam eros, sit amet iaculis nibh nibh at dolor. Cras imperdiet, dolor posuere dignissim dapibus, tortor arcu pellentesque orci, et mattis libero justo semper neque.</p>
                            <div class=\"rating\">
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star\"></span>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <h3 class=\"tm-mb-4 tm-text-dark-gray\">Cras imperdiet, dolor posuere</h3>
                            <p class=\"tm-mb-4\">Elit nec tempus suscipit, enim nibh aliquam eros, sit amet iaculis nibh Vestibulum condimentum, nibh at dolor.Vivamus vitae condimentum dignissim dapibus, tortor arcu pellentesque orci, et mattis libero justo semper neque.</p>
                            <div class=\"rating\">
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <h3 class=\"tm-mb-4 tm-text-dark-gray\">Elit nec tempus suscipit</h3>
                            <p class=\"tm-mb-4\">Cras imperdiet, dolor posuere dignissim dapibus, tortor arcu pellentesque orci, et mattis libero justo semper neque.Vivamus vitae condimentum. Elit nec tempus suscipit, enim nibh aliquam eros, sit amet iaculis nibh nibh at dolor. </p>
                            <div class=\"rating\">
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star\"></span>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <h3 class=\"tm-mb-4 tm-text-dark-gray\">Tempus suscipit, enim</h3>
                            <p class=\"tm-mb-4\">Tortor arcu pellentesque orci, et mattis libero justo semper neque. Vestibulum condimentum, elit nec tempus suscipit, enim nibh aliquam eros, sit amet iaculis nibh nibh at dolor. Cras imperdiet, dolor posuere dignissim dapibus.</p>
                            <div class=\"rating\">
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star\"></span>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <h3 class=\"tm-mb-4 tm-text-dark-gray\">Dolor posuere dignissim dapibus</h3>
                            <p class=\"tm-mb-4\">Posuere dignissim dapibus, tortor arcu pellentesque orci, et mattis libero justo semper neque. Vestibulum condimentum, elit nec tempus suscipit, enim nibh aliquam eros, sit amet iaculis nibh nibh at dolor. Vivamus vitae condimentum dolor.</p>
                            <div class=\"rating\">
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star\"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row tm-mb-7\">
                <div class=\"col-lg-4 col-sm-6 mb-lg-0 mb-5\">
                    <h3 class=\"tm-text-primary tm-mb-4\">Useful Readings</h3>
                    <nav class=\"tm-nav-secondary\">
                        <ul>
                            <li><a href=\"#\">Laoreet eget justo</a></li>
                            <li><a href=\"#\">Rhoncus volupat turpi</a></li>
                            <li><a href=\"#\">Nulla euismod erat</a></li>
                            <li><a href=\"#\">Donc a laoreet ipsum</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-4 col-sm-6 mb-lg-0 mb-5\">
                    <h3 class=\"tm-text-primary tm-mb-4\">Main Menu</h3>
                    <nav class=\"tm-nav-secondary\">
                        <ul>
                            <li><a href=\"/\">Home</a></li>
                            <li><a href=\"/about\">About</a></li>
                            <li><a href=\"/gallery\">Gallery</a></li>
                            <li><a href=\"/contact\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-4 col-sm-6 mb-lg-0 mb-5\">
                    <h3 class=\"tm-text-primary tm-mb-4\">About Real Dynamic</h3>
                    <p class=\"tm-mb-4\">Ut non orci semper, semper velit sit amet, ornare velit. Vestibulum id ipsum et justo bibendum ornare id sit amet arcu. Integer placerat magna.</p>
                    <div>
                        <a href=\"https://youtube.com\" class=\"tm-social-link\"><i class=\"fab fa-youtube tm-social-icon\"></i></a>
                        <a href=\"https://facebook.com\" class=\"tm-social-link\"><i class=\"fab fa-facebook tm-social-icon\"></i></a>
                        <a href=\"https://twitter.com\" class=\"tm-social-link\"><i class=\"fab fa-twitter tm-social-icon\"></i></a>
                        <a href=\"https://instagram.com\" class=\"tm-social-link\"><i class=\"fab fa-instagram tm-social-icon\"></i></a>
                    </div>
                </div>
            </div>
        </div> 
    </div>  
       
    </script>
</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gallery/gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 69,  226 => 68,  220 => 64,  217 => 63,  208 => 60,  205 => 59,  203 => 58,  196 => 56,  193 => 55,  184 => 52,  181 => 51,  179 => 50,  173 => 48,  171 => 47,  166 => 44,  152 => 43,  146 => 40,  142 => 39,  139 => 38,  137 => 37,  135 => 36,  131 => 34,  128 => 33,  110 => 32,  107 => 31,  104 => 30,  102 => 29,  95 => 25,  91 => 23,  88 => 21,  74 => 9,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}


{% block section %}

<body>

    <div class=\"tm-container\">
        <div class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset ('img/real-dynamic-banner-03.jpg')}}\"></div>
    </div>

    <div class=\"tm-container bg-white\">
        <div class=\"tm-header-stripe w-100\"></div>
        <div class=\"container-fluid\">
            <div class=\"row tm-mb-1\">
                <div class=\"col-12\">
                    <h2 class=\"tm-text-primary text-center tm-my-1 tm-mb-5 tm-intro-text\">Multiple Image Gallery</h2>
                </div>

                {# Inicio prueba #}

                {# {% block section %} #}
    

                        <h1>{{titulo}}</h1>

                        <ul class=\"project-list clearfix\">

                                {% set imagesPerPage = 4 %}
                                {% set minimo = ((currentPage - 1) * imagesPerPage) + 1 %}
                                {% set maximo = (currentPage * imagesPerPage) +1 %}
                                {% for images in data %}
                                    {% if loop.index >= minimo and loop.index < maximo %}
                                    <li class=\"images-thumb\">
                                        <div class=\"thumb\">
                                        {% set numImages = images.id - 1 %}
                                            {# <a href=\"{{path('proyectosDetalle', {'numProyectos': proyect.id }) }}\" title=\"{{proyect.titulo}}\" ><img src=\"../images/thumbs/{{ proyect.imagenes[0] }}\" alt=\"\" /> </a> #}
                                        </div>
                                        <h3 class=\"entry-title\">{{images.titulo}}</h3>
                                        <img src=\"/img/gallery/{{images.imagenes}}\" alt=\"Image\"/>
                                    </li>
                                    {% endif %}
                                {% endfor %}
                                
                        </ul>
                        <div class=\"paginador\">
                            {% set totalPages = data|length % 4 %}
                            <a href=\"{{path('gallery', {'currentPage':1}) }}\"><<</a>

                            {% set paginaSiguiente = currentPage %}
                            {% if  paginaSiguiente <= totalPages %}
                            <a href=\"{{path('gallery', {'currentPage':paginaSiguiente}) }}\">{{paginaSiguiente}}</a>
                           
                            {% endif %}

                            <a href=\"{{path('gallery', {'currentPage':currentPage }) }}\">{{currentPage}}</a>

                            {% set paginaAnterior = currentPage + 1 %}
                            {% if  paginaAnterior > 0 %}
                            <a href=\"{{path('gallery', {'currentPage':paginaAnterior}) }}\">{{paginaAnterior}}</a>
                            
                            {% endif %}

                            <a href=\"{{path('gallery', {'currentPage': totalPages}) }}\">>></a>
                        </div>

                        {# Fin prueba #}
                    {# {% block section %}{% endblock %} #}

                </div>
            </div>

            <!-- Testimonials -->
            <div class=\"tm-mb-2\">
                <h2 class=\"text-center tm-text-primary tm-h2-big tm-mb-6\">Our Happy Customers</h2>
                <!-- Carousel -->
                <div class=\"col-lg-6 mx-auto tm-mb-4\">
                    <div class=\"tm-carousel\">
                        <div class=\"text-center\">
                            <h3 class=\"tm-mb-4 tm-text-dark-gray\">Vivamus vitae condimentum</h3>
                            <p class=\"tm-mb-4\">Vestibulum condimentum, elit nec tempus suscipit, enim nibh aliquam eros, sit amet iaculis nibh nibh at dolor. Cras imperdiet, dolor posuere dignissim dapibus, tortor arcu pellentesque orci, et mattis libero justo semper neque.</p>
                            <div class=\"rating\">
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star\"></span>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <h3 class=\"tm-mb-4 tm-text-dark-gray\">Cras imperdiet, dolor posuere</h3>
                            <p class=\"tm-mb-4\">Elit nec tempus suscipit, enim nibh aliquam eros, sit amet iaculis nibh Vestibulum condimentum, nibh at dolor.Vivamus vitae condimentum dignissim dapibus, tortor arcu pellentesque orci, et mattis libero justo semper neque.</p>
                            <div class=\"rating\">
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <h3 class=\"tm-mb-4 tm-text-dark-gray\">Elit nec tempus suscipit</h3>
                            <p class=\"tm-mb-4\">Cras imperdiet, dolor posuere dignissim dapibus, tortor arcu pellentesque orci, et mattis libero justo semper neque.Vivamus vitae condimentum. Elit nec tempus suscipit, enim nibh aliquam eros, sit amet iaculis nibh nibh at dolor. </p>
                            <div class=\"rating\">
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star\"></span>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <h3 class=\"tm-mb-4 tm-text-dark-gray\">Tempus suscipit, enim</h3>
                            <p class=\"tm-mb-4\">Tortor arcu pellentesque orci, et mattis libero justo semper neque. Vestibulum condimentum, elit nec tempus suscipit, enim nibh aliquam eros, sit amet iaculis nibh nibh at dolor. Cras imperdiet, dolor posuere dignissim dapibus.</p>
                            <div class=\"rating\">
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star\"></span>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <h3 class=\"tm-mb-4 tm-text-dark-gray\">Dolor posuere dignissim dapibus</h3>
                            <p class=\"tm-mb-4\">Posuere dignissim dapibus, tortor arcu pellentesque orci, et mattis libero justo semper neque. Vestibulum condimentum, elit nec tempus suscipit, enim nibh aliquam eros, sit amet iaculis nibh nibh at dolor. Vivamus vitae condimentum dolor.</p>
                            <div class=\"rating\">
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star checked\"></span>
                                <span class=\"star fas fa-star\"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row tm-mb-7\">
                <div class=\"col-lg-4 col-sm-6 mb-lg-0 mb-5\">
                    <h3 class=\"tm-text-primary tm-mb-4\">Useful Readings</h3>
                    <nav class=\"tm-nav-secondary\">
                        <ul>
                            <li><a href=\"#\">Laoreet eget justo</a></li>
                            <li><a href=\"#\">Rhoncus volupat turpi</a></li>
                            <li><a href=\"#\">Nulla euismod erat</a></li>
                            <li><a href=\"#\">Donc a laoreet ipsum</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-4 col-sm-6 mb-lg-0 mb-5\">
                    <h3 class=\"tm-text-primary tm-mb-4\">Main Menu</h3>
                    <nav class=\"tm-nav-secondary\">
                        <ul>
                            <li><a href=\"/\">Home</a></li>
                            <li><a href=\"/about\">About</a></li>
                            <li><a href=\"/gallery\">Gallery</a></li>
                            <li><a href=\"/contact\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-4 col-sm-6 mb-lg-0 mb-5\">
                    <h3 class=\"tm-text-primary tm-mb-4\">About Real Dynamic</h3>
                    <p class=\"tm-mb-4\">Ut non orci semper, semper velit sit amet, ornare velit. Vestibulum id ipsum et justo bibendum ornare id sit amet arcu. Integer placerat magna.</p>
                    <div>
                        <a href=\"https://youtube.com\" class=\"tm-social-link\"><i class=\"fab fa-youtube tm-social-icon\"></i></a>
                        <a href=\"https://facebook.com\" class=\"tm-social-link\"><i class=\"fab fa-facebook tm-social-icon\"></i></a>
                        <a href=\"https://twitter.com\" class=\"tm-social-link\"><i class=\"fab fa-twitter tm-social-icon\"></i></a>
                        <a href=\"https://instagram.com\" class=\"tm-social-link\"><i class=\"fab fa-instagram tm-social-icon\"></i></a>
                    </div>
                </div>
            </div>
        </div> 
    </div>  
       
    </script>
</body>

{% endblock %}", "gallery/gallery.html.twig", "C:\\Frameworks-Symfony\\RealDynamic\\templates\\gallery\\gallery.html.twig");
    }
}
