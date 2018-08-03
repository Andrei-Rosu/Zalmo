<?php

/* transaction/edit.html.twig */
class __TwigTemplate_284e79f273e8898d8ed86898d5b4660288109bf411fc093f17c561598f78f522 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transaction/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transaction/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transaction/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        <h3>Votre panier</h3>
        <div class=\"card mb-3\">
            <div class=\"card-body checkout\">
                <div class=\"table-responsive table-responsive-md\">
                    ";
        // line 10
        if ((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new Twig_Error_Runtime('Variable "transactions" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "                    <table class=\"table table-bordered\"  width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>Nom du produit</th>
                            <th>Description</th>
                            <th>Quantité</th>
                            <th>Prix</th>
                            <th>Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new Twig_Error_Runtime('Variable "transactions" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["trans"]) {
                // line 24
                echo "                            ";
                $context["transaction"] = twig_get_attribute($this->env, $this->source, $context["trans"], 0, array(), "array");
                // line 25
                echo "                            <tr>
                                <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new Twig_Error_Runtime('Variable "transaction" does not exist.', 26, $this->source); })()), "product", array()), "title", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new Twig_Error_Runtime('Variable "transaction" does not exist.', 27, $this->source); })()), "product", array()), "description", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trans"], "quantity", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new Twig_Error_Runtime('Variable "transaction" does not exist.', 29, $this->source); })()), "product", array()), "price", array()), "html", null, true);
                echo "</td>

                                <td><a class =\"btn btn-danger fa fa-trash \" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_transaction", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new Twig_Error_Runtime('Variable "transaction" does not exist.', 31, $this->source); })()), "id", array()))), "html", null, true);
                echo "\"> RETIRER DU PANIER</a></td>

                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trans'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                        <td colspan=\"3\">TOTAL</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new Twig_Error_Runtime('Variable "totalPrice" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "</td>
                        <td><a class=\"btn btn-primary\" href=\"#\">PAYER</a> </td>
                        </tbody>

                    </table>
                    ";
        } else {
            // line 42
            echo "                        <h3>Ton panier est vide</h3>
                    ";
        }
        // line 44
        echo "
                </div>
            </div>
        </div>



    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "transaction/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 44,  124 => 42,  115 => 36,  112 => 35,  102 => 31,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  82 => 25,  79 => 24,  75 => 23,  61 => 11,  59 => 10,  53 => 6,  44 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}



    {% block body %}
        <h3>Votre panier</h3>
        <div class=\"card mb-3\">
            <div class=\"card-body checkout\">
                <div class=\"table-responsive table-responsive-md\">
                    {% if transactions %}
                    <table class=\"table table-bordered\"  width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>Nom du produit</th>
                            <th>Description</th>
                            <th>Quantité</th>
                            <th>Prix</th>
                            <th>Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        {% for trans in transactions %}
                            {%  set transaction = trans[0] %}
                            <tr>
                                <td>{{ transaction.product.title }}</td>
                                <td>{{ transaction.product.description }}</td>
                                <td>{{ trans.quantity}}</td>
                                <td>{{ transaction.product.price}}</td>

                                <td><a class =\"btn btn-danger fa fa-trash \" href=\"{{ path('delete_transaction',{'id':transaction.id}) }}\"> RETIRER DU PANIER</a></td>

                            </tr>
                        {% endfor %}
                        <td colspan=\"3\">TOTAL</td>
                        <td>{{ totalPrice }}</td>
                        <td><a class=\"btn btn-primary\" href=\"#\">PAYER</a> </td>
                        </tbody>

                    </table>
                    {% else %}
                        <h3>Ton panier est vide</h3>
                    {% endif %}

                </div>
            </div>
        </div>



    {% endblock %}
", "transaction/edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Zalmo/templates/transaction/edit.html.twig");
    }
}
