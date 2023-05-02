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

/* dashboard/index1.html.twig */
class __TwigTemplate_3d8be942556af451661a4dca86c37f6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navigation' => [$this, 'block_navigation'],
            'body' => [$this, 'block_body'],
            'scriptjs' => [$this, 'block_scriptjs'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>
\t\t\t";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t</title>
\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">

\t\t<link
\t\thref=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">


\t\t<!-- Google Fonts -->
\t\t<link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/echarts@5.1.2/dist/echarts.min.css\">

\t\t<!-- Template Main CSS File -->
\t\t<link
\t\thref=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


\t<!-- =======================================================
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Template Name: NiceAdmin - v2.5.0
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Author: BootstrapMade.com
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* License: https://bootstrapmade.com/license/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t======================================================== -->
\t</head>

\t<body>

\t\t<!-- ======= Header ======= -->
\t\t<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t<a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t<span class=\"d-none d-lg-block\">SportsVerse</span>
\t\t\t\t</a>
\t\t\t\t<i class=\"bi bi-list toggle-sidebar-btn\"></i>
\t\t\t</div>
\t\t\t<!-- End Logo -->

\t\t\t<div class=\"search-bar\">
\t\t\t\t<form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
\t\t\t\t\t<input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
\t\t\t\t\t<button type=\"submit\" title=\"Search\">
\t\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- End Search Bar -->

\t\t\t<nav class=\"header-nav ms-auto\">
\t\t\t\t<ul class=\"d-flex align-items-center\">

\t\t\t\t\t<li class=\"nav-item d-block d-lg-none\">
\t\t\t\t\t\t<a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Search Icon-->

\t\t\t\t\t<li class=\"nav-item dropdown\">

\t\t\t\t\t\t<a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<i class=\"bi bi-bell\"></i>
\t\t\t\t\t\t\t<span class=\"badge bg-primary badge-number\">4</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- End Notification Icon -->

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\tYou have 4 new notifications
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-exclamation-circle text-warning\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Lorem Ipsum</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>30 min. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle text-danger\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Atque rerum nesciunt</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>1 hr. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle text-success\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Sit rerum fuga</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>2 hrs. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-info-circle text-primary\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Dicta reprehenderit</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>4 hrs. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t<a href=\"#\">Show all notifications</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- End Notification Dropdown Items -->

\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Notification Nav -->

\t\t\t\t\t<li class=\"nav-item dropdown\">

\t\t\t\t\t\t<a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<i class=\"bi bi-chat-left-text\"></i>
\t\t\t\t\t\t\t<span class=\"badge bg-success badge-number\">3</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- End Messages Icon -->

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\tYou have 3 new messages
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Maria Hudson</h4>
\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t<p>4 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Anna Nelson</h4>
\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t<p>6 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>David Muldon</h4>
\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t<p>8 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t<a href=\"#\">Show all messages</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- End Messages Dropdown Items -->

\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Messages Nav -->

\t\t\t\t\t<li class=\"nav-item dropdown pe-3\">

\t\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/profile-img.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">K.Anderson
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t<h6>Kevin Anderson</h6>
\t\t\t\t\t\t\t\t<span>Web Designer</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t<span>My Profile</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-gear\"></i>
\t\t\t\t\t\t\t\t\t<span>Account Settings</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-question-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Need Help?</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 293
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t<span>Sign Out</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- End Profile Dropdown Items -->
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Profile Nav -->

\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- End Icons Navigation -->

\t\t</header>
\t\t<!-- End Header -->

\t\t<!-- ======= Sidebar ======= -->
\t\t<aside id=\"sidebar\" class=\"sidebar\">

\t\t\t<ul class=\"sidebar-nav\" id=\"sidebar-nav\">

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 317
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
\t\t\t\t\t\t<i class=\"bi bi-grid\"></i>
\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Dashboard Nav -->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"";
        // line 325
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_admin");
        echo "\">
\t\t\t\t\t\t<i class=\"bi bi-menu-button-wide\"></i>
\t\t\t\t\t\t<span>users</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Components Nav -->


\t\t\t\t<!-- End Forms Nav -->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"";
        // line 336
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
\t\t\t\t\t\t<i class=\"bi bi-layout-text-window-reverse\"></i>
\t\t\t\t\t\t<span>Produits</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Tables Nav -->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"";
        // line 344
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
\t\t\t\t\t\t<i class=\"bi bi-bar-chart\"></i>
\t\t\t\t\t\t<span>Commandes</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Charts Nav -->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"";
        // line 352
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
\t\t\t\t\t\t<i class=\"bi bi-gem\"></i>
\t\t\t\t\t\t<span>Seances</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Charts Nav -->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"";
        // line 360
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
\t\t\t\t\t\t<i class=\"bi bi-gem\"></i>
\t\t\t\t\t\t<span>Reclamations</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Icons Nav -->
\t\t\t</ul>

\t\t</aside>
\t\t<!-- End Sidebar-->

\t\t<main id=\"main\" class=\"main\">

\t\t\t<div class=\"pagetitle\">
\t\t\t\t<h1>Dashboard</h1>
\t\t\t\t<nav>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t";
        // line 377
        $this->displayBlock('navigation', $context, $blocks);
        // line 383
        echo "\t\t\t\t\t</ol>
\t\t\t\t</nav>
\t\t\t</div>

\t\t\t<!-- End Page Title -->

\t\t\t<section class=\"section dashboard\">
\t\t\t\t";
        // line 390
        $this->displayBlock('body', $context, $blocks);
        // line 1161
        echo "\t\t\t</section>

\t\t</main>
\t\t<!-- End #main -->

\t\t<!-- ======= Footer ======= -->
\t\t<footer id=\"footer\" class=\"footer\">
\t\t\t<div class=\"copyright\">
\t\t\t\t&copy; Copyright
\t\t\t\t<strong>
\t\t\t\t\t<span>NiceAdmin</span>
\t\t\t\t</strong>. All Rights Reserved
\t\t\t</div>
\t\t\t<div class=\"credits\">
\t\t\t\t<!-- All the links in the footer should remain intact. -->
\t\t\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
\t\t\t\tDesigned by
\t\t\t\t\t<a href=\"https://bootstrapmade.com/\"> BootstrapMade</a>
\t\t\t</div>
\t\t</footer>
\t\t<!-- End Footer -->

\t\t<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t</a>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/echarts@5.1.2/dist/echarts.min.js\"></script>

\t\t<!-- Vendor JS Files -->
\t\t<script src=\"";
        // line 1191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Template Main JS File -->
\t\t<script src=\"";
        // line 1201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/main_admin.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 1202
        $this->displayBlock('scriptjs', $context, $blocks);
        // line 1203
        echo "
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 377
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 378
        echo "\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 379
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Dashboard</li>
\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 390
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 391
        echo "\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t<!-- Left side columns -->
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t\t<!-- Sales Card -->
\t\t\t\t\t\t\t\t<div class=\"col-xxl-4 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"card info-card sales-card\">

\t\t\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Sales
\t\t\t\t\t\t\t\t\t\t\t\t<span>| Today</span>
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>145</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success small pt-1 fw-bold\">12%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted small pt-2 ps-1\">increase</span>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Sales Card -->

\t\t\t\t\t\t\t\t<!-- Revenue Card -->
\t\t\t\t\t\t\t\t<div class=\"col-xxl-4 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"card info-card revenue-card\">

\t\t\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Revenue
\t\t\t\t\t\t\t\t\t\t\t\t<span>| This Month</span>
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-currency-dollar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$3,264</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success small pt-1 fw-bold\">8%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted small pt-2 ps-1\">increase</span>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Revenue Card -->

\t\t\t\t\t\t\t\t<!-- Customers Card -->
\t\t\t\t\t\t\t\t<div class=\"col-xxl-4 col-xl-12\">

\t\t\t\t\t\t\t\t\t<div class=\"card info-card customers-card\">

\t\t\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Customers
\t\t\t\t\t\t\t\t\t\t\t\t<span>| This Year</span>
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>1244</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger small pt-1 fw-bold\">12%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted small pt-2 ps-1\">decrease</span>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Customers Card -->

\t\t\t\t\t\t\t\t<!-- Reports -->
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"card\">


\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Reports
\t\t\t\t\t\t\t\t\t\t\t\t<span>/Today</span>
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<!-- pie Chart -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"pieChart\" style=\"width: 100%; height: 400px;\"></div>


\t\t\t\t\t\t\t\t\t\t\t<!-- End pie Chart -->

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Reports -->

\t\t\t\t\t\t\t\t<!-- Recent Sales -->
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"card recent-sales overflow-auto\">

\t\t\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Recent Sales
\t\t\t\t\t\t\t\t\t\t\t\t<span>| Today</span>
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless datatable\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Customer</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Product</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Price</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#2457</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Brandon Jacob</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary\">At praesentium minu</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$64</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\">Approved</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#2147</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Bridie Kessler</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary\">Blanditiis dolor omnis similique</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$47</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning\">Pending</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#2049</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Ashleigh Langosh</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary\">At recusandae consectetur</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$147</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\">Approved</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#2644</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Angus Grady</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primar\">Ut voluptatem id earum et</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$67</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\">Rejected</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#2644</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Raheem Lehner</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary\">Sunt similique distinctio</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$165</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\">Approved</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Recent Sales -->

\t\t\t\t\t\t\t\t<!-- Top Selling -->
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"card top-selling overflow-auto\">

\t\t\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Top Selling
\t\t\t\t\t\t\t\t\t\t\t\t<span>| Today</span>
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Preview</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Product</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Price</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Sold</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Revenue</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/product-1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary fw-bold\">Ut inventore ipsa voluptas nulla</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$64</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fw-bold\">124</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$5,828</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/product-2.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary fw-bold\">Exercitationem similique doloremque</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$46</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fw-bold\">98</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$4,508</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/product-3.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary fw-bold\">Doloribus nisi exercitationem</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$59</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fw-bold\">74</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$4,366</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/product-4.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary fw-bold\">Officiis quaerat sint rerum error</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$32</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fw-bold\">63</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$2,016</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/product-5.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary fw-bold\">Sit unde debitis delectus repellendus</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$79</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fw-bold\">41</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$3,239</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Top Selling -->

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Left side columns -->

\t\t\t\t\t\t<!-- Right side columns -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-lg-4\">

\t\t\t\t\t\t\t<!-- Recent Activity -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Recent Activity
\t\t\t\t\t\t\t\t\t\t<span>| Today</span>
\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t<div class=\"activity\">

\t\t\t\t\t\t\t\t\t\t<div class=\"activity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activite-label\">32 min</div>
\t\t\t\t\t\t\t\t\t\t\t<i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t\t\tQuia quae rerum
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-bold text-dark\">explicabo officiis</a>
\t\t\t\t\t\t\t\t\t\t\t\tbeatae
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t\t<div class=\"activity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activite-label\">56 min</div>
\t\t\t\t\t\t\t\t\t\t\t<i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t\t\tVoluptatem blanditiis blanditiis eveniet
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t\t<div class=\"activity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activite-label\">2 hrs</div>
\t\t\t\t\t\t\t\t\t\t\t<i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t\t\tVoluptates corrupti molestias voluptatem
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t\t<div class=\"activity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activite-label\">1 day</div>
\t\t\t\t\t\t\t\t\t\t\t<i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t\t\tTempore autem saepe
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-bold text-dark\">occaecati voluptatem</a>
\t\t\t\t\t\t\t\t\t\t\t\ttempore
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t\t<div class=\"activity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activite-label\">2 days</div>
\t\t\t\t\t\t\t\t\t\t\t<i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t\t\tEst sit eum reiciendis exercitationem
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t\t<div class=\"activity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activite-label\">4 weeks</div>
\t\t\t\t\t\t\t\t\t\t\t<i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t\t\tDicta dolorem harum nulla eius. Ut quidem quidem sit quas
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Recent Activity -->

\t\t\t\t\t\t\t<!-- Budget Report -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Budget Report
\t\t\t\t\t\t\t\t\t\t<span>| This Month</span>
\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t<div id=\"budgetChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\tdocument.addEventListener(\"DOMContentLoaded\", () => {
var budgetChart = echarts.init(document.querySelector(\"#budgetChart\")).setOption({
legend: {
data: ['Allocated Budget', 'Actual Spending']
},
radar: { // shape: 'circle',
indicator: [
{
name: 'Sales',
max: 6500
},
{
name: 'Administration',
max: 16000
},
{
name: 'Information Technology',
max: 30000
},
{
name: 'Customer Support',
max: 38000
}, {
name: 'Development',
max: 52000
}, {
name: 'Marketing',
max: 25000
}
]
},
series: [
{
name: 'Budget vs spending',
type: 'radar',
data: [
{
value: [
4200,
3000,
20000,
35000,
50000,
18000
],
name: 'Allocated Budget'
}, {
value: [
5000,
14000,
28000,
26000,
42000,
21000
],
name: 'Actual Spending'
}
]
}
]
});
});
\t\t\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Budget Report -->

