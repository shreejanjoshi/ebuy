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
class __TwigTemplate_26ca6fd6a338cd3deef1d9d5b08fd0cc2bfbdf017c4c02e08330069d8449db2c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">
<head>
\t<title>Ebuy</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"keywords\" content=\"\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t<!-- Google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap\" rel=\"stylesheet\">
 
\t";
        // line 17
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slicknav.min.css"), "html", null, true);
        echo "\"/>

\t<!-- Main Stylesheets -->
\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>

</head>
<body>

\t\t";
        // line 28
        $this->loadTemplate("header.html.twig", "base.html.twig", 28)->display($context);
        // line 29
        echo "
\t\t";
        // line 30
        $this->loadTemplate("flash_messages.html.twig", "base.html.twig", 30)->display($context);
        // line 31
        echo "
\t\t";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
\t\t";
        // line 34
        $this->loadTemplate("footer.html.twig", "base.html.twig", 34)->display($context);
        // line 35
        echo "
\t<!--====== Javascripts & Jquery ======-->
\t<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

\t</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 32,  116 => 40,  112 => 39,  108 => 38,  104 => 37,  100 => 35,  98 => 34,  95 => 33,  93 => 32,  90 => 31,  88 => 30,  85 => 29,  83 => 28,  75 => 23,  69 => 20,  65 => 19,  61 => 18,  58 => 17,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">
<head>
\t<title>Ebuy</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"keywords\" content=\"\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t<!-- Google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap\" rel=\"stylesheet\">
 
\t{# <!-- Stylesheets -->
\t<link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.min.css')}}\"/>
\t<!-- Main Stylesheets -->
\t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\"/> #}

\t<link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.min.css')}}\"/>
\t<link rel=\"stylesheet\" href=\"{{asset('css/font-awesome.min.css')}}\"/>
\t<link rel=\"stylesheet\" href=\"{{asset('css/slicknav.min.css')}}\"/>

\t<!-- Main Stylesheets -->
\t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\"/>

</head>
<body>

\t\t{% include 'header.html.twig' %}

\t\t{% include 'flash_messages.html.twig' %}

\t\t{% block body %}{% endblock %}

\t\t{% include 'footer.html.twig' %}

\t<!--====== Javascripts & Jquery ======-->
\t<script src=\"{{asset('js/jquery-3.2.1.min.js')}}\"></script>
\t<script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
\t<script src=\"{{asset('js/jquery.slicknav.min.js')}}\"></script>
\t<script src=\"{{asset('js/main.js')}}\"></script>

\t</body>
</html>", "base.html.twig", "E:\\Users\\Lakne\\Desktop\\becode\\Week 1\\Ebuy\\ebuy\\templates\\base.html.twig");
    }
}
