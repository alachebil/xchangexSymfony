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

/* home/index.html.twig */
class __TwigTemplate_69cbb7bd817785c089c4ac4ce48069a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'citation' => [$this, 'block_citation'],
            'image_main' => [$this, 'block_image_main'],
            'body' => [$this, 'block_body'],
            'produit' => [$this, 'block_produit'],
            'coach' => [$this, 'block_coach'],
            'javascripts' => [$this, 'block_javascripts'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\" class=\"no-js\">

\t<head>
\t\t<!-- Mobile Specific Meta -->
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<!-- Favicon-->
\t\t<link
\t\trel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/xchangex.png"), "html", null, true);
        echo "\">
\t\t<!-- Author Meta -->
\t\t<meta
\t\tname=\"author\" content=\"CodePixar\">
\t\t<!-- Meta Description -->
\t\t<meta
\t\tname=\"description\" content=\"\">
\t\t<!-- Meta Keyword -->
\t\t<meta
\t\tname=\"keywords\" content=\"\">
\t\t<!-- meta character set -->
\t\t<meta
\t\tcharset=\"UTF-8\">
\t\t<!-- Site Title -->
\t\t<title>Xchangex</title>
\t\t<!--
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCSS
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t============================================= -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/linearicons.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/themify-icons.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nouislider.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ion.rangeSlider.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ion.rangeSlider.skinFlat.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
\t</head>

\t<body>


\t\t<!-- Start Header Area -->
\t\t";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 181
        echo "\t\t<!-- End banner Area -->
\t\t";
        // line 182
        $this->displayBlock('body', $context, $blocks);
        // line 970
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 971
        echo "\t\t<!-- End brand Area -->

\t\t<!-- Start related-product Area -->

\t\t<!-- End related-product Area -->

\t\t<!-- start footer Area -->
\t\t\t";
        // line 978
        $this->displayBlock('footer', $context, $blocks);
        // line 1080
        echo "\t\t</body>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 45
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "\t\t\t<header class=\"header_area sticky-header\">
\t\t\t\t<div class=\"main_menu\">
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light main_box\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"container\">
\t\t\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t\t\t<a class=\"navbar-brand logo_h\" href=\"index.html\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/SportsVerse.png"), "html", null, true);
        echo "\" alt=\"\">Sportsverse</a>
\t\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav menu_nav ml-auto\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.html\">Accueil</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item submenu dropdown\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Shop</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"category.html\">Fitness</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"single-product.html\">Musculation</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"checkout.html\">Boxe</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"cart.html\">Panier</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item submenu dropdown\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Coaching</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Resever</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"single-blog.html\">Suivi Seance</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"blog.html\">Approuver Seance</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item submenu dropdown\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Compte</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"login.html\">Se Connecter</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"tracking.html\">inscrire</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"elements.html\">Elements</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"contact.html\">Contact</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">logout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"category.html\">Réclamer</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<button class=\"search\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-magnifier\" id=\"search\"><img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/social/rsz_1search"), "html", null, true);
        echo "\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"search_input\" id=\"search_input_box\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<form class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"search_input\" placeholder=\"Search Here\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn\"></button>
\t\t\t\t\t\t\t<span class=\"lnr lnr-cross\" id=\"close_search\" title=\"Close Search\"></span>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</header>

\t\t\t<!-- End Header Area -->
\t\t\t<!-- start banner Area -->

\t\t\t<section class=\"banner-area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row fullscreen align-items-center justify-content-start\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"active-banner-slider owl-carousel\">
\t\t\t\t\t\t\t\t<!-- single-slide -->

\t\t\t\t\t\t\t\t<div class=\"row single-slide align-items-center d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 157
        $this->displayBlock('citation', $context, $blocks);
        // line 162
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t\t\t\t<div class=\"banner-img\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t\tsrc=\"
\t\t\t\t\t\t\t\t\t\t\t";
        // line 168
        $this->displayBlock('image_main', $context, $blocks);
        // line 170
        echo "\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 157
    public function block_citation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "citation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "citation"));

        // line 158
        echo "\t\t\t\t\t\t\t\t\t\t\t\t<h1>La volonté
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\taugumente,<br>Les difficulté diminue</h1>
\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 168
    public function block_image_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_main"));

        // line 169
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/banner/pub.jfif"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 182
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 183
        echo "\t\t\t<!-- start features Area -->
