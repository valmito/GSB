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

/* fiche_frais/ValiderFrais.html.twig */
class __TwigTemplate_4a55564425c5274cfa67df82eaacc26d880417511c5eccba0addf18daad2e3d0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/ValiderFrais.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/ValiderFrais.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fiche_frais/ValiderFrais.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div id=\"Validation\">
<h1>Validation des frais par visiteur</h1>
<p>
    <div class=\"form-group\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "idVisiteur", [], "any", false, false, false, 7), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "idVisiteur", [], "any", false, false, false, 8), 'errors');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "idVisiteur", [], "any", false, false, false, 9), 'widget');
        echo "
    </div>
</p>
<p>
   <!-- <div class=\"form-group\">
        {  form_label(form.mois, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
        {  form_errors(form.mois) }}
        {  form_widget(form.mois) }}
    </div>
    <nav>
        <select name=\"mois\">
            <option value =\"1\">Janvier</option>
            <option value =\"2\">Février</option>
            <option value =\"3\">Mars</option>
            <option value =\"4\">Avril</option>
            <option value =\"5\">Mai</option>
            <option value =\"6\">Juin</option>
            <option value =\"7\">Juillet</option>
            <option value =\"8\">Août</option>
            <option value =\"9\">Septembre</option>
            <option value =\"10\">Octobre</option>
            <option value =\"11\">Novembre</option>
            <option value =\"12\">Décembre</option>
        </ul>
    </nav>-->
   Mois : ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "
</p>
<h3>
    Frais au forfait
</h3>
<table>
    <tr>
        <td>Repas midi</td>
        <td>Nuitée</td>
        <td>Etape</td>
        <td>Km</td>
        <td>Situation</td>
    </tr>
    <tr>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <div class=\"form-group\">
            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "situation", [], "any", false, false, false, 86), 'errors');
        echo "
            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "situation", [], "any", false, false, false, 87), 'widget');
        echo "
            </div>
        </td>
    </tr>
</table>
<h3>
    Hors Forfait
</h3>
<table>
    <tr>
        <td>Date</td>
        <td>Libellé</td>
        <td>Montant</td>
        <td>Situation</td>
    </tr>
    <tr>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <div class=\"form-group\">
            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "situation", [], "any", false, false, false, 132), 'errors');
        echo "
            ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "situation", [], "any", false, false, false, 133), 'widget');
        echo "
            </div>
        </td>
    </tr>
</table>
<h3>
    Hors Classification
</h3>
<table>
    <tr>
        <td>Nb justificatifs</td>
        <td>Montant</td>
        <td>Situation</td>
    </tr>
    <tr>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <div class=\"form-group\">
            ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "situation", [], "any", false, false, false, 168), 'errors');
        echo "
            ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "situation", [], "any", false, false, false, 169), 'widget');
        echo "
            </div>
        </td>
    </tr>
</table>
<div class=\"row\">
    <div class=\"container\">
        <div class=\"col-md-4\">
            ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "valider", [], "any", false, false, false, 177), 'widget', ["attr" => ["class" => "btn btn-success"]]);
        echo "
            ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "annuler", [], "any", false, false, false, 178), 'widget', ["attr" => ["class" => "btn btn-success"]]);
        echo "
        </div>
    </div>
