<?php

/* JuliePlatformBundle::layout.html.twig */
class __TwigTemplate_7344184cb82e0732a3947f962c40ccf8ab66995cffb731238f29b4d7cc336fab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'right_side' => array($this, 'block_right_side'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac9a793d81ce1b070bf439533d0dd553bf197d07ca731a2549bef07c6224e6dd = $this->env->getExtension("native_profiler");
        $__internal_ac9a793d81ce1b070bf439533d0dd553bf197d07ca731a2549bef07c6224e6dd->enter($__internal_ac9a793d81ce1b070bf439533d0dd553bf197d07ca731a2549bef07c6224e6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JuliePlatformBundle::layout.html.twig"));

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
        // line 15
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
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t<?php if(count(\$listCategories) > 0) {
\t\t\t\t\t\t\t\t  foreach(\$listCategories as \$categorie) {
\t\t\t\t\t\t\t\t    echo '<li>'.\$categorie->getNom().'</li>';
\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t\t} else { ?>
\t\t\t\t\t\t\t\t  <li>Pas d'utilisateur trouvé.</li>
\t\t\t\t\t\t\t\t<?php } ?>

\t\t\t\t\t\t\t</ul>
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
        // line 77
        echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"/Julie/web/app_dev.php/contact\">Contact</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"/Julie/web/app_dev.php/login\">Login</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div> <!--/.nav-collapse -->
\t\t\t\t\t\t\t</div> <!-- div container -->
\t\t\t\t\t\t</div> <!-- div tnavbar -->
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 84
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 85
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
\t\t\t\t\t\t\t\t<a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-default\" role=\"button\">
\t\t\t\t\t\t\t\t\t";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"/Julie/web/app_dev.php/NouvelleGalerie\" class=\"btn btn-default\" role=\"button\">Nouvelle Galerie</a>
\t\t\t\t\t\t\t\t";
        } else {
            // line 91
            echo "\t\t\t\t\t\t\t\t";
            // line 92
            echo "\t\t\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 95
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 96
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 97
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 98
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 99
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "\t\t\t\t\t\t";
        }
        // line 104
        echo "
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 106
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 108
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 110
        $this->displayBlock('right_side', $context, $blocks);
        // line 112
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 114
        $this->displayBlock('footer', $context, $blocks);
        // line 116
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div> <!-- div container-fluid -->

\t\t\t\t\t<script type=\"text/Javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t<script type=\"text/Javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t<script type=\"text/Javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t<script type=\"text/Javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\t\t\t
\t\t\t\t\t\$(window).load(function() {
\t\t\t\t\t  \$('.flexslider').flexslider({
\t\t\t\t\t    animation: \"fade\"
\t\t\t\t\t  });
\t\t\t\t\t});
\t\t\t\t\t</script>

</body>
</html>";
        
        $__internal_ac9a793d81ce1b070bf439533d0dd553bf197d07ca731a2549bef07c6224e6dd->leave($__internal_ac9a793d81ce1b070bf439533d0dd553bf197d07ca731a2549bef07c6224e6dd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f21d5915f828e444e71d2845c6462bd8ecc28fb12e931342fbe5b3dd861dff9 = $this->env->getExtension("native_profiler");
        $__internal_0f21d5915f828e444e71d2845c6462bd8ecc28fb12e931342fbe5b3dd861dff9->enter($__internal_0f21d5915f828e444e71d2845c6462bd8ecc28fb12e931342fbe5b3dd861dff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Julie Franchet";
        
        $__internal_0f21d5915f828e444e71d2845c6462bd8ecc28fb12e931342fbe5b3dd861dff9->leave($__internal_0f21d5915f828e444e71d2845c6462bd8ecc28fb12e931342fbe5b3dd861dff9_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_813a98527b7231930700c035eed35c01c3f87cc5ef9ce5ad1b08ed34c75ebeb0 = $this->env->getExtension("native_profiler");
        $__internal_813a98527b7231930700c035eed35c01c3f87cc5ef9ce5ad1b08ed34c75ebeb0->enter($__internal_813a98527b7231930700c035eed35c01c3f87cc5ef9ce5ad1b08ed34c75ebeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\">
\t";
        
        $__internal_813a98527b7231930700c035eed35c01c3f87cc5ef9ce5ad1b08ed34c75ebeb0->leave($__internal_813a98527b7231930700c035eed35c01c3f87cc5ef9ce5ad1b08ed34c75ebeb0_prof);

    }

    // line 106
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee063b8d9b41cb6d9eaea0e4ea1328539db94d6393bc0cb8a9a11621aa2fcf6f = $this->env->getExtension("native_profiler");
        $__internal_ee063b8d9b41cb6d9eaea0e4ea1328539db94d6393bc0cb8a9a11621aa2fcf6f->enter($__internal_ee063b8d9b41cb6d9eaea0e4ea1328539db94d6393bc0cb8a9a11621aa2fcf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 107
        echo "\t\t\t\t\t\t\t";
        
        $__internal_ee063b8d9b41cb6d9eaea0e4ea1328539db94d6393bc0cb8a9a11621aa2fcf6f->leave($__internal_ee063b8d9b41cb6d9eaea0e4ea1328539db94d6393bc0cb8a9a11621aa2fcf6f_prof);

    }

    // line 110
    public function block_right_side($context, array $blocks = array())
    {
        $__internal_6cd5b3cef18ec769ff5da4989559602d0586481501148d7c31dec2fb62b5893f = $this->env->getExtension("native_profiler");
        $__internal_6cd5b3cef18ec769ff5da4989559602d0586481501148d7c31dec2fb62b5893f->enter($__internal_6cd5b3cef18ec769ff5da4989559602d0586481501148d7c31dec2fb62b5893f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_side"));

        // line 111
        echo "\t\t\t\t\t\t\t";
        
        $__internal_6cd5b3cef18ec769ff5da4989559602d0586481501148d7c31dec2fb62b5893f->leave($__internal_6cd5b3cef18ec769ff5da4989559602d0586481501148d7c31dec2fb62b5893f_prof);

    }

    // line 114
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9f4de2e33c6426906d6d03d57461b7420066ec72ebaa4b969c3b49becbd6abaf = $this->env->getExtension("native_profiler");
        $__internal_9f4de2e33c6426906d6d03d57461b7420066ec72ebaa4b969c3b49becbd6abaf->enter($__internal_9f4de2e33c6426906d6d03d57461b7420066ec72ebaa4b969c3b49becbd6abaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 115
        echo "\t\t\t\t\t\t\t";
        
        $__internal_9f4de2e33c6426906d6d03d57461b7420066ec72ebaa4b969c3b49becbd6abaf->leave($__internal_9f4de2e33c6426906d6d03d57461b7420066ec72ebaa4b969c3b49becbd6abaf_prof);

    }

    public function getTemplateName()
    {
        return "JuliePlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 115,  296 => 114,  289 => 111,  283 => 110,  276 => 107,  270 => 106,  261 => 13,  257 => 12,  253 => 11,  248 => 10,  242 => 9,  230 => 7,  211 => 122,  207 => 121,  203 => 120,  199 => 119,  194 => 116,  192 => 114,  188 => 112,  186 => 110,  182 => 108,  180 => 106,  176 => 104,  173 => 103,  167 => 102,  158 => 99,  153 => 98,  148 => 97,  143 => 96,  141 => 95,  137 => 93,  134 => 92,  132 => 91,  125 => 87,  121 => 86,  116 => 85,  114 => 84,  105 => 77,  42 => 15,  40 => 9,  35 => 7,  27 => 1,);
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
/* 		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>*/
/* 		<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}"/>*/
/* 		<link rel="stylesheet" href="{{ asset('css/main.css') }}">*/
/* 		<link rel="stylesheet" type="text/css" href="{{ asset('css/flexslider.css') }}">*/
/* 	{% endblock %}*/
/* */
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
/* 							<ul class="dropdown-menu">*/
/* 							  */
/* 								<?php if(count($listCategories) > 0) {*/
/* 								  foreach($listCategories as $categorie) {*/
/* 								    echo '<li>'.$categorie->getNom().'</li>';*/
/* 								  }*/
/* 								} else { ?>*/
/* 								  <li>Pas d'utilisateur trouvé.</li>*/
/* 								<?php } ?>*/
/* */
/* 							</ul>*/
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
/* 								{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/* 								<a href="{{ path('fos_user_security_logout') }}" class="btn btn-default" role="button">*/
/* 									{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/* 								</a>*/
/* 								<a href="/Julie/web/app_dev.php/NouvelleGalerie" class="btn btn-default" role="button">Nouvelle Galerie</a>*/
/* 								{% else %}*/
/* 								{#<a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}*/
/* 							{% endif %}*/
/* 						</div>*/
/* */
/* 						{% if app.request.hasPreviousSession %}*/
/* 							{% for type, messages in app.session.flashbag.all() %}*/
/* 								{% for message in messages %}*/
/* 									<div class="flash-{{ type }}">*/
/* 										{{ message }}*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 							{% endfor %}*/
/* 						{% endif %}*/
/* */
/* 						<div>*/
/* 							{% block fos_user_content %}*/
/* 							{% endblock fos_user_content %}*/
/* 						</div>*/
/* 						<div>*/
/* 							{% block right_side %}*/
/* 							{% endblock right_side %}*/
/* 						</div>*/
/* 						<div>*/
/* 							{% block footer %}*/
/* 							{% endblock footer %}*/
/* 						</div>*/
/* 					</div> <!-- div container-fluid -->*/
/* */
/* 					<script type="text/Javascript" src="{{ asset('/js/jquery-1.11.1.js')}}"></script>*/
/* 					<script type="text/Javascript" src="{{ asset('/js/bootstrap.min.js')}}"></script>*/
/* 					<script type="text/Javascript" src="{{ asset('/js/jquery.flexslider-min.js')}}"></script>*/
/* 					<script type="text/Javascript" src="{{ asset('/js/jquery.flexslider.js')}}"></script>*/
/* 					<script type="text/javascript" charset="utf-8">*/
/* 					*/
/* 					$(window).load(function() {*/
/* 					  $('.flexslider').flexslider({*/
/* 					    animation: "fade"*/
/* 					  });*/
/* 					});*/
/* 					</script>*/
/* */
/* </body>*/
/* </html>*/
