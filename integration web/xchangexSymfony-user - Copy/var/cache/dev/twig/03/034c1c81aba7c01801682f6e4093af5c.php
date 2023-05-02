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

/* service/indexback.html.twig */
class __TwigTemplate_ffb8b90b379ffaeac2f461dd3c10037e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/indexback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/indexback.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "service/indexback.html.twig", 1);
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

        echo "Service index";
        
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
        echo "    <h1>Service index</h1>


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
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"titreService\">titreService</label>
                                </div>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"descriptionService\" >descriptionService</label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"lieuService\" >Lieu</label>
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
                                        <option value=\"titreService\">titreService</option>
                                        <option value=\"descriptionService\">descriptionService</option>
                                        <option value=\"lieuService\">lieuService</option>
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
              
                <th>TitreService</th>
                <th>TypeService</th>
                <th>DescriptionService</th>
                <th>LieuService</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 83, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 84
            echo "            <tr>
          
                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "titreService", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "typeService", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "descriptionService", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "lieuService", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_show", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\">edit</a>
                    <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_map", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\" class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-location-arrow\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 97
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "        </tbody>
    </table>
    <p><a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generator_service3");
        echo "\" class=\"btn btn-primary px-3 py-1\">PDF</a></p>

    <a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "service/indexback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 105,  223 => 103,  219 => 101,  210 => 97,  201 => 93,  197 => 92,  193 => 91,  188 => 89,  184 => 88,  180 => 87,  176 => 86,  172 => 84,  167 => 83,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Service index{% endblock %}

{% block body %}
    <h1>Service index</h1>


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
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"titreService\">titreService</label>
                                </div>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"descriptionService\" >descriptionService</label>
                                </div>

                                <div class=\"form-check\">
                                    <label class=\"form-check-label\" style=\"width: 86px;margin-left: -2px;margin-right: 10px;\">
                                        <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"lieuService\" >Lieu</label>
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
                                        <option value=\"titreService\">titreService</option>
                                        <option value=\"descriptionService\">descriptionService</option>
                                        <option value=\"lieuService\">lieuService</option>
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
              
                <th>TitreService</th>
                <th>TypeService</th>
                <th>DescriptionService</th>
                <th>LieuService</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for service in services %}
            <tr>
          
                <td>{{ service.titreService }}</td>
                <td>{{ service.typeService }}</td>
                <td>{{ service.descriptionService }}</td>
                <td>{{ service.lieuService }}</td>
                <td>
                    <a href=\"{{ path('app_service_show', {'id': service.id}) }}\">show</a>
                    <a href=\"{{ path('app_service_edit', {'id': service.id}) }}\">edit</a>
                    <a href=\"{{ path('app_service_map', {'id': service.id}) }}\" class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-location-arrow\"></i></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <p><a href=\"{{ path('generator_service3') }}\" class=\"btn btn-primary px-3 py-1\">PDF</a></p>

    <a href=\"{{ path('app_service_new') }}\">Create new</a>
{% endblock %}
", "service/indexback.html.twig", "C:\\Users\\yomna\\Desktop\\integration web\\xchangexSymfony-user - Copy\\templates\\service\\indexback.html.twig");
    }
}
