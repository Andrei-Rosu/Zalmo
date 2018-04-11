<?php

/* incs/product_list.html.twig */
class __TwigTemplate_c8bd4c251b78aac25e4d8be467abd704e4dbb9bb4d627e3bb35769d406f6ea3f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "incs/product_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "incs/product_list.html.twig"));

        // line 1
        echo "<!-- Page Features -->
<div class=\"row text-center\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"card\">
                <img class=\"card-img-top\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "image", array())), "html", null, true);
            echo "\" alt=\"\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", array()), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", array()), "html", null, true);
            echo "</p>
                    <div>
                        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 12
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag", array("slug" => twig_get_attribute($this->env, $this->source, $context["tag"], "slug", array()))), "html", null, true);
                echo "\" class=\"badge badge-pill badge-info\" >#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", array()), "html", null, true);
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                    </div>
                </div>
                ";
            // line 16
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "owner", array()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "user", array()), "id", array())))) {
                // line 17
                echo "                <div class=\"card-footer\">
                    <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_product", array("id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\">Edit</a>
                    <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_product", array("id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Delete</a>
                </div>
                    ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 22
                echo "                    <div class=\"card-footer\">
                        <a class=\"btn btn-success\" href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_loan", array("id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", array()))), "html", null, true);
                echo "\">Loan</a>
                    </div>
                ";
            }
            // line 26
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</div>
<!-- /.row -->

    ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 32, $this->source); })()), "haveToPaginate", array())) {
            // line 33
            echo "        ";
            echo $this->extensions['WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension']->renderPagerfanta((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 33, $this->source); })()), "twitter_bootstrap4", array("routeName" => (isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new Twig_Error_Runtime('Variable "routeName" does not exist.', 33, $this->source); })())));
            echo "
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "incs/product_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  111 => 32,  106 => 29,  98 => 26,  92 => 23,  89 => 22,  83 => 19,  79 => 18,  76 => 17,  74 => 16,  70 => 14,  59 => 12,  55 => 11,  50 => 9,  46 => 8,  41 => 6,  37 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Page Features -->
<div class=\"row text-center\">
    {% for product in products %}
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"card\">
                <img class=\"card-img-top\" src=\"{{asset(product.image)}}\" alt=\"\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ product.title }}</h4>
                    <p class=\"card-text\">{{ product.description }}</p>
                    <div>
                        {% for tag in product.tags %}
                            <a href=\"{{ path('tag', {'slug' : tag.slug}) }}\" class=\"badge badge-pill badge-info\" >#{{ tag.name }}</a>
                        {% endfor %}
                    </div>
                </div>
                {% if is_granted('ROLE_USER') and product.owner.id == app.user.id %}
                <div class=\"card-footer\">
                    <a href=\"{{ path('edit_product', {'id': product.id}) }}\" class=\"btn btn-primary\">Edit</a>
                    <a href=\"{{ path('delete_product', {'id': product.id}) }}\" class=\"btn btn-danger\">Delete</a>
                </div>
                    {% elseif is_granted('ROLE_USER')%}
                    <div class=\"card-footer\">
                        <a class=\"btn btn-success\" href=\"{{ path('add_loan', {'id': product.id}) }}\">Loan</a>
                    </div>
                {% endif %}
            </div>
        </div>
    {% endfor %}
</div>
<!-- /.row -->

    {%  if products.haveToPaginate %}
        {{ pagerfanta(products,'twitter_bootstrap4',{'routeName': routeName}) }}
    {% endif %}", "incs/product_list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/moijv1/templates/incs/product_list.html.twig");
    }
}
