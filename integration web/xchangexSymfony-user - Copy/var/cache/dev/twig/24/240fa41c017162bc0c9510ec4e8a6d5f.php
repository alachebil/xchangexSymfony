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

/* user/product.html.twig */
class __TwigTemplate_07dc9db253f948f4ef8a58d7dcb0d837 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/product.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/product.html.twig"));

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
      <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicon.png"), "html", null, true);
        echo "\" type=\"\">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.css"), "html", null, true);
        echo "\" />
      <!-- font awesome style -->
      <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <!-- Custom styles for this template -->
      <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <!-- responsive style -->
      <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
   </head>
   <body class=\"sub_page\">
      <div class=\"hero_area\">
         <!-- header section strats -->
         <header class=\"header_section\">
            <div class=\"container\">
               <nav class=\"navbar navbar-expand-lg custom_nav-container \">
                  <a class=\"navbar-brand\" href=\"index.html\"><img width=\"250\" src=\"images/logo.png\" alt=\"#\" /></a>
                  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"\"> </span>
                  </button>
                  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                     <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                           <a class=\"nav-link\" href=\"index.html\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item dropdown\">
                           <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\"> <span class=\"nav-label\">Pages <span class=\"caret\"></span></a>
                           <ul class=\"dropdown-menu\">
                              <li><a href=\"about.html\">About</a></li>
                              <li><a href=\"testimonial.html\">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class=\"nav-item active\">
                           <a class=\"nav-link\" href=\"product.html\">Products</a>
                        </li>
                        <li class=\"nav-item\">
                           <a class=\"nav-link\" href=\"blog_list.html\">Blog</a>
                        </li>
                        <li class=\"nav-item\">
                           <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                        </li>
                        <li class=\"nav-item\">
                           <a class=\"nav-link\" href=\"#\">
                              <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 456.029 456.029\" style=\"enable-background:new 0 0 456.029 456.029;\" xml:space=\"preserve\">
                                 <g>
                                    <g>
                                       <path d=\"M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z\" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d=\"M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z\" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d=\"M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z\" />
                                    </g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                              </svg>
                           </a>
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
      </div>
      <!-- inner page section -->
      <section class=\"inner_page_head\">
         <div class=\"container_fuild\">
            <div class=\"row\">
               <div class=\"col-md-12\">
                  <div class=\"full\">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class=\"product_section layout_padding\">
         <div class=\"container\">
            <div class=\"heading_container heading_center\">
               <h2>
                <span>  Our products</span>
               </h2>
            </div>
            <form action=\"/produit/front\" method=\"get\">
  <input type=\"text\" name=\"q\" placeholder=\"Search...\">
  <button type=\"submit\">Search</button>
