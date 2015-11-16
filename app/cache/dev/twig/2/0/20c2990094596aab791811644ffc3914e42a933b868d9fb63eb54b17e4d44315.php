<?php

/* JuliePlatformBundle:Galeries:NouvelleGalerie.html.twig */
class __TwigTemplate_1fa2557c8da766bc6dc5365d8e371d0952bbb7c4d5494e685468780c86318554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JuliePlatformBundle::layout_gallery.html.twig", "JuliePlatformBundle:Galeries:NouvelleGalerie.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'left_side' => array($this, 'block_left_side'),
            'right_side' => array($this, 'block_right_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JuliePlatformBundle::layout_gallery.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df55556019e19883615115cc655879fa6c3a0781dad98244ab31c4f3431161c6 = $this->env->getExtension("native_profiler");
        $__internal_df55556019e19883615115cc655879fa6c3a0781dad98244ab31c4f3431161c6->enter($__internal_df55556019e19883615115cc655879fa6c3a0781dad98244ab31c4f3431161c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JuliePlatformBundle:Galeries:NouvelleGalerie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df55556019e19883615115cc655879fa6c3a0781dad98244ab31c4f3431161c6->leave($__internal_df55556019e19883615115cc655879fa6c3a0781dad98244ab31c4f3431161c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a1cee03eeda9591c008c1942ce013992dacd11c7ee27b5df251bf73de754657 = $this->env->getExtension("native_profiler");
        $__internal_8a1cee03eeda9591c008c1942ce013992dacd11c7ee27b5df251bf73de754657->enter($__internal_8a1cee03eeda9591c008c1942ce013992dacd11c7ee27b5df251bf73de754657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Reportage";
        
        $__internal_8a1cee03eeda9591c008c1942ce013992dacd11c7ee27b5df251bf73de754657->leave($__internal_8a1cee03eeda9591c008c1942ce013992dacd11c7ee27b5df251bf73de754657_prof);

    }

    // line 5
    public function block_left_side($context, array $blocks = array())
    {
        $__internal_0303d03e2d26c624240d9bf962b1730177317e322eca344b7ff7b5e036e3448f = $this->env->getExtension("native_profiler");
        $__internal_0303d03e2d26c624240d9bf962b1730177317e322eca344b7ff7b5e036e3448f->enter($__internal_0303d03e2d26c624240d9bf962b1730177317e322eca344b7ff7b5e036e3448f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_side"));

        // line 6
        echo "\t\t<p>zone upload et preview des photos</p>
\t\t
\t";
        
        $__internal_0303d03e2d26c624240d9bf962b1730177317e322eca344b7ff7b5e036e3448f->leave($__internal_0303d03e2d26c624240d9bf962b1730177317e322eca344b7ff7b5e036e3448f_prof);

    }

    // line 10
    public function block_right_side($context, array $blocks = array())
    {
        $__internal_4188139e30fa95690ecc0b888718a0fb3bd2042ca02d48b921d7692c19a44c12 = $this->env->getExtension("native_profiler");
        $__internal_4188139e30fa95690ecc0b888718a0fb3bd2042ca02d48b921d7692c19a44c12->enter($__internal_4188139e30fa95690ecc0b888718a0fb3bd2042ca02d48b921d7692c19a44c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_side"));

        // line 11
        echo "\t\t
\t\t<div class\"well\">
\t\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t\t\t<div class=\"form-group\"> ";
        // line 17
        echo "\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nouvelle Galerie"));
        echo "
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\"> ";
        // line 25
        echo "\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date"));
        echo "
\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\"> ";
        // line 33
        echo "\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Pays"));
        echo "
\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\"> ";
        // line 41
        echo "\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieux", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Lieux"));
        echo "
\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieux", array()), 'errors');
        echo "
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\"> ";
        // line 49
        echo "\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materiel", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Materiel"));
        echo "
\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materiel", array()), 'errors');
        echo "
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materiel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\"> ";
        // line 57
        echo "\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Catégorie"));
        echo "
\t\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'errors');
        echo "
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-4 col-sm-offset-3\">
\t\t\t\t\t";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>

\t\t
\t";
        
        $__internal_4188139e30fa95690ecc0b888718a0fb3bd2042ca02d48b921d7692c19a44c12->leave($__internal_4188139e30fa95690ecc0b888718a0fb3bd2042ca02d48b921d7692c19a44c12_prof);

    }

    public function getTemplateName()
    {
        return "JuliePlatformBundle:Galeries:NouvelleGalerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 71,  195 => 70,  188 => 66,  179 => 60,  174 => 58,  169 => 57,  162 => 52,  157 => 50,  152 => 49,  145 => 44,  140 => 42,  135 => 41,  128 => 36,  123 => 34,  118 => 33,  111 => 28,  106 => 26,  101 => 25,  94 => 20,  89 => 18,  84 => 17,  79 => 14,  75 => 13,  71 => 11,  65 => 10,  56 => 6,  50 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "JuliePlatformBundle::layout_gallery.html.twig" %}*/
/* */
/* {% block title %} {{parent() }} - Reportage{% endblock %}*/
/* */
/* 	{% block left_side %}*/
/* 		<p>zone upload et preview des photos</p>*/
/* 		*/
/* 	{% endblock left_side %}*/
/* */
/* 	{% block right_side %}*/
/* 		*/
/* 		<div class"well">*/
/* 			{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* 			{{ form_errors(form) }}*/
/* */
/* 			<div class="form-group"> {# Nom galerie #}*/
/* 				{{ form_label(form.nom, "Nouvelle Galerie", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 				{{ form_errors(form.nom) }}*/
/* 				<div class="col-sm-4">*/
/* 					{{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form-group"> {# Date #}*/
/* 				{{ form_label(form.date, "Date", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 				{{ form_errors(form.date) }}*/
/* 				<div class="col-sm-4">*/
/* 					{{ form_widget(form.date) }}*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form-group"> {# Pays #}*/
/* 				{{ form_label(form.pays, "Pays", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 				{{ form_errors(form.pays) }}*/
/* 				<div class="col-sm-4">*/
/* 					{{ form_widget(form.pays, {'attr': {'class': 'form-control'}}) }}*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form-group"> {# Lieux #}*/
/* 				{{ form_label(form.lieux, "Lieux", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 				{{ form_errors(form.lieux) }}*/
/* 				<div class="col-sm-4">*/
/* 					{{ form_widget(form.lieux, {'attr': {'class': 'form-control'}}) }}*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form-group"> {# Materiel #}*/
/* 				{{ form_label(form.materiel, "Materiel", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 				{{ form_errors(form.materiel) }}*/
/* 				<div class="col-sm-4">*/
/* 					{{ form_widget(form.materiel, {'attr': {'class': 'form-control'}}) }}*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form-group"> {# Catégorie #}*/
/* 				{{ form_label(form.categorie, "Catégorie", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 				{{ form_errors(form.categorie) }}*/
/* 				<div class="col-sm-4">*/
/* 					{{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form-group">*/
/* 				<div class="col-sm-4 col-sm-offset-3">*/
/* 					{{ form_widget(form.enregistrer, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			{{ form_rest(form) }}*/
/* 			{{ form_end(form) }}*/
/* 		</div>*/
/* */
/* 		*/
/* 	{% endblock right_side %}*/
