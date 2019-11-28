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
        echo "Renseigner ma fiche de frais
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

        // line 6
        echo "<!--
<center>
<div class=\"well\">
{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
";
        // line 11
        echo "{ form_errors(form) }}
<h3><center>Formulaire Ajouter Fiche Frais</center></h3>
<div class=\"well\">
{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
";
        // line 16
        echo "{ form_errors(form) }}
<div class=\"form-group\">
";
        // line 19
        echo "{ form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
";
        // line 21
        echo "{ form_errors(form.idComptable) }}
{ form_widget(form.idComptable) }}
<div class=\"form-group\">
";
        // line 25
        echo "{ form_label(form.mois, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
";
        // line 27
        echo "{ form_errors(form.mois) }}
{ form_widget(form.mois) }}
<div class=\"form-group\">
";
        // line 31
        echo "{ form_label(form.nbJustificatifs, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
";
        // line 33
        echo "{ form_errors(form.nbJustificatifs) }}
{ form_widget(form.nbJustificatifs) }}
<div class=\"form-group\">
";
        // line 37
        echo "{ form_label(form.montantValide, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
";
        // line 39
        echo "{ form_errors(form.montantValide) }}
{ form_widget(form.montantValide) }}
<div class=\"form-group\">
";
        // line 43
        echo "{ form_label(form.dateModif, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
";
        // line 45
        echo "{ form_errors(form.dateModif) }}
{ form_widget(form.dateModif) }}
-->
<h3>Saisie</h3>
PERIODE D'ENGAGEMENT :
";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 50, $this->source); })()), "html", null, true);
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
Repas midi :<input type='number' name='midi'><br>
Nuitées :<input type='number' name='nuit'><br>
Etape :<input type='number' name='etape'><br>
KM :<input type='number' name='km'><br>
</action>
<h3>Hors Forfait</h3>
<div class=\"form-group\">
";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 89, $this->source); })()), "date", [], "any", false, false, false, 89), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 90, $this->source); })()), "date", [], "any", false, false, false, 90), 'errors');
        echo "
";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 91, $this->source); })()), "date", [], "any", false, false, false, 91), 'widget');
        echo "
</div>
<div class=\"form-group\">
";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 94, $this->source); })()), "libelle", [], "any", false, false, false, 94), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 95, $this->source); })()), "libelle", [], "any", false, false, false, 95), 'errors');
        echo "
";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 96, $this->source); })()), "libelle", [], "any", false, false, false, 96), 'widget');
        echo "
</div>
<div class=\"form-group\">
";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 99, $this->source); })()), "montant", [], "any", false, false, false, 99), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 100, $this->source); })()), "montant", [], "any", false, false, false, 100), 'errors');
        echo "
";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 101, $this->source); })()), "montant", [], "any", false, false, false, 101), 'widget');
        echo "
</div>
<h3>Hors Classification</h3>
<div class=\"form-group\">
";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 105), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 106), 'errors');
        echo "
";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 107), 'widget');
        echo "
</div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"container\">
        <label class=\"col-md-4 control-label\"></label>
            <div class=\"col-md-4\">
            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "valider", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "btn btn-success"]]);
        echo "
            ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "annuler", [], "any", false, false, false, 117), 'widget', ["attr" => ["class" => "btn btn-success"]]);
        echo "
            </div>
        </div>
    </div>
</div>
</center>
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
        return array (  257 => 117,  253 => 116,  241 => 107,  237 => 106,  233 => 105,  226 => 101,  222 => 100,  218 => 99,  212 => 96,  208 => 95,  204 => 94,  198 => 91,  194 => 90,  190 => 89,  148 => 50,  141 => 45,  138 => 43,  133 => 39,  130 => 37,  125 => 33,  122 => 31,  117 => 27,  114 => 25,  109 => 21,  106 => 19,  102 => 16,  96 => 11,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
Renseigner ma fiche de frais
{% endblock %}
{% block body %}
<!--
<center>
<div class=\"well\">
{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
{# Les erreurs générales du formulaire. #}
{ form_errors(form) }}
<h3><center>Formulaire Ajouter Fiche Frais</center></h3>
<div class=\"well\">
{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
{# Les erreurs générales du formulaire. #}
{ form_errors(form) }}
<div class=\"form-group\">
{# Génération du label. #}
{ form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{ form_errors(form.idComptable) }}
{ form_widget(form.idComptable) }}
<div class=\"form-group\">
{# Génération du label. #}
{ form_label(form.mois, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{ form_errors(form.mois) }}
{ form_widget(form.mois) }}
<div class=\"form-group\">
{# Génération du label. #}
{ form_label(form.nbJustificatifs, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{ form_errors(form.nbJustificatifs) }}
{ form_widget(form.nbJustificatifs) }}
<div class=\"form-group\">
{# Génération du label. #}
{ form_label(form.montantValide, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{ form_errors(form.montantValide) }}
{ form_widget(form.montantValide) }}
<div class=\"form-group\">
{# Génération du label. #}
{ form_label(form.dateModif, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{ form_errors(form.dateModif) }}
{ form_widget(form.dateModif) }}
-->
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
Repas midi :<input type='number' name='midi'><br>
Nuitées :<input type='number' name='nuit'><br>
Etape :<input type='number' name='etape'><br>
KM :<input type='number' name='km'><br>
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
</center>
{% endblock %}", "fiche_frais/Creer.html.twig", "/var/www/html/GSB_Frais/templates/fiche_frais/Creer.html.twig");
    }
}
