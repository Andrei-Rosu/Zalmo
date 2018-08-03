<?php

/* base.html.twig */
class __TwigTemplate_cdbbd04d70977197e33fe9541aecbbc76e973171effe8279a9c938e1ed73dc9b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/heroic-features.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">



</head>

<body>

<!-- Navigation -->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-success fixed-top\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">Bienvenue dans la boutique sans plastique</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><i class=\"fa fa-home\"></i> Accueil
                        <span class=\"sr-only\">(current)</span>
                    </a>
                </li>
                ";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 42
            echo "
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_paginated");
            echo "\"> Ma boutique</a>
                </li>

                    <li class=\"nav-item\">

                         <a class=\"nav-link\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_cart");
            echo "\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> Mon panier <span class=\"badge badge-pill badge-dark\" id=\"total-price\"></span></a>
                    </li>


                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"> Déconnexion</a>
                    </li>


                    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CUSTOMER")) {
            // line 59
            echo "
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_cart");
            echo "\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> Mon panier<span class=\"badge badge-pill badge-dark\" id=\"total-price\"></span></a>
                        </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"> Déconnexion</a>
                    </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
            echo "\">Creer sa boutique</a>
                        </li>
                ";
        } else {
            // line 71
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_cart");
            echo "\" ><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> Mon panier<span id=\"total-price\"></span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
            echo "\">Creer sa boutique</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle bg-success\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-plug\"></i>
                        Connexion
                    </a>
                    <div class=\"dropdown-menu bg-success\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item bg-success text-light\" href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer");
            echo "\">Inscrivez-vous</a>
                        <a class=\"dropdown-item bg-success text-light\" href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connectez-vous</a>
                    </div>
                    </li>
                ";
        }
        // line 87
        echo "            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class=\"container-fluid\">

    <!-- Jumbotron Header -->
    ";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "
    <!-- Page Features -->

<!-- /.container -->
</div>
<!-- Footer -->
<footer class=\"py-3 bg-success fixed-bottom\">
    <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Zalmo Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(function(){
        \$.getJSON(\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_detail");
        echo "\", function (json) {
            \$('#total-price').text(json['quantity']);
        });
        \$('.add_to_cart').click(function(e){
            e.preventDefault();
            \$.getJSON(\$(this).data('href'), function(json) {
                \$('#total-price').text(json['quantity']);
            });
        })
    })
    </script>
";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 127
        echo "
</body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Zalmo - le bio";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
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
        return array (  280 => 126,  263 => 96,  245 => 11,  230 => 127,  228 => 126,  214 => 115,  208 => 112,  204 => 111,  188 => 97,  186 => 96,  175 => 87,  168 => 83,  164 => 82,  154 => 75,  148 => 72,  145 => 71,  139 => 68,  133 => 65,  126 => 61,  122 => 59,  114 => 54,  106 => 49,  98 => 44,  94 => 42,  92 => 41,  85 => 37,  64 => 19,  60 => 18,  56 => 17,  50 => 14,  44 => 11,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}Zalmo - le bio{% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/heroic-features.css')}}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/style.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">



</head>

<body>

<!-- Navigation -->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-success fixed-top\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">Bienvenue dans la boutique sans plastique</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('home') }}\"><i class=\"fa fa-home\"></i> Accueil
                        <span class=\"sr-only\">(current)</span>
                    </a>
                </li>
                {% if is_granted('ROLE_USER') %}

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('product_paginated') }}\"> Ma boutique</a>
                </li>

                    <li class=\"nav-item\">

                         <a class=\"nav-link\" href=\"{{ path('edit_cart')}}\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> Mon panier <span class=\"badge badge-pill badge-dark\" id=\"total-price\"></span></a>
                    </li>


                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('logout') }}\"> Déconnexion</a>
                    </li>


                    {% elseif is_granted ('ROLE_CUSTOMER') %}

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('edit_cart') }}\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> Mon panier<span class=\"badge badge-pill badge-dark\" id=\"total-price\"></span></a>
                        </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('logout') }}\"> Déconnexion</a>
                    </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('shop') }}\">Creer sa boutique</a>
                        </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('edit_cart')}}\" ><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> Mon panier<span id=\"total-price\"></span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('shop') }}\">Creer sa boutique</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle bg-success\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-plug\"></i>
                        Connexion
                    </a>
                    <div class=\"dropdown-menu bg-success\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item bg-success text-light\" href=\"{{ path('customer') }}\">Inscrivez-vous</a>
                        <a class=\"dropdown-item bg-success text-light\" href=\"{{ path('login') }}\">Connectez-vous</a>
                    </div>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class=\"container-fluid\">

    <!-- Jumbotron Header -->
    {% block body %}{% endblock %}

    <!-- Page Features -->

<!-- /.container -->
</div>
<!-- Footer -->
<footer class=\"py-3 bg-success fixed-bottom\">
    <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Zalmo Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src=\"{{ asset('vendor/jquery/jquery.min.js')}}\"></script>
<script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
<script>
    \$(function(){
        \$.getJSON(\"{{ path(\"cart_detail\") }}\", function (json) {
            \$('#total-price').text(json['quantity']);
        });
        \$('.add_to_cart').click(function(e){
            e.preventDefault();
            \$.getJSON(\$(this).data('href'), function(json) {
                \$('#total-price').text(json['quantity']);
            });
        })
    })
    </script>
{% block javascripts %}{% endblock %}

</body>

</html>

", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Zalmo/templates/base.html.twig");
    }
}
