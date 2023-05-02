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

/* livreur/index.html.twig */
class __TwigTemplate_31cfcf8f2f95555f7020237e6199b890 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livreur/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "livreur/index.html.twig", 1);
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
        echo "<input type=\"search\" id=\"myInput\" class=\"form-control pl-6\" placeholder=\"Search \"/>
\t\t\t\t\t
\t\t\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
\t\t\t\t\t<script>
\t\t\t\t\t\t\$(document).ready(function () {
                        \$(\"#myInput\").on(\"keyup\", function () {
                        var value = \$(this).val().toLowerCase();
                        \$(\"#rs tr\").filter(function () {
                        \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                            });
                         })
                        });
\t\t\t\t\t</script>


    <h2     style=\"left=600px;\"> Liste des Livreurs</h2>
    <script>
\$(document).ready(function(){
  \$(\"#search\").on(\"keyup\", function() {
    var value = \$(this).val().toLowerCase();
    \$(\"#myTable tr\").filter(function() {
      \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

 <div id=\"affichage\" class=\"container-fluid pt-4 px-4\">
    <table class=\"table\" id=\"rs\" > 
        <thead>
            <tr>
                <th>id</th>
                <th>Num</th>
                <th>NomLiv</th>
                <th>PrenomLiv</th>
                <th>Localisation</th>
                <th>actions</th>
            </tr>
        </thead>

        <br>
        <tbody id=\"myTable\">
        <div class=\"form-group col-md-7\">
        <div class=\"input-group custom-search-form\">
        <div class=\"search-box\">
    <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control\" placeholder=\"Type to Search livreur...\">
    </div>
  </div>    
</div>
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livreurs"]) || array_key_exists("livreurs", $context) ? $context["livreurs"] : (function () { throw new RuntimeError('Variable "livreurs" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["livreur"]) {
            // line 56
            echo "            <tr>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livreur"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livreur"], "num", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livreur"], "nomLiv", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livreur"], "prenomLiv", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livreur"], "localisation", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livreur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["livreur"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\"class=\"btn btn-square btn-secondary m-2\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                    <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livreur_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["livreur"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\"class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-edit\"></i></a>
                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Livreur_map", ["id" => twig_get_attribute($this->env, $this->source, $context["livreur"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-location-arrow\"></i></a>
                    <td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_qr_codes", ["id" => twig_get_attribute($this->env, $this->source, $context["livreur"], "nomLiv", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">qr code</a></td>
          
                </td>
</div>
 
            </tr>
            
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livreur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
        </tbody>
    </table>



            <button style=\"print\"   class=\"btn btn-primary px-3 py-1\" onclick=\"PrintElem('affichage');\">PRINT</button>
<br>
<br>


    <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livreur_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "livreur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 89,  202 => 78,  193 => 74,  180 => 66,  176 => 65,  172 => 64,  168 => 63,  163 => 61,  159 => 60,  155 => 59,  151 => 58,  147 => 57,  144 => 56,  139 => 55,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Evenement index{% endblock %}

{% block body %}
<input type=\"search\" id=\"myInput\" class=\"form-control pl-6\" placeholder=\"Search \"/>
\t\t\t\t\t
\t\t\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
\t\t\t\t\t<script>
\t\t\t\t\t\t\$(document).ready(function () {
                        \$(\"#myInput\").on(\"keyup\", function () {
                        var value = \$(this).val().toLowerCase();
                        \$(\"#rs tr\").filter(function () {
                        \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                            });
                         })
                        });
\t\t\t\t\t</script>


    <h2     style=\"left=600px;\"> Liste des Livreurs</h2>
    <script>
\$(document).ready(function(){
  \$(\"#search\").on(\"keyup\", function() {
    var value = \$(this).val().toLowerCase();
    \$(\"#myTable tr\").filter(function() {
      \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

 <div id=\"affichage\" class=\"container-fluid pt-4 px-4\">
    <table class=\"table\" id=\"rs\" > 
        <thead>
            <tr>
                <th>id</th>
                <th>Num</th>
                <th>NomLiv</th>
                <th>PrenomLiv</th>
                <th>Localisation</th>
                <th>actions</th>
            </tr>
        </thead>

        <br>
        <tbody id=\"myTable\">
        <div class=\"form-group col-md-7\">
        <div class=\"input-group custom-search-form\">
        <div class=\"search-box\">
    <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control\" placeholder=\"Type to Search livreur...\">
    </div>
  </div>    
</div>
        {% for livreur in livreurs %}
            <tr>
                <td>{{ livreur.id }}</td>
                <td>{{ livreur.num }}</td>
                <td>{{ livreur.nomLiv }}</td>
                <td>{{ livreur.prenomLiv }}</td>
                <td>{{ livreur.localisation }}</td>
                <td>
                    <a href=\"{{ path('app_livreur_show', {'id': livreur.id}) }}\"class=\"btn btn-square btn-secondary m-2\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                    <a href=\"{{ path('app_livreur_edit', {'id': livreur.id}) }}\"class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-edit\"></i></a>
                    <a href=\"{{ path('app_Livreur_map', {'id': livreur.id}) }}\" class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-location-arrow\"></i></a>
                    <td><a href=\"{{ path('app_qr_codes', {'id': livreur.nomLiv}) }}\">qr code</a></td>
          
                </td>
</div>
 
            </tr>
            
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}

        </tbody>
    </table>



            <button style=\"print\"   class=\"btn btn-primary px-3 py-1\" onclick=\"PrintElem('affichage');\">PRINT</button>
<br>
<br>


    <a href=\"{{ path('app_livreur_new') }}\">Create new</a>
{% endblock %}", "livreur/index.html.twig", "C:\\xampp\\htdocs\\integration web\\xchangexSymfony-user - Copy\\templates\\livreur\\index.html.twig");
    }
}
