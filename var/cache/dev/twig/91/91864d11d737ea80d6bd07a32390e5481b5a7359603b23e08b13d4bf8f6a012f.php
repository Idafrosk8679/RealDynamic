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

/* layout.html.twig */
class __TwigTemplate_57f49146b862c1005e4a5222855ffd93da234c00ce600666303c52aa760c5ef3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'section' => [$this, 'block_section'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<header class=\"row\">
    <div class=\"tm-container\">
        <div class=\"tm-site-header\"></div>
        <!-- tm-site-header -->
        <div class=\"tm-site-header-overlay\">
            <div class=\"tm-header-stripe ml-auto\"></div>
            <div class=\"tm-header-stripe tm-header-stripe-short ml-auto\"></div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-4 tm-site-header-left\">
                        <h1 class=\"text-uppercase tm-site-name\">Real Dynamic</h1>
                        <p class=\"text-white mb-0 tm-site-desc\">New Fluid HTML Template</p>
                        <li>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["texto"]) || array_key_exists("texto", $context) ? $context["texto"] : (function () { throw new RuntimeError('Variable "texto" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</li>
                    </div>
                    <div
                        class=\"col-lg-8 tm-site-header-right\">
                        <!--Navbar-->
                        <nav
                            class=\"navbar navbar-expand-lg\">
                            <!-- Collapse button -->
                            <button class=\"navbar-toggler toggler-example\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"dark-blue-text\">
                                    <i class=\"fas fa-bars text-white\"></i>
                                </span>
                            </button>
                            <!-- Collapsible content -->
                            <div
                                class=\"collapse navbar-collapse tm-nav\" id=\"navbarNav\">
                                <!-- Links -->
                                <ul class=\"navbar-nav ml-auto\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"/\">Home
                                            ";
        // line 37
        echo "                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"/about\">About</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"/gallery\">Gallery</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"/contact\">Contact</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"/login\">Login</a>
                                    </li>
                                </ul>
                                <!-- Links -->
                            </div>
                            <!-- Collapsible content -->
                        </nav>
                        <!--/.Navbar-->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- container fluid -->
        </div>
        <!-- tm-site-header-overlay -->
        <div class=\"tm-header-stripe w-100\"></div>
    </div>
</header>

";
        // line 69
        $this->displayBlock('section', $context, $blocks);
        // line 70
        echo "
<footer class=\"row\">
\t<p class=\"mb-0 w-100 text-center col-12\">
\t\tCompany &copy; 2020 Company Name 
\t\t                    
\t\t                    - Real Dynamic by
\t\t<a rel=\"nofollow\" href=\"https://templatemo.com\" class=\"tm-text-link\">TemplateMo</a>
\t</p>
</footer>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 69,  142 => 70,  140 => 69,  106 => 37,  83 => 16,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<header class=\"row\">
    <div class=\"tm-container\">
        <div class=\"tm-site-header\"></div>
        <!-- tm-site-header -->
        <div class=\"tm-site-header-overlay\">
            <div class=\"tm-header-stripe ml-auto\"></div>
            <div class=\"tm-header-stripe tm-header-stripe-short ml-auto\"></div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-4 tm-site-header-left\">
                        <h1 class=\"text-uppercase tm-site-name\">Real Dynamic</h1>
                        <p class=\"text-white mb-0 tm-site-desc\">New Fluid HTML Template</p>
                        <li>{{texto}}</li>
                    </div>
                    <div
                        class=\"col-lg-8 tm-site-header-right\">
                        <!--Navbar-->
                        <nav
                            class=\"navbar navbar-expand-lg\">
                            <!-- Collapse button -->
                            <button class=\"navbar-toggler toggler-example\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"dark-blue-text\">
                                    <i class=\"fas fa-bars text-white\"></i>
                                </span>
                            </button>
                            <!-- Collapsible content -->
                            <div
                                class=\"collapse navbar-collapse tm-nav\" id=\"navbarNav\">
                                <!-- Links -->
                                <ul class=\"navbar-nav ml-auto\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"/\">Home
                                            {# <span class=\"sr-only\">(current)</span> #}
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"/about\">About</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"/gallery\">Gallery</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"/contact\">Contact</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"/login\">Login</a>
                                    </li>
                                </ul>
                                <!-- Links -->
                            </div>
                            <!-- Collapsible content -->
                        </nav>
                        <!--/.Navbar-->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- container fluid -->
        </div>
        <!-- tm-site-header-overlay -->
        <div class=\"tm-header-stripe w-100\"></div>
    </div>
</header>

{% block section %}{% endblock %}

<footer class=\"row\">
\t<p class=\"mb-0 w-100 text-center col-12\">
\t\tCompany &copy; 2020 Company Name 
\t\t                    
\t\t                    - Real Dynamic by
\t\t<a rel=\"nofollow\" href=\"https://templatemo.com\" class=\"tm-text-link\">TemplateMo</a>
\t</p>
</footer>

{% endblock %}", "layout.html.twig", "C:\\Frameworks-Symfony\\RealDynamic\\templates\\layout.html.twig");
    }
}
