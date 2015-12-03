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
        $__internal_e6ec1ae895549919d48cb8063fc1ecad1e6eea65c52661aaea692b5160b7c18d = $this->env->getExtension("native_profiler");
        $__internal_e6ec1ae895549919d48cb8063fc1ecad1e6eea65c52661aaea692b5160b7c18d->enter($__internal_e6ec1ae895549919d48cb8063fc1ecad1e6eea65c52661aaea692b5160b7c18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JuliePlatformBundle:Galeries:NouvelleGalerie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6ec1ae895549919d48cb8063fc1ecad1e6eea65c52661aaea692b5160b7c18d->leave($__internal_e6ec1ae895549919d48cb8063fc1ecad1e6eea65c52661aaea692b5160b7c18d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_874a513ad8cddf848110e63ab7c69dd9a5f07902f599e169c373c8f607775b84 = $this->env->getExtension("native_profiler");
        $__internal_874a513ad8cddf848110e63ab7c69dd9a5f07902f599e169c373c8f607775b84->enter($__internal_874a513ad8cddf848110e63ab7c69dd9a5f07902f599e169c373c8f607775b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Reportage";
        
        $__internal_874a513ad8cddf848110e63ab7c69dd9a5f07902f599e169c373c8f607775b84->leave($__internal_874a513ad8cddf848110e63ab7c69dd9a5f07902f599e169c373c8f607775b84_prof);

    }

    // line 5
    public function block_left_side($context, array $blocks = array())
    {
        $__internal_3184e1b38897f676f0448ff5990dc98f710114b890a98eb576b5e01f20cd3bf2 = $this->env->getExtension("native_profiler");
        $__internal_3184e1b38897f676f0448ff5990dc98f710114b890a98eb576b5e01f20cd3bf2->enter($__internal_3184e1b38897f676f0448ff5990dc98f710114b890a98eb576b5e01f20cd3bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_side"));

        // line 6
        echo "\t\t<p>zone upload et preview des photos</p>
\t\t
\t";
        
        $__internal_3184e1b38897f676f0448ff5990dc98f710114b890a98eb576b5e01f20cd3bf2->leave($__internal_3184e1b38897f676f0448ff5990dc98f710114b890a98eb576b5e01f20cd3bf2_prof);

    }

    // line 10
    public function block_right_side($context, array $blocks = array())
    {
        $__internal_5dec67ceba4c2a9f202f3714364fc94db6384b129db3cb0caf25d70b98038557 = $this->env->getExtension("native_profiler");
        $__internal_5dec67ceba4c2a9f202f3714364fc94db6384b129db3cb0caf25d70b98038557->enter($__internal_5dec67ceba4c2a9f202f3714364fc94db6384b129db3cb0caf25d70b98038557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_side"));

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
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>

\t\t
\t";
        
        $__internal_5dec67ceba4c2a9f202f3714364fc94db6384b129db3cb0caf25d70b98038557->leave($__internal_5dec67ceba4c2a9f202f3714364fc94db6384b129db3cb0caf25d70b98038557_prof);

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
        return array (  201 => 73,  197 => 72,  190 => 68,  179 => 60,  174 => 58,  169 => 57,  162 => 52,  157 => 50,  152 => 49,  145 => 44,  140 => 42,  135 => 41,  128 => 36,  123 => 34,  118 => 33,  111 => 28,  106 => 26,  101 => 25,  94 => 20,  89 => 18,  84 => 17,  79 => 14,  75 => 13,  71 => 11,  65 => 10,  56 => 6,  50 => 5,  36 => 3,  11 => 1,);
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
/* */
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
