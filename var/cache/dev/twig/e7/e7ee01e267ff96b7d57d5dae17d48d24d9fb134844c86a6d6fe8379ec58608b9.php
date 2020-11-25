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

/* proyectos/proyectoDetalle.html.twig */
class __TwigTemplate_aa51611e29d11c61d3125e9019c7c4903d8b38c7e0d6ce9cd28cd48cca24d400 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyectos/proyectoDetalle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyectos/proyectoDetalle.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "proyectos/proyectoDetalle.html.twig", 1);
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
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "titulo", [], "any", false, false, false, 8)), "html", null, true);
        echo "</h1>


<h2>";
        // line 11
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "cliente", [], "any", false, false, false, 11)), "html", null, true);
        echo "</h2>
<p>
    
    Inicio: ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "fechaInicio", [], "any", false, false, false, 14), "j F, Y", "Europe/Paris"), "html", null, true);
        echo " <br>
    Fin: ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "fechaFin", [], "any", false, false, false, 15), "j F, Y", "Europe/Paris"), "html", null, true);
        echo " <br>
    Presupuesto: ";
        // line 16
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "presupuesto", [], "any", false, false, false, 16), 2, ",", "."), "html", null, true);
        echo " € <br>

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "categoria", [], "any", false, false, false, 18)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "        <img src=\"../../images/star.png\" width=\"15px\" alt=\"\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
</p>
<p>
    ";
        // line 24
        echo twig_escape_filter($this->env, twig_replace_filter(twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "descripcion", [], "any", false, false, false, 24)), ["%this%" => "
", "%that%" => "<br>"]), "html", null, true);
        echo "
</p>


<div>

    <h3>Integrantes:</h3>
    <ul>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "integrantes", [], "any", false, false, false, 32)));
        foreach ($context['_seq'] as $context["_key"] => $context["integrante"]) {
            // line 33
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["integrante"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['integrante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </ul>

</div>



<ul class=\"project-list clearfix\">   
";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "imagenes", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 43
            echo "    <li class=\"project-thumb\">
        <div class=\"thumb\">
            <a class=\"lightbox\" href=\"../../images/thumbs/big/";
            // line 45
            echo twig_escape_filter($this->env, $context["img"], "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $context["img"], "html", null, true);
            echo "\" ><img src=\"../../images/thumbs/";
            echo twig_escape_filter($this->env, $context["img"], "html", null, true);
            echo "\" alt=\"\" /> </a>
        </div>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</ul>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proyectos/proyectoDetalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 49,  156 => 45,  152 => 43,  148 => 42,  139 => 35,  130 => 33,  126 => 32,  114 => 24,  109 => 21,  102 => 19,  98 => 18,  93 => 16,  89 => 15,  85 => 14,  79 => 11,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}


{% block section %}
    


<h1>{{data.titulo|upper}}</h1>


<h2>{{data.cliente|title}}</h2>
<p>
    
    Inicio: {{data.fechaInicio|date(\"j F, Y\", 'Europe/Paris')}} <br>
    Fin: {{data.fechaFin|date(\"j F, Y\", 'Europe/Paris')}} <br>
    Presupuesto: {{data.presupuesto|number_format(2, ',', '.') }} € <br>

    {% for i in 1.. data.categoria %}
        <img src=\"../../images/star.png\" width=\"15px\" alt=\"\">
    {% endfor %}

</p>
<p>
    {{data.descripcion|capitalize|replace({'%this%': '\\n', '%that%': \"<br>\"})}}
</p>


<div>

    <h3>Integrantes:</h3>
    <ul>
        {% for integrante in data.integrantes|sort %}
            <li>{{integrante}}</li>
        {% endfor %}
    </ul>

</div>



<ul class=\"project-list clearfix\">   
{% for img in data.imagenes %}
    <li class=\"project-thumb\">
        <div class=\"thumb\">
            <a class=\"lightbox\" href=\"../../images/thumbs/big/{{ img }}\" title=\"{{ img }}\" ><img src=\"../../images/thumbs/{{ img }}\" alt=\"\" /> </a>
        </div>
    </li>
{% endfor %}
</ul>


{% endblock %}
", "proyectos/proyectoDetalle.html.twig", "C:\\Frameworks-Symfony\\RealDynamic\\templates\\proyectos\\proyectoDetalle.html.twig");
    }
}
