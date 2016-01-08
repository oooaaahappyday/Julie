<?php

/* JuliePlatformBundle::layout_gallery.html.twig */
class __TwigTemplate_ad719a3ce5c6c54c83a45cf507adb932086cf814fbc0991fc584a45d968b0e73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'left_side' => array($this, 'block_left_side'),
            'right_side' => array($this, 'block_right_side'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef1e6ab02de78079a85706b670f5c547f27e0574eff1170224c5ed5154022c63 = $this->env->getExtension("native_profiler");
        $__internal_ef1e6ab02de78079a85706b670f5c547f27e0574eff1170224c5ed5154022c63->enter($__internal_ef1e6ab02de78079a85706b670f5c547f27e0574eff1170224c5ed5154022c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JuliePlatformBundle::layout_gallery.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" xmlns=\"http://www.w3.org/1999/html\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
</head>
<body>
\t<div class=\"container-fluid\">
\t\t<div class=\"navbar navbar-default navbar-fixed-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"navbar-brand\" href=\"#\">Julie Franchet</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"navbar-collapse collapse\">
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"/Julie/web/app_dev.php/home\">Home</a></li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Reportage <b class=\"caret\"></b></a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Art
\t\t\t\t\t\t\t\t<b class=\"caret\"></b></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Lightpainting</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Studio
\t\t\t\t\t\t\t\t\t<b class=\"caret\"></b></a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">SKEMA</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Vidéo
\t\t\t\t\t\t\t\t\t\t<b class=\"caret\"></b></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Rallye</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Souvenir
\t\t\t\t\t\t\t\t\t\t\t<b class=\"caret\"></b></a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        // line 65
        echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"/Julie/web/app_dev.php/contact\">Contact</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"/Julie/web/app_dev.php/login\">Login</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div> <!--/.nav-collapse -->
\t\t\t\t\t\t\t</div> <!-- div container -->
\t\t\t\t\t\t</div> <!-- div tnavbar -->
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 72
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 73
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
\t\t\t\t\t\t\t<a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-default\" role=\"button\">
\t\t\t\t\t\t\t\t";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"/Julie/web/app_dev.php/NouvelleGalerie\" class=\"btn btn-default\" role=\"button\">Nouvelle Galerie</a>
\t\t\t\t\t\t\t";
        } else {
            // line 79
            echo "\t\t\t\t\t\t\t";
            // line 80
            echo "\t\t\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 83
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 84
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 85
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 86
                    echo "\t\t\t\t\t\t<div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 87
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "\t\t\t\t\t\t";
        }
        // line 92
        echo "
\t\t\t\t\t\t<div id=\"fos_user\">
\t\t\t\t\t\t\t";
        // line 94
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 96
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-4 col-sm-3 col-md-2 col-lg-2\">
\t\t\t\t\t\t\t\t<div id=\"left_side\">
\t\t\t\t\t\t\t\t\t";
        // line 100
        $this->displayBlock('left_side', $context, $blocks);
        // line 102
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xs-8 col-sm-9 col-md-10 col-lg-10\">
\t\t\t\t\t\t\t\t<div id=\"right_side\">
\t\t\t\t\t\t\t\t\t";
        // line 106
        $this->displayBlock('right_side', $context, $blocks);
        // line 108
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> <!-- div class row -->
\t\t\t\t\t</div> <!-- div container-fluid -->

\t\t\t\t\t<script type=\"text/Javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t<script type=\"text/Javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t</body>
\t\t\t\t<footer>
\t\t\t\t\t";
        // line 117
        $this->displayBlock('footer', $context, $blocks);
        // line 119
        echo "\t\t\t\t</footer>
\t\t\t\t</html>";
        
        $__internal_ef1e6ab02de78079a85706b670f5c547f27e0574eff1170224c5ed5154022c63->leave($__internal_ef1e6ab02de78079a85706b670f5c547f27e0574eff1170224c5ed5154022c63_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bf12aae95a6d169538f40093df9fdceff4cd352902ced523efb4b2b1835d590 = $this->env->getExtension("native_profiler");
        $__internal_6bf12aae95a6d169538f40093df9fdceff4cd352902ced523efb4b2b1835d590->enter($__internal_6bf12aae95a6d169538f40093df9fdceff4cd352902ced523efb4b2b1835d590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Julie Franchet";
        
        $__internal_6bf12aae95a6d169538f40093df9fdceff4cd352902ced523efb4b2b1835d590->leave($__internal_6bf12aae95a6d169538f40093df9fdceff4cd352902ced523efb4b2b1835d590_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_904b3fd03ab69ee4a7fb9e95119dfa17742463b81fecfd0508a374cb885c1e19 = $this->env->getExtension("native_profiler");
        $__internal_904b3fd03ab69ee4a7fb9e95119dfa17742463b81fecfd0508a374cb885c1e19->enter($__internal_904b3fd03ab69ee4a7fb9e95119dfa17742463b81fecfd0508a374cb885c1e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
\t";
        
        $__internal_904b3fd03ab69ee4a7fb9e95119dfa17742463b81fecfd0508a374cb885c1e19->leave($__internal_904b3fd03ab69ee4a7fb9e95119dfa17742463b81fecfd0508a374cb885c1e19_prof);

    }

    // line 94
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75f5964e884454a96a6dd495e613b370ee8a1223e375469f21992df304c48d7b = $this->env->getExtension("native_profiler");
        $__internal_75f5964e884454a96a6dd495e613b370ee8a1223e375469f21992df304c48d7b->enter($__internal_75f5964e884454a96a6dd495e613b370ee8a1223e375469f21992df304c48d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 95
        echo "\t\t\t\t\t\t\t";
        
        $__internal_75f5964e884454a96a6dd495e613b370ee8a1223e375469f21992df304c48d7b->leave($__internal_75f5964e884454a96a6dd495e613b370ee8a1223e375469f21992df304c48d7b_prof);

    }

    // line 100
    public function block_left_side($context, array $blocks = array())
    {
        $__internal_61199bb473ca854a0802e0a7d9c57d993e461d8f2a7e0eebc3f0f27a74e14f7f = $this->env->getExtension("native_profiler");
        $__internal_61199bb473ca854a0802e0a7d9c57d993e461d8f2a7e0eebc3f0f27a74e14f7f->enter($__internal_61199bb473ca854a0802e0a7d9c57d993e461d8f2a7e0eebc3f0f27a74e14f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_side"));

        // line 101
        echo "\t\t\t\t\t\t\t\t\t";
        
        $__internal_61199bb473ca854a0802e0a7d9c57d993e461d8f2a7e0eebc3f0f27a74e14f7f->leave($__internal_61199bb473ca854a0802e0a7d9c57d993e461d8f2a7e0eebc3f0f27a74e14f7f_prof);

    }

    // line 106
    public function block_right_side($context, array $blocks = array())
    {
        $__internal_7458bbf859b9837c0dbd686e93dcdc0623536c9810a175a01c7714df8472b3d3 = $this->env->getExtension("native_profiler");
        $__internal_7458bbf859b9837c0dbd686e93dcdc0623536c9810a175a01c7714df8472b3d3->enter($__internal_7458bbf859b9837c0dbd686e93dcdc0623536c9810a175a01c7714df8472b3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_side"));

        // line 107
        echo "\t\t\t\t\t\t\t\t\t";
        
        $__internal_7458bbf859b9837c0dbd686e93dcdc0623536c9810a175a01c7714df8472b3d3->leave($__internal_7458bbf859b9837c0dbd686e93dcdc0623536c9810a175a01c7714df8472b3d3_prof);

    }

    // line 117
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5254accecd96912756f47a57fedfab39739d711ac70266796069e97116b8ca90 = $this->env->getExtension("native_profiler");
        $__internal_5254accecd96912756f47a57fedfab39739d711ac70266796069e97116b8ca90->enter($__internal_5254accecd96912756f47a57fedfab39739d711ac70266796069e97116b8ca90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 118
        echo "\t\t\t\t\t";
        
        $__internal_5254accecd96912756f47a57fedfab39739d711ac70266796069e97116b8ca90->leave($__internal_5254accecd96912756f47a57fedfab39739d711ac70266796069e97116b8ca90_prof);

    }

    public function getTemplateName()
    {
        return "JuliePlatformBundle::layout_gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 118,  290 => 117,  283 => 107,  277 => 106,  270 => 101,  264 => 100,  257 => 95,  251 => 94,  242 => 12,  238 => 11,  233 => 10,  227 => 9,  215 => 7,  207 => 119,  205 => 117,  199 => 114,  195 => 113,  188 => 108,  186 => 106,  180 => 102,  178 => 100,  172 => 96,  170 => 94,  166 => 92,  163 => 91,  157 => 90,  148 => 87,  143 => 86,  138 => 85,  133 => 84,  131 => 83,  127 => 81,  124 => 80,  122 => 79,  115 => 75,  111 => 74,  106 => 73,  104 => 72,  95 => 65,  43 => 14,  41 => 9,  36 => 7,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en" xmlns="http://www.w3.org/1999/html">*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	<title>{% block title %}Julie Franchet{% endblock %}</title>*/
/* */
/* 	{% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>*/
/* 	<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}"/>*/
/* 	<link rel="stylesheet" href="{{ asset('css/main.css') }}">*/
/* 	{% endblock %}*/
/* */
/* </head>*/
/* <body>*/
/* 	<div class="container-fluid">*/
/* 		<div class="navbar navbar-default navbar-fixed-top">*/
/* 			<div class="container">*/
/* 				<div class="navbar-header">*/
/* 					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/* 						<span class="sr-only">Toggle navigation</span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 					</button>*/
/* 					<div class="navbar-brand" href="#">Julie Franchet</div>*/
/* 				</div>*/
/* 				<div class="navbar-collapse collapse">*/
/* 					<ul class="nav navbar-nav navbar-right">*/
/* 						<li class="active"><a href="/Julie/web/app_dev.php/home">Home</a></li>*/
/* 						<li class="dropdown">*/
/* 							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportage <b class="caret"></b></a>*/
/* 							*/
/* 						</li>*/
/* 						<li class="dropdown">*/
/* 							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Art*/
/* 								<b class="caret"></b></a>*/
/* 								<ul class="dropdown-menu">*/
/* 									<li><a href="#">Lightpainting</a></li>*/
/* 								</ul>*/
/* 							</li>*/
/* 							<li class="dropdown">*/
/* 								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Studio*/
/* 									<b class="caret"></b></a>*/
/* 									<ul class="dropdown-menu">*/
/* 										<li><a href="#">SKEMA</a></li>*/
/* 									</ul>*/
/* 								</li>*/
/* 								<li class="dropdown">*/
/* 									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Vidéo*/
/* 										<b class="caret"></b></a>*/
/* 										<ul class="dropdown-menu">*/
/* 											<li><a href="#">Rallye</a></li>*/
/* 										</ul>*/
/* 									</li>*/
/* 									<li class="dropdown">*/
/* 										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Souvenir*/
/* 											<b class="caret"></b></a>*/
/* 											<ul class="dropdown-menu">*/
/* 												<li><a href="#">Action</a></li>*/
/* 											</ul>*/
/* 										</li>*/
/* 										{#<li><a href="{{ path('JuLie_PlatformBundle_about') }}">About</a></li>#}*/
/* 										<li><a href="/Julie/web/app_dev.php/contact">Contact</a></li>*/
/* 										<li><a href="/Julie/web/app_dev.php/login">Login</a></li>*/
/* 									</ul>*/
/* 								</div> <!--/.nav-collapse -->*/
/* 							</div> <!-- div container -->*/
/* 						</div> <!-- div tnavbar -->*/
/* 						<div>*/
/* 							{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 							{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/* 							<a href="{{ path('fos_user_security_logout') }}" class="btn btn-default" role="button">*/
/* 								{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/* 							</a>*/
/* 							<a href="/Julie/web/app_dev.php/NouvelleGalerie" class="btn btn-default" role="button">Nouvelle Galerie</a>*/
/* 							{% else %}*/
/* 							{#<a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}*/
/* 							{% endif %}*/
/* 						</div>*/
/* */
/* 						{% if app.request.hasPreviousSession %}*/
/* 						{% for type, messages in app.session.flashbag.all() %}*/
/* 						{% for message in messages %}*/
/* 						<div class="flash-{{ type }}">*/
/* 							{{ message }}*/
/* 						</div>*/
/* 						{% endfor %}*/
/* 						{% endfor %}*/
/* 						{% endif %}*/
/* */
/* 						<div id="fos_user">*/
/* 							{% block fos_user_content %}*/
/* 							{% endblock fos_user_content %}*/
/* 						</div>*/
/* 						<div class="row">*/
/* 							<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2">*/
/* 								<div id="left_side">*/
/* 									{% block left_side %}*/
/* 									{% endblock left_side %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">*/
/* 								<div id="right_side">*/
/* 									{% block right_side %}*/
/* 									{% endblock right_side %}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div> <!-- div class row -->*/
/* 					</div> <!-- div container-fluid -->*/
/* */
/* 					<script type="text/Javascript" src="{{ asset('/js/jquery-1.11.1.js')}}"></script>*/
/* 					<script type="text/Javascript" src="{{ asset('/js/bootstrap.min.js')}}"></script>*/
/* 				</body>*/
/* 				<footer>*/
/* 					{% block footer %}*/
/* 					{% endblock footer %}*/
/* 				</footer>*/
/* 				</html>*/
