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

/* gallery.html */
class __TwigTemplate_9a92105c431d3414f1f01b96daf0b3d51e54064b1b7f69e9910a42a63db852f5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallery.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallery.html"));

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
    <link href=\"css/magnific-popup.min.css\" rel=\"stylesheet\" />
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
                                    <li class=\"nav-item active\">
                                        <a class=\"nav-link tm-nav-link\" href=\"#\">Gallery <span class=\"sr-only\">(current)</span></a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"contact.html\">Contact</a>
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
        <div class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"img/real-dynamic-banner-03.jpg\"></div>
    </div>

    <div class=\"tm-container bg-white\">
        <div class=\"tm-header-stripe w-100\"></div>
        <div class=\"container-fluid\">
            <div class=\"row tm-mb-1\">
                <div class=\"col-12\">
                    <h2 class=\"tm-text-primary text-center tm-my-1 tm-mb-5 tm-intro-text\">Multiple Image Gallery</h2>
                </div>
                <div class=\"col-12 tm-page-cols-container\">
                    <div class=\"tm-page-col-left\">
                        <ul class=\"tabs clearfix filters-button-group\">
                            <li>
                                <a href=\"#\" class=\"active tm-category-link\" data-filter=\".category-1\">
                                    <div class=\"tm-thumbnails\">
                                        <img src=\"img/gallery/gallery-item-01.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-02.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-03.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-04.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                    </div>
                                    <span class=\"tm-category-label\">Category One</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"tm-category-link\" data-filter=\".category-2\">
                                    <div class=\"tm-thumbnails\">
                                        <img src=\"img/gallery/gallery-item-05.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-02.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-09.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-11.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                    </div>
                                    <span class=\"tm-category-label\">Second Category</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"tm-category-link\" data-filter=\".category-3\">
                                    <div class=\"tm-thumbnails\">
                                        <img src=\"img/gallery/gallery-item-10.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-07.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-06.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-04.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                    </div>
                                    <span class=\"tm-category-label\">Category Three</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"tm-page-col-right\">
                        <div class=\"tm-gallery\" id=\"tmGallery\">
                            <div class=\"tm-gallery-item category-1 category-3\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-01.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>One</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-01.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1 category-2\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-02.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Two</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-02.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-03.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Three</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-03.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1 category-3\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-04.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Four</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-04.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1 category-2\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-05.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Five</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-05.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1 category-3\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-06.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Six</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-06.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1 category-3\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-07.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Seven</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-07.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1 category-3\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-08.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Eight</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-08.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1 category-2\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-09.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Nine</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-09.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-2 category-3\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-10.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Nine</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-10.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-2\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-11.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Eleven</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-11.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-2\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-12.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Twelve</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-12.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
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
                    Company &copy; 2020 Company Name 
                    
                    - Real Dynamic by <a rel=\"nofollow\" href=\"https://templatemo.com\" class=\"tm-text-link\">TemplateMo</a>
                </p>
            </footer>
        </div> <!-- container-fluid -->
    </div> <!-- tm-container -->

    <script src=\"js/jquery-3.4.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/parallax.min.js\"></script>
    <script src=\"js/imagesloaded.pkgd.min.js\"></script>
    <script src=\"js/isotope.pkgd.min.js\"></script>
    <script src=\"js/jquery.magnific-popup.min.js\"></script>
    <script src=\"slick/slick.min.js\"></script>
    <script src=\"js/tooplate-script.js\"></script>
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
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "gallery.html";
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
    <link href=\"css/magnific-popup.min.css\" rel=\"stylesheet\" />
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
                                    <li class=\"nav-item active\">
                                        <a class=\"nav-link tm-nav-link\" href=\"#\">Gallery <span class=\"sr-only\">(current)</span></a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link tm-nav-link\" href=\"contact.html\">Contact</a>
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
        <div class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"img/real-dynamic-banner-03.jpg\"></div>
    </div>

    <div class=\"tm-container bg-white\">
        <div class=\"tm-header-stripe w-100\"></div>
        <div class=\"container-fluid\">
            <div class=\"row tm-mb-1\">
                <div class=\"col-12\">
                    <h2 class=\"tm-text-primary text-center tm-my-1 tm-mb-5 tm-intro-text\">Multiple Image Gallery</h2>
                </div>
                <div class=\"col-12 tm-page-cols-container\">
                    <div class=\"tm-page-col-left\">
                        <ul class=\"tabs clearfix filters-button-group\">
                            <li>
                                <a href=\"#\" class=\"active tm-category-link\" data-filter=\".category-1\">
                                    <div class=\"tm-thumbnails\">
                                        <img src=\"img/gallery/gallery-item-01.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-02.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-03.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-04.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                    </div>
                                    <span class=\"tm-category-label\">Category One</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"tm-category-link\" data-filter=\".category-2\">
                                    <div class=\"tm-thumbnails\">
                                        <img src=\"img/gallery/gallery-item-05.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-02.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-09.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-11.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                    </div>
                                    <span class=\"tm-category-label\">Second Category</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"tm-category-link\" data-filter=\".category-3\">
                                    <div class=\"tm-thumbnails\">
                                        <img src=\"img/gallery/gallery-item-10.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-07.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-06.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                        <img src=\"img/gallery/gallery-item-04.jpg\" alt=\"Thumbnail\" class=\"tm-thumbnail\">
                                    </div>
                                    <span class=\"tm-category-label\">Category Three</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"tm-page-col-right\">
                        <div class=\"tm-gallery\" id=\"tmGallery\">
                            <div class=\"tm-gallery-item category-1 category-3\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-01.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>One</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-01.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1 category-2\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-02.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Two</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-02.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-03.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Three</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-03.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1 category-3\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-04.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Four</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-04.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1 category-2\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-05.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Five</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-05.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1 category-3\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-06.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Six</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-06.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1 category-3\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-07.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Seven</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-07.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1 category-3\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-08.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Eight</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-08.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-1 category-2\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-09.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Nine</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-09.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-2 category-3\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-10.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Nine</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-10.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-2\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-11.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Eleven</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-11.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class=\"tm-gallery-item category-2\">
                                <figure class=\"effect-bubba\">
                                    <img src=\"img/gallery/gallery-item-12.jpg\" alt=\"Gallery item\" class=\"img-fluid\" />
                                    <figcaption>
                                        <h2>Image <span>Twelve</span></h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href=\"img/gallery/gallery-item-12.jpg\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
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
                    Company &copy; 2020 Company Name 
                    
                    - Real Dynamic by <a rel=\"nofollow\" href=\"https://templatemo.com\" class=\"tm-text-link\">TemplateMo</a>
                </p>
            </footer>
        </div> <!-- container-fluid -->
    </div> <!-- tm-container -->

    <script src=\"js/jquery-3.4.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/parallax.min.js\"></script>
    <script src=\"js/imagesloaded.pkgd.min.js\"></script>
    <script src=\"js/isotope.pkgd.min.js\"></script>
    <script src=\"js/jquery.magnific-popup.min.js\"></script>
    <script src=\"slick/slick.min.js\"></script>
    <script src=\"js/tooplate-script.js\"></script>
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
</body>

</html>", "gallery.html", "C:\\Frameworks-Symfony\\RealDynamic\\templates\\gallery.html");
    }
}
