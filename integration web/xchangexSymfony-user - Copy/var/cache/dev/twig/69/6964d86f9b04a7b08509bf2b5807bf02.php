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

/* security/login.html.twig */
class __TwigTemplate_419f92c3d71f38cb10814ecb73b79b5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("Admin/index.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t<section class=\"login_box_area section_gap\">

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"login_box_img\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/login.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t

\t\t\t\t\t\t<h4>welcome to Xchangex</h4>
\t\t\t\t\t\t\t<p>We are proud to welcome you to our service-Product exchange website </p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between mb-3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"btn btn-warning rounded-pill m-2\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Sign up</a>
\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t";
        // line 30
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 31, $this->source); })()), "messageKey", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 31, $this->source); })()), "messageData", [], "any", false, false, false, 31), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        // line 33
        echo "
\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t<div class=\"bg-light rounded p-4 p-sm-5 my-4 mx-3\">
\t\t\t\t\t\t\t<h3>Log in to enter</h3>
\t\t\t\t\t\t\t<div class=\"row login_form\" id=\"contactForm\">

\t\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" placeholder=\"email\" autofocus></div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"password\" autocomplete=\"current-password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"m-n2\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary w-100 m-2\" type=\"submit\">
\t\t\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t<div class=\"m-n2\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-danger rounded-pill m-2\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgot_password_sms");
        echo "\">Mot de passe oublié</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 77,  188 => 66,  166 => 47,  157 => 41,  147 => 33,  141 => 31,  139 => 30,  131 => 25,  118 => 15,  109 => 8,  99 => 7,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/index.html.twig' %}

{% block title %}Log in!
{% endblock %}
{% block header %}{% endblock %}

{% block body %}

\t<section class=\"login_box_area section_gap\">

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"login_box_img\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{asset('img/login.png')}}\" alt=\"\">
\t\t\t\t\t\t

\t\t\t\t\t\t<h4>welcome to Xchangex</h4>
\t\t\t\t\t\t\t<p>We are proud to welcome you to our service-Product exchange website </p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between mb-3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"btn btn-warning rounded-pill m-2\" href=\"{{path('app_register')}}\">Sign up</a>
\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t{% if error %}
\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t<div class=\"bg-light rounded p-4 p-sm-5 my-4 mx-3\">
\t\t\t\t\t\t\t<h3>Log in to enter</h3>
\t\t\t\t\t\t\t<div class=\"row login_form\" id=\"contactForm\">

\t\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" placeholder=\"email\" autofocus></div>

\t\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"password\" autocomplete=\"current-password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"m-n2\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary w-100 m-2\" type=\"submit\">
\t\t\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t<div class=\"m-n2\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-danger rounded-pill m-2\" href=\"{{path('forgot_password_sms')}}\">Mot de passe oublié</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t</section>
{% endblock %}
{% block footer %}{% endblock %}
", "security/login.html.twig", "C:\\Users\\sbekr\\OneDrive\\Desktop\\integration web\\xchangexSymfony-user - Copy\\templates\\security\\login.html.twig");
    }
}
