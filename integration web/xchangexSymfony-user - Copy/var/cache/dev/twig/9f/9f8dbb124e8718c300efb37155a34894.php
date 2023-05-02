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

/* dashboard/index.html.twig */
class __TwigTemplate_12e13eba08211f640e062b0067ab485c extends Template
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
            'Chart' => [$this, 'block_Chart'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Template Name: NiceAdmin - v2.5.0
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Author: BootstrapMade.com
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* License: https://bootstrapmade.com/license/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t======================================================== -->
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Xchangex.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t<span class=\"d-none d-lg-block\"></span>
\t\t\t\t</a>
\t\t\t\t<i class=\"bi bi-list toggle-sidebar-btn\"></i>
\t\t\t</div>
\t\t\t<!-- End Logo -->

\t\t\t
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
        // line 187
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
        // line 201
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
        // line 215
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
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/profile-img.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
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
        // line 285
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
        // line 309
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
\t\t\t\t\t\t<i class=\"bi bi-grid\"></i>
\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Dashboard Nav -->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"";
        // line 317
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
        // line 328
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
\t\t\t\t\t\t<i class=\"bi bi-layout-text-window-reverse\"></i>
\t\t\t\t\t\t<span>Produits</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Tables Nav -->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"";
        // line 336
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
\t\t\t\t\t\t<i class=\"bi bi-bar-chart\"></i>
\t\t\t\t\t\t<span>Commandes</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Charts Nav -->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"";
        // line 344
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
\t\t\t\t\t\t<i class=\"bi bi-gem\"></i>
\t\t\t\t\t\t<span>Seances</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- End Charts Nav -->

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link \" href=\"";
        // line 352
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
        // line 369
        $this->displayBlock('navigation', $context, $blocks);
        // line 375
        echo "\t\t\t\t\t</ol>
\t\t\t\t</nav>
\t\t\t</div>

\t\t\t<!-- End Page Title -->

\t\t\t<section class=\"section dashboard\">
\t\t\t\t";
        // line 382
        $this->displayBlock('body', $context, $blocks);
        // line 450
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
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Template Main JS File -->
\t\t<script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/main_admin.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 491
        $this->displayBlock('scriptjs', $context, $blocks);
        // line 492
        echo "\t\t";
        $this->displayBlock('Chart', $context, $blocks);
        // line 545
        echo "\t</body>
</html></body></html></body></html>
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

    // line 369
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 370
        echo "\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 371
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Dashboard</li>
\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 382
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 383
        echo "\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t<!-- Left side columns -->
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t


\t\t\t\t\t\t\t\t<!-- Reports -->
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"card\">


\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Users By Location
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<!-- pie Chart -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"pieChart\" style=\"width: 100%; height: 400px;\"></div>


\t\t\t\t\t\t\t\t\t\t\t<!-- End pie Chart -->

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Reports -->

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Left side columns -->

\t\t\t\t\t\t<!-- Right side columns -->
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Recent Activity -->

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Right side columns -->

\t\t\t\t\t</div>
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 491
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

    // line 492
    public function block_Chart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Chart"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Chart"));

        // line 493
        echo "\t\t\t<script>

\t\t\t\tconst chart = echarts.init(document.getElementById('pieChart'));

chart.setOption({
title: {
text: 'Users by country',
left: 'center'
},
toolbox: {
show: true,
feature: {
mark: {
show: true
},
dataView: {
show: true,
readOnly: true
},
saveAsImage: {
show: true
}
}
},
tooltip: {
trigger: 'item',
formatter: '{b}: {c} ({d}%)'
},
series: [
{
type: 'pie',
radius: '70%',
data: [";
        // line 525
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 525, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "{
value: ";
            // line 526
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "count", [], "any", false, false, false, 526), "html", null, true);
            echo ",
name: \"";
            // line 527
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "adresse", [], "any", false, false, false, 527), "html", null, true);
            echo "\"
},";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 528
        echo "],
emphasis: {
itemStyle: {
shadowBlur: 10,
shadowOffsetX: 0,
shadowColor: 'rgba(0, 0, 0, 0.5)'
}
},
label: {
show: true,
formatter: '{b}: {c} ({d}%)'
}
},
]
});
\t\t\t</script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  802 => 528,  794 => 527,  790 => 526,  784 => 525,  750 => 493,  740 => 492,  722 => 491,  646 => 383,  636 => 382,  622 => 371,  619 => 370,  609 => 369,  589 => 9,  577 => 545,  574 => 492,  572 => 491,  568 => 490,  562 => 487,  558 => 486,  554 => 485,  550 => 484,  546 => 483,  542 => 482,  538 => 481,  534 => 480,  502 => 450,  500 => 382,  491 => 375,  489 => 369,  469 => 352,  458 => 344,  447 => 336,  436 => 328,  422 => 317,  411 => 309,  384 => 285,  336 => 240,  308 => 215,  291 => 201,  274 => 187,  150 => 66,  146 => 65,  126 => 48,  116 => 41,  111 => 39,  106 => 37,  101 => 35,  96 => 33,  91 => 31,  86 => 29,  74 => 20,  68 => 17,  60 => 11,  58 => 9,  48 => 1,);
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Template Name: NiceAdmin - v2.5.0
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Author: BootstrapMade.com
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* License: https://bootstrapmade.com/license/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t======================================================== -->
\t</head>

\t<body>

\t\t<!-- ======= Header ======= -->
\t\t<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t<a href=\"{{ path ('app_dashboard') }}\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<img src=\"{{ asset('img/Xchangex.png') }}\" alt=\"\">
\t\t\t\t\t<span class=\"d-none d-lg-block\"></span>
\t\t\t\t</a>
\t\t\t\t<i class=\"bi bi-list toggle-sidebar-btn\"></i>
\t\t\t</div>
\t\t\t<!-- End Logo -->

\t\t\t
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
\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
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

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t


\t\t\t\t\t\t\t\t<!-- Reports -->
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"card\">


\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Users By Location
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<!-- pie Chart -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"pieChart\" style=\"width: 100%; height: 400px;\"></div>


\t\t\t\t\t\t\t\t\t\t\t<!-- End pie Chart -->

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Reports -->

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Left side columns -->

\t\t\t\t\t\t<!-- Right side columns -->
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!-- End activity item-->

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End Recent Activity -->

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t
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
\t\t{% block Chart %}
\t\t\t<script>

\t\t\t\tconst chart = echarts.init(document.getElementById('pieChart'));

chart.setOption({
title: {
text: 'Users by country',
left: 'center'
},
toolbox: {
show: true,
feature: {
mark: {
show: true
},
dataView: {
show: true,
readOnly: true
},
saveAsImage: {
show: true
}
}
},
tooltip: {
trigger: 'item',
formatter: '{b}: {c} ({d}%)'
},
series: [
{
type: 'pie',
radius: '70%',
data: [{% for result in results %}{
value: {{ result.count }},
name: \"{{ result.adresse }}\"
},{% endfor %}],
emphasis: {
itemStyle: {
shadowBlur: 10,
shadowOffsetX: 0,
shadowColor: 'rgba(0, 0, 0, 0.5)'
}
},
label: {
show: true,
formatter: '{b}: {c} ({d}%)'
}
},
]
});
\t\t\t</script>
\t\t{% endblock %}
\t</body>
</html></body></html></body></html>
", "dashboard/index.html.twig", "C:\\Users\\SaebaRyo\\Desktop\\xchangexSymfony-user - Copy\\templates\\dashboard\\index.html.twig");
    }
}
