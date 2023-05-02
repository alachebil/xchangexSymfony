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

/* echange/showF.html.twig */
class __TwigTemplate_4ad11926883fc979fd81db37060d3d76 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "echange/showF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "echange/showF.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "echange/showF.html.twig", 1);
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

        echo "Echange";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Echange</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdEchange</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["echange"]) || array_key_exists("echange", $context) ? $context["echange"] : (function () { throw new RuntimeError('Variable "echange" does not exist.', 12, $this->source); })()), "idEchange", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["echange"]) || array_key_exists("echange", $context) ? $context["echange"] : (function () { throw new RuntimeError('Variable "echange" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateEchange</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["dateString"]) || array_key_exists("dateString", $context) ? $context["dateString"] : (function () { throw new RuntimeError('Variable "dateString" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>LieuEchange</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["echange"]) || array_key_exists("echange", $context) ? $context["echange"] : (function () { throw new RuntimeError('Variable "echange" does not exist.', 24, $this->source); })()), "lieuEchange", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TypeEchange</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["echange"]) || array_key_exists("echange", $context) ? $context["echange"] : (function () { throw new RuntimeError('Variable "echange" does not exist.', 28, $this->source); })()), "typeEchange", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_echange_front");
        echo "\">Back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_echange_editF", ["idEchange" => twig_get_attribute($this->env, $this->source, (isset($context["echange"]) || array_key_exists("echange", $context) ? $context["echange"] : (function () { throw new RuntimeError('Variable "echange" does not exist.', 35, $this->source); })()), "idEchange", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">Edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "echange/_deleteF_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "echange/showF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 37,  137 => 35,  132 => 33,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefront.html.twig' %}

{% block title %}Echange{% endblock %}

{% block body %}
    <h1>Echange</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdEchange</th>
                <td>{{ echange.idEchange }}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ echange.username }}</td>
            </tr>
            <tr>
                <th>DateEchange</th>
                <td>{{  dateString }}</td>
            </tr>
            <tr>
                <th>LieuEchange</th>
                <td>{{ echange.lieuEchange }}</td>
            </tr>
            <tr>
                <th>TypeEchange</th>
                <td>{{ echange.typeEchange }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_echange_front') }}\">Back to list</a>

    <a href=\"{{ path('app_echange_editF', {'idEchange': echange.idEchange}) }}\">Edit</a>

    {{ include('echange/_deleteF_form.html.twig') }}
{% endblock %}
", "echange/showF.html.twig", "C:\\xampp\\htdocs\\integration web\\xchangexSymfony-user - Copy\\templates\\echange\\showF.html.twig");
    }
}
