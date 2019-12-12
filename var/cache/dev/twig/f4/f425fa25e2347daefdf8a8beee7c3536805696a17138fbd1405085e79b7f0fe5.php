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

/* fiche_frais/Creer.html.twig */
class __TwigTemplate_b809d80eeedd9627968493dc45efe1c52500919ddf8d44ac9493da860db9ad2b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/Creer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/Creer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fiche_frais/Creer.html.twig", 1);
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
        echo "Renseigner la fiche de frais
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "
<h3>Saisie</h3>
PERIODE D'ENGAGEMENT :
";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "
<!--
<div class=\"form-group\">
{ form_label(form.mois, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{ form_errors(form.mois) }}
{ form_widget(form.mois) }}
</div>
-->
<action form='POST'>
<h3>Frais au forfait</h3>
<!--
<div class=\"form-group\">
{ form_label(form2.montant, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{ form_errors(form2.montant) }}
{ form_widget(form2.montant) }}
</div>
<div class=\"form-group\">
{ form_label(form2.montant, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{ form_errors(form2.montant) }}
{ form_widget(form2.montant) }}
</div>
<div class=\"form-group\">
{ form_label(form2.montant, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{ form_errors(form2.montant) }}
{ form_widget(form2.montant) }}
</div>
<div class=\"form-group\">
{ form_label(form2.montant, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{ form_errors(form2.montant) }}
{ form_widget(form2.montant) }}
</div>
-->
Repas midi : <input type='number' name='midi' min=\"0\"><br>
Nuitées :<input type='number' name='nuit'  min=\"0\"><br>
Etape :<input type='number' name='etape'  min=\"0\"><br>
KM :<input type='number' name='km'  min=\"0\"><br>
</action>
<h3>Hors Forfait</h3>
<div class=\"form-group\">

";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 82, $this->source); })()), "date", [], "any", false, false, false, 82), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 83, $this->source); })()), "date", [], "any", false, false, false, 83), 'errors');
        echo "
";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 84, $this->source); })()), "date", [], "any", false, false, false, 84), 'widget');
        echo "
</div>
<div class=\"form-group\">
 
";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 88, $this->source); })()), "libelle", [], "any", false, false, false, 88), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 89, $this->source); })()), "libelle", [], "any", false, false, false, 89), 'errors');
        echo "
";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 90, $this->source); })()), "libelle", [], "any", false, false, false, 90), 'widget');
        echo "
</div>

<div class=\"form-group\">
";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 94, $this->source); })()), "montant", [], "any", false, false, false, 94), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 95, $this->source); })()), "montant", [], "any", false, false, false, 95), 'errors');
        echo "
";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 96, $this->source); })()), "montant", [], "any", false, false, false, 96), 'widget');
        echo "
</div>
<h3>Hors Classification</h3>
<div class=\"form-group\">
";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 100), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 101), 'errors');
        echo "
";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 102), 'widget');
        echo "
</div>
<div class=\"form-group\">
";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "montantValide", [], "any", false, false, false, 105), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "montantValide", [], "any", false, false, false, 106), 'errors');
        echo "
";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "montantValide", [], "any", false, false, false, 107), 'widget');
        echo "
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"container\">
        <label class=\"col-md-4 control-label\"></label>
            <div class=\"col-md-4\">
                ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "valider", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "btn btn-success"]]);
        echo "
                ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "annuler", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "btn btn-success"]]);
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
        return "fiche_frais/Creer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 116,  216 => 115,  205 => 107,  201 => 106,  197 => 105,  191 => 102,  187 => 101,  183 => 100,  176 => 96,  172 => 95,  168 => 94,  161 => 90,  157 => 89,  153 => 88,  146 => 84,  142 => 83,  138 => 82,  95 => 42,  90 => 39,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
Renseigner la fiche de frais
{% endblock %}
{% block body %}
{#
<center>
<div class=\"well\">
{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
{{ form_errors(form) }}
{{ form_start(form2, {'attr': {'class': 'form-horizontal'}}) }}
{{ form_errors(form2) }}
<h3><center>Formulaire Ajouter Fiche Frais</center></h3>
<div class=\"well\">
{{  form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
Les erreurs générales du formulaire.
{{  form_errors(form) }}
<div class=\"form-group\">
{{ form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{{form_errors(form.idComptable) }}
{{form_widget(form.idComptable) }}
<div class=\"form-group\">
{{ form_label(form.mois, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{{form_errors(form.mois) }}
{{form_widget(form.mois) }}
<div class=\"form-group\">
{{form_label(form.nbJustificatifs, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{{form_errors(form.nbJustificatifs) }}
{{form_widget(form.nbJustificatifs) }}
<div class=\"form-group\">
{{form_label(form.montantValide, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{{form_errors(form.montantValide) }}
{{form_widget(form.montantValide) }}
<div class=\"form-group\">
{{form_label(form.dateModif, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{{form_errors(form.dateModif) }}
{{form_widget(form.dateModif) }}
#}

<h3>Saisie</h3>
PERIODE D'ENGAGEMENT :
{{ jour }}
<!--
<div class=\"form-group\">
{ form_label(form.mois, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{ form_errors(form.mois) }}
{ form_widget(form.mois) }}
</div>
-->
<action form='POST'>
<h3>Frais au forfait</h3>
<!--
<div class=\"form-group\">
{ form_label(form2.montant, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{ form_errors(form2.montant) }}
{ form_widget(form2.montant) }}
</div>
<div class=\"form-group\">
{ form_label(form2.montant, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{ form_errors(form2.montant) }}
{ form_widget(form2.montant) }}
</div>
<div class=\"form-group\">
{ form_label(form2.montant, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{ form_errors(form2.montant) }}
{ form_widget(form2.montant) }}
</div>
<div class=\"form-group\">
{ form_label(form2.montant, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{ form_errors(form2.montant) }}
{ form_widget(form2.montant) }}
</div>
-->
Repas midi : <input type='number' name='midi' min=\"0\"><br>
Nuitées :<input type='number' name='nuit'  min=\"0\"><br>
Etape :<input type='number' name='etape'  min=\"0\"><br>
KM :<input type='number' name='km'  min=\"0\"><br>
</action>
<h3>Hors Forfait</h3>
<div class=\"form-group\">

{{ form_label(form2.date, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{{ form_errors(form2.date) }}
{{ form_widget(form2.date) }}
</div>
<div class=\"form-group\">
 
{{ form_label(form2.libelle, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{{ form_errors(form2.libelle) }}
{{ form_widget(form2.libelle) }}
</div>

<div class=\"form-group\">
{{ form_label(form2.montant, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{{ form_errors(form2.montant) }}
{{ form_widget(form2.montant) }}
</div>
<h3>Hors Classification</h3>
<div class=\"form-group\">
{{ form_label(form.nbJustificatifs, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{{ form_errors(form.nbJustificatifs) }}
{{ form_widget(form.nbJustificatifs) }}
</div>
<div class=\"form-group\">
{{ form_label(form.montantValide, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{{ form_errors(form.montantValide) }}
{{ form_widget(form.montantValide) }}
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"container\">
        <label class=\"col-md-4 control-label\"></label>
            <div class=\"col-md-4\">
                {{ form_widget(form.valider, {'attr': {'class': 'btn btn-success'}}) }}
                {{ form_widget(form.annuler, {'attr': {'class': 'btn btn-success'}}) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}", "fiche_frais/Creer.html.twig", "/var/www/html/GSB_Frais/templates/fiche_frais/Creer.html.twig");
    }
}
