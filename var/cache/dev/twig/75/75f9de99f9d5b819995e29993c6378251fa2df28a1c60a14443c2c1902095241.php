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

/* gallery/gallery3.html.twig */
class __TwigTemplate_9846809f2a554b6bc3878168250277392bac4e777b156d501065d417d7807656 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'gallery' => [$this, 'block_gallery'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "gallery.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallery/gallery3.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallery/gallery3.html.twig"));

        $this->parent = $this->loadTemplate("gallery.html.twig", "gallery/gallery3.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_gallery($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "gallery"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "gallery"));

        // line 5
        echo "
<div class=\"tm-page-col-right\">
\t<div class=\"tm-gallery\" id=\"tmGallery\">

\t\t<div class=\"tm-gallery-item category-3\">
\t\t\t<figure class=\"effect-bubba\">
\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gallery/gallery-item-06.jpg"), "html", null, true);
        echo "\" alt=\"Gallery item\" class=\"img-fluid\"/>
\t\t\t\t<figcaption>
\t\t\t\t\t<h2>Image
\t\t\t\t\t\t<span>One</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<p>Bubba likes to appear out of thin air.</p>
\t\t\t\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gallery/gallery-item-06.jpg"), "html", null, true);
        echo "\">View more</a>
\t\t\t\t</figcaption>
\t\t\t</figure>
\t\t</div>
\t\t<div class=\"tm-gallery-item category-3\">
\t\t\t<figure class=\"effect-bubba\">
\t\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gallery/gallery-item-10.jpg"), "html", null, true);
        echo "\" alt=\"Gallery item\" class=\"img-fluid\"/>
\t\t\t\t<figcaption>
\t\t\t\t\t<h2>Image
\t\t\t\t\t\t<span>Two</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<p>Bubba likes to appear out of thin air.</p>
\t\t\t\t\t<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gallery/gallery-item-10.jpg"), "html", null, true);
        echo "\">View more</a>
\t\t\t\t</figcaption>
\t\t\t</figure>
\t\t</div>
\t\t<div class=\"tm-gallery-item category-3\">
\t\t\t<figure class=\"effect-bubba\">
\t\t\t\t<img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gallery/gallery-item-07.jpg"), "html", null, true);
        echo "\" alt=\"Gallery item\" class=\"img-fluid\"/>
\t\t\t\t<figcaption>
\t\t\t\t\t<h2>Image
\t\t\t\t\t\t<span>Three</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<p>Bubba likes to appear out of thin air.</p>
\t\t\t\t\t<a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gallery/gallery-item-07.jpg"), "html", null, true);
        echo "\">View more</a>
\t\t\t\t</figcaption>
\t\t\t</figure>
\t\t</div>
\t\t<div class=\"tm-gallery-item category-3\">
\t\t\t<figure class=\"effect-bubba\">
\t\t\t\t<img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gallery/gallery-item-08.jpg"), "html", null, true);
        echo "\" alt=\"Gallery item\" class=\"img-fluid\"/>
\t\t\t\t<figcaption>
\t\t\t\t\t<h2>Image
\t\t\t\t\t\t<span>Four</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<p>Bubba likes to appear out of thin air.</p>
\t\t\t\t\t<a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gallery/gallery-item-08.jpg"), "html", null, true);
        echo "\">View more</a>
\t\t\t\t</figcaption>
\t\t\t</figure>
\t\t</div>
\t</div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gallery/gallery3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 53,  130 => 47,  121 => 41,  112 => 35,  103 => 29,  94 => 23,  85 => 17,  76 => 11,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'gallery.html.twig' %}


{% block gallery %}

<div class=\"tm-page-col-right\">
\t<div class=\"tm-gallery\" id=\"tmGallery\">

\t\t<div class=\"tm-gallery-item category-3\">
\t\t\t<figure class=\"effect-bubba\">
\t\t\t\t<img src=\"{{ asset ('img/gallery/gallery-item-06.jpg')}}\" alt=\"Gallery item\" class=\"img-fluid\"/>
\t\t\t\t<figcaption>
\t\t\t\t\t<h2>Image
\t\t\t\t\t\t<span>One</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<p>Bubba likes to appear out of thin air.</p>
\t\t\t\t\t<a href=\"{{ asset ('img/gallery/gallery-item-06.jpg')}}\">View more</a>
\t\t\t\t</figcaption>
\t\t\t</figure>
\t\t</div>
\t\t<div class=\"tm-gallery-item category-3\">
\t\t\t<figure class=\"effect-bubba\">
\t\t\t\t<img src=\"{{ asset ('img/gallery/gallery-item-10.jpg')}}\" alt=\"Gallery item\" class=\"img-fluid\"/>
\t\t\t\t<figcaption>
\t\t\t\t\t<h2>Image
\t\t\t\t\t\t<span>Two</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<p>Bubba likes to appear out of thin air.</p>
\t\t\t\t\t<a href=\"{{ asset ('img/gallery/gallery-item-10.jpg')}}\">View more</a>
\t\t\t\t</figcaption>
\t\t\t</figure>
\t\t</div>
\t\t<div class=\"tm-gallery-item category-3\">
\t\t\t<figure class=\"effect-bubba\">
\t\t\t\t<img src=\"{{ asset ('img/gallery/gallery-item-07.jpg')}}\" alt=\"Gallery item\" class=\"img-fluid\"/>
\t\t\t\t<figcaption>
\t\t\t\t\t<h2>Image
\t\t\t\t\t\t<span>Three</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<p>Bubba likes to appear out of thin air.</p>
\t\t\t\t\t<a href=\"{{ asset ('img/gallery/gallery-item-07.jpg')}}\">View more</a>
\t\t\t\t</figcaption>
\t\t\t</figure>
\t\t</div>
\t\t<div class=\"tm-gallery-item category-3\">
\t\t\t<figure class=\"effect-bubba\">
\t\t\t\t<img src=\"{{ asset ('img/gallery/gallery-item-08.jpg')}}\" alt=\"Gallery item\" class=\"img-fluid\"/>
\t\t\t\t<figcaption>
\t\t\t\t\t<h2>Image
\t\t\t\t\t\t<span>Four</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<p>Bubba likes to appear out of thin air.</p>
\t\t\t\t\t<a href=\"{{ asset ('img/gallery/gallery-item-08.jpg')}}\">View more</a>
\t\t\t\t</figcaption>
\t\t\t</figure>
\t\t</div>
\t</div>
</div>


{% endblock %}
", "gallery/gallery3.html.twig", "C:\\Frameworks-Symfony\\RealDynamic\\templates\\gallery\\gallery3.html.twig");
    }
}