</form>
<a href =\"/produit/sort\"> trier </a>
<!-- ShareThis BEGIN --><div class=\"sharethis-inline-share-buttons\"></div><!-- ShareThis END -->
            <div class=\"row\">
            ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 154, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 155
            echo "               <div class=\"col-sm-6 col-md-4 col-lg-3\">
                  <div class=\"box\">
                     <div class=\"option_container\">
                        <div class=\"options\">
                           <a href=\"\" class=\"option1\">
                         
                           </a>
                          
                           <a href=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_showF", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 163)]), "html", null, true);
            echo "\"  class=\"option2\">show</a>
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class=\"img-box\">
                          <img src=\"../images/";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "imageName", [], "any", false, false, false, 169), "html", null, true);
            echo "\" alt=\"\">
                      
                     </div>
                     <div class=\"detail-box\">
                        <h5>
                         ";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 174), "html", null, true);
            echo "
                        </h5>
                        <h6>
                           ";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 177), "html", null, true);
            echo "
                        </h6>
                        
                     </div>
                  </div>
               </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "                   ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 184, $this->source); })()));
        echo "
               
            </div>
            <div class=\"btn-box\">
               <a href=\"\">
               View All products
               </a>
            </div>
         </div>
      </section>
      <!-- end product section -->
      <!-- footer section -->
      <footer class=\"footer_section\">
         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-md-4 footer-col\">
                  <div class=\"footer_contact\">
                     <h4>
                        Reach at..
                     </h4>
                     <div class=\"contact_link_box\">
                        <a href=\"\">
                        <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                        <span>
                        Location
                        </span>
                        </a>
                        <a href=\"\">
                        <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                        <span>
                        Call +01 1234567890
                        </span>
                        </a>
                        <a href=\"\">
                        <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        <span>
                        demo@gmail.com
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class=\"col-md-4 footer-col\">
                  <div class=\"footer_detail\">
                     <a href=\"index.html\" class=\"footer-logo\">
                     Famms
                     </a>
                     <p>
                        Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                     </p>
                     <div class=\"footer_social\">
                        <a href=\"\">
                        <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                        </a>
                        <a href=\"\">
                        <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                        </a>
                        <a href=\"\">
                        <i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
                        </a>
                        <a href=\"\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                        </a>
                        <a href=\"\">
                        <i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class=\"col-md-4 footer-col\">
                  <div class=\"map_container\">
                     <div class=\"map\">
                        <div id=\"googleMap\"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"footer-info\">
               <div class=\"col-lg-7 mx-auto px-0\">
                  <p>
                     &copy; <span id=\"displayYear\"></span> All Rights Reserved By
                     <a href=\"https://html.design/\">Free Html Templates</a><br>
         
                     Distributed By <a href=\"https://themewagon.com/\" target=\"_blank\">ThemeWagon</a>
                  </p>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer section -->
      <!-- jQery -->
      
   
  
   
  
      <script src=\"j ";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
      <!-- popper js -->
      <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
      <!-- bootstrap js -->
      <script src=\" ";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
      <!-- custom js -->
      <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"https://platform-api.sharethis.com/js/sharethis.js#property=6404e28ea0932a001aed0d3f&product=inline-share-buttons&source=platform\" async=\"async\"></script>  
   </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 286,  373 => 284,  368 => 282,  363 => 280,  263 => 184,  250 => 177,  244 => 174,  236 => 169,  227 => 163,  217 => 155,  213 => 154,  81 => 25,  76 => 23,  71 => 21,  66 => 19,  60 => 16,  43 => 1,);
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
      <link rel=\"shortcut icon\" href=\"{{asset('front/images/favicon.png')}}\" type=\"\">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('front/css/bootstrap.css')}}\" />
      <!-- font awesome style -->
      <link href=\"{{asset('front/css/font-awesome.min.css')}}\" rel=\"stylesheet\" />
      <!-- Custom styles for this template -->
      <link href=\"{{asset('front/css/style.css')}}\" rel=\"stylesheet\" />
      <!-- responsive style -->
      <link href=\"{{asset('front/css/responsive.css')}}\" rel=\"stylesheet\" />
   </head>
   <body class=\"sub_page\">
      <div class=\"hero_area\">
         <!-- header section strats -->
         <header class=\"header_section\">
            <div class=\"container\">
               <nav class=\"navbar navbar-expand-lg custom_nav-container \">
                  <a class=\"navbar-brand\" href=\"index.html\"><img width=\"250\" src=\"images/logo.png\" alt=\"#\" /></a>
                  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"\"> </span>
                  </button>
                  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                     <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                           <a class=\"nav-link\" href=\"index.html\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item dropdown\">
                           <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\"> <span class=\"nav-label\">Pages <span class=\"caret\"></span></a>
                           <ul class=\"dropdown-menu\">
                              <li><a href=\"about.html\">About</a></li>
                              <li><a href=\"testimonial.html\">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class=\"nav-item active\">
                           <a class=\"nav-link\" href=\"product.html\">Products</a>
                        </li>
                        <li class=\"nav-item\">
                           <a class=\"nav-link\" href=\"blog_list.html\">Blog</a>
                        </li>
                        <li class=\"nav-item\">
                           <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                        </li>
                        <li class=\"nav-item\">
                           <a class=\"nav-link\" href=\"#\">
                              <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 456.029 456.029\" style=\"enable-background:new 0 0 456.029 456.029;\" xml:space=\"preserve\">
                                 <g>
                                    <g>
                                       <path d=\"M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z\" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d=\"M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z\" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d=\"M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z\" />
                                    </g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                              </svg>
                           </a>
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
      </div>
      <!-- inner page section -->
      <section class=\"inner_page_head\">
         <div class=\"container_fuild\">
            <div class=\"row\">
               <div class=\"col-md-12\">
                  <div class=\"full\">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class=\"product_section layout_padding\">
         <div class=\"container\">
            <div class=\"heading_container heading_center\">
               <h2>
                <span>  Our products</span>
               </h2>
            </div>
            <form action=\"/produit/front\" method=\"get\">
  <input type=\"text\" name=\"q\" placeholder=\"Search...\">
  <button type=\"submit\">Search</button>
