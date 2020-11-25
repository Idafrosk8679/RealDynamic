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

/* contact.html */
class __TwigTemplate_8a8118de7103eb6f6ece78b908bc95a81928abd93589fc06f189109588cd7a02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Real Dynamic</title>
    <link href=\"https://fonts.googleapis.com/css?family=Lato:400\" rel=\"stylesheet\" />
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" />
    <link href=\"fontawesome/css/all.min.css\" rel=\"stylesheet\" />
    <link href=\"slick/slick.css\" rel='stylesheet' />
    <link href=\"slick/slick-theme.css\" rel='stylesheet' />
    <link href=\"css/templatemo-real-dynamic.css\" rel=\"stylesheet\" />
<!--

TemplateMo 547 Real Dynamic

https://templatemo.com/tm-547-real-dynamic

-->
</head>

<body>
    <div class=\"tm-container\">
        <div class=\"tm-site-header\"></div> <!-- tm-site-header -->
        <div class=\"tm-site-header-overlay\">
            <div class=\"tm-header-stripe ml-auto\"></div>
            <div class=\"tm-header-stripe tm-header-stripe-short ml-auto\"></div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-4 tm-site-header-left\">
                        <h1 class=\"text-uppercase tm-site-name\">Real Dynamic</h1>
                        <p class=\"text-white mb-0 tm-site-desc\">New Fluid HTML Template</p>
                    </div>
                    <div class=\"col-lg-8 tm-site-header-right\">
                        <!--Navbar-->
                        <nav class=\"navbar navbar-expand-lg\">
                            <!-- Collapse button -->
                            <button class=\"navbar-toggler toggler-example\" type=\"button\" data-toggle=\"collapse\"
                                data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\"
                                aria-label=\"Toggle navigation\"><span class=\"dark-blue-text\"><i class=\"fas fa-bars text-white\"></i></span></button>
                            <!-- Collapsible content -->
                            <div class=\"collapse navbar-collapse tm-nav\" id=\"navbarNav\">
                                <!-- Links -->
                                <ul class=\"navbar-nav ml-auto\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"index.html\">Home</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"about.html\">About</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"gallery.html\">Gallery</a>
                                    </li>
                                    <li class=\"nav-item active\">
                                        <a class=\"nav-link tm-nav-link\" href=\"#\">Contact <span class=\"sr-only\">(current)</span></a>
                                    </li>
                                </ul>
                                <!-- Links -->
                            </div>
                            <!-- Collapsible content -->
                        </nav>
                        <!--/.Navbar-->
                    </div> <!-- col -->
                </div> <!-- row -->
            </div> <!-- container fluid -->
        </div> <!-- tm-site-header-overlay -->
        <div class=\"tm-header-stripe w-100\"></div>
    </div>
    <div class=\"tm-container\">
        <div class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"img/real-dynamic-banner-04.jpg\">
        </div>
    </div>

    <div class=\"tm-container bg-white\">
        <div class=\"tm-header-stripe w-100\"></div>
        <div class=\"container-fluid\">
            <!--Intro-->
            <section class=\"row tm-mb-1\">
                <div class=\"col-12 text-center mx-auto tm-about-box\">
                    <h2 class=\"tm-text-primary tm-my-1 tm-mb-5 tm-intro-text\">Contact the Dynamic</h2>
                    <p>Nam eget finibus eros, at tristique turpis. Vivamus suscipit ipsum eget ex rhoncus, vitae venenatis sem auctor. Integer aliquet tellus vitae nisi sodales, in molestie odio convallis. Donec finibus, nisi sit amet pretium vestibulum.</p>
                </div>
            </section>

            <div class=\"row tm-mb-10 tm-contact-row mx-auto\">
                <div class=\"col-lg-6 tm-contact-left\">
                    <div class=\"tm-double-border-1 tm-border-gray\">
                        <div class=\"tm-double-border-2 tm-border-gray tm-box-pad\">
                            <h3 class=\"tm-text-primary tm-mb-5\">Our Location</h3>
                            <address class=\"tm-mb-9\"> 120-240 Donec euismod, lectus ut pharetra tempor, magna risus venenatis sem, et consequat massa 10980</address>
                            <div class=\"mapouter\">
                                <div class=\"gmap_canvas\">
                                    <iframe width=\"100%\" height=\"440\" id=\"gmap_canvas\"
                                        src=\"https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed\"
                                        frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 ml-auto tm-contact-right\">
                    <div class=\"tm-contact-form-wrap\">
                        <h3 class=\"tm-text-primary tm-mb-6\">Send Us a Message</h3>
                        <form id=\"contact-form\" action=\"\" method=\"POST\" class=\"tm-contact-form\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"name\" class=\"form-control rounded-0\" placeholder=\"Full Name\" required=\"\" />
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" name=\"email\" class=\"form-control rounded-0\" placeholder=\"Email\" required=\"\" />
                            </div>
                            <div class=\"form-group\">
                                <select class=\"form-control\" id=\"contact-select\" name=\"inquiry\">
                                    <option value=\"-\">Please Select</option>
                                    <option value=\"purchase\">Purchase Inquiry</option>
                                    <option value=\"technical\">Technical Assistance</option>
                                    <option value=\"billing\">Billing Issues</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <textarea rows=\"8\" name=\"message\" class=\"form-control rounded-0\" placeholder=\"Message...\" required=\"\"></textarea>
                            </div>

                            <div class=\"form-group mb-0\">
                                <button type=\"submit\" class=\"btn btn-3 rounded-0 d-block ml-auto\">Send It Now</button>
                            </div>
                        </form>
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
                            <p class=\"tm-mb-4\">Cras imperdiet, dolor posuere dignissim dapibus, tortor arcu pellentesque orci, et mattis libero justo semper neque.Vivamus vitae condimentum. Elit nec tempus suscipit, enim nibh aliquam eros, sit amet iaculis nibh nibh at dolor.</p>
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
                            <p class=\"tm-mb-4\">Tortor arcu pellentesque orci, et mattis libero justo semper neque. Vestibulum condimentum, elit nec tempus suscipit, enim nibh aliquam eros, sit amet iaculis nibh nibh at dolor. Cras imperdiet, dolor posuere dignissim dapibus.</p>
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
                <div class=\"col-lg-3 col-sm-6 mb-lg-0 mb-5\">
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
                <div class=\"col-lg-3 col-sm-6 mb-lg-0 mb-5\">
                    <h3 class=\"tm-text-primary tm-mb-4\">Our Pages</h3>
                    <nav class=\"tm-nav-secondary\">
                        <ul>
                            <li><a href=\"#\">Background</a></li>
                            <li><a href=\"#\">Our Mission</a></li>
                            <li><a href=\"#\">Pricing</a></li>
                            <li><a href=\"#\">Features</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3 col-sm-6 mb-lg-0 mb-5\">
                    <h3 class=\"tm-text-primary tm-mb-4\">Main Menu</h3>
                    <nav class=\"tm-nav-secondary\">
                        <ul>
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Gallery</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3 col-sm-6 mb-lg-0 mb-5\">
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
            <footer class=\"row\">
                <p class=\"mb-0 w-100 text-center col-12\">
                \tCompany &copy; 2020 Company Name 
                
                \t- Real Dynamic by <a rel=\"nofollow\" href=\"https://templatemo.com\" class=\"tm-text-link\">TemplateMo</a>
                </p>
            </footer>
        </div> <!-- container-fluid -->
    </div> <!-- tm-container -->

    <script src=\"js/jquery-3.4.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/parallax.min.js\"></script>
    <script src=\"slick/slick.min.js\"></script>
    <script src=\"js/tooplate-script.js\"></script>
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
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Real Dynamic</title>
    <link href=\"https://fonts.googleapis.com/css?family=Lato:400\" rel=\"stylesheet\" />
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" />
    <link href=\"fontawesome/css/all.min.css\" rel=\"stylesheet\" />
    <link href=\"slick/slick.css\" rel='stylesheet' />
    <link href=\"slick/slick-theme.css\" rel='stylesheet' />
    <link href=\"css/templatemo-real-dynamic.css\" rel=\"stylesheet\" />