\t\t\t\t\t\t\t<!-- Website Traffic -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Website Traffic
\t\t\t\t\t\t\t\t\t\t<span>| Today</span>
\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t<div id=\"trafficChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\tdocument.addEventListener(\"DOMContentLoaded\", () => {
echarts.init(document.querySelector(\"#trafficChart\")).setOption({
tooltip: {
trigger: 'item'
},
legend: {
top: '5%',
left: 'center'
},
series: [
{
name: 'Access From',
type: 'pie',
radius: [
'40%', '70%'
],
avoidLabelOverlap: false,
label: {
show: false,
position: 'center'
},
emphasis: {
label: {
show: true,
fontSize: '18',
fontWeight: 'bold'
}
},
labelLine: {
show: false
},
data: [
{
value: 1048,
name: 'Search Engine'
},
{
value: 735,
name: 'Direct'
},
{
value: 580,
name: 'Email'
},
{
value: 484,
name: 'Union Ads'
}, {
value: 300,
name: 'Video Ads'
}
]
}
]
});
});
\t\t\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<!-- End Website Traffic -->

\t\t\t\t\t\t\t<!-- News & Updates Traffic -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">News &amp; Updates
\t\t\t\t\t\t\t\t\t\t<span>| Today</span>
\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t<div class=\"news\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/news-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Nihil blanditiis at in nihil autem</a>
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/news-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Quidem autem et impedit</a>
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/news-3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Id quia et et ut maxime similique occaecati ut</a>
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/news-4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Laborum corporis quo dara net para</a>
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/news-5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Et dolores corrupti quae illo quod dolor</a>
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- End sidebar recent posts-->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End News & Updates -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Right side columns -->