\t\t\t<section class=\"features-area section_gap\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row features-inner\">
\t\t\t\t\t\t<!-- single features -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t\t\t<img src=\"img/features/f-icon1.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h6>Free Delivery</h6>
\t\t\t\t\t\t\t\t<p>Free Shipping on all order</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- single features -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t\t\t<img src=\"img/features/f-icon2.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h6>Return Policy</h6>
\t\t\t\t\t\t\t\t<p>Free Shipping on all order</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- single features -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t\t\t<img src=\"img/features/f-icon3.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h6>24/7 Support</h6>
\t\t\t\t\t\t\t\t<p>Free Shipping on all order</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- single features -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t\t\t<img src=\"img/features/f-icon4.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h6>Secure Payment</h6>
\t\t\t\t\t\t\t\t<p>Free Shipping on all order</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- end features Area -->

\t\t\t<!-- Start category Area -->
\t\t\t<section class=\"category-area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<div class=\"col-lg-8 col-md-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"single-deal\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/category/c1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/category/c1.jpg\" class=\"img-pop-up\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"deal-details\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"deal-title\"></h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"single-deal\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/category/c2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/category/c2.jpg\" class=\"img-pop-up\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"deal-details\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"deal-title\"></h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"single-deal\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/category/c3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/category/c3.jpg\" class=\"img-pop-up\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"deal-details\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"deal-title\"></h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"single-deal\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/category/c4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/category/c4.jpg\" class=\"img-pop-up\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"deal-details\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"deal-title\"></h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t<div class=\"single-deal\">
\t\t\t\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/category/c5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<a href=\"img/category/c5.jpg\" class=\"img-pop-up\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<div class=\"deal-details\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"deal-title\"></h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End category Area -->

\t\t\t<!-- start product Area -->
\t\t\t<section
\t\t\t\tclass=\"owl-carousel active-product-area section_gap\">
\t\t\t\t<!-- single product slide -->
\t\t\t\t";
        // line 305
        $this->displayBlock('produit', $context, $blocks);
        // line 584
        echo "\t\t\t\t<!-- single product slide -->

\t\t\t\t<div class=\"single-product-slider\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t<div class=\"col-lg-6 text-center\">
\t\t\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t\t\t<h1>Nos Coach</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 595
        $this->displayBlock('coach', $context, $blocks);
        // line 868
        echo "\t\t\t<!-- Start exclusive deal Area -->
\t\t\t<section class=\"exclusive-deal-area\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row justify-content-center align-items-center\">
\t\t\t\t\t\t<div class=\"col-lg-6 no-padding exclusive-left\">
\t\t\t\t\t\t\t<div class=\"row clock_sec clockdiv\" id=\"clockdiv\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<h1>Vente Flash!</h1>
\t\t\t\t\t\t\t\t\t<p>Who are in extremely love with eco friendly system.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<div class=\"row clock-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col clockinner1 clockinner\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"days\">150</h1>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Days</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"hours\">23</h1>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Hours</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"minutes\">47</h1>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Mins</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"seconds\">59</h1>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Secs</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"\" class=\"primary-btn\">Acheter Maintenant</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 no-padding exclusive-right\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"active-exclusive-product-slider\">
\t\t\t\t\t\t\t\t<!-- single exclusive carousel -->
\t\t\t\t\t\t\t\t<div class=\"single-exclusive-slider\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/e-p1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"add-bag d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"add-btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"add-text text-uppercase\">Add to Bag</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single exclusive carousel -->
\t\t\t\t\t\t\t\t<div class=\"single-exclusive-slider\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/e-p1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"add-bag d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"add-btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"add-text text-uppercase\">Add to Bag</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End exclusive deal Area -->

