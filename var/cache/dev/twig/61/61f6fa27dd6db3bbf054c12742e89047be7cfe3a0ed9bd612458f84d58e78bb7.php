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

/* index/index.html.twig */
class __TwigTemplate_f37abbce4e7a65f6868b86196536fe79cf9451d5334201ccb0f3eb2853838401 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "index/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("real-dynamic-banner-01.jpg", "img"), "html", null, true);
        echo "\">
        </div>
    </div>

    <div class=\"tm-container bg-white\">
        <div class=\"tm-header-stripe w-100\"></div>
        <div class=\"container-fluid\">
            <!--Intro-->
            <section class=\"row tm-mb-1\">
                <h2 class=\"col-12 text-center tm-text-primary tm-my-1 tm-intro-text\">Introducing the real dynamic</h2>
                <div class=\"col-lg-4 text-center\">
                    <div class=\"tm-box-1\">
                        <i class=\"fas fa-truck-moving fa-4x tm-icon-1\"></i>
                        <h3 class=\"tm-h3 tm-text-primary\">Real Dynamic HTML Template</h3>
                        <p>This is a responsive 100% fluid-width layout that you can use for your business or commercial websites. Just go to TemplateMo and download the template now.</p>
                    </div>
                </div>
                <div class=\"col-lg-4 text-center\">
                    <div class=\"tm-box-1\">
                        <i class=\"fas fa-box-open fa-4x tm-icon-1\"></i>
                        <h3 class=\"tm-h3 tm-text-primary\">New Marketing Strategies</h3>
                        <p>Please do not redistribute our template on any website that provides downloadable template ZIP files. 
                        <a rel=\"nofollow\" href=\"https://templatemo.com/contact\" target=\"_parent\">Contact us</a> for more info.</p>
                    </div>
                </div>
                <div class=\"col-lg-4 text-center\">
                    <div class=\"tm-box-1\">
                        <i class=\"fas fa-people-carry fa-4x tm-icon-1\"></i>
                        <h3 class=\"tm-h3 tm-text-primary\">Develop Futuristic Ideas</h3>
                        <p>Morbi tristique metus mauris, vitae tempor elit molestie egestas. Integer id tristique leo. Vivamus mattis lobortis accumsan.</p>
                    </div>
                </div>
            </section>

            <!-- Services -->
            <div class=\"row tm-mb-1\">
                <div class=\"col-lg-4\">
                    <div class=\"tm-bg-gray tm-box-2\">
                        <i class=\"fas fa-3x fa-sign tm-mb-3\"></i>
                        <h3 class=\"tm-text-primary tm-h3\">What can we do for you?</h3>
                        <p class=\"tm-mb-4\">Pellentesque sodales accumsan sem, vel efficitur arcu blandit sed. In feugiat dolor id sem interdum dignissim.</p>
                        <ul class=\"tm-mb-4\">
                            <li>.01 Fusce aliquam aliquam</li>
                            <li>.02 Bibendum quam elementum</li>
                            <li>.03 Nam dapibus diam</li>
                            <li>.04 Lobortis ligula convallis</li>
                            <li>.05 Etiam interdum erat</li>
                        </ul>
                        <a href=\"#\" class=\"d-block text-right btn-pad btn-text\">More Details...</a>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <i class=\"fas fa-mobile-alt fa-5x tm-icon-2 d-block text-center\"></i>
                    <div class=\"tm-bg-gray tm-box-2\">
                        <h3 class=\"tm-text-primary tm-h3\">Mobile friendly Template</h3>
                        <p class=\"tm-mb-5\">Aenean vel sollicitudin sem. Nullam vulputate, sem ut efficitur accumsan, nisl ipsum dictum velit, sed dictum  lorem nibh eu nisl. Nulla nulla tellus, rutrum vitae libero vitae.</p>
                        <div class=\"text-center\">
                            <a href=\"#\" class=\"btn btn-primary rounded-0\">Read More</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <i class=\"fas fa-sms fa-5x tm-icon-2 d-block text-center\"></i>
                    <div class=\"tm-bg-gray tm-box-2\">
                        <h3 class=\"tm-text-primary tm-h3\">Your Flexible Workplace</h3>
                        <p class=\"tm-mb-5\">Mauris fermentum semper varius. Pellentesque semper diam a orci lobortis sagittis. Integer sapien lorem, elementum tempor commodo et, scelerisque eget augue.</p>
                        <div class=\"text-center\"><a href=\"#\" class=\"btn btn-secondary rounded-0\">Read More</a></div>
                    </div>
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
                            <p class=\"tm-mb-4\">Tortor arcu pellentesque orci, et mattis libero justo semper neque. Vestibulum condimentum, elit nec tempus  suscipit, enim nibh aliquam eros, sit amet iaculis nibh nibh at dolor. Cras imperdiet, dolor posuere dignissim dapibus. </p>
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

        </div> <!-- container-fluid -->
    </div> <!-- tm-container -->

