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

/* registration/register.html.twig */
class __TwigTemplate_201ad65022009893d0d62fcd9d1d858f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("Admin/index.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "\t<!-- Start Banner Area -->
\t<section class=\"banner-area organic-breadcrumb\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
\t\t\t\t<div class=\"class=\"text-primary\"\">
\t\t\t\t\t<h1>
\t\t\t\t\t\tinscrire</h1>
\t\t\t\t\t<nav class=\"text-primary\">
\t\t\t\t\t\t<a href=\"index.html\">welcome</a>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Banner Area -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "
\t<section class=\"login_box_area section_gap\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"form-floating mb-3\" style=\"margin: 0 auto; width: 50%;\">
\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t
\t\t\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/login.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t<div class=\"text-center\" <h1>> Inscription</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

\t\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), 'label', ["label" => "nom"]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nom"]]);
        // line 42
        echo "
\t\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "nom", [], "any", false, false, false, 43), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "prenom", [], "any", false, false, false, 48), 'label', ["label" => "prenom"]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "prenom", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "prenom"]]);
        // line 56
        echo "
\t\t\t\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "prenom", [], "any", false, false, false, 57), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), 'label', ["label" => "email"]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "email"]]);
        // line 69
        echo "
\t\t\t\t\t\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "email", [], "any", false, false, false, 70), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "num_tel", [], "any", false, false, false, 75), 'label', ["label" => "telephone"]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "num_tel", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "telephone"]]);
        // line 81
        echo "
\t\t\t\t\t\t\t\t";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "num_tel", [], "any", false, false, false, 82), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "adresse", [], "any", false, false, false, 87), 'label', ["label" => "adresse"]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 88, $this->source); })()), "adresse", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "adresse"]]);
        // line 93
        echo "
\t\t\t\t\t\t\t\t";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), "adresse", [], "any", false, false, false, 94), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 98, $this->source); })()), "password", [], "any", false, false, false, 98), 'label', ["label" => "password"]);
        echo "

\t\t\t\t\t\t\t";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 100, $this->source); })()), "password", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "password"]]);
        // line 105
        echo "
\t\t\t\t\t\t\t";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 106, $this->source); })()), "password", [], "any", false, false, false, 106), 'errors');
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 110, $this->source); })()), "confirmPassword", [], "any", false, false, false, 110), 'label', ["label" => "confirmPassword"]);
        echo "
\t\t\t\t\t\t\t";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 111, $this->source); })()), "confirmPassword", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "confirmpassword"]]);
        // line 116
        echo "
\t\t\t\t\t\t\t";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 117, $this->source); })()), "confirmPassword", [], "any", false, false, false, 117), 'errors');
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 121, $this->source); })()), "rolle", [], "any", false, false, false, 121), 'label', ["label" => "rolle"]);
        echo "
\t\t\t\t\t\t\t";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 122, $this->source); })()), "rolle", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 126
        echo "
\t\t\t\t\t\t\t";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 127, $this->source); })()), "rolle", [], "any", false, false, false, 127), 'errors');
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 131, $this->source); })()), "agreeTerms", [], "any", false, false, false, 131), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">inscrire</button>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 138
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 138, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 138,  261 => 131,  254 => 127,  251 => 126,  249 => 122,  245 => 121,  238 => 117,  235 => 116,  233 => 111,  229 => 110,  222 => 106,  219 => 105,  217 => 100,  212 => 98,  205 => 94,  202 => 93,  200 => 88,  196 => 87,  188 => 82,  185 => 81,  183 => 76,  179 => 75,  171 => 70,  168 => 69,  166 => 64,  162 => 63,  153 => 57,  150 => 56,  148 => 49,  144 => 48,  136 => 43,  133 => 42,  131 => 37,  127 => 36,  120 => 32,  113 => 28,  104 => 21,  94 => 20,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Admin/index.html.twig\" %}

{% block header %}
\t<!-- Start Banner Area -->
\t<section class=\"banner-area organic-breadcrumb\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
\t\t\t\t<div class=\"class=\"text-primary\"\">
\t\t\t\t\t<h1>
\t\t\t\t\t\tinscrire</h1>
\t\t\t\t\t<nav class=\"text-primary\">
\t\t\t\t\t\t<a href=\"index.html\">welcome</a>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Banner Area -->
{% endblock %}
{% block body %}

\t<section class=\"login_box_area section_gap\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"form-floating mb-3\" style=\"margin: 0 auto; width: 50%;\">
\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t
\t\t\t\t\t\t<img src=\"{{ asset('img/login.png') }}\" alt=\"\">
\t\t\t\t\t\t<div class=\"text-center\" <h1>> Inscription</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_start(registrationForm, {'attr': {'novalidate': 'novalidate'}}) }}

\t\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{{form_label(registrationForm.nom, 'nom')}}
\t\t\t\t\t\t\t\t{{form_widget(registrationForm.nom,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control',
\t\t\t\t\t\t\t\t\t'placeholder':'nom'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t\t{{form_errors(registrationForm.nom)}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{{form_label(registrationForm.prenom, 'prenom')}}
\t\t\t\t\t\t\t\t{{form_widget(registrationForm.prenom,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control',
\t\t\t\t\t\t\t\t\t'placeholder':'prenom'
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t\t{{form_errors(registrationForm.prenom,{'attr' :{'class' : 'text-danger'}})}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{{form_label(registrationForm.email, 'email')}}
\t\t\t\t\t\t\t\t{{form_widget(registrationForm.email,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control',
\t\t\t\t\t\t\t\t\t'placeholder':'email'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t\t{{form_errors(registrationForm.email)}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{{form_label(registrationForm.num_tel, 'telephone')}}
\t\t\t\t\t\t\t\t{{form_widget(registrationForm.num_tel,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control',
\t\t\t\t\t\t\t\t\t'placeholder':'telephone'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t\t{{form_errors(registrationForm.num_tel)}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{{form_label(registrationForm.adresse, 'adresse')}}
\t\t\t\t\t\t\t\t{{form_widget(registrationForm.adresse,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control',
\t\t\t\t\t\t\t\t\t'placeholder':'adresse'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t\t{{form_errors(registrationForm.adresse)}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t{{form_label(registrationForm.password, 'password')}}

\t\t\t\t\t\t\t{{form_widget(registrationForm.password,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control',
\t\t\t\t\t\t\t\t\t'placeholder':'password'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t{{form_errors(registrationForm.password)}}

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t{{form_label(registrationForm.confirmPassword, 'confirmPassword')}}
\t\t\t\t\t\t\t{{form_widget(registrationForm.confirmPassword,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control',
\t\t\t\t\t\t\t\t\t'placeholder':'confirmpassword'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t{{form_errors(registrationForm.confirmPassword)}}

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t{{form_label(registrationForm.rolle, 'rolle')}}
\t\t\t\t\t\t\t{{form_widget(registrationForm.rolle,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t{{form_errors(registrationForm.rolle)}}

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t{{ form_row(registrationForm.agreeTerms) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">inscrire</button>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_end(registrationForm) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


{% endblock %}
", "registration/register.html.twig", "C:\\Users\\SaebaRyo\\Desktop\\xchangexSymfony-user - Copy\\templates\\registration\\register.html.twig");
    }
}