\t\t\t\t\t</div>
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1202
    public function block_scriptjs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scriptjs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scriptjs"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1430 => 1202,  651 => 391,  641 => 390,  627 => 379,  624 => 378,  614 => 377,  594 => 9,  581 => 1203,  579 => 1202,  575 => 1201,  569 => 1198,  565 => 1197,  561 => 1196,  557 => 1195,  553 => 1194,  549 => 1193,  545 => 1192,  541 => 1191,  509 => 1161,  507 => 390,  498 => 383,  496 => 377,  476 => 360,  465 => 352,  454 => 344,  443 => 336,  429 => 325,  418 => 317,  391 => 293,  342 => 247,  314 => 222,  297 => 208,  280 => 194,  149 => 66,  145 => 65,  125 => 48,  115 => 41,  110 => 39,  105 => 37,  100 => 35,  95 => 33,  90 => 31,  85 => 29,  73 => 20,  67 => 17,  59 => 11,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>
\t\t\t{% block title %}Dashboard
\t\t\t{% endblock %}
\t\t</title>
\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"{{ asset('img/favicon.png') }}\" rel=\"icon\">

\t\t<link
\t\thref=\"{{ asset('/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">


\t\t<!-- Google Fonts -->
\t\t<link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t<link href=\"{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

\t\t<link href=\"{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">

