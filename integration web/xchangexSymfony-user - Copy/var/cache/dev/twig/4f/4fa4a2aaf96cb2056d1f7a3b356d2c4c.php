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

/* user/Chart.html.twig */
class __TwigTemplate_7e29b7fe77464afd8d92af53a6154c6f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Chart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Chart.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\">
";
        
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
        echo "\t<div class=\"row\">


\t\t<div
\t\t\tclass=\"col-md-12 col-lg-6\">

\t\t\t<!-- Invoice Chart -->
\t\t\t<div class=\"card card-chart\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h4 class=\"card-title\">Nbre Users/Role</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<canvas id=\"Roles\" width=\"400\" height=\"100\"></canvas>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /Invoice Chart -->

\t\t</div>
\t\t
\t</div>
\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>
\t<script>

\t\tlet Sujet = document.querySelector(\"#Sujet\")
let SujetGraph = new Chart(Sujet, {
type: \"doughnut\",
data: {
labels: [
\"USER\", \"ADMIN\"
],
datasets: [
{
label: \"Répartition des Sujets\",
data: ";
        // line 43
        echo (isset($context["SujetCount"]) || array_key_exists("SujetCount", $context) ? $context["SujetCount"] : (function () { throw new RuntimeError('Variable "SujetCount" does not exist.', 43, $this->source); })());
        echo ",
backgroundColor: [\"red\", \"green\"]
}
]
}
})

let Roles = document.querySelector(\"#Roles\")
let categGraph = new Chart(Roles, {
type: \"doughnut\",
data: {
labels: [
\"USER\",\"ADMIN\"
],
datasets: [
{
label: \"Répartition des catégories\",
data: ";
        // line 60
        echo (isset($context["RoleCount"]) || array_key_exists("RoleCount", $context) ? $context["RoleCount"] : (function () { throw new RuntimeError('Variable "RoleCount" does not exist.', 60, $this->source); })());
        echo ",
backgroundColor: [\"red\", \"green\"]
}
]
}
})

let rendezvous = document.querySelector(\"#rendezvous\")
let annGraph = new Chart(rendezvous, {
type: \"line\",
data: {
labels: ";
        // line 71
        echo (isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 71, $this->source); })());
        echo ",
datasets: [
{
label: \"Nombre de rendezvous\",
data: ";
        // line 75
        echo (isset($context["RendezVousCount"]) || array_key_exists("RendezVousCount", $context) ? $context["RendezVousCount"] : (function () { throw new RuntimeError('Variable "RendezVousCount" does not exist.', 75, $this->source); })());
        echo ",
fill: false,
borderColor: 'rgb(75, 192, 192)',
tension: 0.1
}
]
},
options: {

scales: {
yAxes: [
{
ticks: {
beginAtZero: true
}
}
]
}
}

})
var chartData = ";
        // line 96
        echo (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 96, $this->source); })());
        echo ";

var ctx = document.getElementById('chart').getContext('2d');
var myChart = new Chart(ctx, {
type: 'bar',
data: chartData
});
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/Chart.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  218 => 96,  194 => 75,  187 => 71,  173 => 60,  153 => 43,  138 => 30,  128 => 29,  97 => 6,  87 => 5,  76 => 2,  66 => 1,  56 => 29,  53 => 28,  51 => 5,  48 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\">
{% endblock %}

{% block body %}
\t<div class=\"row\">


\t\t<div
\t\t\tclass=\"col-md-12 col-lg-6\">

\t\t\t<!-- Invoice Chart -->
\t\t\t<div class=\"card card-chart\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h4 class=\"card-title\">Nbre Users/Role</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<canvas id=\"Roles\" width=\"400\" height=\"100\"></canvas>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /Invoice Chart -->

\t\t</div>
\t\t
\t</div>
\t
{% endblock %}

{% block javascripts %}
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>
\t<script>

\t\tlet Sujet = document.querySelector(\"#Sujet\")
let SujetGraph = new Chart(Sujet, {
type: \"doughnut\",
data: {
labels: [
\"USER\", \"ADMIN\"
],
datasets: [
{
label: \"Répartition des Sujets\",
data: {{ SujetCount|raw }},
backgroundColor: [\"red\", \"green\"]
}
]
}
})

let Roles = document.querySelector(\"#Roles\")
let categGraph = new Chart(Roles, {
type: \"doughnut\",
data: {
labels: [
\"USER\",\"ADMIN\"
],
datasets: [
{
label: \"Répartition des catégories\",
data: {{ RoleCount|raw }},
backgroundColor: [\"red\", \"green\"]
}
]
}
})

let rendezvous = document.querySelector(\"#rendezvous\")
let annGraph = new Chart(rendezvous, {
type: \"line\",
data: {
labels: {{ dates|raw }},
datasets: [
{
label: \"Nombre de rendezvous\",
data: {{ RendezVousCount|raw }},
fill: false,
borderColor: 'rgb(75, 192, 192)',
tension: 0.1
}
]
},
options: {

scales: {
yAxes: [
{
ticks: {
beginAtZero: true
}
}
]
}
}

})
var chartData = {{ chartData|raw }};

var ctx = document.getElementById('chart').getContext('2d');
var myChart = new Chart(ctx, {
type: 'bar',
data: chartData
});
\t</script>
{% endblock %}
", "user/Chart.html.twig", "C:\\Users\\sbekr\\OneDrive\\Desktop\\integration web\\xchangexSymfony-user - Copy\\templates\\user\\Chart.html.twig");
    }
}
