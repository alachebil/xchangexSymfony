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

/* user/update.html.twig */
class __TwigTemplate_2912bdaa4feb38f53af60d806241eddb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/update.html.twig"));

        $this->parent = $this->loadTemplate("Admin/index.html.twig", "user/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

\t<div class=\"container-xxl flex-grow-1 container-p-y\">
\t\t<h4 class=\"fw-bold py-3 mb-4\">
\t\t\t<span class=\"text-muted fw-light\">Update/</span>
\t\t\tUser</h4>

\t\t<!-- Basic Layout -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 col-xl-6\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<div class=\"card-header d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<h5 class=\"mb-0\">Modifier les informations de l'utilisateur</h5>
\t\t\t\t\t\t<small class=\"text-muted float-end\">Merged input group</small>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"basic-icon-default-fullname\">Nom</label>
\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-merge\">
\t\t\t\t\t\t\t\t\t\t<span id=\"basic-icon-default-nom\" class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-user\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p style=\"display: none\" id=\"error-nom\" class=\"invalid-feedback\"></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"basic-icon-default-fullname\">Prenom</label>
\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-merge\">
\t\t\t\t\t\t\t\t\t\t<span id=\"basic-icon-default-prenom\" class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-user\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "prenom", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p style=\"display: none\" id=\"error-prenom\" class=\"invalid-feedback\"></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"basic-icon-default-company\">Email</label>
\t\t\t\t\t\t\t<div class=\"input-group input-group-merge\">
\t\t\t\t\t\t\t\t<span id=\"basic-icon-default-email\" class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bx-envelope\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "email", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span id=\"basic-icon-default-email\" class=\"input-group-text\">@example.com</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p style=\"display: none\" id=\"error-email\" class=\"invalid-feedback\"></p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"basic-icon-default-phone\">Telephone</label>
\t\t\t\t\t\t\t<div class=\"input-group input-group-merge\">
\t\t\t\t\t\t\t\t<span id=\"basic-icon-default-telephone\" class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bx-phone\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "num_tel", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p style=\"display: none\" id=\"error-telephone\" class=\"invalid-feedback\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"basic-icon-default-message\">Adresse</label>
\t\t\t\t\t\t\t<div class=\"input-group input-group-merge\">
\t\t\t\t\t\t\t\t<span id=\"basic-icon-default-cin\" class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bx-comment\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "adresse", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p style=\"display: none\" id=\"error-cin\" class=\"invalid-feedback\"></p>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"basic-icon-default-message\">Role</label>
\t\t\t\t\t\t\t<div class=\"input-group input-group-merge\">
\t\t\t\t\t\t\t\t<span id=\"basic-icon-default-role\" class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bx-comment\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "rolle", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-select"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p style=\"display: none\" id=\"error-role\" class=\"invalid-feedback\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t

\t\t\t\t\t\t";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "submit", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "btn btn-primary w-100 m-2"]]);
        echo "

\t\t\t\t\t\t";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 98,  198 => 96,  189 => 90,  174 => 78,  161 => 68,  146 => 56,  130 => 43,  117 => 33,  105 => 24,  87 => 8,  77 => 7,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/index.html.twig' %}


{% block header %}{% endblock %}


{% block body %}


\t<div class=\"container-xxl flex-grow-1 container-p-y\">
\t\t<h4 class=\"fw-bold py-3 mb-4\">
\t\t\t<span class=\"text-muted fw-light\">Update/</span>
\t\t\tUser</h4>

\t\t<!-- Basic Layout -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 col-xl-6\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<div class=\"card-header d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<h5 class=\"mb-0\">Modifier les informations de l'utilisateur</h5>
\t\t\t\t\t\t<small class=\"text-muted float-end\">Merged input group</small>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"basic-icon-default-fullname\">Nom</label>
\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-merge\">
\t\t\t\t\t\t\t\t\t\t<span id=\"basic-icon-default-nom\" class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-user\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.nom, { 'attr' : { 'class' : 'form-control' } }) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p style=\"display: none\" id=\"error-nom\" class=\"invalid-feedback\"></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"basic-icon-default-fullname\">Prenom</label>
\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-merge\">
\t\t\t\t\t\t\t\t\t\t<span id=\"basic-icon-default-prenom\" class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-user\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.prenom, { 'attr' : { 'class' : 'form-control' } }) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p style=\"display: none\" id=\"error-prenom\" class=\"invalid-feedback\"></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"basic-icon-default-company\">Email</label>
\t\t\t\t\t\t\t<div class=\"input-group input-group-merge\">
\t\t\t\t\t\t\t\t<span id=\"basic-icon-default-email\" class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bx-envelope\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{ form_widget(form.email, { 'attr' : { 'class' : 'form-control' } }) }}
\t\t\t\t\t\t\t\t<span id=\"basic-icon-default-email\" class=\"input-group-text\">@example.com</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p style=\"display: none\" id=\"error-email\" class=\"invalid-feedback\"></p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"basic-icon-default-phone\">Telephone</label>
\t\t\t\t\t\t\t<div class=\"input-group input-group-merge\">
\t\t\t\t\t\t\t\t<span id=\"basic-icon-default-telephone\" class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bx-phone\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{ form_widget(form.num_tel, { 'attr' : { 'class' : 'form-control' } }) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p style=\"display: none\" id=\"error-telephone\" class=\"invalid-feedback\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"basic-icon-default-message\">Adresse</label>
\t\t\t\t\t\t\t<div class=\"input-group input-group-merge\">
\t\t\t\t\t\t\t\t<span id=\"basic-icon-default-cin\" class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bx-comment\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{ form_widget(form.adresse, { 'attr' : { 'class' : 'form-control' } }) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p style=\"display: none\" id=\"error-cin\" class=\"invalid-feedback\"></p>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"basic-icon-default-message\">Role</label>
\t\t\t\t\t\t\t<div class=\"input-group input-group-merge\">
\t\t\t\t\t\t\t\t<span id=\"basic-icon-default-role\" class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bx-comment\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{ form_widget(form.rolle, { 'attr' : { 'class' : 'form-select' } }) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p style=\"display: none\" id=\"error-role\" class=\"invalid-feedback\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t

\t\t\t\t\t\t{{ form_widget(form.submit, { 'attr' : { 'class' : 'btn btn-primary w-100 m-2' } }) }}

\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


{% endblock %}
", "user/update.html.twig", "C:\\Users\\sbekr\\OneDrive\\Desktop\\integration web\\xchangexSymfony-user - Copy\\templates\\user\\update.html.twig");
    }
}
