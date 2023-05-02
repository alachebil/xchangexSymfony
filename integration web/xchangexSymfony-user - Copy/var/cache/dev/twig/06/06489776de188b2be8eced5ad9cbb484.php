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

/* front.html.twig */
class __TwigTemplate_326028b42a3f828a2b84f85170506f5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset=\"utf-8\" />
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
      <!-- Mobile Metas -->
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
      <!-- Site Metas -->
      <meta name=\"keywords\" content=\"\" />
      <meta name=\"description\" content=\"\" />
      <meta name=\"author\" content=\"\" />
      <link rel=\"shortcut icon\" href=\"images/favicon.png\" type=\"\">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/css/bootstrap.css"), "html", null, true);
        echo "\" />
      <!-- font awesome style -->
      <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <!-- Custom styles for this template -->
      <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <!-- responsive style -->
      <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
   </head>
   <body>
      <div class=\"hero_area\">
         <!-- header section strats -->
         <header class=\"header_section\">
            <div class=\"container\">
               <nav class=\"navbar navbar-expand-lg custom_nav-container \">
                  <a class=\"navbar-brand\" href=\"index.html\"><img width=\"250\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/images/ex.png"), "html", null, true);
        echo "\" alt=\"#\" /></a>
                  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"\"> </span>
                  </button>
                  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                     <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                           <a class=\"nav-link\" href=\"index.html\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                       <li class=\"nav-item dropdown\">
                           <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\"> <span class=\"nav-label\">Pages <span class=\"caret\"></span></a>
                           <ul class=\"dropdown-menu\">
                              <li><a href=\"about.html\">About</a></li>
                              <li><a href=\"testimonial.html\">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class=\"nav-item\">
                           <a class=\"nav-link\" href=\"product.html\">Products</a>
                        </li>
                        <li class=\"nav-item\">
                           <a class=\"nav-link\" href=\"blog_list.html\">Blog</a>
                        </li>
                        <li class=\"nav-item\">
                           <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                        </li>
                        <li class=\"nav-item\">
                        </li>
                        <form class=\"form-inline\">
                           <button class=\"btn  my-2 my-sm-0 nav_search-btn\" type=\"submit\">
                           <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                           </button>
                        </form>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
         <!-- slider section -->
         <section class=\"slider_section \">
            <div class=\"slider_bg_box\">
               <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/images/slider-bg.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div id=\"customCarousel1\" class=\"carousel slide\" data-ride=\"carousel\">
               <div class=\"carousel-inner\">
                  <div class=\"carousel-item active\">
                     <div class=\"container \">
                        <div class=\"row\">
                           <div class=\"col-md-7 col-lg-6 \">
                              <div class=\"detail-box\">
                                 <h1>
                                    <span>
                                    Sale 20% Off
                                    </span>
                                    <br>
                                    On Everything
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class=\"btn-box\">
                                    <a href=\"\" class=\"btn1\">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class=\"carousel-item \">
                     <div class=\"container \">
                        <div class=\"row\">
                           <div class=\"col-md-7 col-lg-6 \">
                              <div class=\"detail-box\">
                                 <h1>
                                    <span>
                                    Sale 20% Off
                                    </span>
                                    <br>
                                    On Everything
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class=\"btn-box\">
                                    <a href=\"\" class=\"btn1\">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class=\"carousel-item\">
                     <div class=\"container \">
                        <div class=\"row\">
                           <div class=\"col-md-7 col-lg-6 \">
                              <div class=\"detail-box\">
                                 <h1>
                                    <span>
                                    Sale 20% Off
                                    </span>
                                    <br>
                                    On Everything
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class=\"btn-box\">
                                    <a href=\"\" class=\"btn1\">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"container\">
                  <ol class=\"carousel-indicators\">
                     <li data-target=\"#customCarousel1\" data-slide-to=\"0\" class=\"active\"></li>
                     <li data-target=\"#customCarousel1\" data-slide-to=\"1\"></li>
                     <li data-target=\"#customCarousel1\" data-slide-to=\"2\"></li>
                  </ol>
               </div>
            </div>
         </section>
         <!-- end slider section -->
      </div>
      ";
        // line 162
        $this->displayBlock('body', $context, $blocks);
        // line 164
        echo "      
     
      <!-- footer start -->
      <footer>
         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-md-4\">
                   <div class=\"full\">
                      <div class=\"logo_footer\">
                        <a href=\"#\"><img width=\"210\" src=\"images/logo.png\" alt=\"#\" /></a>
                      </div>
                      <div class=\"information_f\">
                        <p><strong>ADDRESS:</strong> 28 White tower, Street Name New York City, USA</p>
                        <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
                        <p><strong>EMAIL:</strong> yourmain@gmail.com</p>
                      </div>
                   </div>
               </div>
               <div class=\"col-md-8\">
                  <div class=\"row\">
                  <div class=\"col-md-7\">
                     <div class=\"row\">
                        <div class=\"col-md-6\">
                     <div class=\"widget_menu\">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href=\"#\">Home</a></li>
                           <li><a href=\"#\">About</a></li>
                           <li><a href=\"#\">Services</a></li>
                           <li><a href=\"#\">Testimonial</a></li>
                           <li><a href=\"#\">Blog</a></li>
                           <li><a href=\"#\">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class=\"col-md-6\">
                     <div class=\"widget_menu\">
                        <h3>Account</h3>
                        <ul>
                           <li><a href=\"#\">Account</a></li>
                           <li><a href=\"#\">Checkout</a></li>
                           <li><a href=\"#\">Login</a></li>
                           <li><a href=\"#\">Register</a></li>
                           <li><a href=\"#\">Shopping</a></li>
                           <li><a href=\"#\">Widget</a></li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class=\"col-md-5\">
                     <div class=\"widget_menu\">
                        <h3>Newsletter</h3>
                        <div class=\"information_f\">
                          <p>Subscribe by our newsletter and get update protidin.</p>
                        </div>
                        <div class=\"form_sub\">
                           <form>
                              <fieldset>
                                 <div class=\"field\">
                                    <input type=\"email\" placeholder=\"Enter Your Mail\" name=\"email\" />
                                    <input type=\"submit\" value=\"Subscribe\" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer end -->
      <div class=\"cpy_\">
         <p class=\"mx-auto\">© 2021 All Rights Reserved By <a href=\"https://html.design/\">Free Html Templates</a><br>
         
            Distributed By <a href=\"https://themewagon.com/\" target=\"_blank\">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
      <!-- popper js -->
      <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/popper.min.js"), "html", null, true);
        echo "\"></script>
      <!-- bootstrap js -->
      <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
      <!-- custom js -->
      <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/custom.js"), "html", null, true);
        echo "\"></script>
      ";
        // line 254
        echo "<script type=\"text/javascript\" src=\"https://platform-api.sharethis.com/js/sharethis.js#property=64065d7b567fbf001a2d5d17&product=inline-share-buttons&source=platform\" async=\"async\"></script>
  ";
        // line 256
        echo "   </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 162
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 163
        echo "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 163,  344 => 162,  333 => 256,  330 => 254,  326 => 252,  321 => 250,  316 => 248,  311 => 246,  227 => 164,  225 => 162,  131 => 71,  87 => 30,  76 => 22,  71 => 20,  66 => 18,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset=\"utf-8\" />
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
      <!-- Mobile Metas -->
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
      <!-- Site Metas -->
      <meta name=\"keywords\" content=\"\" />
      <meta name=\"description\" content=\"\" />
      <meta name=\"author\" content=\"\" />
      <link rel=\"shortcut icon\" href=\"images/favicon.png\" type=\"\">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assettF/css/bootstrap.css')}}\" />
      <!-- font awesome style -->
      <link href=\"{{asset('assettF/css/font-awesome.min.css')}}\" rel=\"stylesheet\" />
      <!-- Custom styles for this template -->
      <link href=\"{{asset('assettF/css/style.css')}}\" rel=\"stylesheet\" />
      <!-- responsive style -->
      <link href=\"{{asset('assettF/css/responsive.css')}}\" rel=\"stylesheet\" />
   </head>
   <body>
      <div class=\"hero_area\">
         <!-- header section strats -->
         <header class=\"header_section\">
            <div class=\"container\">
               <nav class=\"navbar navbar-expand-lg custom_nav-container \">
                  <a class=\"navbar-brand\" href=\"index.html\"><img width=\"250\" src=\"{{asset('assettF/images/ex.png')}}\" alt=\"#\" /></a>
                  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"\"> </span>
                  </button>
                  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                     <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                           <a class=\"nav-link\" href=\"index.html\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                       <li class=\"nav-item dropdown\">
                           <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\"> <span class=\"nav-label\">Pages <span class=\"caret\"></span></a>
                           <ul class=\"dropdown-menu\">
                              <li><a href=\"about.html\">About</a></li>
                              <li><a href=\"testimonial.html\">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class=\"nav-item\">
                           <a class=\"nav-link\" href=\"product.html\">Products</a>
                        </li>
                        <li class=\"nav-item\">
                           <a class=\"nav-link\" href=\"blog_list.html\">Blog</a>
                        </li>
                        <li class=\"nav-item\">
                           <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                        </li>
                        <li class=\"nav-item\">
                        </li>
                        <form class=\"form-inline\">
                           <button class=\"btn  my-2 my-sm-0 nav_search-btn\" type=\"submit\">
                           <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                           </button>
                        </form>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
         <!-- slider section -->
         <section class=\"slider_section \">
            <div class=\"slider_bg_box\">
               <img src=\"{{asset('assettF/images/slider-bg.jpg')}}\" alt=\"\">
            </div>
            <div id=\"customCarousel1\" class=\"carousel slide\" data-ride=\"carousel\">
               <div class=\"carousel-inner\">
                  <div class=\"carousel-item active\">
                     <div class=\"container \">
                        <div class=\"row\">
                           <div class=\"col-md-7 col-lg-6 \">
                              <div class=\"detail-box\">
                                 <h1>
                                    <span>
                                    Sale 20% Off
                                    </span>
                                    <br>
                                    On Everything
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class=\"btn-box\">
                                    <a href=\"\" class=\"btn1\">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class=\"carousel-item \">
                     <div class=\"container \">
                        <div class=\"row\">
                           <div class=\"col-md-7 col-lg-6 \">
                              <div class=\"detail-box\">
                                 <h1>
                                    <span>
                                    Sale 20% Off
                                    </span>
                                    <br>
                                    On Everything
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class=\"btn-box\">
                                    <a href=\"\" class=\"btn1\">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class=\"carousel-item\">
                     <div class=\"container \">
                        <div class=\"row\">
                           <div class=\"col-md-7 col-lg-6 \">
                              <div class=\"detail-box\">
                                 <h1>
                                    <span>
                                    Sale 20% Off
                                    </span>
                                    <br>
                                    On Everything
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class=\"btn-box\">
                                    <a href=\"\" class=\"btn1\">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"container\">
                  <ol class=\"carousel-indicators\">
                     <li data-target=\"#customCarousel1\" data-slide-to=\"0\" class=\"active\"></li>
                     <li data-target=\"#customCarousel1\" data-slide-to=\"1\"></li>
                     <li data-target=\"#customCarousel1\" data-slide-to=\"2\"></li>
                  </ol>
               </div>
            </div>
         </section>
         <!-- end slider section -->
      </div>
      {% block body %}
      {% endblock %}
      
     
      <!-- footer start -->
      <footer>
         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-md-4\">
                   <div class=\"full\">
                      <div class=\"logo_footer\">
                        <a href=\"#\"><img width=\"210\" src=\"images/logo.png\" alt=\"#\" /></a>
                      </div>
                      <div class=\"information_f\">
                        <p><strong>ADDRESS:</strong> 28 White tower, Street Name New York City, USA</p>
                        <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
                        <p><strong>EMAIL:</strong> yourmain@gmail.com</p>
                      </div>
                   </div>
               </div>
               <div class=\"col-md-8\">
                  <div class=\"row\">
                  <div class=\"col-md-7\">
                     <div class=\"row\">
                        <div class=\"col-md-6\">
                     <div class=\"widget_menu\">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href=\"#\">Home</a></li>
                           <li><a href=\"#\">About</a></li>
                           <li><a href=\"#\">Services</a></li>
                           <li><a href=\"#\">Testimonial</a></li>
                           <li><a href=\"#\">Blog</a></li>
                           <li><a href=\"#\">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class=\"col-md-6\">
                     <div class=\"widget_menu\">
                        <h3>Account</h3>
                        <ul>
                           <li><a href=\"#\">Account</a></li>
                           <li><a href=\"#\">Checkout</a></li>
                           <li><a href=\"#\">Login</a></li>
                           <li><a href=\"#\">Register</a></li>
                           <li><a href=\"#\">Shopping</a></li>
                           <li><a href=\"#\">Widget</a></li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class=\"col-md-5\">
                     <div class=\"widget_menu\">
                        <h3>Newsletter</h3>
                        <div class=\"information_f\">
                          <p>Subscribe by our newsletter and get update protidin.</p>
                        </div>
                        <div class=\"form_sub\">
                           <form>
                              <fieldset>
                                 <div class=\"field\">
                                    <input type=\"email\" placeholder=\"Enter Your Mail\" name=\"email\" />
                                    <input type=\"submit\" value=\"Subscribe\" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer end -->
      <div class=\"cpy_\">
         <p class=\"mx-auto\">© 2021 All Rights Reserved By <a href=\"https://html.design/\">Free Html Templates</a><br>
         
            Distributed By <a href=\"https://themewagon.com/\" target=\"_blank\">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src=\"{{asset('assettF/js/jquery-3.4.1.min.js')}}\"></script>
      <!-- popper js -->
      <script src=\"{{asset('assettF/js/popper.min.js')}}\"></script>
      <!-- bootstrap js -->
      <script src=\"{{asset('assettF/js/bootstrap.js')}}\"></script>
      <!-- custom js -->
      <script src=\"{{asset('assettF/js/custom.js')}}\"></script>
      {# -------------------------- Share -------------------------------------  #}
<script type=\"text/javascript\" src=\"https://platform-api.sharethis.com/js/sharethis.js#property=64065d7b567fbf001a2d5d17&product=inline-share-buttons&source=platform\" async=\"async\"></script>
  {# ---------------------------------------------------------------------- #}
   </body>
</html>", "front.html.twig", "C:\\xampp\\htdocs\\integration web\\xchangexSymfony-user - Copy\\templates\\front.html.twig");
    }
}