\t\t\t<!-- Start brand Area -->
\t\t\t<section class=\"brand-area section_gap\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<a class=\"col single-img\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"img-fluid d-block mx-auto\" src=\"img/brand/1.png\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"col single-img\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"img-fluid d-block mx-auto\" src=\"img/brand/2.png\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"col single-img\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"img-fluid d-block mx-auto\" src=\"img/brand/3.png\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"col single-img\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"img-fluid d-block mx-auto\" src=\"img/brand/4.png\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"col single-img\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"img-fluid d-block mx-auto\" src=\"img/brand/5.png\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 305
    public function block_produit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        // line 306
        echo "\t\t\t\t\t<div class=\"single-product-slider\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t\t\t\t<h1>Derniers Produits</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p7.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p8.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 595
    public function block_coach($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "coach"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "coach"));

        // line 596
        echo "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Add To Bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p8.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p8.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<!-- end product Area -->
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 970
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 978
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 979
        echo "\t\t\t\t<footer class=\"footer-area section_gap\"> <div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-3  col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t\t\t<h6>About Us</h6>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tSPORTSVERSE est dédiés
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\taux \t\t\t\t\tsportifs et à tous ceux qui sont
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tintéressés par les équipements sportifs pour
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tles faciliter tout type de shopping ou
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcoaching privée
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4  col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t\t\t<h6>Newsletter</h6>
\t\t\t\t\t\t\t\t<p>Stay update with our latest</p>
\t\t\t\t\t\t\t\t<div class=\"\" id=\"mc_embed_signup\">

\t\t\t\t\t\t\t\t\t<form target=\"_blank\" novalidate=\"true\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\" method=\"get\" class=\"form-inline\">

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row\">

\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"EMAIL\" placeholder=\"Enter Email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Email '\" required=\"\" type=\"email\">


\t\t\t\t\t\t\t\t\t\t\t<button class=\"click-btn btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<div style=\"position: absolute; left: -5000px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"bb-btn btn\"><span class=\"lnr lnr-arrow-right\"></span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"info\"></div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3  col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-footer-widget mail-chimp\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-20\">Instragram Feed</h6>
\t\t\t\t\t\t\t\t<ul class=\"instafeed d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i1.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i2.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i3.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i4.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i5.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i6.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i7.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i8.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t\t\t<h6>Follow Us</h6>
\t\t\t\t\t\t\t\t<p>Nos réseaux sociaux</p>
\t\t\t\t\t\t\t\t<div class=\"footer-social d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 1042
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/social/rsz_facebook.png"), "html", null, true);
        echo "\" alt=\"\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 1044
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/social/rsz_twitter.png"), "html", null, true);
        echo "\" alt=\"\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 1046
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/social/rsz_instagram.png"), "html", null, true);
        echo "\" alt=\"\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 1048
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/social/rsz_gmail.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"footer-bottom d-flex justify-content-center align-items-center flex-wrap\">
\t\t\t\t\t\t<p
\t\t\t\t\t\t\tclass=\"footer-text m-0\">
\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\tCopyright &copy;<script>
\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear());
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\tSportsVerse
\t\t\t\t\t\t\t<a href=\"https://colorlib.com\" target=\"_blank\"></a>
\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>


\t\t\t\t</footer><!-- End footer Area --><script src=\"";
        // line 1066
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
\t\t\t\t<script src=\"";
        // line 1068
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 1069
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 1070
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 1071
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 1072
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nouislider.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 1073
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/countdown.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 1074
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 1075
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script><!--gmaps Js--><script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE\"></script>
\t\t\t\t<script src=\"";
        // line 1076
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/gmaps.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 1077
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1397 => 1077,  1393 => 1076,  1389 => 1075,  1385 => 1074,  1381 => 1073,  1377 => 1072,  1373 => 1071,  1369 => 1070,  1365 => 1069,  1361 => 1068,  1356 => 1066,  1335 => 1048,  1330 => 1046,  1325 => 1044,  1320 => 1042,  1255 => 979,  1245 => 978,  1227 => 970,  946 => 596,  936 => 595,  649 => 306,  639 => 305,  528 => 868,  526 => 595,  513 => 584,  511 => 305,  387 => 183,  377 => 182,  364 => 169,  354 => 168,  341 => 158,  331 => 157,  311 => 170,  309 => 168,  301 => 162,  299 => 157,  263 => 124,  249 => 113,  185 => 52,  177 => 46,  167 => 45,  154 => 1080,  152 => 978,  143 => 971,  140 => 970,  138 => 182,  135 => 181,  133 => 45,  123 => 38,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  62 => 10,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\" class=\"no-js\">