\t\t<link href=\"{{ asset('/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">

\t\t<link href=\"{{ asset('/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">

\t\t<link href=\"{{ asset('/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">

\t\t<link href=\"{{ asset('/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">

\t\t<link href=\"{{ asset('/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/echarts@5.1.2/dist/echarts.min.css\">

\t\t<!-- Template Main CSS File -->
\t\t<link
\t\thref=\"{{ asset('/css/style.css') }}\" rel=\"stylesheet\">


\t<!-- =======================================================
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Template Name: NiceAdmin - v2.5.0
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Author: BootstrapMade.com
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* License: https://bootstrapmade.com/license/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t======================================================== -->
\t</head>

\t<body>

\t\t<!-- ======= Header ======= -->
\t\t<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t<a href=\"{{ path ('app_dashboard') }}\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<img src=\"{{ asset('img/logo.png') }}\" alt=\"\">
\t\t\t\t\t<span class=\"d-none d-lg-block\">SportsVerse</span>
\t\t\t\t</a>
\t\t\t\t<i class=\"bi bi-list toggle-sidebar-btn\"></i>
\t\t\t</div>
\t\t\t<!-- End Logo -->

\t\t\t<div class=\"search-bar\">
\t\t\t\t<form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
\t\t\t\t\t<input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
\t\t\t\t\t<button type=\"submit\" title=\"Search\">
\t\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- End Search Bar -->

