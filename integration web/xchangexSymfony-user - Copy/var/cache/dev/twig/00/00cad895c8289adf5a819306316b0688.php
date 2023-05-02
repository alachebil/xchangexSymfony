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

/* livraison/index.html.twig */
class __TwigTemplate_90eebdbabb29826d57e0b242e2a5ffb4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "livraison/index.html.twig", 1);
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

        echo "Livraison index";
        
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
        echo "<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"page-header\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                </ol>
            </nav>
        </div>
    <div class=\"row \">
        <div class=\"col-12 grid-margin\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div style=\"display: flex\">
                        <div class=\"col-md-5\">
                        </div>
                        <form method=\"post\" class=\"forms-sample\" style=\"margin-left: -42px\" >
                            <div class=\"form-group col-md-4\" style=\"display: flex; width: 100%!important; margin: 0px!important;\">

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 92px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"type\">type</label>
                                </div>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"adress\" >adress</label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"produit\" >produit</label>
                                </div>

                                <button type=\"Submit\" class=\"btn btn-success btn-fw\" style=\"margin: auto; \">Sort</button>
                            </div>
                        </form>

                    </div>

<ul class=\"navbar-nav w-100\" style=\"margin-top: 18px;\">
                        <li class=\"nav-item w-100\">
                            <form name=\"Search-method\" id=\"Search-method\"method=\"post\" class=\"forms-sample\" style=\"display: flex\">
                                <div class=\"form-group col-md-5\">
                                    <label style=\"margin-top: 11px;margin-left: 10px;margin-right: 14px;padding-bottom: 7px;;\">Option Recherche</label>
                                    <select name=\"optionsearch\" class=\"js-example-basic-single\" style=\"width: 200px;height: 38px; color: white; background-color: #191c24; border-radius: 4px;text-align: center;border: 2px solid #0090e7;margin-right: 15px;\">
                                        <option value=\"\">Choisi un Critére</option>
                                        <option value=\"typeLiv\">type</option>
                                        <option value=\"adressLiv\">adress</option>
                                        <option value=\"produit\">produit</option>
                                    </select>
                                </div>
                                <div class=\"form-group col-md-7\">
                                    <div class=\"input-group\">
                                        <input name=\"Search\" type=\"text\" class=\"form-control\" placeholder=\"Search Livraison\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-sm btn-primary\" type=\"Submit\">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
    <h1>Livraison index</h1>
        <div class=\"row g-4\">
    <div class=\"col-md-12 \">
       <div class=\"bg-light rounded h-100 \">

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>DateLiv</th>
                <th>TypeLiv</th>
                <th>AdressLiv</th>
                <th>Produit</th>
                <th>Email_Client</th>
                <th>actions</th>
            </tr>
        </thead>
               <tbody id=\"myTable\">
        
        
        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraisons"]) || array_key_exists("livraisons", $context) ? $context["livraisons"] : (function () { throw new RuntimeError('Variable "livraisons" does not exist.', 87, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["livraison"]) {
            // line 88
            echo "            <tr>
                <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "id", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                <td>";
            // line 90
            ((twig_get_attribute($this->env, $this->source, $context["livraison"], "dateLiv", [], "any", false, false, false, 90)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "dateLiv", [], "any", false, false, false, 90), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "typeLiv", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "adressLiv", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "produit", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "User", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_show", ["id" => twig_get_attribute($this->env, $this->source, $context["livraison"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\"class=\"btn btn-square btn-secondary m-2\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                    <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["livraison"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\"class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-edit\"></i></a>
                    <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_map", ["id" => twig_get_attribute($this->env, $this->source, $context["livraison"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\" class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-location-arrow\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 102
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livraison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        </tbody>
    </table>
        </div>
    </div>
    </div>
<p><a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generator_service3");
        echo "\" class=\"btn btn-primary px-3 py-1\">PDF</a></p>
    <a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "livraison/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 112,  237 => 111,  230 => 106,  221 => 102,  212 => 98,  208 => 97,  204 => 96,  199 => 94,  195 => 93,  191 => 92,  187 => 91,  183 => 90,  179 => 89,  176 => 88,  171 => 87,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Livraison index{% endblock %}

{% block body %}
<div class=\"main-panel\">
    <div class=\"content-wrapper\">
        <div class=\"page-header\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                </ol>
            </nav>
        </div>
    <div class=\"row \">
        <div class=\"col-12 grid-margin\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div style=\"display: flex\">
                        <div class=\"col-md-5\">
                        </div>
                        <form method=\"post\" class=\"forms-sample\" style=\"margin-left: -42px\" >
                            <div class=\"form-group col-md-4\" style=\"display: flex; width: 100%!important; margin: 0px!important;\">

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 92px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"type\">type</label>
                                </div>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"adress\" >adress</label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"produit\" >produit</label>
                                </div>

                                <button type=\"Submit\" class=\"btn btn-success btn-fw\" style=\"margin: auto; \">Sort</button>
                            </div>
                        </form>

                    </div>

<ul class=\"navbar-nav w-100\" style=\"margin-top: 18px;\">
                        <li class=\"nav-item w-100\">
                            <form name=\"Search-method\" id=\"Search-method\"method=\"post\" class=\"forms-sample\" style=\"display: flex\">
                                <div class=\"form-group col-md-5\">
                                    <label style=\"margin-top: 11px;margin-left: 10px;margin-right: 14px;padding-bottom: 7px;;\">Option Recherche</label>
                                    <select name=\"optionsearch\" class=\"js-example-basic-single\" style=\"width: 200px;height: 38px; color: white; background-color: #191c24; border-radius: 4px;text-align: center;border: 2px solid #0090e7;margin-right: 15px;\">
                                        <option value=\"\">Choisi un Critére</option>
                                        <option value=\"typeLiv\">type</option>
                                        <option value=\"adressLiv\">adress</option>
                                        <option value=\"produit\">produit</option>
                                    </select>
                                </div>
                                <div class=\"form-group col-md-7\">
                                    <div class=\"input-group\">
                                        <input name=\"Search\" type=\"text\" class=\"form-control\" placeholder=\"Search Livraison\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-sm btn-primary\" type=\"Submit\">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
    <h1>Livraison index</h1>
        <div class=\"row g-4\">
    <div class=\"col-md-12 \">
       <div class=\"bg-light rounded h-100 \">

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>DateLiv</th>
                <th>TypeLiv</th>
                <th>AdressLiv</th>
                <th>Produit</th>
                <th>Email_Client</th>
                <th>actions</th>
            </tr>
        </thead>
               <tbody id=\"myTable\">
        
        
        {% for livraison in livraisons %}
            <tr>
                <td>{{ livraison.id }}</td>
                <td>{{ livraison.dateLiv ? livraison.dateLiv|date('Y-m-d') : '' }}</td>
                <td>{{ livraison.typeLiv }}</td>
                <td>{{ livraison.adressLiv }}</td>
                <td>{{ livraison.produit }}</td>
                <td>{{ livraison.User }}</td>
                <td>
                    <a href=\"{{ path('app_livraison_show', {'id': livraison.id}) }}\"class=\"btn btn-square btn-secondary m-2\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                    <a href=\"{{ path('app_livraison_edit', {'id': livraison.id}) }}\"class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-edit\"></i></a>
                    <a href=\"{{ path('app_livraison_map', {'id': livraison.id}) }}\" class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-location-arrow\"></i></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
        </div>
    </div>
    </div>
<p><a href=\"{{ path('generator_service3') }}\" class=\"btn btn-primary px-3 py-1\">PDF</a></p>
    <a href=\"{{ path('app_livraison_new') }}\">Create new</a>
{% endblock %}
", "livraison/index.html.twig", "C:\\xampp\\htdocs\\integration web\\xchangexSymfony-user - Copy\\templates\\livraison\\index.html.twig");
    }
}
