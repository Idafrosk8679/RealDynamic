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

/* base.html.twig */
class __TwigTemplate_850b81e4a344ea8e9b604c355fba27cb162c17af910461f95b502c344a4571e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <title>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["titulo"]) || array_key_exists("titulo", $context) ? $context["titulo"] : (function () { throw new RuntimeError('Variable "titulo" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap.min.css", "css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("all.min.css", "fontawesome"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("slick.css", "slick"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("slick-theme.css", "slick"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("templatemo-real-dynamic.css", "css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery-3.4.1.min.js", "js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap.min.js", "js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("parallax.min.js", "js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("slick.min.js", "slick"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("tooplate-script.js", "js"), "html", null, true);
        echo "\"></script>
        <script>
        \$(document).ready(function () {
            // Testimonials carousel
            \$('.tm-carousel').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });
        </script>
        <script>
         \$(document).ready(function () {
            /* Isotope Gallery */            
            var \$gallery = \$(\".tm-gallery\").isotope({
                itemSelector: \".tm-gallery-item\",
                filter: '.category-1'
                // layoutMode: \"fitRows\"
            });
            // layout Isotope after each image loads
            \$gallery.imagesLoaded().progress(function () {
                \$gallery.isotope(\"layout\");
            });

            \$(\".filters-button-group\").on(\"click\", \"a\", function () {
                var filterValue = \$(this).attr(\"data-filter\");
                \$gallery.isotope({ filter: filterValue });
            });

            /* Categories */
            \$(\".tabgroup > div\").hide();
            \$(\".tabgroup > div:first-of-type\").show();
            \$(\".tabs a\").click(function (e) {
                e.preventDefault();
                var \$this = \$(this),
                    tabgroup = \"#\" + \$this.parents(\".tabs\").data(\"tabgroup\"),
                    others = \$this
                        .closest(\"li\")
                        .siblings()
                        .children(\"a\"),
                    target = \$this.attr(\"href\");
                others.removeClass(\"active\");
                \$this.addClass(\"active\");

                // Scroll to tab content (for mobile)
                if (\$(window).width() < 992) {
                    \$(\"html, body\").animate(
                        {
                            scrollTop: \$(\"#tmGallery\").offset().top
                        },
                        200
                    );
                }
            });

            // Magnific Pop up
            \$('.tm-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: { enabled: true }
            });

            // Testimonials carousel
            \$('.tm-carousel').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });
        </script>
        <script>
                var posts = \$('.post');
        posts.hide();

        \$(\"#category li a\").click(function () {

            var customType = \$(this).data('filter');
            console.log(customType);
            console.log(posts.length);

            posts.hide();
            \$(\"#\" + customType).show();
        });
        </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 24,  162 => 23,  158 => 22,  154 => 21,  149 => 20,  139 => 19,  121 => 18,  109 => 13,  105 => 12,  101 => 11,  97 => 10,  92 => 9,  82 => 8,  70 => 113,  67 => 19,  65 => 18,  60 => 15,  58 => 8,  54 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <title>{{titulo}}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset ('bootstrap.min.css', 'css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('all.min.css', 'fontawesome')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('slick.css', 'slick')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('slick-theme.css', 'slick')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('templatemo-real-dynamic.css', 'css')}}\">
        {% endblock %}

    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
        <script src=\"{{ asset ('jquery-3.4.1.min.js', 'js')}}\"></script>
        <script src=\"{{ asset ('bootstrap.min.js', 'js')}}\"></script>
        <script src=\"{{ asset ('parallax.min.js', 'js')}}\"></script>
        <script src=\"{{ asset ('slick.min.js', 'slick')}}\"></script>
        <script src=\"{{ asset ('tooplate-script.js', 'js')}}\"></script>
        <script>
        \$(document).ready(function () {
            // Testimonials carousel
            \$('.tm-carousel').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });
        </script>
        <script>
         \$(document).ready(function () {
            /* Isotope Gallery */            
            var \$gallery = \$(\".tm-gallery\").isotope({
                itemSelector: \".tm-gallery-item\",
                filter: '.category-1'
                // layoutMode: \"fitRows\"
            });
            // layout Isotope after each image loads
            \$gallery.imagesLoaded().progress(function () {
                \$gallery.isotope(\"layout\");
            });

            \$(\".filters-button-group\").on(\"click\", \"a\", function () {
                var filterValue = \$(this).attr(\"data-filter\");
                \$gallery.isotope({ filter: filterValue });
            });

            /* Categories */
            \$(\".tabgroup > div\").hide();
            \$(\".tabgroup > div:first-of-type\").show();
            \$(\".tabs a\").click(function (e) {
                e.preventDefault();
                var \$this = \$(this),
                    tabgroup = \"#\" + \$this.parents(\".tabs\").data(\"tabgroup\"),
                    others = \$this
                        .closest(\"li\")
                        .siblings()
                        .children(\"a\"),
                    target = \$this.attr(\"href\");
                others.removeClass(\"active\");
                \$this.addClass(\"active\");

                // Scroll to tab content (for mobile)
                if (\$(window).width() < 992) {
                    \$(\"html, body\").animate(
                        {
                            scrollTop: \$(\"#tmGallery\").offset().top
                        },
                        200
                    );
                }
            });

            // Magnific Pop up
            \$('.tm-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: { enabled: true }
            });

            // Testimonials carousel
            \$('.tm-carousel').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });
        </script>
        <script>
                var posts = \$('.post');
        posts.hide();

        \$(\"#category li a\").click(function () {

            var customType = \$(this).data('filter');
            console.log(customType);
            console.log(posts.length);

            posts.hide();
            \$(\"#\" + customType).show();
        });
        </script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Frameworks-Symfony\\RealDynamic\\templates\\base.html.twig");
    }
}
