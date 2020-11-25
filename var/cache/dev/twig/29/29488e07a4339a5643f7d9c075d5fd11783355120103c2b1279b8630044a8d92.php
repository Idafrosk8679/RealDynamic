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

/* proyectos/proyectos.html.twig */
class __TwigTemplate_da6c8654b1cdcab8444f0ffa16a32adf4b9d5b5ab2bb97d659dff40116ab9648 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyectos/proyectos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyectos/proyectos.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "proyectos/proyectos.html.twig", 1);
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
        // line 7
        echo twig_escape_filter($this->env, (isset($context["titulo"]) || array_key_exists("titulo", $context) ? $context["titulo"] : (function () { throw new RuntimeError('Variable "titulo" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h1>

<ul class=\"project-list clearfix\">

        ";
        // line 11
        $context["proyectsPerPage"] = 6;
        // line 12
        echo "        ";
        $context["minimo"] = ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 12, $this->source); })()) - 1) * (isset($context["proyectsPerPage"]) || array_key_exists("proyectsPerPage", $context) ? $context["proyectsPerPage"] : (function () { throw new RuntimeError('Variable "proyectsPerPage" does not exist.', 12, $this->source); })())) + 1);
        // line 13
        echo "        ";
        $context["maximo"] = (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 13, $this->source); })()) * (isset($context["proyectsPerPage"]) || array_key_exists("proyectsPerPage", $context) ? $context["proyectsPerPage"] : (function () { throw new RuntimeError('Variable "proyectsPerPage" does not exist.', 13, $this->source); })())) + 1);
        // line 14
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["proyect"]) {
            // line 15
            echo "            ";
            if (((0 <= twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15), (isset($context["minimo"]) || array_key_exists("minimo", $context) ? $context["minimo"] : (function () { throw new RuntimeError('Variable "minimo" does not exist.', 15, $this->source); })()))) && (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15), (isset($context["maximo"]) || array_key_exists("maximo", $context) ? $context["maximo"] : (function () { throw new RuntimeError('Variable "maximo" does not exist.', 15, $this->source); })()))))) {
                // line 16
                echo "            <li class=\"project-thumb\">
                <div class=\"thumb\">
                ";
                // line 18
                $context["numProyectos"] = (twig_get_attribute($this->env, $this->source, $context["proyect"], "id", [], "any", false, false, false, 18) - 1);
                // line 19
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proyectosDetalle", ["numProyectos" => twig_get_attribute($this->env, $this->source, $context["proyect"], "id", [], "any", false, false, false, 19)]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proyect"], "titulo", [], "any", false, false, false, 19), "html", null, true);
                echo "\" ><img src=\"../images/thumbs/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proyect"], "imagenes", [], "any", false, false, false, 19), 0, [], "array", false, false, false, 19), "html", null, true);
                echo "\" alt=\"\" /> </a>
                </div>
                <h3 class=\"entry-title\">";
                // line 21
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proyect"], "titulo", [], "any", false, false, false, 21)), "html", null, true);
                echo "</h3>
            </li>
            ";
            }
            // line 24
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        
</ul>
<div class=\"paginador\">
    ";
        // line 28
        $context["total"] = (twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })())) % 6);
        // line 29
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proyectosLista", ["currentPage" => 1]);
        echo "\"><<</a>

    ";
        // line 31
        $context["paginaAnterior"] = ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 31, $this->source); })()) - 1);
        // line 32
        echo "    ";
        if ((1 === twig_compare((isset($context["paginaAnterior"]) || array_key_exists("paginaAnterior", $context) ? $context["paginaAnterior"] : (function () { throw new RuntimeError('Variable "paginaAnterior" does not exist.', 32, $this->source); })()), 0))) {
            // line 33
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proyectosLista", ["currentPage" => (isset($context["paginaAnterior"]) || array_key_exists("paginaAnterior", $context) ? $context["paginaAnterior"] : (function () { throw new RuntimeError('Variable "paginaAnterior" does not exist.', 33, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["paginaAnterior"]) || array_key_exists("paginaAnterior", $context) ? $context["paginaAnterior"] : (function () { throw new RuntimeError('Variable "paginaAnterior" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "</a>
    ";
        }
        // line 35
        echo "
    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proyectosLista", ["currentPage" => (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 36, $this->source); })())]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "</a>

    ";
        // line 38
        $context["paginaSiguiente"] = ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 38, $this->source); })()) + 1);
        // line 39
        echo "    ";
        if ((0 >= twig_compare((isset($context["paginaSiguiente"]) || array_key_exists("paginaSiguiente", $context) ? $context["paginaSiguiente"] : (function () { throw new RuntimeError('Variable "paginaSiguiente" does not exist.', 39, $this->source); })()), (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 39, $this->source); })())))) {
            // line 40
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proyectosLista", ["currentPage" => (isset($context["paginaSiguiente"]) || array_key_exists("paginaSiguiente", $context) ? $context["paginaSiguiente"] : (function () { throw new RuntimeError('Variable "paginaSiguiente" does not exist.', 40, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["paginaSiguiente"]) || array_key_exists("paginaSiguiente", $context) ? $context["paginaSiguiente"] : (function () { throw new RuntimeError('Variable "paginaSiguiente" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "</a>
    ";
        }
        // line 42
        echo "
    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proyectosLista", ["currentPage" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 43, $this->source); })())]), "html", null, true);
        echo "\">>></a>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proyectos/proyectos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 43,  193 => 42,  185 => 40,  182 => 39,  180 => 38,  173 => 36,  170 => 35,  162 => 33,  159 => 32,  157 => 31,  151 => 29,  149 => 28,  144 => 25,  130 => 24,  124 => 21,  114 => 19,  112 => 18,  108 => 16,  105 => 15,  87 => 14,  84 => 13,  81 => 12,  79 => 11,  72 => 7,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}


