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
        $__internal_cb050b56dbdeea813e7d7a5e129d51444abf0925702847184efe4d834c027df9 = $this->env->getExtension("native_profiler");
        $__internal_cb050b56dbdeea813e7d7a5e129d51444abf0925702847184efe4d834c027df9->enter($__internal_cb050b56dbdeea813e7d7a5e129d51444abf0925702847184efe4d834c027df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JuliePlatformBundle:Galeries:NouvelleGalerie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb050b56dbdeea813e7d7a5e129d51444abf0925702847184efe4d834c027df9->leave($__internal_cb050b56dbdeea813e7d7a5e129d51444abf0925702847184efe4d834c027df9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7355eb0c46a74bc4a28b1ac1b8167dd38be55878a73752cfad407f3c74072c10 = $this->env->getExtension("native_profiler");
        $__internal_7355eb0c46a74bc4a28b1ac1b8167dd38be55878a73752cfad407f3c74072c10->enter($__internal_7355eb0c46a74bc4a28b1ac1b8167dd38be55878a73752cfad407f3c74072c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Reportage";
        
        $__internal_7355eb0c46a74bc4a28b1ac1b8167dd38be55878a73752cfad407f3c74072c10->leave($__internal_7355eb0c46a74bc4a28b1ac1b8167dd38be55878a73752cfad407f3c74072c10_prof);

    }

    // line 5
    public function block_left_side($context, array $blocks = array())
    {
        $__internal_914c71670c627a6790267704f4d5995e74988570dc31a7ff9b12fd889623a85b = $this->env->getExtension("native_profiler");
        $__internal_914c71670c627a6790267704f4d5995e74988570dc31a7ff9b12fd889623a85b->enter($__internal_914c71670c627a6790267704f4d5995e74988570dc31a7ff9b12fd889623a85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_side"));

        // line 6
        echo "\t\t<p>zone upload et preview des photos</p>
\t\t
\t";
        
        $__internal_914c71670c627a6790267704f4d5995e74988570dc31a7ff9b12fd889623a85b->leave($__internal_914c71670c627a6790267704f4d5995e74988570dc31a7ff9b12fd889623a85b_prof);

    }

    // line 10
    public function block_right_side($context, array $blocks = array())
    {
        $__internal_be98ac097e91f14bbea48f482b4df2514cae4f627594606bf71cd907c2f4a8b6 = $this->env->getExtension("native_profiler");
        $__internal_be98ac097e91f14bbea48f482b4df2514cae4f627594606bf71cd907c2f4a8b6->enter($__internal_be98ac097e91f14bbea48f482b4df2514cae4f627594606bf71cd907c2f4a8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_side"));

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

\t\t\t<script type=\"text/Javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>

\t\t\t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function(){
\t\t\t\t// get div with data-prototype attribute
\t\t\t\tvar \$container = \$('div#julie_platformbundle_galerie_images');
\t\t\t\t// link to add new image
\t\t\t\tvar \$addLink = \$('<a href=\"#\" id=\"add_images\" class=\"btn btn-default\">Ajouter une photo</a>');
\t\t\t\t\$container.append(\$addLink);

\t\t\t\t// Add new field with each click on the AddLink
\t\t\t\t\$addLink.click(function(e){
\t\t\t\t\taddImage(\$container);
\t\t\t\t\te.preventDefault(); // prevent the # in the URL
\t\t\t\t\treturn false;
\t\t\t\t});

\t\t\t\t// counter to name dynamically created fields
\t\t\t\tvar index = \$container.find(':input').length;

\t\t\t\t// create a first field if it doesn't exists
\t\t\t\tif (index == 0){
\t\t\t\t\taddImage(\$container);
\t\t\t\t} else {
\t\t\t\t\t// add delete link for each new image
\t\t\t\t\t\$container.children('div').each(function(){
\t\t\t\t\t\taddDeleteLink(\$(this));
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\t// addImage function
\t\t\t\tfunction addImage(\$container){
\t\t\t\t\t// in data-prototype content: we replace
\t\t\t\t\t// __name__titre__ -> field label
\t\t\t\t\t// __name__        -> field name
\t\t\t\t\tvar \$prototype = \$(\$container.attr('data-prototype').replace(/__name__titre__/g, 'Photo n°' + (index+1)).replace(/__name__/g, index));

\t\t\t\t// Add delete link to prototype
\t\t\t\taddDeleteLink(\$prototype);

\t\t\t\t// Add modified prototype and the end of the div
\t\t\t\t\$container.append(\$prototype);

\t\t\t\t// Counter increment
\t\t\t\tindex++;
\t\t\t}

\t\t\t\t// addDeleteLink function
\t\t\t\tfunction addDeleteLink(\$prototype){
\t\t\t\t\t\$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');
\t\t\t\t\t// Implement link
\t\t\t\t\t\$prototype.append(\$deleteLink);

\t\t\t\t\t// Implement listener onclick
\t\t\t\t\t\$deleteLink.click(function(e){
\t\t\t\t\t\t\$prototype.remove();
\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\treturn false;
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
</script>



<div class=\"form-group\">
\t<div class=\"col-sm-4 col-sm-offset-3\">
\t\t";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t</div>
</div>

";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 136
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>


";
        
        $__internal_be98ac097e91f14bbea48f482b4df2514cae4f627594606bf71cd907c2f4a8b6->leave($__internal_be98ac097e91f14bbea48f482b4df2514cae4f627594606bf71cd907c2f4a8b6_prof);

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
        return array (  267 => 136,  263 => 135,  256 => 131,  186 => 64,  179 => 60,  174 => 58,  169 => 57,  162 => 52,  157 => 50,  152 => 49,  145 => 44,  140 => 42,  135 => 41,  128 => 36,  123 => 34,  118 => 33,  111 => 28,  106 => 26,  101 => 25,  94 => 20,  89 => 18,  84 => 17,  79 => 14,  75 => 13,  71 => 11,  65 => 10,  56 => 6,  50 => 5,  36 => 3,  11 => 1,);
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
/* 			<script type="text/Javascript" src="{{ asset('/js/jquery-1.11.1.js')}}"></script>*/
/* */
/* 			<script type="text/javascript">*/
/* 			$(document).ready(function(){*/
/* 				// get div with data-prototype attribute*/
/* 				var $container = $('div#julie_platformbundle_galerie_images');*/
/* 				// link to add new image*/
/* 				var $addLink = $('<a href="#" id="add_images" class="btn btn-default">Ajouter une photo</a>');*/
/* 				$container.append($addLink);*/
/* */
/* 				// Add new field with each click on the AddLink*/
/* 				$addLink.click(function(e){*/
/* 					addImage($container);*/
/* 					e.preventDefault(); // prevent the # in the URL*/
/* 					return false;*/
/* 				});*/
/* */
/* 				// counter to name dynamically created fields*/
/* 				var index = $container.find(':input').length;*/
/* */
/* 				// create a first field if it doesn't exists*/
/* 				if (index == 0){*/
/* 					addImage($container);*/
/* 				} else {*/
/* 					// add delete link for each new image*/
/* 					$container.children('div').each(function(){*/
/* 						addDeleteLink($(this));*/
/* 					});*/
/* 				}*/
/* */
/* 				// addImage function*/
/* 				function addImage($container){*/
/* 					// in data-prototype content: we replace*/
/* 					// __name__titre__ -> field label*/
/* 					// __name__        -> field name*/
/* 					var $prototype = $($container.attr('data-prototype').replace(/__name__titre__/g, 'Photo n°' + (index+1)).replace(/__name__/g, index));*/
/* */
/* 				// Add delete link to prototype*/
/* 				addDeleteLink($prototype);*/
/* */
/* 				// Add modified prototype and the end of the div*/
/* 				$container.append($prototype);*/
/* */
/* 				// Counter increment*/
/* 				index++;*/
/* 			}*/
/* */
/* 				// addDeleteLink function*/
/* 				function addDeleteLink($prototype){*/
/* 					$deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');*/
/* 					// Implement link*/
/* 					$prototype.append($deleteLink);*/
/* */
/* 					// Implement listener onclick*/
/* 					$deleteLink.click(function(e){*/
/* 						$prototype.remove();*/
/* 						e.preventDefault();*/
/* 						return false;*/
/* 					});*/
/* 				}*/
/* 			});*/
/* </script>*/
/* */
/* */
/* */
/* <div class="form-group">*/
/* 	<div class="col-sm-4 col-sm-offset-3">*/
/* 		{{ form_widget(form.enregistrer, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* 	</div>*/
/* </div>*/
/* */
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
/* </div>*/
/* */
/* */
/* {% endblock right_side %}*/
