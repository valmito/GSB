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
    <div class=\"form-group\">
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "mois", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "mois", [], "any", false, false, false, 15), 'errors');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "mois", [], "any", false, false, false, 16), 'widget');
        echo "
    </div>
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
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "situation", [], "any", false, false, false, 69), 'errors');
        echo "
            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "situation", [], "any", false, false, false, 70), 'widget');
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
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "situation", [], "any", false, false, false, 115), 'errors');
        echo "
            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "situation", [], "any", false, false, false, 116), 'widget');
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
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "situation", [], "any", false, false, false, 151), 'errors');
        echo "
            ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "situation", [], "any", false, false, false, 152), 'widget');
        echo "
            </div>
        </td>
    </tr>
</table>
<div class=\"row\">
    <div class=\"container\">
        <div class=\"col-md-4\">
            ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "valider", [], "any", false, false, false, 160), 'widget', ["attr" => ["class" => "btn btn-success"]]);
        echo "
            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "annuler", [], "any", false, false, false, 161), 'widget', ["attr" => ["class" => "btn btn-success"]]);
        echo "
        </div>
    </div>
</div>
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
        return array (  267 => 161,  263 => 160,  252 => 152,  248 => 151,  210 => 116,  206 => 115,  158 => 70,  154 => 69,  98 => 16,  94 => 15,  90 => 14,  82 => 9,  78 => 8,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
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
    <div class=\"form-group\">
        {{  form_label(form.mois, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
        {{  form_errors(form.mois) }}
        {{  form_widget(form.mois) }}
    </div>
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
{% endblock %}", "fiche_frais/ValiderFrais.html.twig", "/var/www/html/GSB_Frais/templates/fiche_frais/ValiderFrais.html.twig");
    }
}