{% block section %}
    

<h1>{{titulo}}</h1>

<ul class=\"project-list clearfix\">

        {% set proyectsPerPage = 6 %}
        {% set minimo = ((currentPage - 1) * proyectsPerPage) + 1 %}
        {% set maximo = (currentPage * proyectsPerPage) +1 %}
        {% for proyect in data %}
            {% if loop.index >= minimo and loop.index < maximo %}
            <li class=\"project-thumb\">
                <div class=\"thumb\">
                {% set numProyectos = proyect.id - 1 %}
                    <a href=\"{{path('proyectosDetalle', {'numProyectos': proyect.id }) }}\" title=\"{{proyect.titulo}}\" ><img src=\"../images/thumbs/{{ proyect.imagenes[0] }}\" alt=\"\" /> </a>
                </div>
                <h3 class=\"entry-title\">{{proyect.titulo|title}}</h3>
            </li>
            {% endif %}
        {% endfor %}
        
</ul>
<div class=\"paginador\">
    {% set total = data|length % 6 %}
    <a href=\"{{path('proyectosLista', {'currentPage':1}) }}\"><<</a>

    {% set paginaAnterior = currentPage - 1 %}
    {% if  paginaAnterior > 0 %}
    <a href=\"{{path('proyectosLista', {'currentPage':paginaAnterior}) }}\">{{paginaAnterior}}</a>
    {% endif %}

    <a href=\"{{path('proyectosLista', {'currentPage':currentPage }) }}\">{{currentPage}}</a>

    {% set paginaSiguiente = currentPage + 1 %}
    {% if  paginaSiguiente <= totalPages %}
    <a href=\"{{path('proyectosLista', {'currentPage':paginaSiguiente}) }}\">{{paginaSiguiente}}</a>
    {% endif %}

    <a href=\"{{path('proyectosLista', {'currentPage': total}) }}\">>></a>
</div>


{% endblock %}


", "proyectos/proyectos.html.twig", "C:\\Frameworks-Symfony\\RealDynamic\\templates\\proyectos\\proyectos.html.twig");
    }
}
