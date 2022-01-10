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

/* header.html.twig */
class __TwigTemplate_5808f0e0d0d3f363c34ed400ac707a0aa67e57516c82e1e82d22c1d6d0bfd09e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "
    <!-- Header section -->
    <header class=\"header-section clearfix\">
        <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"site-logo\">
            <img id=\"git \" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.png"), "html", null, true);
        echo "\" height=\"70px\" alt=\"\">
        </a>
        <div class=\"header-right\">
            <div class=\"user-panel\">

                ";
        // line 11
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 12
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"login\">Login</a>
                    <a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" class=\"register\">Register</a>
                ";
        }
        // line 15
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 16
            echo "                    ";
            // line 17
            echo "                ";
        }
        // line 18
        echo "            </div>
        </div>
        <ul class=\"main-menu\">
            <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact Us</a></li>

            ";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 25
            echo "
                <li><a href=\"#\">Profile</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"\">Produts</a></li>
                        <li><a href=\"\">Sell</a></li>
                        <li><a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a></li>
                    </ul>
                </li>
            ";
        }
        // line 34
        echo "        </ul>
    </header>
    <!-- Header section end -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  130 => 34,  123 => 30,  116 => 25,  114 => 24,  109 => 22,  105 => 21,  100 => 18,  97 => 17,  95 => 16,  92 => 15,  87 => 13,  82 => 12,  80 => 11,  72 => 6,  68 => 5,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}

    <!-- Header section -->
    <header class=\"header-section clearfix\">
        <a href=\"{{path('home')}}\" class=\"site-logo\">
            <img id=\"git \" src=\"{{asset('img/logo2.png')}}\" height=\"70px\" alt=\"\">
        </a>
        <div class=\"header-right\">
            <div class=\"user-panel\">

                {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
                    <a href=\"{{path('app_login')}}\" class=\"login\">Login</a>
                    <a href=\"{{path('register')}}\" class=\"register\">Register</a>
                {% endif %}
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {# <a href=\"{{path('app_logout')}}\" class=\"login\">Logout</a> #}
                {% endif %}
            </div>
        </div>
        <ul class=\"main-menu\">
            <li><a href=\"{{path('home')}}\">Home</a></li>
            <li><a href=\"{{path('contact')}}\">Contact Us</a></li>

            {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                <li><a href=\"#\">Profile</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"\">Produts</a></li>
                        <li><a href=\"\">Sell</a></li>
                        <li><a href=\"{{path('app_logout')}}\">Logout</a></li>
                    </ul>
                </li>
            {% endif %}
        </ul>
    </header>
    <!-- Header section end -->

{% endblock %}", "header.html.twig", "E:\\Users\\Lakne\\Desktop\\becode\\Week 1\\Ebuy\\ebuy\\templates\\header.html.twig");
    }
}
