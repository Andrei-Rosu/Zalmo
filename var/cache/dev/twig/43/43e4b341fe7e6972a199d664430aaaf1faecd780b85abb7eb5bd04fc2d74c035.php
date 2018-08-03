<?php

/* customer/layout_customer.html.twig */
class __TwigTemplate_499cfa5e720fa001e137856df3408cdd64da14e032c3d09592b0c7b491750ba1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "customer/layout_customer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "customer/layout_customer.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Zalmo - sans plastic on vive mieux</title>
    <!-- Bootstrap core CSS-->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom fonts for this template-->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Page level plugin CSS-->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom styles for this template-->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/sb-admin.css\" rel=\"stylesheet"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/heroic-features.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "</head>

<body class=\"bg-success\">
<div class=\"container\">

<!-- Navigation-->

<nav class=\"navbar navbar-expand-lg navbar-dark bg-success fixed-top\">


        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil
                        <span class=\"sr-only\">(current)</span>
                    </a>
                </li>
                ";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 42
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_paginated");
            echo "\"> Ma boutique</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_cart");
            echo "\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> Mon panier</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"> Déconnexion</a>
                    </li>
                ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CUSTOMER")) {
            // line 52
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_cart");
            echo "\" ><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> Mon panier</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"> Déconnexion</a>
                    </li>
                ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 59
            echo "
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            echo "\"> Panneau de control</a>
                    </li>

                ";
        } else {
            // line 65
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"> Connectez-vous</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer");
            echo "\">Creer son boutique</a>
                    </li>
                ";
        }
        // line 72
        echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Contactez-nous</a>
                </li>
            </ul>
        </div>

</nav>
    <h3><a class=\"text-light\" href=\"#\">Zalmo - sans plastic on vive mieux</a></h3>

        <!-- Example DataTables Card-->
        ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
<footer class=\"py-3 bg-success fixed-bottom\">
    <div class=\"container\">
        <div class=\"text-center text-light\">
            <small>Copyright © Zalmo 2018</small>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->


<!-- Bootstrap core JavaScript-->
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- Core plugin JavaScript-->
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
<!-- Page level plugin JavaScript-->
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>
<!-- Custom scripts for all pages-->
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sb-admin.min.js"), "html", null, true);
        echo "\"></script>
<!-- Custom scripts for this page-->
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sb-admin-datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function(){
            \$.getJSON(\"";
        // line 110
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
</div>
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "customer/layout_customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 82,  248 => 20,  222 => 110,  216 => 107,  211 => 105,  206 => 103,  202 => 102,  197 => 100,  192 => 98,  188 => 97,  172 => 83,  170 => 82,  158 => 72,  152 => 69,  146 => 66,  143 => 65,  136 => 61,  132 => 59,  126 => 56,  120 => 53,  117 => 52,  111 => 49,  105 => 46,  99 => 43,  96 => 42,  94 => 41,  87 => 37,  69 => 21,  67 => 20,  63 => 19,  59 => 18,  54 => 16,  49 => 14,  44 => 12,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Zalmo - sans plastic on vive mieux</title>
    <!-- Bootstrap core CSS-->
    <link href=\"{{  asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Custom fonts for this template-->
    <link href=\"{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Page level plugin CSS-->
    <link href=\"{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}\" rel=\"stylesheet\">
    <!-- Custom styles for this template-->
    <link href=\"{{ asset('vendor/css/sb-admin.css\" rel=\"stylesheet') }}\">
    <link href=\"{{ asset('css/heroic-features.css')}}\" rel=\"stylesheet\">
    {% block stylesheets %}{% endblock %}
</head>

<body class=\"bg-success\">
<div class=\"container\">

<!-- Navigation-->

<nav class=\"navbar navbar-expand-lg navbar-dark bg-success fixed-top\">


        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('home') }}\">Accueil
                        <span class=\"sr-only\">(current)</span>
                    </a>
                </li>
                {% if is_granted('ROLE_USER') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('product_paginated') }}\"> Ma boutique</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('edit_cart')}}\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> Mon panier</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('logout') }}\"> Déconnexion</a>
                    </li>
                {% elseif is_granted ('ROLE_CUSTOMER')%}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('edit_cart') }}\" ><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> Mon panier</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('logout') }}\"> Déconnexion</a>
                    </li>
                {% elseif is_granted ('ROLE_ADMIN') %}

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('admin_dashboard') }}\"> Panneau de control</a>
                    </li>

                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('login') }}\"> Connectez-vous</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('customer') }}\">Creer son boutique</a>
                    </li>
                {% endif %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Contactez-nous</a>
                </li>
            </ul>
        </div>

</nav>
    <h3><a class=\"text-light\" href=\"#\">Zalmo - sans plastic on vive mieux</a></h3>

        <!-- Example DataTables Card-->
        {% block body %}{% endblock %}

<!-- /.container-fluid-->
<!-- /.content-wrapper-->
<footer class=\"py-3 bg-success fixed-bottom\">
    <div class=\"container\">
        <div class=\"text-center text-light\">
            <small>Copyright © Zalmo 2018</small>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->


<!-- Bootstrap core JavaScript-->
<script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<!-- Core plugin JavaScript-->
<script src=\"{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}\"></script>
<!-- Page level plugin JavaScript-->
<script src=\"{{ asset('vendor/datatables/jquery.dataTables.js') }}\"></script>
<script src=\"{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}\"></script>
<!-- Custom scripts for all pages-->
<script src=\"{{ asset('js/sb-admin.min.js') }}\"></script>
<!-- Custom scripts for this page-->
<script src=\"{{ asset('js/sb-admin-datatables.min.js') }}\"></script>
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
</div>
</body>

</html>
", "customer/layout_customer.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Zalmo/templates/customer/layout_customer.html.twig");
    }
}
