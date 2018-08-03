<?php

/* admin/layout_admin.html.twig */
class __TwigTemplate_b35f93a3a4e81d8ba2f09bcedf520f2372f3453ef00d19d7f4e7825a394f1ff9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout_admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout_admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>SB Admin - Start Bootstrap Template</title>
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
</head>

<body class=\"fixed-nav sticky-footer bg-dark\" id=\"page-top\">
<!-- Navigation-->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" id=\"mainNav\">
    <a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_paginated");
        echo "\">Zalmo</a>
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav navbar-sidenav\" id=\"exampleAccordion\">
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Dashboard\">
                <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">
                    <i class=\"fa fa-fw fa-dashboard\"></i>
                    <span class=\"nav-link-text\">Dashboard</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                    <i class=\"fa fa-fw fa-sign-out\"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class=\"content-wrapper\">
    <div class=\"container-fluid\">
        <!-- Breadcrumbs-->
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\">
                <a href=\"#\">Dashboard</a>
            </li>
            <li class=\"breadcrumb-item active\">Tables</li>
        </ol>
        <!-- Example DataTables Card-->
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "    </div>
</div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class=\"sticky-footer\">
        <div class=\"container\">
            <div class=\"text-center\">
                <small>Copyright © Zalmo 2018</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fa fa-angle-up\"></i>
    </a>
    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Core plugin JavaScript-->
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Page level plugin JavaScript-->
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom scripts for all pages-->
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sb-admin.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom scripts for this page-->
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sb-admin-datatables.min.js"), "html", null, true);
        echo "\"></script>
</div>
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
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
        return "admin/layout_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 54,  172 => 99,  167 => 97,  162 => 95,  158 => 94,  153 => 92,  148 => 90,  144 => 89,  135 => 83,  105 => 55,  103 => 54,  77 => 31,  67 => 24,  58 => 18,  53 => 16,  48 => 14,  43 => 12,  30 => 1,);
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
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link href=\"{{  asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Custom fonts for this template-->
    <link href=\"{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Page level plugin CSS-->
    <link href=\"{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}\" rel=\"stylesheet\">
    <!-- Custom styles for this template-->
    <link href=\"{{ asset('vendor/css/sb-admin.css\" rel=\"stylesheet') }}\">
</head>

<body class=\"fixed-nav sticky-footer bg-dark\" id=\"page-top\">
<!-- Navigation-->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" id=\"mainNav\">
    <a class=\"navbar-brand\" href=\"{{ path('home_paginated') }}\">Zalmo</a>
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav navbar-sidenav\" id=\"exampleAccordion\">
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Dashboard\">
                <a class=\"nav-link\" href=\"{{ path('admin_dashboard') }}\">
                    <i class=\"fa fa-fw fa-dashboard\"></i>
                    <span class=\"nav-link-text\">Dashboard</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                    <i class=\"fa fa-fw fa-sign-out\"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class=\"content-wrapper\">
    <div class=\"container-fluid\">
        <!-- Breadcrumbs-->
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\">
                <a href=\"#\">Dashboard</a>
            </li>
            <li class=\"breadcrumb-item active\">Tables</li>
        </ol>
        <!-- Example DataTables Card-->
        {% block body %}{% endblock %}
    </div>
</div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class=\"sticky-footer\">
        <div class=\"container\">
            <div class=\"text-center\">
                <small>Copyright © Zalmo 2018</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fa fa-angle-up\"></i>
    </a>
    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"{{ path('logout') }}\">Logout</a>
                </div>
            </div>
        </div>
    </div>
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
</div>
</body>

</html>
", "admin/layout_admin.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Zalmo/templates/admin/layout_admin.html.twig");
    }
}
