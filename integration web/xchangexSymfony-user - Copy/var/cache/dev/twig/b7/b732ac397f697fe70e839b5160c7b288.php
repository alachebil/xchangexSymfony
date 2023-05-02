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

/* pdf/pdflivraison.html.twig */
class __TwigTemplate_92e0195ca8353e1a0edf12faa9150558 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/pdflivraison.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/pdflivraison.html.twig"));

        // line 1
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/logo.png"), "html", null, true);
        echo "\"  style=\" width:570px; height:100px;\"alt=\"Description de votre image\">
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "      <div class=\"slider-item\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        echo "');\"></div>
<table  border=\"1\">
        <thead >
            <tr>
                <th>Id</th>
                <th>DateLiv</th>
                <th>TypeLiv</th>
                <th>AdressLiv</th>
                <th>Produit</th>
                <th>actions</th>
                 
         </tr>  
        </thead>
            <tbody>
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraisons"]) || array_key_exists("livraisons", $context) ? $context["livraisons"] : (function () { throw new RuntimeError('Variable "livraisons" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["livraison"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            ((twig_get_attribute($this->env, $this->source, $context["livraison"], "dateLiv", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "dateLiv", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "typeLiv", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "adressLiv", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "produit", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_show", ["id" => twig_get_attribute($this->env, $this->source, $context["livraison"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\"class=\"btn btn-square btn-secondary m-2\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["livraison"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\"class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-edit\"></i></a>
                </td>
            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livraison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </tbody>
                </table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " <style=\" width:10px; height:100px;\"><h1>LA LISTE DES OFFRES</h1>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pdf/pdflivraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 2,  111 => 30,  101 => 26,  97 => 25,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  73 => 18,  69 => 17,  51 => 3,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<img src=\"{{ asset('uploads/logo.png') }}\"  style=\" width:570px; height:100px;\"alt=\"Description de votre image\">
{% block title %} <style=\" width:10px; height:100px;\"><h1>LA LISTE DES OFFRES</h1>{% endblock %}
      <div class=\"slider-item\" style=\"background-image: url('{{asset('logo.png')}}');\"></div>
<table  border=\"1\">
        <thead >
            <tr>
                <th>Id</th>
                <th>DateLiv</th>
                <th>TypeLiv</th>
                <th>AdressLiv</th>
                <th>Produit</th>
                <th>actions</th>
                 
         </tr>  
        </thead>
            <tbody>
                        {% for livraison in livraisons %}
            <tr>
                <td>{{ livraison.id }}</td>
                <td>{{ livraison.dateLiv ? livraison.dateLiv|date('Y-m-d') : '' }}</td>
                <td>{{ livraison.typeLiv }}</td>
                <td>{{ livraison.adressLiv }}</td>
                <td>{{ livraison.produit }}</td>
                <td>
                    <a href=\"{{ path('app_livraison_show', {'id': livraison.id}) }}\"class=\"btn btn-square btn-secondary m-2\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                    <a href=\"{{ path('app_livraison_edit', {'id': livraison.id}) }}\"class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-edit\"></i></a>
                </td>
            </tr>
                        {% endfor %}
                    </tbody>
                </table>", "pdf/pdflivraison.html.twig", "C:\\xampp\\htdocs\\integration web\\xchangexSymfony-user - Copy\\templates\\pdf\\pdflivraison.html.twig");
    }
}