</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 9,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}


{% block section %}

<body>
    
    <div class=\"tm-container\">
        <div class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset ('real-dynamic-banner-01.jpg', 'img') }}\">
        </div>
    </div>

    <div class=\"tm-container bg-white\">
        <div class=\"tm-header-stripe w-100\"></div>
        <div class=\"container-fluid\">
            <!--Intro-->
            <section class=\"row tm-mb-1\">
                <h2 class=\"col-12 text-center tm-text-primary tm-my-1 tm-intro-text\">Introducing the real dynamic</h2>
                <div class=\"col-lg-4 text-center\">
                    <div class=\"tm-box-1\">
                        <i class=\"fas fa-truck-moving fa-4x tm-icon-1\"></i>
                        <h3 class=\"tm-h3 tm-text-primary\">Real Dynamic HTML Template</h3>
                        <p>This is a responsive 100% fluid-width layout that you can use for your business or commercial websites. Just go to TemplateMo and download the template now.</p>
                    </div>
                </div>
                <div class=\"col-lg-4 text-center\">
                    <div class=\"tm-box-1\">
                        <i class=\"fas fa-box-open fa-4x tm-icon-1\"></i>
                        <h3 class=\"tm-h3 tm-text-primary\">New Marketing Strategies</h3>
                        <p>Please do not redistribute our template on any website that provides downloadable template ZIP files. 
                        <a rel=\"nofollow\" href=\"https://templatemo.com/contact\" target=\"_parent\">Contact us</a> for more info.</p>
                    </div>
                </div>
                <div class=\"col-lg-4 text-center\">
                    <div class=\"tm-box-1\">
                        <i class=\"fas fa-people-carry fa-4x tm-icon-1\"></i>
                        <h3 class=\"tm-h3 tm-text-primary\">Develop Futuristic Ideas</h3>
                        <p>Morbi tristique metus mauris, vitae tempor elit molestie egestas. Integer id tristique leo. Vivamus mattis lobortis accumsan.</p>
                    </div>
                </div>
            </section>

            <!-- Services -->
            <div class=\"row tm-mb-1\">
                <div class=\"col-lg-4\">
                    <div class=\"tm-bg-gray tm-box-2\">
                        <i class=\"fas fa-3x fa-sign tm-mb-3\"></i>
                        <h3 class=\"tm-text-primary tm-h3\">What can we do for you?</h3>
                        <p class=\"tm-mb-4\">Pellentesque sodales accumsan sem, vel efficitur arcu blandit sed. In feugiat dolor id sem interdum dignissim.</p>
                        <ul class=\"tm-mb-4\">
                            <li>.01 Fusce aliquam aliquam</li>
                            <li>.02 Bibendum quam elementum</li>
                            <li>.03 Nam dapibus diam</li>
                            <li>.04 Lobortis ligula convallis</li>
                            <li>.05 Etiam interdum erat</li>
                        </ul>
                        <a href=\"#\" class=\"d-block text-right btn-pad btn-text\">More Details...</a>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <i class=\"fas fa-mobile-alt fa-5x tm-icon-2 d-block text-center\"></i>
                    <div class=\"tm-bg-gray tm-box-2\">
                        <h3 class=\"tm-text-primary tm-h3\">Mobile friendly Template</h3>
                        <p class=\"tm-mb-5\">Aenean vel sollicitudin sem. Nullam vulputate, sem ut efficitur accumsan, nisl ipsum dictum velit, sed dictum  lorem nibh eu nisl. Nulla nulla tellus, rutrum vitae libero vitae.</p>
                        <div class=\"text-center\">
                            <a href=\"#\" class=\"btn btn-primary rounded-0\">Read More</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <i class=\"fas fa-sms fa-5x tm-icon-2 d-block text-center\"></i>
                    <div class=\"tm-bg-gray tm-box-2\">
                        <h3 class=\"tm-text-primary tm-h3\">Your Flexible Workplace</h3>
                        <p class=\"tm-mb-5\">Mauris fermentum semper varius. Pellentesque semper diam a orci lobortis sagittis. Integer sapien lorem, elementum tempor commodo et, scelerisque eget augue.</p>
                        <div class=\"text-center\"><a href=\"#\" class=\"btn btn-secondary rounded-0\">Read More</a></div>
                    </div>
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
                            <p class=\"tm-mb-4\">Tortor arcu pellentesque orci, et mattis libero justo semper neque. Vestibulum condimentum, elit nec tempus  suscipit, enim nibh aliquam eros, sit amet iaculis nibh nibh at dolor. Cras imperdiet, dolor posuere dignissim dapibus. </p>
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

        </div> <!-- container-fluid -->
    </div> <!-- tm-container -->

</body>

{% endblock %}", "index/index.html.twig", "C:\\Frameworks-Symfony\\RealDynamic\\templates\\index\\index.html.twig");
    }
}
