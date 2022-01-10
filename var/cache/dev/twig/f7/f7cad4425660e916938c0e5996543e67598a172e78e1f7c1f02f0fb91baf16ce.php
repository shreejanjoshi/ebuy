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

/* footer/index.html.twig */
class __TwigTemplate_d7140ed9cb7e9214769974d3d4044220dca701ffb1f0bd78f2c2dbe5c91e13db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/index.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "


    <!-- Footer -->
    <footer class=\"text-center text-lg-start text-muted\">
        <!-- Section: Social media -->
        <section
                class=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\"
        >


        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class=\"\">
            <div class=\"container text-center text-md-start mt-5\">
                <!-- Grid row -->
                <div class=\"row mt-3\">
                    <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
                        <!-- Content -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">
                            <i class=\"fas fa-gem me-3\"></i><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"site-logo\">
                                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.png"), "html", null, true);
        echo "\" height=\"70px\" alt=\"\">
                            </a>
                        </h6>
                        <p>
                            Dear customers feel free to buy and sell your products. If you have any question or problem don't hesitate to reach out to us.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
                        <!-- Links -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">
                            Products
                        </h6>
                        Categories
                        </h6>
                          ";
        // line 44
        echo "                         <p>
                            <a href=\"#!\" class=\"text-reset\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 45, $this->source); })()), 0, [], "array", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
        echo " </a>
                        </p>
                        <p>
                            <a href=\"#!\" class=\"text-reset\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 48, $this->source); })()), 1, [], "array", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
        echo " </a>
                        </p>
                        <p>
                            <a href=\"#!\" class=\"text-reset\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 51, $this->source); })()), 2, [], "array", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
        echo " </a>
                        </p>
                        <p>
                            <a href=\"#!\" class=\"text-reset\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 54, $this->source); })()), 3, [], "array", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
        echo " </a>
                        </p>  
                        ";
        // line 57
        echo "                    </div>
                    
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
                        <!-- Links -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">
                            Useful links
                        </h6>
                        <p>
                            <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"text-reset\">Contact</a>
                        </p>
                        <p>
                            <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\" class=\"text-reset\">Product</a>
                        </p>
                        ";
        // line 73
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 74
            echo "                        <p>
                            <a href=\"#!\" class=\"text-reset\">Buy</a>
                        </p>
                        <p>
                            <a href=\"#!\" class=\"text-reset\">Sell</a>
                        </p>
                        <p>
                            <a href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"register\">Logout</a>
                        </p>
                        ";
        }
        // line 84
        echo "                        ";
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 85
            echo "                        <p>
                            <a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" class=\"text-reset\">Register</a>
                        </p>
                        <p>
                            <a href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"login\">Login</a>
                        </p>
                        ";
        }
        // line 92
        echo "                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
                        <!-- Links -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">
                            Contact
                        </h6>
                        <p><i class=\"fas fa-home me-3\"></i> Tolhuis, Sint-Pietersvliet 7, 2000 Antwerpen</p>
                        <p>
                            <i class=\"fas fa-envelope me-3\"></i>
                             customerservices@ebuy.com
                        </p>
                        <p><i class=\"fas fa-phone me-3\"></i> 0486 19 19 99</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
            © 2021 Copyright:
            <a class=\"text-reset fw-bold\" href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Ebuy</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "footer/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  225 => 118,  197 => 92,  191 => 89,  185 => 86,  182 => 85,  179 => 84,  173 => 81,  164 => 74,  162 => 73,  157 => 71,  151 => 68,  138 => 57,  133 => 54,  127 => 51,  121 => 48,  115 => 45,  112 => 44,  92 => 26,  88 => 25,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block footer %}



    <!-- Footer -->
    <footer class=\"text-center text-lg-start text-muted\">
        <!-- Section: Social media -->
        <section
                class=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\"
        >


        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class=\"\">
            <div class=\"container text-center text-md-start mt-5\">
                <!-- Grid row -->
                <div class=\"row mt-3\">
                    <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
                        <!-- Content -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">
                            <i class=\"fas fa-gem me-3\"></i><a href=\"{{path('home')}}\" class=\"site-logo\">
                                <img src=\"{{asset('img/logo2.png')}}\" height=\"70px\" alt=\"\">
                            </a>
                        </h6>
                        <p>
                            Dear customers feel free to buy and sell your products. If you have any question or problem don't hesitate to reach out to us.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
                        <!-- Links -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">
                            Products
                        </h6>
                        Categories
                        </h6>
                          {# {% for category in categories %} #}
                         <p>
                            <a href=\"#!\" class=\"text-reset\">{{categories[0].name}} </a>
                        </p>
                        <p>
                            <a href=\"#!\" class=\"text-reset\">{{categories[1].name}} </a>
                        </p>
                        <p>
                            <a href=\"#!\" class=\"text-reset\">{{categories[2].name}} </a>
                        </p>
                        <p>
                            <a href=\"#!\" class=\"text-reset\">{{categories[3].name}} </a>
                        </p>  
                        {# {% endfor %} #}
                    </div>
                    
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
                        <!-- Links -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">
                            Useful links
                        </h6>
                        <p>
                            <a href=\"{{path('contact')}}\" class=\"text-reset\">Contact</a>
                        </p>
                        <p>
                            <a href=\"{{path('products')}}\" class=\"text-reset\">Product</a>
                        </p>
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <p>
                            <a href=\"#!\" class=\"text-reset\">Buy</a>
                        </p>
                        <p>
                            <a href=\"#!\" class=\"text-reset\">Sell</a>
                        </p>
                        <p>
                            <a href=\"{{path('app_logout')}}\" class=\"register\">Logout</a>
                        </p>
                        {% endif %}
                        {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
                        <p>
                            <a href=\"{{path('register')}}\" class=\"text-reset\">Register</a>
                        </p>
                        <p>
                            <a href=\"{{path('app_login')}}\" class=\"login\">Login</a>
                        </p>
                        {% endif %}
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
                        <!-- Links -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">
                            Contact
                        </h6>
                        <p><i class=\"fas fa-home me-3\"></i> Tolhuis, Sint-Pietersvliet 7, 2000 Antwerpen</p>
                        <p>
                            <i class=\"fas fa-envelope me-3\"></i>
                             customerservices@ebuy.com
                        </p>
                        <p><i class=\"fas fa-phone me-3\"></i> 0486 19 19 99</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
            © 2021 Copyright:
            <a class=\"text-reset fw-bold\" href=\"{{path ('home')}}\">Ebuy</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
{% endblock %}", "footer/index.html.twig", "E:\\Users\\Lakne\\Desktop\\becode\\Week 1\\Ebuy\\ebuy\\templates\\footer\\index.html.twig");
    }
}
