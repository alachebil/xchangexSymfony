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

/* evenement/indexFront.html.twig */
class __TwigTemplate_3309ef29b4d6170f11d8e5fa05df1154 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "frontE.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/indexFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/indexFront.html.twig"));

        $this->parent = $this->loadTemplate("frontE.html.twig", "evenement/indexFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "

    <div class=\"service\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
              <div id=\"google_translate_element\"></div>

                <h4 style=\"margin-top:50px; margin-bottom:50px;\">Liste des Evenements</h4>
            </div>
            <div class=\"row\">
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 16, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 17
            echo "  <div class=\"col-lg-4 col-md-6 mb-4\">
    <div class=\"service-item\">
      <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["evenement"], "imageEvent", [], "any", false, false, false, 19))), "html", null, true);
            echo "\" style=\" width:360px; height:250px; \" alt=\"\">
      <center><h2>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nomEvent", [], "any", false, false, false, 20), "html", null, true);
            echo "</h2></center>
      <p><strong style=\"color:#696969\"> Type:</strong> ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "typeEvent", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
      <p><strong style=\"color:#696969\" >Lieu:</strong> ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "descriptionEvent", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
      <p><strong style=\"color:#696969\" >Nbr de participants:</strong> ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nbParticipants", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
      <p><strong style=\"color:#696969\">Date de début:</strong> ";
            // line 24
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
      ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["evenement"], "nbParticipants", [], "any", false, false, false, 25) >= 0)) {
                // line 26
                echo "        <center> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_new", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Participer</a></center>
      ";
            } else {
                // line 28
                echo "        <p>L'événement est complet.</p>
      ";
            }
            // line 30
            echo "      <br>
      <br>
      ";
            // line 33
            echo "      <div class=\"sharethis-inline-share-buttons\"></div>
      ";
            // line 35
            echo "
    </div>
  </div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "  <div class=\"col\">
    <p class=\"text-center\">Aucun événement trouvé.</p>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
            </div>

        </div>
    </div>
    <br>
    
        <center><div class=\"btn px-10 py-10\" ";
        // line 50
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 50, $this->source); })()), "pagination.html.twig");
        echo " </div></center>

        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "session", [], "any", false, false, false, 52), "flashbag", [], "any", false, false, false, 52), "all", [], "method", false, false, false, 52));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 53
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 54
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " my-3\" role=\"alert\">
            ";
                // line 55
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evenement/indexFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 59,  177 => 55,  172 => 54,  167 => 53,  163 => 52,  158 => 50,  149 => 43,  140 => 39,  132 => 35,  129 => 33,  125 => 30,  121 => 28,  115 => 26,  113 => 25,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  89 => 19,  85 => 17,  80 => 16,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontE.html.twig' %}



{% block body %}


    <div class=\"service\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
              <div id=\"google_translate_element\"></div>

                <h4 style=\"margin-top:50px; margin-bottom:50px;\">Liste des Evenements</h4>
            </div>
            <div class=\"row\">
      {% for evenement in evenements %}
  <div class=\"col-lg-4 col-md-6 mb-4\">
    <div class=\"service-item\">
      <img src=\"{{ asset('uploads/' ~evenement.imageEvent)}}\" style=\" width:360px; height:250px; \" alt=\"\">
      <center><h2>{{ evenement.nomEvent }}</h2></center>
      <p><strong style=\"color:#696969\"> Type:</strong> {{ evenement.typeEvent }}</p>
      <p><strong style=\"color:#696969\" >Lieu:</strong> {{ evenement.descriptionEvent }}</p>
      <p><strong style=\"color:#696969\" >Nbr de participants:</strong> {{ evenement.nbParticipants }}</p>
      <p><strong style=\"color:#696969\">Date de début:</strong> {{ evenement.date ? evenement.date|date('Y-m-d') : '' }}</p>
      {% if evenement.nbParticipants >= 0 %}
        <center> <a href=\"{{ path('app_participation_new',{'id':evenement.id}) }}\" class=\"btn btn-primary\">Participer</a></center>
      {% else %}
        <p>L'événement est complet.</p>
      {% endif %}
      <br>
      <br>
      {# -------------------------- Share ------------------------------------  #}
      <div class=\"sharethis-inline-share-buttons\"></div>
      {# -------------------------- Share ------------------------------------  #}

    </div>
  </div>
{% else %}
  <div class=\"col\">
    <p class=\"text-center\">Aucun événement trouvé.</p>
  </div>
{% endfor %}

            </div>

        </div>
    </div>
    <br>
    
        <center><div class=\"btn px-10 py-10\" {{knp_pagination_render(evenements, 'pagination.html.twig') }} </div></center>

        {% for key, messages in app.session.flashbag.all() %}
    {% for message in messages %}
        <div class=\"alert alert-{{ key }} my-3\" role=\"alert\">
            {{ message }}
        </div>
    {% endfor %}
{% endfor %}

{% endblock %}
               ", "evenement/indexFront.html.twig", "C:\\xampp\\htdocs\\integration web\\xchangexSymfony-user - Copy\\templates\\evenement\\indexFront.html.twig");
    }
}
