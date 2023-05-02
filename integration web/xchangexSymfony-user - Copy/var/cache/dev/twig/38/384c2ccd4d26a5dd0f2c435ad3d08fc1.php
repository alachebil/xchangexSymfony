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

/* evenement/index.html.twig */
class __TwigTemplate_3e40ea595da54720fe6d52da7765b97b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "evenement/index.html.twig", 1);
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

        echo "Evenement index";
        
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
        echo "<br>
    <h1>Liste des Evenements</h1>


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
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"nomEvent\">Nom</label>
                                </div>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"typeEvent\" >Type</label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"date\" >date</label>
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
                                        <option value=\"nomEvent\">Nom Evenement</option>
                                        <option value=\"typeEvent\">typeEvent</option>
                                        <option value=\"date\">date Evenement</option>
                                    </select>
                                </div>
                                <div class=\"form-group col-md-7\">
                                    <div class=\"input-group\">
                                        <input name=\"Search\" type=\"text\" class=\"form-control\" placeholder=\"Search Events\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
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
                <th>id</th>
                <th>ImageEvent</th>
                <th>NomEvent</th>
                <th>TypeEvent</th>
                <th>Date</th>
                <th>DescriptionEvent</th>
                <th>NbParticipants</th>
                <th>actions</th>
            </tr>
        </thead>

<br>
<br>
         <tbody id=\"myTable\">
        <div class=\"form-group col-md-7\">
        <div class=\"input-group custom-search-form\">
        <div class=\"search-box\">
    <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control\" placeholder=\"Type to Search Event...\">
    </div>
  </div>    
</div>
        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 98, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 99
            echo "            <tr>
                <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["evenement"], "imageEvent", [], "any", false, false, false, 101))), "html", null, true);
            echo "\" style=\" width:150px; height:150px; \" alt=\"\"/></td>
                <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nomEvent", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
                <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "typeEvent", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                <td>";
            // line 104
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 104)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 104), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "descriptionEvent", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nbParticipants", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\"class=\"btn btn-square btn-secondary m-2\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                    <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 109)]), "html", null, true);
            echo "\"class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-edit\"></i></a>
                    <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_map", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            echo "\" class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-location-arrow\"></i></a>  
                    <td><a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_qr_codes", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            echo "\">qr code</a></td>  
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 115
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "        </tbody>
    </table>

    <p><a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_new");
        echo "\" class=\"btn btn-primary px-3 py-1\">Ajouter nouveau</a></p>
    
        <p><a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generator_service3");
        echo "\" class=\"btn btn-primary px-3 py-1\">PDF</a></p>
        <p><a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_statist");
        echo "\" class=\"btn btn-primary px-3 py-1\">stat</a></p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 125,  259 => 124,  254 => 122,  249 => 119,  240 => 115,  231 => 111,  227 => 110,  223 => 109,  219 => 108,  214 => 106,  210 => 105,  206 => 104,  202 => 103,  198 => 102,  194 => 101,  190 => 100,  187 => 99,  182 => 98,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Evenement index{% endblock %}

{% block body %}
<br>
    <h1>Liste des Evenements</h1>


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
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"nomEvent\">Nom</label>
                                </div>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"typeEvent\" >Type</label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"date\" >date</label>
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
                                        <option value=\"nomEvent\">Nom Evenement</option>
                                        <option value=\"typeEvent\">typeEvent</option>
                                        <option value=\"date\">date Evenement</option>
                                    </select>
                                </div>
                                <div class=\"form-group col-md-7\">
                                    <div class=\"input-group\">
                                        <input name=\"Search\" type=\"text\" class=\"form-control\" placeholder=\"Search Events\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
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
                <th>id</th>
                <th>ImageEvent</th>
                <th>NomEvent</th>
                <th>TypeEvent</th>
                <th>Date</th>
                <th>DescriptionEvent</th>
                <th>NbParticipants</th>
                <th>actions</th>
            </tr>
        </thead>

<br>
<br>
         <tbody id=\"myTable\">
        <div class=\"form-group col-md-7\">
        <div class=\"input-group custom-search-form\">
        <div class=\"search-box\">
    <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control\" placeholder=\"Type to Search Event...\">
    </div>
  </div>    
</div>
        {% for evenement in evenements %}
            <tr>
                <td>{{ evenement.id }}</td>
                <td><img src=\"{{ asset('uploads/' ~evenement.imageEvent) }}\" style=\" width:150px; height:150px; \" alt=\"\"/></td>
                <td>{{ evenement.nomEvent }}</td>
                <td>{{ evenement.typeEvent }}</td>
                <td>{{ evenement.date ? evenement.date|date('Y-m-d') : '' }}</td>
                <td>{{ evenement.descriptionEvent }}</td>
                <td>{{ evenement.nbParticipants }}</td>
                <td>
                    <a href=\"{{ path('app_evenement_show', {'id': evenement.id}) }}\"class=\"btn btn-square btn-secondary m-2\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                    <a href=\"{{ path('app_evenement_edit', {'id': evenement.id}) }}\"class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-edit\"></i></a>
                    <a href=\"{{ path('app_evenement_map', {'id': evenement.id}) }}\" class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-location-arrow\"></i></a>  
                    <td><a href=\"{{ path('app_qr_codes', {'id': evenement.id}) }}\">qr code</a></td>  
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <p><a href=\"{{ path('app_evenement_new') }}\" class=\"btn btn-primary px-3 py-1\">Ajouter nouveau</a></p>
    
        <p><a href=\"{{ path('generator_service3') }}\" class=\"btn btn-primary px-3 py-1\">PDF</a></p>
        <p><a href=\"{{ path('app_statist') }}\" class=\"btn btn-primary px-3 py-1\">stat</a></p>
{% endblock %}
", "evenement/index.html.twig", "C:\\xampp\\htdocs\\integration web\\xchangexSymfony-user - Copy\\templates\\evenement\\index.html.twig");
    }
}
