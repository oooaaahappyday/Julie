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
        $__internal_29cac4f13f172a8dff0b58369595bf343f73938227a3f86ee6fc99ae288a9326 = $this->env->getExtension("native_profiler");
        $__internal_29cac4f13f172a8dff0b58369595bf343f73938227a3f86ee6fc99ae288a9326->enter($__internal_29cac4f13f172a8dff0b58369595bf343f73938227a3f86ee6fc99ae288a9326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JuliePlatformBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29cac4f13f172a8dff0b58369595bf343f73938227a3f86ee6fc99ae288a9326->leave($__internal_29cac4f13f172a8dff0b58369595bf343f73938227a3f86ee6fc99ae288a9326_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93f4d7cf66f8acc1e857ab88c049f20d366233ffcfadbd3cd90bd7c5ab14f23d = $this->env->getExtension("native_profiler");
        $__internal_93f4d7cf66f8acc1e857ab88c049f20d366233ffcfadbd3cd90bd7c5ab14f23d->enter($__internal_93f4d7cf66f8acc1e857ab88c049f20d366233ffcfadbd3cd90bd7c5ab14f23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_93f4d7cf66f8acc1e857ab88c049f20d366233ffcfadbd3cd90bd7c5ab14f23d->leave($__internal_93f4d7cf66f8acc1e857ab88c049f20d366233ffcfadbd3cd90bd7c5ab14f23d_prof);

    }

    // line 5
    public function block_right_side($context, array $blocks = array())
    {
        $__internal_821b3479e932344d906bcd17ed2a4b38d153d479846e86f4cb8a448ba0a0b06e = $this->env->getExtension("native_profiler");
        $__internal_821b3479e932344d906bcd17ed2a4b38d153d479846e86f4cb8a448ba0a0b06e->enter($__internal_821b3479e932344d906bcd17ed2a4b38d153d479846e86f4cb8a448ba0a0b06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_side"));

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
        
        $__internal_821b3479e932344d906bcd17ed2a4b38d153d479846e86f4cb8a448ba0a0b06e->leave($__internal_821b3479e932344d906bcd17ed2a4b38d153d479846e86f4cb8a448ba0a0b06e_prof);

    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5cc5640cce448dbaf2a620d7bbe06c4497ef72642ce2197472921bbbabcd0c23 = $this->env->getExtension("native_profiler");
        $__internal_5cc5640cce448dbaf2a620d7bbe06c4497ef72642ce2197472921bbbabcd0c23->enter($__internal_5cc5640cce448dbaf2a620d7bbe06c4497ef72642ce2197472921bbbabcd0c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 28
        echo "\t\t<p>FOOTER</p>
\t";
        
        $__internal_5cc5640cce448dbaf2a620d7bbe06c4497ef72642ce2197472921bbbabcd0c23->leave($__internal_5cc5640cce448dbaf2a620d7bbe06c4497ef72642ce2197472921bbbabcd0c23_prof);

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