\t\t\t<nav class=\"header-nav ms-auto\">
\t\t\t\t<ul class=\"d-flex align-items-center\">

\t\t\t\t\t<li class=\"nav-item d-block d-lg-none\">
\t\t\t\t\t\t<a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Search Icon-->

\t\t\t\t\t<li class=\"nav-item dropdown\">

\t\t\t\t\t\t<a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<i class=\"bi bi-bell\"></i>
\t\t\t\t\t\t\t<span class=\"badge bg-primary badge-number\">4</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- End Notification Icon -->

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\tYou have 4 new notifications
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-exclamation-circle text-warning\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Lorem Ipsum</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>30 min. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle text-danger\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Atque rerum nesciunt</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>1 hr. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle text-success\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Sit rerum fuga</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>2 hrs. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-info-circle text-primary\"></i>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4>Dicta reprehenderit</h4>
\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t<p>4 hrs. ago</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t<a href=\"#\">Show all notifications</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- End Notification Dropdown Items -->

\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Notification Nav -->

\t\t\t\t\t<li class=\"nav-item dropdown\">

\t\t\t\t\t\t<a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<i class=\"bi bi-chat-left-text\"></i>
\t\t\t\t\t\t\t<span class=\"badge bg-success badge-number\">3</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- End Messages Icon -->

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\tYou have 3 new messages
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle') }}\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Maria Hudson</h4>
\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t<p>4 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle') }}\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Anna Nelson</h4>
\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t<p>6 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle') }}\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>David Muldon</h4>
\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t<p>8 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t<a href=\"#\">Show all messages</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- End Messages Dropdown Items -->

\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Messages Nav -->

\t\t\t\t\t<li class=\"nav-item dropdown pe-3\">

\t\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<img src=\"{{ asset('/img/profile-img.jpg') }}\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">K.Anderson
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t<h6>Kevin Anderson</h6>
\t\t\t\t\t\t\t\t<span>Web Designer</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t<span>My Profile</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-gear\"></i>
\t\t\t\t\t\t\t\t\t<span>Account Settings</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-question-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Need Help?</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"{{path('app_logout')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t<span>Sign Out</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- End Profile Dropdown Items -->
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Profile Nav -->

\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- End Icons Navigation -->

\t\t</header>
\t\t<!-- End Header -->

\t\t<!-- ======= Sidebar ======= -->
\t\t<aside id=\"sidebar\" class=\"sidebar\">

\t\t\t<ul class=\"sidebar-nav\" id=\"sidebar-nav\">

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path ('app_dashboard') }}\">
\t\t\t\t\t\t<i class=\"bi bi-grid\"></i>
\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Dashboard Nav -->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"{{ path ('app_users_admin') }}\">
\t\t\t\t\t\t<i class=\"bi bi-menu-button-wide\"></i>
\t\t\t\t\t\t<span>users</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Components Nav -->


