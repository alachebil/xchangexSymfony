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

/* echange/index.html.twig */
class __TwigTemplate_e1e4a57ea42a027d536e572fcfd7e8d5 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "echange/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "echange/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "echange/index.html.twig", 2);
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
        echo "    <h1>Echange</h1>

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
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"username\">Nom</label>
                                </div>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"dateEchange\" >Date</label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"lieuEchange\" >Lieu</label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"typeEchange\" >Type</label>
                                </div>

                                

                                <button type=\"Submit\" class=\"btn btn-success btn-fw\" style=\"margin: auto; \">Trier</button>
                            </div>
                        </form>

                    </div>

                    <ul class=\"navbar-nav w-100\" style=\"margin-top: 18px;\">
                    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_echange_index");
        echo "\">Back to list</a>
                        <li class=\"nav-item w-100\">
                            <form name=\"Search-method\" id=\"Search-method\"method=\"post\" class=\"forms-sample\" style=\"display: flex\">
                                <div class=\"form-group col-md-5\">
                                    <label style=\"margin-top: 11px;margin-left: 10px;margin-right: 14px;padding-bottom: 7px;;\">Option Recherche</label>
                                    <select name=\"optionsearch\" class=\"js-example-basic-single\" style=\"width: 200px;height: 38px; color: white; background-color: #191c24; border-radius: 4px;text-align: center;border: 2px solid #0090e7;margin-right: 15px;\">
                                        <option value=\"\">Choisir un Critére</option>
                                        <option value=\"username\">Nom</option>
                                        <option value=\"dateEchange\">Date</option>
                                        <option value=\"lieuEchange\">Lieu</option>
                                        <option value=\"typeEchange\">Type</option>
                                    </select>
                                </div>
                                <div class=\"form-group col-md-7\">
                                    <div class=\"input-group\">
                                        <input name=\"Search\" type=\"text\" class=\"form-control\" placeholder=\"Search Echanges\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
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
                <th>IdEchange</th>
                <th>Username</th>
                <th>DateEchange</th>
                <th>LieuEchange</th>
                <th>TypeEchange</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["echanges"]) || array_key_exists("echanges", $context) ? $context["echanges"] : (function () { throw new RuntimeError('Variable "echanges" does not exist.', 91, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["echange"]) {
            // line 92
            echo "            <tr>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["echange"], "idEchange", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["echange"], "username", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["echange"], "dateEchange", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
                <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["echange"], "lieuEchange", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["echange"], "typeEchange", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_echange_show", ["idEchange" => twig_get_attribute($this->env, $this->source, $context["echange"], "idEchange", [], "any", false, false, false, 99)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_echange_edit", ["idEchange" => twig_get_attribute($this->env, $this->source, $context["echange"], "idEchange", [], "any", false, false, false, 100)]), "html", null, true);
            echo "\">edit</a>
                    ";
            // line 102
            echo "
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 106
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['echange'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_echange_new");
        echo "\">Create new</a>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "echange/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 113,  231 => 110,  222 => 106,  214 => 102,  210 => 100,  206 => 99,  201 => 97,  197 => 96,  193 => 95,  189 => 94,  185 => 93,  182 => 92,  177 => 91,  137 => 54,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends 'front.html.twig' %}#}
{% extends 'base.html.twig' %}

{% block title %}Echange {% endblock %}

{% block body %}
    <h1>Echange</h1>

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
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"username\">Nom</label>
                                </div>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"dateEchange\" >Date</label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"lieuEchange\" >Lieu</label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"typeEchange\" >Type</label>
                                </div>

                                

                                <button type=\"Submit\" class=\"btn btn-success btn-fw\" style=\"margin: auto; \">Trier</button>
                            </div>
                        </form>

                    </div>

                    <ul class=\"navbar-nav w-100\" style=\"margin-top: 18px;\">
                    <a href=\"{{ path('app_echange_index') }}\">Back to list</a>
                        <li class=\"nav-item w-100\">
                            <form name=\"Search-method\" id=\"Search-method\"method=\"post\" class=\"forms-sample\" style=\"display: flex\">
                                <div class=\"form-group col-md-5\">
                                    <label style=\"margin-top: 11px;margin-left: 10px;margin-right: 14px;padding-bottom: 7px;;\">Option Recherche</label>
                                    <select name=\"optionsearch\" class=\"js-example-basic-single\" style=\"width: 200px;height: 38px; color: white; background-color: #191c24; border-radius: 4px;text-align: center;border: 2px solid #0090e7;margin-right: 15px;\">
                                        <option value=\"\">Choisir un Critére</option>
                                        <option value=\"username\">Nom</option>
                                        <option value=\"dateEchange\">Date</option>
                                        <option value=\"lieuEchange\">Lieu</option>
                                        <option value=\"typeEchange\">Type</option>
                                    </select>
                                </div>
                                <div class=\"form-group col-md-7\">
                                    <div class=\"input-group\">
                                        <input name=\"Search\" type=\"text\" class=\"form-control\" placeholder=\"Search Echanges\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
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
                <th>IdEchange</th>
                <th>Username</th>
                <th>DateEchange</th>
                <th>LieuEchange</th>
                <th>TypeEchange</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for echange in echanges %}
            <tr>
                <td>{{ echange.idEchange }}</td>
                <td>{{ echange.username }}</td>
                <td>{{ echange.dateEchange }}</td>
                <td>{{ echange.lieuEchange }}</td>
                <td>{{ echange.typeEchange }}</td>
                <td>
                    <a href=\"{{ path('app_echange_show', {'idEchange': echange.idEchange}) }}\">show</a>
                    <a href=\"{{ path('app_echange_edit', {'idEchange': echange.idEchange}) }}\">edit</a>
                    {#<center> <a href=\"{{ path('app_reclamation_new',{'idEchan':echange.idEchange}) }}\" class=\"btn btn-primary\">Reclamer</a></center>#}

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_echange_new') }}\">Create new</a>
    
{% endblock %}
", "echange/index.html.twig", "C:\\xampp\\htdocs\\integration web\\xchangexSymfony-user - Copy\\templates\\echange\\index.html.twig");
    }
}
