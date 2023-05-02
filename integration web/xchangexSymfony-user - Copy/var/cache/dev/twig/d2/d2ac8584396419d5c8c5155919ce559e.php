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

/* user/afficher.html.twig */
class __TwigTemplate_42c6bb41b3b1d5ab9b5dc98d3ce33989 extends Template
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
        return "Admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/afficher.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/afficher.html.twig"));

        $this->parent = $this->loadTemplate("Admin/index.html.twig", "user/afficher.html.twig", 1);
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

        echo "User
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1>User</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Email</th>
\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>


\t\t\t\t<th>Role</th>
\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "getRoles", [], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 24
            echo "\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo "</td>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th>Is Banned</th>
\t\t\t\t<td>";
        // line 30
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "isBanned", [], "any", false, false, false, 30)) ? ("banned") : ("No Banned"));
        echo "</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th>Is verified</th>
\t\t\t\t<td>";
        // line 35
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "isVerified", [], "any", false, false, false, 35)) ? ("verifie") : ("No verifie"));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>adresse</th>
\t\t\t\t<td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "adresse", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>num</th>
\t\t\t\t<td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "getNumTel", [], "method", false, false, false, 43), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t";
        // line 49
        echo "\t\t</tbody>
\t</table>

\t";
        // line 57
        echo "
\t\t\t\t\t\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 57,  159 => 49,  154 => 43,  147 => 39,  140 => 35,  132 => 30,  126 => 26,  117 => 24,  113 => 23,  104 => 17,  97 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/index.html.twig' %}

{% block title %}User
{% endblock %}

{% block body %}
\t<h1>User</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>{{ user.id }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Email</th>
\t\t\t\t<td>{{ user.email }}</td>
\t\t\t</tr>
\t\t\t<tr>


\t\t\t\t<th>Role</th>
\t\t\t\t{% for role in user.getRoles() %}
\t\t\t\t\t<td>{{ role }}</td>
\t\t\t\t{% endfor %}
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th>Is Banned</th>
\t\t\t\t<td>{{ user.isBanned? 'banned' : 'No Banned'}}</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th>Is verified</th>
\t\t\t\t<td>{{ user.isVerified ? 'verifie' : 'No verifie'}}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>adresse</th>
\t\t\t\t<td>{{ user.adresse}}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>num</th>
\t\t\t\t<td>{{ user.getNumTel() }}</td>
\t\t\t</tr>
\t\t\t{# <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <th>Naissance</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <td>{{ user.naissance ? user.naissance|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </tr> #}
\t\t</tbody>
\t</table>

\t{# <a href=\"{{ path('app_user_index') }}\">back to list</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t    <a href=\"{{ path('app_user_', {'id': user.id}) }}\">edit</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t    {{ include('user/_delete_form.html.twig') }} #}

\t\t\t\t\t\t
{% endblock %}
", "user/afficher.html.twig", "C:\\Users\\sbekr\\OneDrive\\Desktop\\integration web\\xchangexSymfony-user - Copy\\templates\\user\\afficher.html.twig");
    }
}
