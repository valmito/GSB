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

/* fiche_frais/Afficher.html.twig */
class __TwigTemplate_e193027e9dfd7a661ddff4461f13fe1dc59ccb85ffc7f9455ab967d1ba101b8e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/Afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/Afficher.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fiche_frais/Afficher.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Formulaire de connexion
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h2>Période</h2>
    Mois/année:<input type=\"month\">
        <div>
            <h3>Frais au forfait</h3><br/>
            <table>
                <tr>
                    <td>Repas midi</td>
                    <td>Nuitée</td>
                    <td>Etape</td>
                    <td>Km</td>
                    <td>Situation</td>
                </tr>
            </table>
        </div>
        <div>
            <h3>Hors Forfait</h3><br/>
            <table>
                <tr>
                    <td>Date</td>
                    <td>Libellé</td>
                    <td>Montant</td>
                    <td>Situation</td>
                </tr>
            </table>
        </div>
        <div>
            <h3>Hors Classification</h3><br/>
            <table>
                <tr>
                    
                    <th>nombre de justificatifs</th>
                    <th>montant</th>
                </tr>
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Fiche"]) || array_key_exists("Fiche", $context) ? $context["Fiche"] : (function () { throw new RuntimeError('Variable "Fiche" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["uneFiche"]) {
            // line 41
            echo "                <tr>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneFiche"], "nbJustificatifs", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneFiche"], "montantValide", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                    ";
            // line 48
            echo "                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneFiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </table><br/>
           
        </div>
    </center>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fiche_frais/Afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 50,  140 => 48,  136 => 43,  132 => 42,  129 => 41,  125 => 40,  90 => 7,  80 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
Formulaire de connexion
{% endblock %}

{% block body %}
    <h2>Période</h2>
    Mois/année:<input type=\"month\">
        <div>
            <h3>Frais au forfait</h3><br/>
            <table>
                <tr>
                    <td>Repas midi</td>
                    <td>Nuitée</td>
                    <td>Etape</td>
                    <td>Km</td>
                    <td>Situation</td>
                </tr>
            </table>
        </div>
        <div>
            <h3>Hors Forfait</h3><br/>
            <table>
                <tr>
                    <td>Date</td>
                    <td>Libellé</td>
                    <td>Montant</td>
                    <td>Situation</td>
                </tr>
            </table>
        </div>
        <div>
            <h3>Hors Classification</h3><br/>
            <table>
                <tr>
                    
                    <th>nombre de justificatifs</th>
                    <th>montant</th>
                </tr>
                {% for uneFiche in Fiche %}
                <tr>
                    <td>{{ uneFiche.nbJustificatifs }}</td>
                    <td>{{ uneFiche.montantValide }}</td>
                    {#
                    <td><a href=\"/fiche/frais/update/{{ uneFiche.id }}\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                    <td><a href=\"/fiche/frais/supprimer/{{ uneFiche.id }}\" class=\"btn btn-outline-danger\">SUPPRIMER</a></td>
                    #}
                </tr>
                {% endfor %}
            </table><br/>
           
        </div>
    </center>

{% endblock %}", "fiche_frais/Afficher.html.twig", "/var/www/html/GSB_Frais/templates/fiche_frais/Afficher.html.twig");
    }
}