<!--

TemplateMo 547 Real Dynamic

https://templatemo.com/tm-547-real-dynamic

-->
</head>

<body>
    <div class=\"tm-container\">
        <div class=\"tm-site-header\"></div> <!-- tm-site-header -->
        <div class=\"tm-site-header-overlay\">
            <div class=\"tm-header-stripe ml-auto\"></div>
            <div class=\"tm-header-stripe tm-header-stripe-short ml-auto\"></div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-4 tm-site-header-left\">
                        <h1 class=\"text-uppercase tm-site-name\">Real Dynamic</h1>
                        <p class=\"text-white mb-0 tm-site-desc\">New Fluid HTML Template</p>
                    </div>
                    <div class=\"col-lg-8 tm-site-header-right\">
                        <!--Navbar-->
                        <nav class=\"navbar navbar-expand-lg\">
                            <!-- Collapse button -->
                            <button class=\"navbar-toggler toggler-example\" type=\"button\" data-toggle=\"collapse\"
                                data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\"
                                aria-label=\"Toggle navigation\"><span class=\"dark-blue-text\"><i class=\"fas fa-bars text-white\"></i></span></button>
                            <!-- Collapsible content -->
                            <div class=\"collapse navbar-collapse tm-nav\" id=\"navbarNav\">
                                <!-- Links -->
                                <ul class=\"navbar-nav ml-auto\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"index.html\">Home</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"about.html\">About</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"gallery.html\">Gallery</a>
                                    </li>
                                    <li class=\"nav-item active\">
                                        <a class=\"nav-link tm-nav-link\" href=\"#\">Contact <span class=\"sr-only\">(current)</span></a>
                                    </li>
                                </ul>
                                <!-- Links -->
                            </div>
                            <!-- Collapsible content -->
                        </nav>
                        <!--/.Navbar-->
                    </div> <!-- col -->
                </div> <!-- row -->
            </div> <!-- container fluid -->
        </div> <!-- tm-site-header-overlay -->
        <div class=\"tm-header-stripe w-100\"></div>
    </div>
    <div class=\"tm-container\">
        <div class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"img/real-dynamic-banner-04.jpg\">
        </div>
    </div>

    <div class=\"tm-container bg-white\">
        <div class=\"tm-header-stripe w-100\"></div>
        <div class=\"container-fluid\">
            <!--Intro-->
            <section class=\"row tm-mb-1\">
                <div class=\"col-12 text-center mx-auto tm-about-box\">
                    <h2 class=\"tm-text-primary tm-my-1 tm-mb-5 tm-intro-text\">Contact the Dynamic</h2>
                    <p>Nam eget finibus eros, at tristique turpis. Vivamus suscipit ipsum eget ex rhoncus, vitae venenatis sem auctor. Integer aliquet tellus vitae nisi sodales, in molestie odio convallis. Donec finibus, nisi sit amet pretium vestibulum.</p>
                </div>
            </section>

            <div class=\"row tm-mb-10 tm-contact-row mx-auto\">
                <div class=\"col-lg-6 tm-contact-left\">
                    <div class=\"tm-double-border-1 tm-border-gray\">
                        <div class=\"tm-double-border-2 tm-border-gray tm-box-pad\">
                            <h3 class=\"tm-text-primary tm-mb-5\">Our Location</h3>
                            <address class=\"tm-mb-9\"> 120-240 Donec euismod, lectus ut pharetra tempor, magna risus venenatis sem, et consequat massa 10980</address>
                            <div class=\"mapouter\">
                                <div class=\"gmap_canvas\">
                                    <iframe width=\"100%\" height=\"440\" id=\"gmap_canvas\"
                                        src=\"https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed\"
                                        frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 ml-auto tm-contact-right\">
                    <div class=\"tm-contact-form-wrap\">
                        <h3 class=\"tm-text-primary tm-mb-6\">Send Us a Message</h3>
                        <form id=\"contact-form\" action=\"\" method=\"POST\" class=\"tm-contact-form\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"name\" class=\"form-control rounded-0\" placeholder=\"Full Name\" required=\"\" />
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" name=\"email\" class=\"form-control rounded-0\" placeholder=\"Email\" required=\"\" />
                            </div>
                            <div class=\"form-group\">
                                <select class=\"form-control\" id=\"contact-select\" name=\"inquiry\">
                                    <option value=\"-\">Please Select</option>
                                    <option value=\"purchase\">Purchase Inquiry</option>
                                    <option value=\"technical\">Technical Assistance</option>
                                    <option value=\"billing\">Billing Issues</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <textarea rows=\"8\" name=\"message\" class=\"form-control rounded-0\" placeholder=\"Message...\" required=\"\"></textarea>
                            </div>

                            <div class=\"form-group mb-0\">
                                <button type=\"submit\" class=\"btn btn-3 rounded-0 d-block ml-auto\">Send It Now</button>
                            </div>
                        </form>
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
                            <p class=\"tm-mb-4\">Cras imperdiet, dolor posuere dignissim dapibus, tortor arcu pellentesque orci, et mattis libero justo semper neque.Vivamus vitae condimentum. Elit nec tempus suscipit, enim nibh aliquam eros, sit amet iaculis nibh nibh at dolor.</p>
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
                            <p class=\"tm-mb-4\">Tortor arcu pellentesque orci, et mattis libero justo semper neque. Vestibulum condimentum, elit nec tempus suscipit, enim nibh aliquam eros, sit amet iaculis nibh nibh at dolor. Cras imperdiet, dolor posuere dignissim dapibus.</p>
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
                <div class=\"col-lg-3 col-sm-6 mb-lg-0 mb-5\">
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
                <div class=\"col-lg-3 col-sm-6 mb-lg-0 mb-5\">
                    <h3 class=\"tm-text-primary tm-mb-4\">Our Pages</h3>
                    <nav class=\"tm-nav-secondary\">
                        <ul>
                            <li><a href=\"#\">Background</a></li>
                            <li><a href=\"#\">Our Mission</a></li>
                            <li><a href=\"#\">Pricing</a></li>
                            <li><a href=\"#\">Features</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3 col-sm-6 mb-lg-0 mb-5\">
                    <h3 class=\"tm-text-primary tm-mb-4\">Main Menu</h3>
                    <nav class=\"tm-nav-secondary\">
                        <ul>
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Gallery</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3 col-sm-6 mb-lg-0 mb-5\">
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
            <footer class=\"row\">
                <p class=\"mb-0 w-100 text-center col-12\">
                \tCompany &copy; 2020 Company Name 
                
                \t- Real Dynamic by <a rel=\"nofollow\" href=\"https://templatemo.com\" class=\"tm-text-link\">TemplateMo</a>
                </p>
            </footer>
        </div> <!-- container-fluid -->
    </div> <!-- tm-container -->

    <script src=\"js/jquery-3.4.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/parallax.min.js\"></script>
    <script src=\"slick/slick.min.js\"></script>
    <script src=\"js/tooplate-script.js\"></script>
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
</body>
</html>", "contact.html", "C:\\Frameworks-Symfony\\RealDynamic\\templates\\contact.html");
    }
}