\t\t\t\t<!-- End Forms Nav -->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"{{ path ('app_dashboard') }}\">
\t\t\t\t\t\t<i class=\"bi bi-layout-text-window-reverse\"></i>
\t\t\t\t\t\t<span>Produits</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Tables Nav -->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"{{ path ('app_dashboard') }}\">
\t\t\t\t\t\t<i class=\"bi bi-bar-chart\"></i>
\t\t\t\t\t\t<span>Commandes</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Charts Nav -->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"{{ path ('app_dashboard') }}\">
\t\t\t\t\t\t<i class=\"bi bi-gem\"></i>
\t\t\t\t\t\t<span>Seances</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Charts Nav -->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"{{ path ('app_dashboard') }}\">
\t\t\t\t\t\t<i class=\"bi bi-gem\"></i>
\t\t\t\t\t\t<span>Reclamations</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Icons Nav -->
\t\t\t</ul>

\t\t</aside>
\t\t<!-- End Sidebar-->

\t\t<main id=\"main\" class=\"main\">

\t\t\t<div class=\"pagetitle\">
\t\t\t\t<h1>Dashboard</h1>
\t\t\t\t<nav>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t{% block navigation %}
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path ('app_dashboard') }}\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Dashboard</li>
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t</ol>
\t\t\t\t</nav>
\t\t\t</div>

\t\t\t<!-- End Page Title -->

\t\t\t<section class=\"section dashboard\">
\t\t\t\t{% block body %}
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t<!-- Left side columns -->
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t\t<!-- Sales Card -->
\t\t\t\t\t\t\t\t<div class=\"col-xxl-4 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"card info-card sales-card\">

\t\t\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Sales
\t\t\t\t\t\t\t\t\t\t\t\t<span>| Today</span>
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>145</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success small pt-1 fw-bold\">12%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted small pt-2 ps-1\">increase</span>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Sales Card -->

\t\t\t\t\t\t\t\t<!-- Revenue Card -->
\t\t\t\t\t\t\t\t<div class=\"col-xxl-4 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"card info-card revenue-card\">

\t\t\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Revenue
\t\t\t\t\t\t\t\t\t\t\t\t<span>| This Month</span>
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-currency-dollar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>\$3,264</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success small pt-1 fw-bold\">8%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted small pt-2 ps-1\">increase</span>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Revenue Card -->

\t\t\t\t\t\t\t\t<!-- Customers Card -->
\t\t\t\t\t\t\t\t<div class=\"col-xxl-4 col-xl-12\">

\t\t\t\t\t\t\t\t\t<div class=\"card info-card customers-card\">

\t\t\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Customers
\t\t\t\t\t\t\t\t\t\t\t\t<span>| This Year</span>
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>1244</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger small pt-1 fw-bold\">12%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted small pt-2 ps-1\">decrease</span>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Customers Card -->

\t\t\t\t\t\t\t\t<!-- Reports -->
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"card\">


\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Reports
\t\t\t\t\t\t\t\t\t\t\t\t<span>/Today</span>
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<!-- pie Chart -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"pieChart\" style=\"width: 100%; height: 400px;\"></div>


\t\t\t\t\t\t\t\t\t\t\t<!-- End pie Chart -->

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Reports -->

\t\t\t\t\t\t\t\t<!-- Recent Sales -->
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"card recent-sales overflow-auto\">

\t\t\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Recent Sales
\t\t\t\t\t\t\t\t\t\t\t\t<span>| Today</span>
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless datatable\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Customer</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Product</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Price</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#2457</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Brandon Jacob</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary\">At praesentium minu</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$64</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\">Approved</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#2147</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Bridie Kessler</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary\">Blanditiis dolor omnis similique</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$47</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning\">Pending</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#2049</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Ashleigh Langosh</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary\">At recusandae consectetur</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$147</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\">Approved</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#2644</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Angus Grady</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primar\">Ut voluptatem id earum et</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$67</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\">Rejected</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#2644</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Raheem Lehner</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary\">Sunt similique distinctio</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$165</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\">Approved</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Recent Sales -->

