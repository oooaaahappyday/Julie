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
        $__internal_9044f144ef04a09909000b0e64b0708ea26e6fd01a6f0bcd4cc29823a9cc492c = $this->env->getExtension("native_profiler");
        $__internal_9044f144ef04a09909000b0e64b0708ea26e6fd01a6f0bcd4cc29823a9cc492c->enter($__internal_9044f144ef04a09909000b0e64b0708ea26e6fd01a6f0bcd4cc29823a9cc492c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JuliePlatformBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9044f144ef04a09909000b0e64b0708ea26e6fd01a6f0bcd4cc29823a9cc492c->leave($__internal_9044f144ef04a09909000b0e64b0708ea26e6fd01a6f0bcd4cc29823a9cc492c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8469f93bf3cdb83ee0f05a4f594674719023671031887b833492034fb4a9138b = $this->env->getExtension("native_profiler");
        $__internal_8469f93bf3cdb83ee0f05a4f594674719023671031887b833492034fb4a9138b->enter($__internal_8469f93bf3cdb83ee0f05a4f594674719023671031887b833492034fb4a9138b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_8469f93bf3cdb83ee0f05a4f594674719023671031887b833492034fb4a9138b->leave($__internal_8469f93bf3cdb83ee0f05a4f594674719023671031887b833492034fb4a9138b_prof);

    }

    // line 5
    public function block_right_side($context, array $blocks = array())
    {
        $__internal_985d9c99feed3fc7a9e1a51aa4c88c70d0d245fec322950523cbc646e3906feb = $this->env->getExtension("native_profiler");
        $__internal_985d9c99feed3fc7a9e1a51aa4c88c70d0d245fec322950523cbc646e3906feb->enter($__internal_985d9c99feed3fc7a9e1a51aa4c88c70d0d245fec322950523cbc646e3906feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_side"));

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
        
        $__internal_985d9c99feed3fc7a9e1a51aa4c88c70d0d245fec322950523cbc646e3906feb->leave($__internal_985d9c99feed3fc7a9e1a51aa4c88c70d0d245fec322950523cbc646e3906feb_prof);

    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c705fd699c8683aaa90b4675b3bbb8769b10b9eaab0682687106069473f04f04 = $this->env->getExtension("native_profiler");
        $__internal_c705fd699c8683aaa90b4675b3bbb8769b10b9eaab0682687106069473f04f04->enter($__internal_c705fd699c8683aaa90b4675b3bbb8769b10b9eaab0682687106069473f04f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 28
        echo "\t\t<p>FOOTER</p>
\t";
        
        $__internal_c705fd699c8683aaa90b4675b3bbb8769b10b9eaab0682687106069473f04f04->leave($__internal_c705fd699c8683aaa90b4675b3bbb8769b10b9eaab0682687106069473f04f04_prof);

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
