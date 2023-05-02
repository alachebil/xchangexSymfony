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

/* produit/mailevent.html.twig */
class __TwigTemplate_e3605f67c926c2d7f73edc6d9efc989b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/mailevent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/mailevent.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>My Email Design</title>
\t<style>
\t\tbody {
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 14px;
\t\t\tline-height: 1.5;
\t\t\tbackground-color: #f2f2f2;
\t\t}
\t\t.container {
\t\t\tmax-width: 600px;
\t\t\tmargin: 0 auto;
\t\t\tpadding: 20px;
\t\t\tbackground-color: #fff;
\t\t\tbox-shadow: 0 2px 4px rgba(0,0,0,.1);
\t\t}
\t\t.header {
\t\t\tbackground-color: #4285f4;
\t\t\tcolor: #fff;
\t\t\ttext-align: center;
\t\t\tpadding: 10px;
\t\t}
\t\t.header h1 {
\t\t\tmargin: 0;
\t\t\tfont-size: 24px;
\t\t}
\t\t.content {
\t\t\tpadding: 20px;
\t\t\ttext-align: justify;
\t\t}
\t\t.content img {
\t\t\tmax-width: 100%;
\t\t\theight: auto;
\t\t\tmargin-bottom: 20px;
\t\t}
\t\t.footer {
\t\t\ttext-align: center;
\t\t\tpadding: 10px;
\t\t\tbackground-color: #eee;
\t\t}
\t</style>
</head>
<body>
\t<div class=\"container\">
\t\t<div class=\"header\">
\t\t\t<h1>Reused</h1>
\t\t</div>
\t\t<div class=\"content\">
        
\t\t\t<p> ";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " ! You have won in \"Roue de chance\"</p>
\t\t\t<img src=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 53, $this->source); })()), "image", [0 => "@uploads/woodenbed.jpg"], "method", false, false, false, 53), "html", null, true);
        echo "\" alt=\"Your image\">
\t\t\t<p>take this code to nearest store of Reuse to take your reward : ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 54, $this->source); })()), "html", null, true);
        echo " </p>
\t\t</div>
\t\t<div class=\"footer\">
\t\t\t<p>&copy; 2023 Reused. All rights reserved.</p>
\t\t</div>
\t</div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "produit/mailevent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 54,  100 => 53,  96 => 52,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<title>My Email Design</title>
\t<style>
\t\tbody {
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 14px;
\t\t\tline-height: 1.5;
\t\t\tbackground-color: #f2f2f2;
\t\t}
\t\t.container {
\t\t\tmax-width: 600px;
\t\t\tmargin: 0 auto;
\t\t\tpadding: 20px;
\t\t\tbackground-color: #fff;
\t\t\tbox-shadow: 0 2px 4px rgba(0,0,0,.1);
\t\t}
\t\t.header {
\t\t\tbackground-color: #4285f4;
\t\t\tcolor: #fff;
\t\t\ttext-align: center;
\t\t\tpadding: 10px;
\t\t}
\t\t.header h1 {
\t\t\tmargin: 0;
\t\t\tfont-size: 24px;
\t\t}
\t\t.content {
\t\t\tpadding: 20px;
\t\t\ttext-align: justify;
\t\t}
\t\t.content img {
\t\t\tmax-width: 100%;
\t\t\theight: auto;
\t\t\tmargin-bottom: 20px;
\t\t}
\t\t.footer {
\t\t\ttext-align: center;
\t\t\tpadding: 10px;
\t\t\tbackground-color: #eee;
\t\t}
\t</style>
</head>
<body>
\t<div class=\"container\">
\t\t<div class=\"header\">
\t\t\t<h1>Reused</h1>
\t\t</div>
\t\t<div class=\"content\">
        
\t\t\t<p> {{username}} ! You have won in \"Roue de chance\"</p>
\t\t\t<img src=\"{{ email.image('@uploads/woodenbed.jpg')}}\" alt=\"Your image\">
\t\t\t<p>take this code to nearest store of Reuse to take your reward : {{code}} </p>
\t\t</div>
\t\t<div class=\"footer\">
\t\t\t<p>&copy; 2023 Reused. All rights reserved.</p>
\t\t</div>
\t</div>
</body>
</html>
", "produit/mailevent.html.twig", "C:\\Users\\sbekr\\OneDrive\\Desktop\\integration web\\xchangexSymfony-user - Copy\\templates\\produit\\mailevent.html.twig");
    }
}