</div>
</div>
        <div>
            <h3>Liste des fiches de frais</h3><br/>
            <table>
                <tr>
                    <th>id</th>
                    <th>idcomptable</th>
                    <th>mois</th>
                    <th>nombre de justificatifs</th>
                    <th>montant valide</th>
                    <th>date de modification</th>
                    <th>Visiteur</th>
                    <th>Situation</th>
                </tr>
                ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Fiche"]) || array_key_exists("Fiche", $context) ? $context["Fiche"] : (function () { throw new RuntimeError('Variable "Fiche" does not exist.', 196, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["uneFiche"]) {
            // line 197
            echo "                <tr>
                    <td>";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneFiche"], "id", [], "any", false, false, false, 198), "html", null, true);
            echo "</td>
                    <td>";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uneFiche"], "idComptable", [], "any", false, false, false, 199), "nom", [], "any", false, false, false, 199), "html", null, true);
            echo "</td>
                    <td>";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneFiche"], "mois", [], "any", false, false, false, 200), "html", null, true);
            echo "</td>
                    <td>";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneFiche"], "nbJustificatifs", [], "any", false, false, false, 201), "html", null, true);
            echo "</td>
                    <td>";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneFiche"], "montantValide", [], "any", false, false, false, 202), "html", null, true);
            echo "</td>
                    <td>";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uneFiche"], "dateModif", [], "any", false, false, false, 203), "format", [0 => "Y-m-d H:i:s"], "method", false, false, false, 203), "html", null, true);
            echo "</td>
                    <td>";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uneFiche"], "idVisiteur", [], "any", false, false, false, 204), "nom", [], "any", false, false, false, 204), "html", null, true);
            echo "</td>
                    <td>";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uneFiche"], "situation", [], "any", false, false, false, 205), "libelle", [], "any", false, false, false, 205), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneFiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "            </table><br/>
           
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fiche_frais/ValiderFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 208,  334 => 205,  330 => 204,  326 => 203,  322 => 202,  318 => 201,  314 => 200,  310 => 199,  306 => 198,  303 => 197,  299 => 196,  278 => 178,  274 => 177,  263 => 169,  259 => 168,  221 => 133,  217 => 132,  169 => 87,  165 => 86,  110 => 34,  82 => 9,  78 => 8,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
<div id=\"Validation\">
<h1>Validation des frais par visiteur</h1>
<p>
    <div class=\"form-group\">
        {{  form_label(form.idVisiteur, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
        {{  form_errors(form.idVisiteur) }}
        {{  form_widget(form.idVisiteur) }}
    </div>
</p>
<p>
   <!-- <div class=\"form-group\">
        {  form_label(form.mois, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
        {  form_errors(form.mois) }}
        {  form_widget(form.mois) }}
    </div>
    <nav>
        <select name=\"mois\">
            <option value =\"1\">Janvier</option>
            <option value =\"2\">Février</option>
            <option value =\"3\">Mars</option>
            <option value =\"4\">Avril</option>
            <option value =\"5\">Mai</option>
            <option value =\"6\">Juin</option>
            <option value =\"7\">Juillet</option>
            <option value =\"8\">Août</option>
            <option value =\"9\">Septembre</option>
            <option value =\"10\">Octobre</option>
            <option value =\"11\">Novembre</option>
            <option value =\"12\">Décembre</option>
        </ul>
    </nav>-->
   Mois : {{ jour }}
</p>
<h3>
    Frais au forfait
</h3>
<table>
    <tr>
        <td>Repas midi</td>
        <td>Nuitée</td>
        <td>Etape</td>
        <td>Km</td>
        <td>Situation</td>
    </tr>
    <tr>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <div class=\"form-group\">
            {{ form_errors(form.situation) }}
            {{ form_widget(form.situation) }}
            </div>
        </td>
    </tr>
</table>
<h3>
    Hors Forfait
</h3>
<table>
    <tr>
        <td>Date</td>
        <td>Libellé</td>
        <td>Montant</td>
        <td>Situation</td>
    </tr>
    <tr>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <div class=\"form-group\">
            {{ form_errors(form.situation) }}
            {{ form_widget(form.situation) }}
            </div>
        </td>
    </tr>
</table>
<h3>
    Hors Classification
</h3>
<table>
    <tr>
        <td>Nb justificatifs</td>
        <td>Montant</td>
        <td>Situation</td>
    </tr>
    <tr>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <!--
            <div class=\"form-group\">
            { form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            { form_errors(form.idComptable) }}
            { form_widget(form.idComptable) }}
            </div>
            -->
        </td>
        <td>
            <div class=\"form-group\">
            {{ form_errors(form.situation) }}
            {{ form_widget(form.situation) }}
            </div>
        </td>
    </tr>
</table>
<div class=\"row\">
    <div class=\"container\">
        <div class=\"col-md-4\">
            {{ form_widget(form.valider, {'attr': {'class': 'btn btn-success'}}) }}
            {{ form_widget(form.annuler, {'attr': {'class': 'btn btn-success'}}) }}
        </div>
    </div>
</div>
</div>
        <div>
            <h3>Liste des fiches de frais</h3><br/>
            <table>
                <tr>
                    <th>id</th>
                    <th>idcomptable</th>
                    <th>mois</th>
                    <th>nombre de justificatifs</th>
                    <th>montant valide</th>
                    <th>date de modification</th>
                    <th>Visiteur</th>
                    <th>Situation</th>
                </tr>
                {% for uneFiche in Fiche %}
                <tr>
                    <td>{{ uneFiche.id }}</td>
                    <td>{{ uneFiche.idComptable.nom }}</td>
                    <td>{{ uneFiche.mois }}</td>
                    <td>{{ uneFiche.nbJustificatifs }}</td>
                    <td>{{ uneFiche.montantValide }}</td>
                    <td>{{ uneFiche.dateModif.format('Y-m-d H:i:s') }}</td>
                    <td>{{ uneFiche.idVisiteur.nom }}</td>
                    <td>{{ uneFiche.situation.libelle }}</td>
                </tr>
                {% endfor %}
            </table><br/>
           
        </div>
{% endblock %}", "fiche_frais/ValiderFrais.html.twig", "/var/www/html/GSB_Frais/templates/fiche_frais/ValiderFrais.html.twig");
    }
}
