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

/* base.html.twig */
class __TwigTemplate_68b10078b2258283a45596135c2648373d2cda4e3d5f3549905e8697350ea51c extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html class=\"h-100\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "</head>
<body class=\"d-flex flex-column h-100 \">
<div class=\"row\">
    <aside class=\"\">
        <ul class=\"flex-column position-sticky top-0 sticky-top\">
            ";
        // line 24
        $this->displayBlock('menu', $context, $blocks);
        // line 32
        echo "        </ul>
    </aside>

    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "</div>
<footer class=\"footer mt-auto py-3 bg-dark\">
    <div class=\"container text-center\">
        <span class=\"text-light \"> © Becode</span>
    </div>

</footer>
</body>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css\"
              integrity=\"sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l\"
              crossorigin=\"anonymous\">
        ";
        // line 13
        echo "    ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
        ";
        // line 18
        echo "    ";
    }

    // line 24
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                <li>
                    <a href=\"/\">Homepage</a>
                </li>
                <li>
                    <a href=\"/about-";
        // line 29
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">About me</a>
                </li>
            ";
    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  138 => 35,  131 => 29,  125 => 25,  121 => 24,  117 => 18,  114 => 16,  110 => 15,  106 => 13,  101 => 9,  97 => 8,  90 => 5,  76 => 36,  74 => 35,  69 => 32,  67 => 24,  60 => 19,  58 => 15,  55 => 14,  52 => 8,  48 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/maklaryizidor/Sites/symfony-mvc-twig/MVC_TWIG_PROJECT/templates/base.html.twig");
    }
}
