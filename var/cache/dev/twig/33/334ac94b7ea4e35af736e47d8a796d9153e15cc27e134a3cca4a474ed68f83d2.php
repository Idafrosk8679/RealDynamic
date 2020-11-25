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

/* about/about.html.twig */
class __TwigTemplate_674df185366ffe03111bbeef95347cb9a47763487555454fb8d23127b31209dd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "about/about.html.twig", 1);
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
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/real-dynamic-banner-02.jpg"), "html", null, true);
        echo "\"></div>
    </div>

    <div class=\"tm-container bg-white\">
        <div class=\"tm-header-stripe w-100\"></div>
        <div class=\"container-fluid\">
            <!--Intro-->
            <section class=\"row tm-mb-1\">
                <div class=\"col-12 text-center mx-auto tm-about-box\">
                    <h2 class=\"tm-text-primary tm-my-1 tm-mb-5 tm-intro-text\">About the dynamic</h2>
                    <p>Morbi non tortor hendrerit, imperdiet sem suscipit, ultrices turpis. Nulla eleifend vestibulum eros id scelerisque. Aliquam fringilla in sem aliquam hendrerit. Maecenas congue euismod tortor, eget interdum purus imperdiet ac. Donec vestibulum dignissim nisl ac accumsan.</p>
                </div>
            </section>

            <div class=\"row tm-mb-1\">
                <section class=\"col-lg-6 mb-lg-0 mb-5 tm-company-background-col\">
                    <div class=\"tm-company-background\">
                        <h3 class=\"tm-text-primary tm-mb-9\">Company Background</h3>
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/company-background.jpg"), "html", null, true);
        echo "\" alt=\"Company Background Image\" class=\"img-fluid tm-mb-3\">
                        <p class=\"tm-mb-3\">Suspendisse est sem, ultricies sit amet sapien eget, auctor pellentesque nisl. Donec euismod, lectus ut pharetra tempor, magna risus venenatis sem, et consequat massa velit eu orci.</p>
                        <p>Nam quis dolor vitae metus imperdiet pulvinar ac at mauris. Nam lobortis tristique ex, non ullamcorper felis.</p>
                    </div>
                </section>
                <section class=\"col-lg-6\">
                    <h3 class=\"tm-text-primary tm-mb-5\">Our Business Strategy</h3>
                    <div class=\"tm-strategy-box tm-mb-7\">
                        <i class=\"fas fa-bullseye fa-4x tm-strategy-icon\"></i>
                        <p class=\"tm-strategy-text\">Nam quis dolor vitae metus imperdiet pulvinar ac at mauris. Nam lobortis tristique ex, non ullamcorper felis. Aenean odio massa, aliquam id metus sed, dignissim dignissim sem.</p>
                    </div>
                    <div class=\"tm-strategy-box tm-mb-7\">
                        <i class=\"fas fa-business-time fa-4x tm-strategy-icon\"></i>
                        <p class=\"tm-strategy-text\">Sed bibendum sem eget nisi pellentesque varius. Aenean condimentum ex nisi, nec sodales dolor faucibus quis. Duis turpis mi, iaculis sed varius eu, tristique id magna.</p>
                    </div>
                    <div class=\"tm-strategy-box tm-mb-7\">
                        <i class=\"fas fa-chart-line fa-4x tm-strategy-icon\"></i>
                        <p class=\"tm-strategy-text\">Duis auctor vestibulum enim. Fusce nec dolor rhoncus, egestas ligula eu, maximus turpis. Donec rhoncus neque eget est posuere posuere.</p>
                    </div>
                </section>
            </div>
            <section class=\"row tm-mb-8\">
                <h3 class=\"col-12 tm-text-primary text-center tm-mb-5\">Our Team Members</h3>
                <div class=\"col-12\">
                    <div class=\"tm-members\">
                        <div class=\"tm-member\">
                            <figure class=\"text-center effect-bubba mb-4\">
                                <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/people-01.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-fluid\">
                                <figcaption>
                                    <div class=\"tm-member-social\">
                                        <a href=\"https://facebook.com\" class=\"tm-member-social-link\"><i class=\"fab fa-facebook tm-member-social-icon\"></i></a>
                                        <a href=\"https://twitter.com\" class=\"tm-member-social-link\"><i class=\"fab fa-twitter tm-member-social-icon\"></i></a>
                                        <a href=\"https://youtube.com\" class=\"tm-member-social-link\"><i class=\"fab fa-youtube tm-member-social-icon\"></i></a>
                                        <a href=\"https://instagram.com\" class=\"tm-member-social-link\"><i class=\"fab fa-instagram tm-member-social-icon\"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class=\"text-center\">
                                <span class=\"d-block mb-1 tm-name\">John Smith</span>
                                <span class=\"d-block tm-text-primary\">CEO / Founder</span>
                            </div>
                        </div>
                        <div class=\"tm-member\">
                            <figure class=\"text-center effect-bubba mb-4\">
                                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/people-02.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-fluid\">
                                <figcaption>
                                    <div class=\"tm-member-social\">
                                        <a href=\"https://facebook.com\" class=\"tm-member-social-link\"><i class=\"fab fa-facebook tm-member-social-icon\"></i></a>
                                        <a href=\"https://twitter.com\" class=\"tm-member-social-link\"><i class=\"fab fa-twitter tm-member-social-icon\"></i></a>
                                        <a href=\"https://youtube.com\" class=\"tm-member-social-link\"><i class=\"fab fa-youtube tm-member-social-icon\"></i></a>
                                        <a href=\"https://instagram.com\" class=\"tm-member-social-link\"><i class=\"fab fa-instagram tm-member-social-icon\"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class=\"text-center\">
                                <span class=\"d-block mb-1 tm-name\">Mary Jones</span>
                                <span class=\"d-block tm-text-primary\">Managing Director</span>
                            </div>
                        </div>
                        <div class=\"tm-member\">
                            <figure class=\"text-center effect-bubba mb-4\">
                                <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/people-03.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-fluid\">
                                <figcaption>
                                    <div class=\"tm-member-social\">
                                        <a href=\"https://facebook.com\" class=\"tm-member-social-link\"><i class=\"fab fa-facebook tm-member-social-icon\"></i></a>
                                        <a href=\"https://twitter.com\" class=\"tm-member-social-link\"><i class=\"fab fa-twitter tm-member-social-icon\"></i></a>
                                        <a href=\"https://youtube.com\" class=\"tm-member-social-link\"><i class=\"fab fa-youtube tm-member-social-icon\"></i></a>
                                        <a href=\"https://instagram.com\" class=\"tm-member-social-link\"><i class=\"fab fa-instagram tm-member-social-icon\"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class=\"text-center\">
                                <span class=\"d-block mb-1 tm-name\">Jennifer Knoch</span>
                                <span class=\"d-block tm-text-primary\">Creative Manager</span>
                            </div>
                        </div>
                        <div class=\"tm-member\">
                            <figure class=\"text-center effect-bubba mb-4\">
                                <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/people-04.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-fluid\">
                                <figcaption>
                                    <div class=\"tm-member-social\">
                                        <a href=\"https://facebook.com\" class=\"tm-member-social-link\"><i class=\"fab fa-facebook tm-member-social-icon\"></i></a>
                                        <a href=\"https://twitter.com\" class=\"tm-member-social-link\"><i class=\"fab fa-twitter tm-member-social-icon\"></i></a>
                                        <a href=\"https://youtube.com\" class=\"tm-member-social-link\"><i class=\"fab fa-youtube tm-member-social-icon\"></i></a>
                                        <a href=\"https://instagram.com\" class=\"tm-member-social-link\"><i class=\"fab fa-instagram tm-member-social-icon\"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class=\"text-center\">
                                <span class=\"d-block mb-1 tm-name\">Susan Lin</span>
                                <span class=\"d-block tm-text-primary\">Business Planner</span>
                            </div>
                        </div>
                        <div class=\"tm-member\">
                            <figure class=\"text-center effect-bubba mb-4\">
                                <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/people-05.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-fluid\">
                                <figcaption>
                                    <div class=\"tm-member-social\">
                                        <a href=\"https://facebook.com\" class=\"tm-member-social-link\"><i class=\"fab fa-facebook tm-member-social-icon\"></i></a>
                                        <a href=\"https://twitter.com\" class=\"tm-member-social-link\"><i class=\"fab fa-twitter tm-member-social-icon\"></i></a>
                                        <a href=\"https://youtube.com\" class=\"tm-member-social-link\"><i class=\"fab fa-youtube tm-member-social-icon\"></i></a>
                                        <a href=\"https://instagram.com\" class=\"tm-member-social-link\"><i class=\"fab fa-instagram tm-member-social-icon\"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class=\"text-center\">
                                <span class=\"d-block mb-1 tm-name\">Rosy Bush</span>
                                <span class=\"d-block tm-text-primary\">Financial Strategist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
        </div> <!-- container-fluid -->
    </div> <!-- tm-container -->
 
