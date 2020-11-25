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

/* proyectos/proyectos2.html.twig */
class __TwigTemplate_d0caccf5308ab8d82ef77dec716622f0cff7d8d69fdf924d775203f4b9deeb9f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyectos/proyectos2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyectos/proyectos2.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "proyectos/proyectos2.html.twig", 1);
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
<h1>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["titulo"]) || array_key_exists("titulo", $context) ? $context["titulo"] : (function () { throw new RuntimeError('Variable "titulo" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h1>

            <ul class=\"project-list clearfix\">

                <li class=\"project-thumb\">
                    <div class=\"thumb\">
                        <a class=\"lightbox\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/thumbs/big/sneakers.jpg"), "html", null, true);
        echo "\" title=\"Cosmic Sneakers\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/thumbs/sneakers.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </a>
                    </div>
                    <h3 class=\"entry-title\">Cosmic Sneakers</h3>
                </li>

                 <li class=\"project-thumb last\">
                    <div class=\"thumb\">
                        <a class=\"lightbox\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/thumbs/big/vector-flower-fullscreen.jpg"), "html", null, true);
        echo "\" title=\"Abstract Vectors\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/thumbs/vector-flower-fullscreen.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </a>
                    </div>
                    <h3 class=\"entry-title\">Abstract Vector</h3>
                </li>

            </ul>
            <div class=\"pagination\">
                <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["enlace01"]) || array_key_exists("enlace01", $context) ? $context["enlace01"] : (function () { throw new RuntimeError('Variable "enlace01" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\">«</a>
                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["enlace01"]) || array_key_exists("enlace01", $context) ? $context["enlace01"] : (function () { throw new RuntimeError('Variable "enlace01" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\">1</a>
                <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["enlace02"]) || array_key_exists("enlace02", $context) ? $context["enlace02"] : (function () { throw new RuntimeError('Variable "enlace02" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\">2</a>
                <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["sinEnlace"]) || array_key_exists("sinEnlace", $context) ? $context["sinEnlace"] : (function () { throw new RuntimeError('Variable "sinEnlace" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\">»</a>
            </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proyectos/proyectos2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  112 => 28,  108 => 27,  104 => 26,  92 => 19,  80 => 12,  71 => 6,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}


{% block section %}
    
<h1>{{titulo}}</h1>

            <ul class=\"project-list clearfix\">

                <li class=\"project-thumb\">
                    <div class=\"thumb\">
                        <a class=\"lightbox\" href=\"{{asset('images/thumbs/big/sneakers.jpg')}}\" title=\"Cosmic Sneakers\"><img src=\"{{asset('images/thumbs/sneakers.jpg')}}\" alt=\"\" /> </a>
                    </div>
                    <h3 class=\"entry-title\">Cosmic Sneakers</h3>
                </li>

                 <li class=\"project-thumb last\">
                    <div class=\"thumb\">
                        <a class=\"lightbox\" href=\"{{asset('images/thumbs/big/vector-flower-fullscreen.jpg')}}\" title=\"Abstract Vectors\"><img src=\"{{asset('images/thumbs/vector-flower-fullscreen.jpg')}}\" alt=\"\" /> </a>
                    </div>
                    <h3 class=\"entry-title\">Abstract Vector</h3>
                </li>

            </ul>
            <div class=\"pagination\">
                <a href=\"{{enlace01}}\">«</a>
                <a href=\"{{enlace01}}\">1</a>
                <a href=\"{{enlace02}}\">2</a>
                <a href=\"{{sinEnlace}}\">»</a>
            </div>



{% endblock %}


", "proyectos/proyectos2.html.twig", "C:\\Frameworks-Symfony\\RealDynamic\\templates\\proyectos\\proyectos2.html.twig");
    }
}
