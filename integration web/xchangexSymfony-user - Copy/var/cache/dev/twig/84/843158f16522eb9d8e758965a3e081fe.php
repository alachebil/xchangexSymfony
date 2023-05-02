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

/* echange/front_index.html.twig */
class __TwigTemplate_7e883fd3142de077f65952c6f6f40005 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "echange/front_index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "echange/front_index.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "echange/front_index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Echange ";
        
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "notification"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        <div class=\"alert alert-info alert-dismissible fade show\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    
    <h1>Echange: (";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["echanges"]) || array_key_exists("echanges", $context) ? $context["echanges"] : (function () { throw new RuntimeError('Variable "echanges" does not exist.', 13, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 13), "html", null, true);
        echo ") </h1>

    <table class=\"table\">
        <thead>
            <tr>
                ";
        // line 19
        echo "                <th>Username</th>
                <th>DateEchange</th>
                <th>LieuEchange</th>
                <th>TypeEchange</th>
                <th>Actions</th> 
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["echanges"]) || array_key_exists("echanges", $context) ? $context["echanges"] : (function () { throw new RuntimeError('Variable "echanges" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["echange"]) {
            // line 28
            echo "            <tr>
                ";
            // line 30
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["echange"], "username", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["echange"], "dateEchange", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["echange"], "lieuEchange", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["echange"], "typeEchange", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_echange_showF", ["idEchange" => twig_get_attribute($this->env, $this->source, $context["echange"], "idEchange", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_echange_editF", ["idEchange" => twig_get_attribute($this->env, $this->source, $context["echange"], "idEchange", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">edit</a>
                    <center><a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_note");
            echo "\">Raaa</a></center>
                    <center> <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new", ["idEchan" => twig_get_attribute($this->env, $this->source, $context["echange"], "idEchange", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Reclamer</a></center>

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['echange'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
    ";
        // line 49
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["echanges"]) || array_key_exists("echanges", $context) ? $context["echanges"] : (function () { throw new RuntimeError('Variable "echanges" does not exist.', 49, $this->source); })()));
        echo "

    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_echange_newF");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "echange/front_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 51,  187 => 49,  183 => 47,  174 => 43,  164 => 38,  160 => 37,  156 => 36,  152 => 35,  147 => 33,  143 => 32,  139 => 31,  134 => 30,  131 => 28,  126 => 27,  116 => 19,  108 => 13,  105 => 12,  95 => 9,  92 => 8,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefront.html.twig' %}


{% block title %}Echange {% endblock %}

{% block body %}
{% for message in app.flashes('notification') %}
        <div class=\"alert alert-info alert-dismissible fade show\">
            {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
    {% endfor %}    
    <h1>Echange: ({{ echanges.getTotalItemCount }}) </h1>

    <table class=\"table\">
        <thead>
            <tr>
                {#<th>IdEchange</th>#}
                <th>Username</th>
                <th>DateEchange</th>
                <th>LieuEchange</th>
                <th>TypeEchange</th>
                <th>Actions</th> 
            </tr>
        </thead>
        <tbody>
        {% for echange in echanges %}
            <tr>
                {#<td>{{ echange.idEchange }}</td>#}
                <td>{{ echange.username }}</td>
                <td>{{ echange.dateEchange }}</td>
                <td>{{ echange.lieuEchange }}</td>
                <td>{{ echange.typeEchange }}</td>
                <td>
                    <a href=\"{{ path('app_echange_showF', {'idEchange': echange.idEchange}) }}\">show</a>
                    <a href=\"{{ path('app_echange_editF', {'idEchange': echange.idEchange}) }}\">edit</a>
                    <center><a href=\"{{ path('update_note') }}\">Raaa</a></center>
                    <center> <a href=\"{{ path('app_reclamation_new',{'idEchan':echange.idEchange}) }}\" class=\"btn btn-primary\">Reclamer</a></center>

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {{ knp_pagination_render(echanges) }}

    <a href=\"{{ path('app_echange_newF') }}\">Create new</a>
{% endblock %}
", "echange/front_index.html.twig", "C:\\xampp\\htdocs\\integration web\\xchangexSymfony-user - Copy\\templates\\echange\\front_index.html.twig");
    }
}
