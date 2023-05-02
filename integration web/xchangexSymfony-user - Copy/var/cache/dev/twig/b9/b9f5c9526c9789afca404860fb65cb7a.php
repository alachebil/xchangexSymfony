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

/* user/create.html.twig */
class __TwigTemplate_4c0ffd6adc9f717f22b753cb8ddd1c61 extends Template
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
        return "home/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/create.html.twig"));

        $this->parent = $this->loadTemplate("home/index.html.twig", "user/create.html.twig", 1);
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
\t\t\t\t<div class=\"col-first\">
\t\t\t\t\t<h1>
\t\t\t\t\t\tinscrire</h1>
\t\t\t\t\t<nav class=\"d-flex align-items-center\">
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
        echo "\t<!--================Login Box Area =================-->
\t<section class=\"login_box_area section_gap\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\" style=\"margin: 0 auto; width: 50%;\">
\t\t\t\t\t<div class=\"login_form_inner\">
\t\t\t\t\t\t<h3>inscription</h3>
\t\t\t\t\t\t";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), 'label', ["label" => "nom"]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nom"]]);
        // line 37
        echo "
\t\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "prenom", [], "any", false, false, false, 43), 'label', ["label" => "prenom"]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "prenom", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "prenom"]]);
        // line 51
        echo "
\t\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "prenom", [], "any", false, false, false, 52), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'label', ["label" => "email"]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "email", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "email"]]);
        // line 63
        echo "
\t\t\t\t\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "num_tel", [], "any", false, false, false, 70), 'label', ["label" => "telephone"]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "num_tel", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "telephone"]]);
        // line 76
        echo "
\t\t\t\t\t\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "num_tel", [], "any", false, false, false, 77), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "adresse", [], "any", false, false, false, 82), 'label', ["label" => "adresse"]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "adresse", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "adresse"]]);
        // line 88
        echo "
\t\t\t\t\t\t\t\t";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "adresse", [], "any", false, false, false, 89), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "password", [], "any", false, false, false, 93), 'label', ["label" => "password"]);
        echo "
\t\t\t\t\t\t\t";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "password", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "password"]]);
        // line 99
        echo "
\t\t\t\t\t\t\t";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "password", [], "any", false, false, false, 100), 'errors');
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "confirmPassword", [], "any", false, false, false, 104), 'label', ["label" => "confirmPassword"]);
        echo "
\t\t\t\t\t\t\t";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "confirmPassword", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "confirmpassword"]]);
        // line 110
        echo "
\t\t\t\t\t\t\t";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "confirmPassword", [], "any", false, false, false, 111), 'errors');
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "role", [], "any", false, false, false, 115), 'label', ["label" => "role"]);
        echo "
\t\t\t\t\t\t\t";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "role", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 120
        echo "
\t\t\t\t\t\t\t";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "role", [], "any", false, false, false, 121), 'errors');
        echo "

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'widget');
        echo "
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t";
        // line 129
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 129, $this->source); })()), "inscrire")) : ("inscrire")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 132
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End Login Box Area =================-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 132,  259 => 129,  254 => 127,  245 => 121,  242 => 120,  240 => 116,  236 => 115,  229 => 111,  226 => 110,  224 => 105,  220 => 104,  213 => 100,  210 => 99,  208 => 94,  204 => 93,  197 => 89,  194 => 88,  192 => 83,  188 => 82,  180 => 77,  177 => 76,  175 => 71,  171 => 70,  162 => 64,  159 => 63,  157 => 58,  153 => 57,  145 => 52,  142 => 51,  140 => 44,  136 => 43,  128 => 38,  125 => 37,  123 => 32,  119 => 31,  113 => 28,  104 => 21,  94 => 20,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"home/index.html.twig\" %}

{% block header %}
\t<!-- Start Banner Area -->
\t<section class=\"banner-area organic-breadcrumb\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end\">
\t\t\t\t<div class=\"col-first\">
\t\t\t\t\t<h1>
\t\t\t\t\t\tinscrire</h1>
\t\t\t\t\t<nav class=\"d-flex align-items-center\">
\t\t\t\t\t\t<a href=\"index.html\">welcome</a>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Banner Area -->
{% endblock %}
{% block body %}
\t<!--================Login Box Area =================-->
\t<section class=\"login_box_area section_gap\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\" style=\"margin: 0 auto; width: 50%;\">
\t\t\t\t\t<div class=\"login_form_inner\">
\t\t\t\t\t\t<h3>inscription</h3>
\t\t\t\t\t\t{{form_start(form, {'attr': {'novalidate': 'novalidate'}})}}
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{{form_label(form.nom, 'nom')}}
\t\t\t\t\t\t\t\t{{form_widget(form.nom,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control',
\t\t\t\t\t\t\t\t\t'placeholder':'nom'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t\t{{form_errors(form.nom)}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{{form_label(form.prenom, 'prenom')}}
\t\t\t\t\t\t\t\t{{form_widget(form.prenom,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control',
\t\t\t\t\t\t\t\t\t'placeholder':'prenom'
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t\t{{form_errors(form.prenom,{'attr' :{'class' : 'text-danger'}})}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{{form_label(form.email, 'email')}}
\t\t\t\t\t\t\t\t{{form_widget(form.email,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control',
\t\t\t\t\t\t\t\t\t'placeholder':'email'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t\t{{form_errors(form.email)}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{{form_label(form.num_tel, 'telephone')}}
\t\t\t\t\t\t\t\t{{form_widget(form.num_tel,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control',
\t\t\t\t\t\t\t\t\t'placeholder':'telephone'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t\t{{form_errors(form.num_tel)}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{{form_label(form.adresse, 'adresse')}}
\t\t\t\t\t\t\t\t{{form_widget(form.adresse,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control',
\t\t\t\t\t\t\t\t\t'placeholder':'adresse'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t\t{{form_errors(form.adresse)}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t{{form_label(form.password, 'password')}}
\t\t\t\t\t\t\t{{form_widget(form.password,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control',
\t\t\t\t\t\t\t\t\t'placeholder':'password'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t{{form_errors(form.password)}}

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t{{form_label(form.confirmPassword, 'confirmPassword')}}
\t\t\t\t\t\t\t{{form_widget(form.confirmPassword,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control',
\t\t\t\t\t\t\t\t\t'placeholder':'confirmpassword'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t{{form_errors(form.confirmPassword)}}

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t{{form_label(form.role, 'role')}}
\t\t\t\t\t\t\t{{form_widget(form.role,{
\t\t\t\t\t\t\t\t'attr' :{
\t\t\t\t\t\t\t\t\t'class' : 'form-control'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t{{form_errors(form.role)}}

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t{{ form_widget(form) }}
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t{{ button_label|default('inscrire') }}
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{form_end(form)}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--================End Login Box Area =================-->
{% endblock %}
", "user/create.html.twig", "C:\\Users\\sbekr\\OneDrive\\Desktop\\integration web\\xchangexSymfony-user - Copy\\templates\\user\\create.html.twig");
    }
}