\t<head>
\t\t<!-- Mobile Specific Meta -->
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<!-- Favicon-->
\t\t<link
\t\trel=\"shortcut icon\" href=\"{{asset('img/xchangex.png')}}\">
\t\t<!-- Author Meta -->
\t\t<meta
\t\tname=\"author\" content=\"CodePixar\">
\t\t<!-- Meta Description -->
\t\t<meta
\t\tname=\"description\" content=\"\">
\t\t<!-- Meta Keyword -->
\t\t<meta
\t\tname=\"keywords\" content=\"\">
\t\t<!-- meta character set -->
\t\t<meta
\t\tcharset=\"UTF-8\">
\t\t<!-- Site Title -->
\t\t<title>Xchangex</title>
\t\t<!--
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCSS
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t============================================= -->
\t\t<link rel=\"stylesheet\" href=\"{{asset('css/linearicons.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('css/font-awesome.min.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('css/themify-icons.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('css/nice-select.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('css/nouislider.min.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('css/ion.rangeSlider.css')}}\"/>
\t\t<link rel=\"stylesheet\" href=\"{{asset('css/ion.rangeSlider.skinFlat.css')}}\"/>
\t\t<link rel=\"stylesheet\" href=\"{{asset('css/magnific-popup.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('css/main.css')}}\">
\t</head>

\t<body>


\t\t<!-- Start Header Area -->
\t\t{% block header %}
\t\t\t<header class=\"header_area sticky-header\">
\t\t\t\t<div class=\"main_menu\">
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light main_box\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"container\">
\t\t\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t\t\t<a class=\"navbar-brand logo_h\" href=\"index.html\"><img src=\"{{asset('img/SportsVerse.png')}}\" alt=\"\">Sportsverse</a>
\t\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav menu_nav ml-auto\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.html\">Accueil</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item submenu dropdown\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Shop</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"category.html\">Fitness</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"single-product.html\">Musculation</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"checkout.html\">Boxe</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"cart.html\">Panier</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item submenu dropdown\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Coaching</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Resever</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"single-blog.html\">Suivi Seance</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"blog.html\">Approuver Seance</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item submenu dropdown\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Compte</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"login.html\">Se Connecter</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"tracking.html\">inscrire</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"elements.html\">Elements</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"contact.html\">Contact</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_logout')}}\">logout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"category.html\">Réclamer</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<button class=\"search\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-magnifier\" id=\"search\"><img src=\"{{asset('img/social/rsz_1search')}}\" alt=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"search_input\" id=\"search_input_box\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<form class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"search_input\" placeholder=\"Search Here\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn\"></button>
\t\t\t\t\t\t\t<span class=\"lnr lnr-cross\" id=\"close_search\" title=\"Close Search\"></span>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</header>

\t\t\t<!-- End Header Area -->
\t\t\t<!-- start banner Area -->

\t\t\t<section class=\"banner-area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row fullscreen align-items-center justify-content-start\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"active-banner-slider owl-carousel\">
\t\t\t\t\t\t\t\t<!-- single-slide -->

