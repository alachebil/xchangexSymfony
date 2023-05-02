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

/* frontL.html.twig */
class __TwigTemplate_ded4e2c380c6d11e5f8ae8f75a519736 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontL.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontL.html.twig"));

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
      ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 70
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
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
      <!-- popper js -->
      <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/popper.min.js"), "html", null, true);
        echo "\"></script>
      <!-- bootstrap js -->
      <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
      <!-- custom js -->
      <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/custom.js"), "html", null, true);
        echo "\"></script>
      ";
        // line 160
        echo "<script type=\"text/javascript\" src=\"https://platform-api.sharethis.com/js/sharethis.js#property=64065d7b567fbf001a2d5d17&product=inline-share-buttons&source=platform\" async=\"async\"></script>
  ";
        // line 162
        echo "   </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "frontL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 69,  247 => 68,  236 => 162,  233 => 160,  229 => 158,  224 => 156,  219 => 154,  214 => 152,  130 => 70,  128 => 68,  87 => 30,  76 => 22,  71 => 20,  66 => 18,  61 => 16,  44 => 1,);
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
</html>", "frontL.html.twig", "C:\\xampp\\htdocs\\integration web\\xchangexSymfony-user - Copy\\templates\\frontL.html.twig");
    }
}