</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "about/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 123,  186 => 106,  166 => 89,  146 => 72,  126 => 55,  96 => 28,  75 => 10,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}


{% block section %}


<body>

    <div class=\"tm-container\">
        <div class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset ('img/real-dynamic-banner-02.jpg')}}\"></div>
    </div>

    <div class=\"tm-container bg-white\">
        <div class=\"tm-header-stripe w-100\"></div>
        <div class=\"container-fluid\">
            <!--Intro-->
            <section class=\"row tm-mb-1\">
                <div class=\"col-12 text-center mx-auto tm-about-box\">
                    <h2 class=\"tm-text-primary tm-my-1 tm-mb-5 tm-intro-text\">About the dynamic</h2>
                    <p>Morbi non tortor hendrerit, imperdiet sem suscipit, ultrices turpis. Nulla eleifend vestibulum eros id scelerisque. Aliquam fringilla in sem aliquam hendrerit. Maecenas congue euismod tortor, eget interdum purus imperdiet ac. Donec vestibulum dignissim nisl ac accumsan.</p>
                </div>
            </section>

            <div class=\"row tm-mb-1\">
                <section class=\"col-lg-6 mb-lg-0 mb-5 tm-company-background-col\">
                    <div class=\"tm-company-background\">
                        <h3 class=\"tm-text-primary tm-mb-9\">Company Background</h3>
                        <img src=\"{{ asset ('img/company-background.jpg')}}\" alt=\"Company Background Image\" class=\"img-fluid tm-mb-3\">
                        <p class=\"tm-mb-3\">Suspendisse est sem, ultricies sit amet sapien eget, auctor pellentesque nisl. Donec euismod, lectus ut pharetra tempor, magna risus venenatis sem, et consequat massa velit eu orci.</p>
                        <p>Nam quis dolor vitae metus imperdiet pulvinar ac at mauris. Nam lobortis tristique ex, non ullamcorper felis.</p>
                    </div>
                </section>
                <section class=\"col-lg-6\">
                    <h3 class=\"tm-text-primary tm-mb-5\">Our Business Strategy</h3>
                    <div class=\"tm-strategy-box tm-mb-7\">
                        <i class=\"fas fa-bullseye fa-4x tm-strategy-icon\"></i>
                        <p class=\"tm-strategy-text\">Nam quis dolor vitae metus imperdiet pulvinar ac at mauris. Nam lobortis tristique ex, non ullamcorper felis. Aenean odio massa, aliquam id metus sed, dignissim dignissim sem.</p>
                    </div>
                    <div class=\"tm-strategy-box tm-mb-7\">
                        <i class=\"fas fa-business-time fa-4x tm-strategy-icon\"></i>
                        <p class=\"tm-strategy-text\">Sed bibendum sem eget nisi pellentesque varius. Aenean condimentum ex nisi, nec sodales dolor faucibus quis. Duis turpis mi, iaculis sed varius eu, tristique id magna.</p>
                    </div>
                    <div class=\"tm-strategy-box tm-mb-7\">
                        <i class=\"fas fa-chart-line fa-4x tm-strategy-icon\"></i>
                        <p class=\"tm-strategy-text\">Duis auctor vestibulum enim. Fusce nec dolor rhoncus, egestas ligula eu, maximus turpis. Donec rhoncus neque eget est posuere posuere.</p>
                    </div>
                </section>
            </div>
            <section class=\"row tm-mb-8\">
                <h3 class=\"col-12 tm-text-primary text-center tm-mb-5\">Our Team Members</h3>
                <div class=\"col-12\">
                    <div class=\"tm-members\">
                        <div class=\"tm-member\">
                            <figure class=\"text-center effect-bubba mb-4\">
                                <img src=\"{{ asset ('img/people-01.jpg')}}\" alt=\"Image\" class=\"img-fluid\">
                                <figcaption>
                                    <div class=\"tm-member-social\">
                                        <a href=\"https://facebook.com\" class=\"tm-member-social-link\"><i class=\"fab fa-facebook tm-member-social-icon\"></i></a>
                                        <a href=\"https://twitter.com\" class=\"tm-member-social-link\"><i class=\"fab fa-twitter tm-member-social-icon\"></i></a>
                                        <a href=\"https://youtube.com\" class=\"tm-member-social-link\"><i class=\"fab fa-youtube tm-member-social-icon\"></i></a>
                                        <a href=\"https://instagram.com\" class=\"tm-member-social-link\"><i class=\"fab fa-instagram tm-member-social-icon\"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class=\"text-center\">
                                <span class=\"d-block mb-1 tm-name\">John Smith</span>
                                <span class=\"d-block tm-text-primary\">CEO / Founder</span>
                            </div>
                        </div>
                        <div class=\"tm-member\">
                            <figure class=\"text-center effect-bubba mb-4\">
                                <img src=\"{{ asset ('img/people-02.jpg')}}\" alt=\"Image\" class=\"img-fluid\">
                                <figcaption>
                                    <div class=\"tm-member-social\">
                                        <a href=\"https://facebook.com\" class=\"tm-member-social-link\"><i class=\"fab fa-facebook tm-member-social-icon\"></i></a>
                                        <a href=\"https://twitter.com\" class=\"tm-member-social-link\"><i class=\"fab fa-twitter tm-member-social-icon\"></i></a>
                                        <a href=\"https://youtube.com\" class=\"tm-member-social-link\"><i class=\"fab fa-youtube tm-member-social-icon\"></i></a>
                                        <a href=\"https://instagram.com\" class=\"tm-member-social-link\"><i class=\"fab fa-instagram tm-member-social-icon\"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class=\"text-center\">
                                <span class=\"d-block mb-1 tm-name\">Mary Jones</span>
                                <span class=\"d-block tm-text-primary\">Managing Director</span>
                            </div>
                        </div>
                        <div class=\"tm-member\">
                            <figure class=\"text-center effect-bubba mb-4\">
                                <img src=\"{{ asset ('img/people-03.jpg')}}\" alt=\"Image\" class=\"img-fluid\">
                                <figcaption>
                                    <div class=\"tm-member-social\">
                                        <a href=\"https://facebook.com\" class=\"tm-member-social-link\"><i class=\"fab fa-facebook tm-member-social-icon\"></i></a>
                                        <a href=\"https://twitter.com\" class=\"tm-member-social-link\"><i class=\"fab fa-twitter tm-member-social-icon\"></i></a>
                                        <a href=\"https://youtube.com\" class=\"tm-member-social-link\"><i class=\"fab fa-youtube tm-member-social-icon\"></i></a>
                                        <a href=\"https://instagram.com\" class=\"tm-member-social-link\"><i class=\"fab fa-instagram tm-member-social-icon\"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class=\"text-center\">
                                <span class=\"d-block mb-1 tm-name\">Jennifer Knoch</span>
                                <span class=\"d-block tm-text-primary\">Creative Manager</span>
                            </div>
                        </div>
                        <div class=\"tm-member\">
                            <figure class=\"text-center effect-bubba mb-4\">
                                <img src=\"{{ asset ('img/people-04.jpg')}}\" alt=\"Image\" class=\"img-fluid\">
                                <figcaption>
                                    <div class=\"tm-member-social\">
                                        <a href=\"https://facebook.com\" class=\"tm-member-social-link\"><i class=\"fab fa-facebook tm-member-social-icon\"></i></a>
                                        <a href=\"https://twitter.com\" class=\"tm-member-social-link\"><i class=\"fab fa-twitter tm-member-social-icon\"></i></a>
                                        <a href=\"https://youtube.com\" class=\"tm-member-social-link\"><i class=\"fab fa-youtube tm-member-social-icon\"></i></a>
                                        <a href=\"https://instagram.com\" class=\"tm-member-social-link\"><i class=\"fab fa-instagram tm-member-social-icon\"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class=\"text-center\">
                                <span class=\"d-block mb-1 tm-name\">Susan Lin</span>
                                <span class=\"d-block tm-text-primary\">Business Planner</span>
                            </div>
                        </div>
                        <div class=\"tm-member\">
                            <figure class=\"text-center effect-bubba mb-4\">
                                <img src=\"{{ asset ('img/people-05.jpg')}}\" alt=\"Image\" class=\"img-fluid\">
                                <figcaption>
                                    <div class=\"tm-member-social\">
                                        <a href=\"https://facebook.com\" class=\"tm-member-social-link\"><i class=\"fab fa-facebook tm-member-social-icon\"></i></a>
                                        <a href=\"https://twitter.com\" class=\"tm-member-social-link\"><i class=\"fab fa-twitter tm-member-social-icon\"></i></a>
                                        <a href=\"https://youtube.com\" class=\"tm-member-social-link\"><i class=\"fab fa-youtube tm-member-social-icon\"></i></a>
                                        <a href=\"https://instagram.com\" class=\"tm-member-social-link\"><i class=\"fab fa-instagram tm-member-social-icon\"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class=\"text-center\">
                                <span class=\"d-block mb-1 tm-name\">Rosy Bush</span>
                                <span class=\"d-block tm-text-primary\">Financial Strategist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
        </div> <!-- container-fluid -->
    </div> <!-- tm-container -->
 
</body>

{% endblock %}", "about/about.html.twig", "C:\\Frameworks-Symfony\\RealDynamic\\templates\\about\\about.html.twig");
    }
}
