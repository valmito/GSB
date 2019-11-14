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
        echo "<center>
<div class=\"well\">
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'errors');
        echo "
<h3><center>Formulaire Ajouter Fiche Frais</center></h3>
<div class=\"well\">
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'errors');
        echo "
<div class=\"form-group\">
";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "idComptable", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "idComptable", [], "any", false, false, false, 20), 'errors');
        echo "
";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "idComptable", [], "any", false, false, false, 21), 'widget');
        echo "
<div class=\"form-group\">
";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "mois", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "mois", [], "any", false, false, false, 26), 'errors');
        echo "
";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "mois", [], "any", false, false, false, 27), 'widget');
        echo "
<div class=\"form-group\">
";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 32), 'errors');
        echo "
";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 33), 'widget');
        echo "
<div class=\"form-group\">
";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "montantValide", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "montantValide", [], "any", false, false, false, 38), 'errors');
        echo "
";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "montantValide", [], "any", false, false, false, 39), 'widget');
        echo "
<div class=\"form-group\">
";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "dateModif", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "dateModif", [], "any", false, false, false, 44), 'errors');
        echo "
";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "dateModif", [], "any", false, false, false, 45), 'widget');
        echo "

";
        // line 48
        echo "    <div class=\"row\">
        <div class=\"container\">
        <label class=\"col-md-4 control-label\"></label>
            <div class=\"col-md-4\">
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "valider", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "btn btn-success"]]);
        echo "
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "annuler", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "btn btn-success"]]);
        echo "
            </div>
        </div>
    </div>
</div>
";
        // line 58
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "session", [], "any", false, false, false, 58), "flashBag", [], "any", false, false, false, 58), "has", [0 => "success"], "method", false, false, false, 58)) {
            // line 59
            echo "<div class=\"alert alert-success\">
";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "flashBag", [], "any", false, false, false, 60), "get", [0 => "success"], "method", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 61
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "</div>
";
        }
        // line 65
        echo "
";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'rest');
        echo "
";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
</div>";
        // line 70
        echo "</center>
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
        return array (  228 => 70,  224 => 68,  220 => 66,  217 => 65,  213 => 63,  205 => 61,  201 => 60,  198 => 59,  196 => 58,  188 => 53,  184 => 52,  178 => 48,  173 => 45,  169 => 44,  165 => 42,  160 => 39,  156 => 38,  152 => 36,  147 => 33,  143 => 32,  139 => 30,  134 => 27,  130 => 26,  126 => 24,  121 => 21,  117 => 20,  113 => 18,  108 => 15,  104 => 13,  98 => 10,  94 => 8,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
Renseigner ma fiche de frais
{% endblock %}
{% block body %}
<center>
<div class=\"well\">
{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
{# Les erreurs générales du formulaire. #}
{{ form_errors(form) }}
<h3><center>Formulaire Ajouter Fiche Frais</center></h3>
<div class=\"well\">
{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
{# Les erreurs générales du formulaire. #}
{{ form_errors(form) }}
<div class=\"form-group\">
{# Génération du label. #}
{{ form_label(form.idComptable,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{{ form_errors(form.idComptable) }}
{{ form_widget(form.idComptable) }}
<div class=\"form-group\">
{# Génération du label. #}
{{ form_label(form.mois, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{{ form_errors(form.mois) }}
{{ form_widget(form.mois) }}
<div class=\"form-group\">
{# Génération du label. #}
{{ form_label(form.nbJustificatifs, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{{ form_errors(form.nbJustificatifs) }}
{{ form_widget(form.nbJustificatifs) }}
<div class=\"form-group\">
{# Génération du label. #}
{{ form_label(form.montantValide, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{{ form_errors(form.montantValide) }}
{{ form_widget(form.montantValide) }}
<div class=\"form-group\">
{# Génération du label. #}
{{ form_label(form.dateModif, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{{ form_errors(form.dateModif) }}
{{ form_widget(form.dateModif) }}

{# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
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
{% if app.session.flashBag.has('success') %}
<div class=\"alert alert-success\">
{% for msg in app.session.flashBag.get('success') %}
{{ msg }}
{% endfor %}
</div>
{% endif %}

{{ form_rest(form) }}
{# Fermeture de la balise <form> du formulaire HTML #}
{{ form_end(form) }}
</div>{# empty Twig template #}
</center>
{% endblock %}", "fiche_frais/Creer.html.twig", "/var/www/html/GSB_Frais/templates/fiche_frais/Creer.html.twig");
    }
}
