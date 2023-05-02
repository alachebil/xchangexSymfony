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

/* reclamation/index.html.twig */
class __TwigTemplate_55679c16a7cacdf5aa530a2add0aebe0 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/index.html.twig", 1);
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

        echo "Reclamation ";
        
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
        echo "    <h1>Reclamation </h1>

    
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
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"note\">Note</label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 92px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"etatRec\">Etat</label>
                                </div>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"dateReclamation\" >Date</label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"descriptionReclamation\" >Description</label>
                                </div>

                                <button type=\"Submit\" class=\"btn btn-success btn-fw\" style=\"margin: auto; \">Trier</button>
                            </div>
                        </form>

                    </div>

                    <ul class=\"navbar-nav w-100\" style=\"margin-top: 18px;\">
                    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\">Back to list</a>
                        <li class=\"nav-item w-100\">
                            <form name=\"Search-method\" id=\"Search-method\"method=\"post\" class=\"forms-sample\" style=\"display: flex\">
                                <div class=\"form-group col-md-5\">
                                    <label style=\"margin-top: 11px;margin-left: 10px;margin-right: 14px;padding-bottom: 7px;;\">Option Recherche</label>
                                    <select name=\"optionsearch\" class=\"js-example-basic-single\" style=\"width: 200px;height: 38px; color: white; background-color: #191c24; border-radius: 4px;text-align: center;border: 2px solid #0090e7;margin-right: 15px;\">
                                        <option value=\"\">Choisir un Critére</option>
                                        <option value=\"note\">note</option>
                                        <option value=\"etatRec\">Etat</option>
                                        <option value=\"dateReclamation\">Date</option>
                                        <option value=\"descriptionReclamation\">Description</option>
                                    </select>
                                </div>
                                <div class=\"form-group col-md-7\">
                                    <div class=\"input-group\">
                                        <input name=\"Search\" type=\"text\" class=\"form-control\" placeholder=\"Search Reclamations\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-sm btn-primary\" type=\"Submit\">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>   

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdReclamation</th>
                <th>NomEchange</th>
                <th>EtatRec</th>
                <th>DateReclamation</th>
                <th>ImageEvent</th>
                <th>DescriptionReclamation</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 91, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 92
            echo "            <tr>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "idReclamation", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "idEchange", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "etatRec", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
                <td>";
            // line 96
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateReclamation", [], "any", false, false, false, 96)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateReclamation", [], "any", false, false, false, 96), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                ";
            // line 98
            echo "                <td><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["reclamation"], "imageEvent", [], "any", false, false, false, 98))), "html", null, true);
            echo "\" style=\" width:150px; height:150px; \" alt=\"\"/></td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "descriptionReclamation", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["idReclamation" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idReclamation", [], "any", false, false, false, 101)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["idReclamation" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idReclamation", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 106
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 110,  225 => 106,  216 => 102,  212 => 101,  207 => 99,  202 => 98,  198 => 96,  194 => 95,  190 => 94,  186 => 93,  183 => 92,  178 => 91,  137 => 53,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reclamation {% endblock %}

{% block body %}
    <h1>Reclamation </h1>

    
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
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"note\">Note</label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 92px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"etatRec\">Etat</label>
                                </div>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"dateReclamation\" >Date</label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"descriptionReclamation\" >Description</label>
                                </div>

                                <button type=\"Submit\" class=\"btn btn-success btn-fw\" style=\"margin: auto; \">Trier</button>
                            </div>
                        </form>

                    </div>

                    <ul class=\"navbar-nav w-100\" style=\"margin-top: 18px;\">
                    <a href=\"{{ path('app_reclamation_index') }}\">Back to list</a>
                        <li class=\"nav-item w-100\">
                            <form name=\"Search-method\" id=\"Search-method\"method=\"post\" class=\"forms-sample\" style=\"display: flex\">
                                <div class=\"form-group col-md-5\">
                                    <label style=\"margin-top: 11px;margin-left: 10px;margin-right: 14px;padding-bottom: 7px;;\">Option Recherche</label>
                                    <select name=\"optionsearch\" class=\"js-example-basic-single\" style=\"width: 200px;height: 38px; color: white; background-color: #191c24; border-radius: 4px;text-align: center;border: 2px solid #0090e7;margin-right: 15px;\">
                                        <option value=\"\">Choisir un Critére</option>
                                        <option value=\"note\">note</option>
                                        <option value=\"etatRec\">Etat</option>
                                        <option value=\"dateReclamation\">Date</option>
                                        <option value=\"descriptionReclamation\">Description</option>
                                    </select>
                                </div>
                                <div class=\"form-group col-md-7\">
                                    <div class=\"input-group\">
                                        <input name=\"Search\" type=\"text\" class=\"form-control\" placeholder=\"Search Reclamations\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-sm btn-primary\" type=\"Submit\">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>   

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdReclamation</th>
                <th>NomEchange</th>
                <th>EtatRec</th>
                <th>DateReclamation</th>
                <th>ImageEvent</th>
                <th>DescriptionReclamation</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reclamation in reclamations %}
            <tr>
                <td>{{ reclamation.idReclamation }}</td>
                <td>{{ reclamation.idEchange }}</td>
                <td>{{ reclamation.etatRec }}</td>
                <td>{{ reclamation.dateReclamation ? reclamation.dateReclamation|date('Y-m-d H:i:s') : '' }}</td>
                {#<td>{{ reclamation.imageEvent }}</td>#}
                <td><img src=\"{{ asset('uploads/' ~reclamation.imageEvent) }}\" style=\" width:150px; height:150px; \" alt=\"\"/></td>
                <td>{{ reclamation.descriptionReclamation }}</td>
                <td>
                    <a href=\"{{ path('app_reclamation_show', {'idReclamation': reclamation.idReclamation}) }}\">show</a>
                    <a href=\"{{ path('app_reclamation_edit', {'idReclamation': reclamation.idReclamation}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "reclamation/index.html.twig", "C:\\xampp\\htdocs\\integration web\\xchangexSymfony-user - Copy\\templates\\reclamation\\index.html.twig");
    }
}