\t\t\t\t\t\t\t\t<!-- Top Selling -->
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"card top-selling overflow-auto\">

\t\t\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Top Selling
\t\t\t\t\t\t\t\t\t\t\t\t<span>| Today</span>
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Preview</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Product</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Price</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Sold</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Revenue</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/product-1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary fw-bold\">Ut inventore ipsa voluptas nulla</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$64</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fw-bold\">124</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$5,828</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/product-2.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary fw-bold\">Exercitationem similique doloremque</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$46</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fw-bold\">98</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$4,508</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/product-3.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary fw-bold\">Doloribus nisi exercitationem</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$59</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fw-bold\">74</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$4,366</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/product-4.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary fw-bold\">Officiis quaerat sint rerum error</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$32</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fw-bold\">63</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$2,016</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/product-5.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary fw-bold\">Sit unde debitis delectus repellendus</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$79</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"fw-bold\">41</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\$3,239</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Top Selling -->

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Left side columns -->

\t\t\t\t\t\t<!-- Right side columns -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-lg-4\">

\t\t\t\t\t\t\t<!-- Recent Activity -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Recent Activity
\t\t\t\t\t\t\t\t\t\t<span>| Today</span>
\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t<div class=\"activity\">

\t\t\t\t\t\t\t\t\t\t<div class=\"activity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activite-label\">32 min</div>
\t\t\t\t\t\t\t\t\t\t\t<i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t\t\tQuia quae rerum
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-bold text-dark\">explicabo officiis</a>
\t\t\t\t\t\t\t\t\t\t\t\tbeatae
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t\t<div class=\"activity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activite-label\">56 min</div>
\t\t\t\t\t\t\t\t\t\t\t<i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t\t\tVoluptatem blanditiis blanditiis eveniet
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t\t<div class=\"activity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activite-label\">2 hrs</div>
\t\t\t\t\t\t\t\t\t\t\t<i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t\t\tVoluptates corrupti molestias voluptatem
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t\t<div class=\"activity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activite-label\">1 day</div>
\t\t\t\t\t\t\t\t\t\t\t<i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t\t\tTempore autem saepe
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-bold text-dark\">occaecati voluptatem</a>
\t\t\t\t\t\t\t\t\t\t\t\ttempore
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t\t<div class=\"activity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activite-label\">2 days</div>
\t\t\t\t\t\t\t\t\t\t\t<i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t\t\tEst sit eum reiciendis exercitationem
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t\t<div class=\"activity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activite-label\">4 weeks</div>
\t\t\t\t\t\t\t\t\t\t\t<i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t\t\tDicta dolorem harum nulla eius. Ut quidem quidem sit quas
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Recent Activity -->

\t\t\t\t\t\t\t<!-- Budget Report -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Budget Report
\t\t\t\t\t\t\t\t\t\t<span>| This Month</span>
\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t<div id=\"budgetChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\tdocument.addEventListener(\"DOMContentLoaded\", () => {
var budgetChart = echarts.init(document.querySelector(\"#budgetChart\")).setOption({
legend: {
data: ['Allocated Budget', 'Actual Spending']
},
radar: { // shape: 'circle',
indicator: [
{
name: 'Sales',
max: 6500
},
{
name: 'Administration',
max: 16000
},
{
name: 'Information Technology',
max: 30000
},
{
name: 'Customer Support',
max: 38000
}, {
name: 'Development',
max: 52000
}, {
name: 'Marketing',
max: 25000
}
]
},
series: [
{
name: 'Budget vs spending',
type: 'radar',
data: [
{
value: [
4200,
3000,
20000,
35000,
50000,
18000
],
name: 'Allocated Budget'
}, {
value: [
5000,
14000,
28000,
26000,
42000,
21000
],
name: 'Actual Spending'
}
]
}
]
});
});
\t\t\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Budget Report -->