\t\t\t\t\t\t\t\t<div class=\"row single-slide align-items-center d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t\t\t\t{% block citation %}
\t\t\t\t\t\t\t\t\t\t\t\t<h1>La volonté
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\taugumente,<br>Les difficulté diminue</h1>
\t\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t\t\t\t<div class=\"banner-img\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t\tsrc=\"
\t\t\t\t\t\t\t\t\t\t\t{% block image_main %}
\t\t\t\t\t\t\t\t\t\t\t\t{{asset('img/banner/pub.jfif')}}
\t\t\t\t\t\t\t\t\t\t\t{% endblock %}\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t{% endblock %}
\t\t<!-- End banner Area -->
\t\t{% block body %}
\t\t\t<!-- start features Area -->
\t\t\t<section class=\"features-area section_gap\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row features-inner\">
\t\t\t\t\t\t<!-- single features -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t\t\t<img src=\"img/features/f-icon1.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h6>Free Delivery</h6>
\t\t\t\t\t\t\t\t<p>Free Shipping on all order</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- single features -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t\t\t<img src=\"img/features/f-icon2.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h6>Return Policy</h6>
\t\t\t\t\t\t\t\t<p>Free Shipping on all order</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- single features -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t\t\t<img src=\"img/features/f-icon3.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h6>24/7 Support</h6>
\t\t\t\t\t\t\t\t<p>Free Shipping on all order</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- single features -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-features\">
\t\t\t\t\t\t\t\t<div class=\"f-icon\">
\t\t\t\t\t\t\t\t\t<img src=\"img/features/f-icon4.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h6>Secure Payment</h6>
\t\t\t\t\t\t\t\t<p>Free Shipping on all order</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- end features Area -->

\t\t\t<!-- Start category Area -->
\t\t\t<section class=\"category-area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<div class=\"col-lg-8 col-md-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"single-deal\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/category/c1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/category/c1.jpg\" class=\"img-pop-up\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"deal-details\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"deal-title\"></h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"single-deal\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/category/c2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/category/c2.jpg\" class=\"img-pop-up\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"deal-details\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"deal-title\"></h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"single-deal\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/category/c3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/category/c3.jpg\" class=\"img-pop-up\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"deal-details\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"deal-title\"></h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"single-deal\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/category/c4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/category/c4.jpg\" class=\"img-pop-up\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"deal-details\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"deal-title\"></h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t<div class=\"single-deal\">
\t\t\t\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"img/category/c5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<a href=\"img/category/c5.jpg\" class=\"img-pop-up\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<div class=\"deal-details\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"deal-title\"></h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End category Area -->

\t\t\t<!-- start product Area -->
\t\t\t<section
\t\t\t\tclass=\"owl-carousel active-product-area section_gap\">
\t\t\t\t<!-- single product slide -->
\t\t\t\t{% block produit %}
\t\t\t\t\t<div class=\"single-product-slider\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t\t\t\t<h1>Derniers Produits</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p7.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p8.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endblock %}
\t\t\t\t<!-- single product slide -->

\t\t\t\t<div class=\"single-product-slider\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t<div class=\"col-lg-6 text-center\">
\t\t\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t\t\t<h1>Nos Coach</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% block coach %}
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Add To Bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p8.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single product -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/p8.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<h6>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h6>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"prd-bottom\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">add to bag</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">Wishlist</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-sync\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">compare</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"social-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"hover-text\">view more</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<!-- end product Area -->
\t\t\t{% endblock %}
\t\t\t<!-- Start exclusive deal Area -->
\t\t\t<section class=\"exclusive-deal-area\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row justify-content-center align-items-center\">
\t\t\t\t\t\t<div class=\"col-lg-6 no-padding exclusive-left\">
\t\t\t\t\t\t\t<div class=\"row clock_sec clockdiv\" id=\"clockdiv\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<h1>Vente Flash!</h1>
\t\t\t\t\t\t\t\t\t<p>Who are in extremely love with eco friendly system.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<div class=\"row clock-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col clockinner1 clockinner\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"days\">150</h1>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Days</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"hours\">23</h1>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Hours</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"minutes\">47</h1>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Mins</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col clockinner clockinner1\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"seconds\">59</h1>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"smalltext\">Secs</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"\" class=\"primary-btn\">Acheter Maintenant</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 no-padding exclusive-right\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"active-exclusive-product-slider\">
\t\t\t\t\t\t\t\t<!-- single exclusive carousel -->
\t\t\t\t\t\t\t\t<div class=\"single-exclusive-slider\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/e-p1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"add-bag d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"add-btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"add-text text-uppercase\">Add to Bag</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- single exclusive carousel -->
\t\t\t\t\t\t\t\t<div class=\"single-exclusive-slider\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/product/e-p1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t<h6>\$150.00</h6>
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"l-through\">\$210.00</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4>addidas New Hammer sole
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor Sports person</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"add-bag d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"add-btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"add-text text-uppercase\">Add to Bag</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End exclusive deal Area -->

