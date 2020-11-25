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

/* contact/show_contacto.html.twig */
class __TwigTemplate_27abb51cdb79e423409cb87ca04be6affefa68dcd72d73815a7dc43b750a6ecb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/show_contacto.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/show_contacto.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "contact/show_contacto.html.twig", 1);
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
<div class=\"primary\" style='color:white'>


    <p class=\"intro\">
    In hac habitasse platea risus dictumst. Suspendisse enim arcu. Aliquam erat volutpat.
    Phasellus a dui nisi. Nunc nec quam vitae nisl vehicula euismod. Lorem ipsum dolor sit amet,
    consectetur adipiscing elit. Sed commodo ligula blandit risus. Pellentesque magna mi,
    iaculis pharetra eu, fermentum ullamcorper nisi. Integer fringilla magna ut quam vulputate erat.
    </p>

        <div>
        <label>Nombre: ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</label>
        </div>

        <div>
        <label>Email: ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</label>
        </div>

        <div>
        <label>Inquiry: ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["inquiry"]) || array_key_exists("inquiry", $context) ? $context["inquiry"] : (function () { throw new RuntimeError('Variable "inquiry" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</label>
        </div>

        <div>
        <label>Mensaje: ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "</span></label>
        </div>



</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/show_contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  96 => 25,  89 => 21,  82 => 17,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}


{% block section %}

<div class=\"primary\" style='color:white'>


    <p class=\"intro\">
    In hac habitasse platea risus dictumst. Suspendisse enim arcu. Aliquam erat volutpat.
    Phasellus a dui nisi. Nunc nec quam vitae nisl vehicula euismod. Lorem ipsum dolor sit amet,
    consectetur adipiscing elit. Sed commodo ligula blandit risus. Pellentesque magna mi,
    iaculis pharetra eu, fermentum ullamcorper nisi. Integer fringilla magna ut quam vulputate erat.
    </p>

        <div>
        <label>Nombre: {{nombre}}</label>
        </div>

        <div>
        <label>Email: {{email}}</label>
        </div>

        <div>
        <label>Inquiry: {{inquiry}}</label>
        </div>

        <div>
        <label>Mensaje: {{message}}</span></label>
        </div>



</div>

{% endblock %}


", "contact/show_contacto.html.twig", "C:\\Frameworks-Symfony\\RealDynamic\\templates\\contact\\show_contacto.html.twig");
    }
}
