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

/* learning/aboutMe.html.twig */
class __TwigTemplate_544494987d81cd679f6568613aac6bb17f397e4ccc6f4e898fa825bf36b8f416 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu' => [$this, 'block_menu'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "learning/aboutMe.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "About me";
    }

    // line 4
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
    <li>
        <span>Europe: ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, ($context["date"] ?? null), "medium", "d/M/Y"), "html", null, true);
        echo "</span>
    </li>
    <li>
        <span>America: ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, ($context["date"] ?? null), "medium", "M/d/Y"), "html", null, true);
        echo "</span>
    </li>
    <li>
        <span>China & Japan: ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, ($context["date"] ?? null), "medium", "Y/M/d"), "html", null, true);
        echo "</span>
    </li>
";
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <style>
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }

        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
    </style>

    <div class=\"example-wrapper\">
        <h1>About ";
        // line 32
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "! ✅</h1>

    </div>
";
    }

    public function getTemplateName()
    {
        return "learning/aboutMe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 32,  87 => 17,  83 => 16,  76 => 13,  70 => 10,  64 => 7,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "learning/aboutMe.html.twig", "/Users/maklaryizidor/Sites/symfony-mvc-twig/MVC_TWIG_PROJECT/templates/learning/aboutMe.html.twig");
    }
}
