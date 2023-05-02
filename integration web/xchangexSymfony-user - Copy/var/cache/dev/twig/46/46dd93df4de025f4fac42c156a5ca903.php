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

/* livreur/show.html.twig */
class __TwigTemplate_317e9973298c72bd0802c600419e175d extends Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "livreur/show.html.twig", 1);
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

        echo "Livreur";
        
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
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livreur_index");
        echo "\"class=\"btn btn-info rounded-pill m-2\" ><i class=\"fa fa-arrow-left\" ></i></a>

    <h1>Livreur</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livreur"]) || array_key_exists("livreur", $context) ? $context["livreur"] : (function () { throw new RuntimeError('Variable "livreur" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Num</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livreur"]) || array_key_exists("livreur", $context) ? $context["livreur"] : (function () { throw new RuntimeError('Variable "livreur" does not exist.', 18, $this->source); })()), "num", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NomLiv</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livreur"]) || array_key_exists("livreur", $context) ? $context["livreur"] : (function () { throw new RuntimeError('Variable "livreur" does not exist.', 22, $this->source); })()), "nomLiv", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PrenomLiv</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livreur"]) || array_key_exists("livreur", $context) ? $context["livreur"] : (function () { throw new RuntimeError('Variable "livreur" does not exist.', 26, $this->source); })()), "prenomLiv", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livreur"]) || array_key_exists("livreur", $context) ? $context["livreur"] : (function () { throw new RuntimeError('Variable "livreur" does not exist.', 30, $this->source); })()), "localisation", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>


    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livreur_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["livreur"]) || array_key_exists("livreur", $context) ? $context["livreur"] : (function () { throw new RuntimeError('Variable "livreur" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\"class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-edit\"></i></a>

    ";
        // line 38
        echo twig_include($this->env, $context, "livreur/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "livreur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 38,  137 => 36,  128 => 30,  121 => 26,  114 => 22,  107 => 18,  100 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Livreur{% endblock %}

{% block body %}
    <a href=\"{{ path('app_livreur_index') }}\"class=\"btn btn-info rounded-pill m-2\" ><i class=\"fa fa-arrow-left\" ></i></a>

    <h1>Livreur</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>id</th>
                <td>{{ livreur.id }}</td>
            </tr>
            <tr>
                <th>Num</th>
                <td>{{ livreur.num }}</td>
            </tr>
            <tr>
                <th>NomLiv</th>
                <td>{{ livreur.nomLiv }}</td>
            </tr>
            <tr>
                <th>PrenomLiv</th>
                <td>{{ livreur.prenomLiv }}</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>{{ livreur.localisation }}</td>
            </tr>
        </tbody>
    </table>


    <a href=\"{{ path('app_livreur_edit', {'id': livreur.id}) }}\"class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-edit\"></i></a>

    {{ include('livreur/_delete_form.html.twig') }}
{% endblock %}
", "livreur/show.html.twig", "C:\\xampp\\htdocs\\integration web\\xchangexSymfony-user - Copy\\templates\\livreur\\show.html.twig");
    }
}
