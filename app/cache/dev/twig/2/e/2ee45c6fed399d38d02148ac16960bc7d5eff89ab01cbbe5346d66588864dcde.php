<?php

/* JuliePlatformBundle:Home:index.html.twig */
class __TwigTemplate_8fa857d6a21b5ba6248038ff66f940de4f741597111abcfe5276386df08567d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JuliePlatformBundle::layout.html.twig", "JuliePlatformBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'right_side' => array($this, 'block_right_side'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JuliePlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba4a41e1acf7b2476a3f3d961f1dac159893437905019ce4f65c3c68c43ae594 = $this->env->getExtension("native_profiler");
        $__internal_ba4a41e1acf7b2476a3f3d961f1dac159893437905019ce4f65c3c68c43ae594->enter($__internal_ba4a41e1acf7b2476a3f3d961f1dac159893437905019ce4f65c3c68c43ae594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JuliePlatformBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba4a41e1acf7b2476a3f3d961f1dac159893437905019ce4f65c3c68c43ae594->leave($__internal_ba4a41e1acf7b2476a3f3d961f1dac159893437905019ce4f65c3c68c43ae594_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_38e04f69d74397f9d3a4b997b8cd993e9b2673eea482d6919b25d9cb725e4e6c = $this->env->getExtension("native_profiler");
        $__internal_38e04f69d74397f9d3a4b997b8cd993e9b2673eea482d6919b25d9cb725e4e6c->enter($__internal_38e04f69d74397f9d3a4b997b8cd993e9b2673eea482d6919b25d9cb725e4e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_38e04f69d74397f9d3a4b997b8cd993e9b2673eea482d6919b25d9cb725e4e6c->leave($__internal_38e04f69d74397f9d3a4b997b8cd993e9b2673eea482d6919b25d9cb725e4e6c_prof);

    }

    // line 5
    public function block_right_side($context, array $blocks = array())
    {
        $__internal_ebc2041811c2d71556757f210f8bdf06904a1e13cdac2dfc13aa6c12d72cc88d = $this->env->getExtension("native_profiler");
        $__internal_ebc2041811c2d71556757f210f8bdf06904a1e13cdac2dfc13aa6c12d72cc88d->enter($__internal_ebc2041811c2d71556757f210f8bdf06904a1e13cdac2dfc13aa6c12d72cc88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_side"));

        // line 6
        echo "\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"flex-container\">
\t\t\t\t<div class=\"flexslider\">
\t\t\t\t\t<ul class=\"slides\">

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img src=\"../img/IMG_12.jpg\"/>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img src=\"../img/IMG_13.jpg\"/>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img src=\"../img/IMG_15.jpg\"/>\t
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_ebc2041811c2d71556757f210f8bdf06904a1e13cdac2dfc13aa6c12d72cc88d->leave($__internal_ebc2041811c2d71556757f210f8bdf06904a1e13cdac2dfc13aa6c12d72cc88d_prof);

    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ac80d3735dea190af20ac9b9a8638bd57c8fa9ed4ee4b690a11b800df2b0aea8 = $this->env->getExtension("native_profiler");
        $__internal_ac80d3735dea190af20ac9b9a8638bd57c8fa9ed4ee4b690a11b800df2b0aea8->enter($__internal_ac80d3735dea190af20ac9b9a8638bd57c8fa9ed4ee4b690a11b800df2b0aea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 28
        echo "\t\t<p>FOOTER</p>
\t";
        
        $__internal_ac80d3735dea190af20ac9b9a8638bd57c8fa9ed4ee4b690a11b800df2b0aea8->leave($__internal_ac80d3735dea190af20ac9b9a8638bd57c8fa9ed4ee4b690a11b800df2b0aea8_prof);

    }

    public function getTemplateName()
    {
        return "JuliePlatformBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  82 => 27,  56 => 6,  50 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "JuliePlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %} {{parent() }} - Index{% endblock %}*/
/* */
/* 	{% block right_side %}*/
/* 		<div class="container-fluid">*/
/* 			<div class="flex-container">*/
/* 				<div class="flexslider">*/
/* 					<ul class="slides">*/
/* */
/* 						<li>*/
/* 							<img src="../img/IMG_12.jpg"/>	*/
/* 						</li>*/
/* 						<li>*/
/* 							<img src="../img/IMG_13.jpg"/>	*/
/* 						</li>*/
/* 						<li>*/
/* 							<img src="../img/IMG_15.jpg"/>	*/
/* 						</li>*/
/* */
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endblock right_side %}*/
/* */
/* 	{% block footer %}*/
/* 		<p>FOOTER</p>*/
/* 	{% endblock footer %}*/