</form>
<a href =\"/produit/sort\"> trier </a>
<!-- ShareThis BEGIN --><div class=\"sharethis-inline-share-buttons\"></div><!-- ShareThis END -->
            <div class=\"row\">
            {% for produit in produits %}
               <div class=\"col-sm-6 col-md-4 col-lg-3\">
                  <div class=\"box\">
                     <div class=\"option_container\">
                        <div class=\"options\">
                           <a href=\"\" class=\"option1\">
                         
                           </a>
                          
                           <a href=\"{{ path('app_produit_showF', {'id': produit.id}) }}\"  class=\"option2\">show</a>
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class=\"img-box\">
                          <img src=\"../images/{{produit.imageName}}\" alt=\"\">
                      
                     </div>
                     <div class=\"detail-box\">
                        <h5>
                         {{ produit.nom }}
                        </h5>
                        <h6>
                           {{ produit.prix }}
                        </h6>
                        
                     </div>
                  </div>
               </div>
                {% endfor %}
                   {{ knp_pagination_render(produits) }}
               
            </div>
            <div class=\"btn-box\">
               <a href=\"\">
               View All products
               </a>
            </div>
         </div>
      </section>
      <!-- end product section -->
      <!-- footer section -->
      <footer class=\"footer_section\">
         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-md-4 footer-col\">
                  <div class=\"footer_contact\">
                     <h4>
                        Reach at..
                     </h4>
                     <div class=\"contact_link_box\">
                        <a href=\"\">
                        <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                        <span>
                        Location
                        </span>
                        </a>
                        <a href=\"\">
                        <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                        <span>
                        Call +01 1234567890
                        </span>
                        </a>
                        <a href=\"\">
                        <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        <span>
                        demo@gmail.com
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class=\"col-md-4 footer-col\">
                  <div class=\"footer_detail\">
                     <a href=\"index.html\" class=\"footer-logo\">
                     Famms
                     </a>
                     <p>
                        Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                     </p>
                     <div class=\"footer_social\">
                        <a href=\"\">
                        <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                        </a>
                        <a href=\"\">
                        <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                        </a>
                        <a href=\"\">
                        <i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
                        </a>
                        <a href=\"\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                        </a>
                        <a href=\"\">
                        <i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class=\"col-md-4 footer-col\">
                  <div class=\"map_container\">
                     <div class=\"map\">
                        <div id=\"googleMap\"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"footer-info\">
               <div class=\"col-lg-7 mx-auto px-0\">
                  <p>
                     &copy; <span id=\"displayYear\"></span> All Rights Reserved By
                     <a href=\"https://html.design/\">Free Html Templates</a><br>
         
                     Distributed By <a href=\"https://themewagon.com/\" target=\"_blank\">ThemeWagon</a>
                  </p>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer section -->
      <!-- jQery -->
      
   
  
   
  
      <script src=\"j {{asset('js/jquery-3.4.1.min.js')}}\"></script>
      <!-- popper js -->
      <script src=\"{{asset('js/popper.min.js')}}\"></script>
      <!-- bootstrap js -->
      <script src=\" {{asset('js/bootstrap.js')}}\"></script>
      <!-- custom js -->
      <script src=\"{{asset('js/custom.js')}}\"></script>
      <script type=\"text/javascript\" src=\"https://platform-api.sharethis.com/js/sharethis.js#property=6404e28ea0932a001aed0d3f&product=inline-share-buttons&source=platform\" async=\"async\"></script>  
   </body>
</html>", "user/product.html.twig", "C:\\Users\\sbekr\\OneDrive\\Desktop\\integration web\\xchangexSymfony-user - Copy\\templates\\user\\product.html.twig");
    }
}
