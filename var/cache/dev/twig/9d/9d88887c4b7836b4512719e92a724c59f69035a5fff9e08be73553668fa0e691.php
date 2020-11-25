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

/* login/login.html.twig */
class __TwigTemplate_39db487b5709a6d7735ae2caa0e1dfd42a378f65da380af5e8265ebf9ffb4082 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "login/login.html.twig", 1);
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

<h1 class=\"primary\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["titulo"]) || array_key_exists("titulo", $context) ? $context["titulo"] : (function () { throw new RuntimeError('Variable "titulo" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h1>


<div class=\"primary-login\">

    ";
        // line 13
        echo "    <form method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_succes");
        echo "\" id=\"loginform\">
    
        <div>
            <p style='text-align:center;font-size:50px'>Credenciales</p>
        </div>
    
        <div>
            <label style='color:white;padding-bottom: 10px'>Usuario <span class=\"required\">*</span></label>
            <input style='margin-left: 32px'name=\"user\" type=\"text\" id=\"user\" value=\"\" />
        </div>
    
        <div>
            <label style='color:white'>Contraseña <span class=\"required\">*</span></label>
            <input name=\"password\" type=\"password\" id=\"password\" value=\"\" />
        </div>     
        
        <div style='text-align:center; padding-top:10px'>
            <input type=\"submit\" value=\"Entrar\" class=\"button\">
            <input type=\"reset\" value=\"Reset\" class=\"button\">
        </div>
    
    </form>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  72 => 7,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}


{% block section %}
    

<h1 class=\"primary\">{{titulo}}</h1>


<div class=\"primary-login\">

    {# <p class=\"intro\">{{texto}}</p> #}
    <form method=\"post\" action=\"{{ path('login_succes') }}\" id=\"loginform\">
    
        <div>
            <p style='text-align:center;font-size:50px'>Credenciales</p>
        </div>
    
        <div>
            <label style='color:white;padding-bottom: 10px'>Usuario <span class=\"required\">*</span></label>
            <input style='margin-left: 32px'name=\"user\" type=\"text\" id=\"user\" value=\"\" />
        </div>
    
        <div>
            <label style='color:white'>Contraseña <span class=\"required\">*</span></label>
            <input name=\"password\" type=\"password\" id=\"password\" value=\"\" />
        </div>     
        
        <div style='text-align:center; padding-top:10px'>
            <input type=\"submit\" value=\"Entrar\" class=\"button\">
            <input type=\"reset\" value=\"Reset\" class=\"button\">
        </div>
    
    </form>
</div>


{% endblock %}", "login/login.html.twig", "C:\\Frameworks-Symfony\\RealDynamic\\templates\\login\\login.html.twig");
    }
}