\t\t\t<!-- Start brand Area -->
\t\t\t<section class=\"brand-area section_gap\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<a class=\"col single-img\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"img-fluid d-block mx-auto\" src=\"img/brand/1.png\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"col single-img\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"img-fluid d-block mx-auto\" src=\"img/brand/2.png\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"col single-img\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"img-fluid d-block mx-auto\" src=\"img/brand/3.png\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"col single-img\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"img-fluid d-block mx-auto\" src=\"img/brand/4.png\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"col single-img\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"img-fluid d-block mx-auto\" src=\"img/brand/5.png\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t{% endblock %}
\t\t{% block javascripts %}{% endblock %}
\t\t<!-- End brand Area -->

\t\t<!-- Start related-product Area -->

\t\t<!-- End related-product Area -->

\t\t<!-- start footer Area -->
\t\t\t{% block footer %}
\t\t\t\t<footer class=\"footer-area section_gap\"> <div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-3  col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t\t\t<h6>About Us</h6>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tSPORTSVERSE est dédiés
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\taux \t\t\t\t\tsportifs et à tous ceux qui sont
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tintéressés par les équipements sportifs pour
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tles faciliter tout type de shopping ou
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcoaching privée
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4  col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t\t\t<h6>Newsletter</h6>
\t\t\t\t\t\t\t\t<p>Stay update with our latest</p>
\t\t\t\t\t\t\t\t<div class=\"\" id=\"mc_embed_signup\">

\t\t\t\t\t\t\t\t\t<form target=\"_blank\" novalidate=\"true\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\" method=\"get\" class=\"form-inline\">

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row\">

\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"EMAIL\" placeholder=\"Enter Email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Email '\" required=\"\" type=\"email\">


\t\t\t\t\t\t\t\t\t\t\t<button class=\"click-btn btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<div style=\"position: absolute; left: -5000px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"bb-btn btn\"><span class=\"lnr lnr-arrow-right\"></span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"info\"></div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3  col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-footer-widget mail-chimp\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-20\">Instragram Feed</h6>
\t\t\t\t\t\t\t\t<ul class=\"instafeed d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i1.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i2.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i3.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i4.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i5.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i6.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i7.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t\t<li><img src=\"img/i8.jpg\" alt=\"\"></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t\t\t<h6>Follow Us</h6>
\t\t\t\t\t\t\t\t<p>Nos réseaux sociaux</p>
\t\t\t\t\t\t\t\t<div class=\"footer-social d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{asset('img/social/rsz_facebook.png')}}\" alt=\"\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{asset('img/social/rsz_twitter.png')}}\" alt=\"\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{asset('img/social/rsz_instagram.png')}}\" alt=\"\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\"><img src=\"{{asset('img/social/rsz_gmail.png')}}\" alt=\"\"></a>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"footer-bottom d-flex justify-content-center align-items-center flex-wrap\">
\t\t\t\t\t\t<p
\t\t\t\t\t\t\tclass=\"footer-text m-0\">
\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\tCopyright &copy;<script>
\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear());
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\tSportsVerse
\t\t\t\t\t\t\t<a href=\"https://colorlib.com\" target=\"_blank\"></a>
\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>


\t\t\t\t</footer><!-- End footer Area --><script src=\"{{asset('js/vendor/jquery-2.2.4.min.js')}}\"></script>
\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
\t\t\t\t<script src=\"{{asset('js/vendor/bootstrap.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('js/jquery.ajaxchimp.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('js/jquery.nice-select.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('js/jquery.sticky.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('js/nouislider.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('js/countdown.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('js/jquery.magnific-popup.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('js/owl.carousel.min.js')}}\"></script><!--gmaps Js--><script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE\"></script>
\t\t\t\t<script src=\"{{asset('js/gmaps.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('js/main.js')}}\"></script>

\t\t\t{% endblock %}
\t\t</body>
\t</body>
</html>
", "home/index.html.twig", "C:\\Users\\sbekr\\OneDrive\\Desktop\\integration web\\xchangexSymfony-user - Copy\\templates\\home\\index.html.twig");
    }
}