\t\t\t\t\t\t\t<!-- Website Traffic -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Website Traffic
\t\t\t\t\t\t\t\t\t\t<span>| Today</span>
\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t<div id=\"trafficChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\tdocument.addEventListener(\"DOMContentLoaded\", () => {
echarts.init(document.querySelector(\"#trafficChart\")).setOption({
tooltip: {
trigger: 'item'
},
legend: {
top: '5%',
left: 'center'
},
series: [
{
name: 'Access From',
type: 'pie',
radius: [
'40%', '70%'
],
avoidLabelOverlap: false,
label: {
show: false,
position: 'center'
},
emphasis: {
label: {
show: true,
fontSize: '18',
fontWeight: 'bold'
}
},
labelLine: {
show: false
},
data: [
{
value: 1048,
name: 'Search Engine'
},
{
value: 735,
name: 'Direct'
},
{
value: 580,
name: 'Email'
},
{
value: 484,
name: 'Union Ads'
}, {
value: 300,
name: 'Video Ads'
}
]
}
]
});
});
\t\t\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<!-- End Website Traffic -->

\t\t\t\t\t\t\t<!-- News & Updates Traffic -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"filter\">
\t\t\t\t\t\t\t\t\t<a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-three-dots\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header text-start\">
\t\t\t\t\t\t\t\t\t\t\t<h6>Filter</h6>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Today</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">This Year</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">News &amp; Updates
\t\t\t\t\t\t\t\t\t\t<span>| Today</span>
\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t<div class=\"news\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/news-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Nihil blanditiis at in nihil autem</a>
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/news-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Quidem autem et impedit</a>
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/news-3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Id quia et et ut maxime similique occaecati ut</a>
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/news-4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Laborum corporis quo dara net para</a>
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/news-5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Et dolores corrupti quae illo quod dolor</a>
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- End sidebar recent posts-->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End News & Updates -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Right side columns -->

\t\t\t\t\t</div>
\t\t\t\t{% endblock %}
\t\t\t</section>

\t\t</main>
\t\t<!-- End #main -->

\t\t<!-- ======= Footer ======= -->
\t\t<footer id=\"footer\" class=\"footer\">
\t\t\t<div class=\"copyright\">
\t\t\t\t&copy; Copyright
\t\t\t\t<strong>
\t\t\t\t\t<span>NiceAdmin</span>
\t\t\t\t</strong>. All Rights Reserved
\t\t\t</div>
\t\t\t<div class=\"credits\">
\t\t\t\t<!-- All the links in the footer should remain intact. -->
\t\t\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
\t\t\t\tDesigned by
\t\t\t\t\t<a href=\"https://bootstrapmade.com/\"> BootstrapMade</a>
\t\t\t</div>
\t\t</footer>
\t\t<!-- End Footer -->

\t\t<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t</a>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/echarts@5.1.2/dist/echarts.min.js\"></script>

\t\t<!-- Vendor JS Files -->
\t\t<script src=\"{{ asset('/vendor/apexcharts/apexcharts.min.js') }}\"></script>
\t\t<script src=\"{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
\t\t<script src=\"{{ asset('/vendor/chart.js/chart.umd.js') }}\"></script>
\t\t<script src=\"{{ asset('/vendor/echarts/echarts.min.js') }}\"></script>
\t\t<script src=\"{{ asset('/vendor/quill/quill.min.js') }}\"></script>
\t\t<script src=\"{{ asset('/vendor/simple-datatables/simple-datatables.js') }}\"></script>
\t\t<script src=\"{{ asset('/vendor/tinymce/tinymce.min.js') }}\"></script>
\t\t<script src=\"{{ asset('/vendor/php-email-form/validate.js') }}\"></script>

\t\t<!-- Template Main JS File -->
\t\t<script src=\"{{ asset('/js/main_admin.js') }}\"></script>
\t\t{% block scriptjs %}{% endblock %}

\t</body>
</html>
", "dashboard/index1.html.twig", "C:\\Users\\SaebaRyo\\Desktop\\xchangexSymfony-user - Copy\\templates\\dashboard\\index1.html.twig");
    }
}
