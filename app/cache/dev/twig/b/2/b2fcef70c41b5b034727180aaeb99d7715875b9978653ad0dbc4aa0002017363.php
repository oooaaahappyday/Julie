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
        $__internal_44a26e449529cd44326cbdac1a527138783bfda6b2b30f703b374d907dd991ce = $this->env->getExtension("native_profiler");
        $__internal_44a26e449529cd44326cbdac1a527138783bfda6b2b30f703b374d907dd991ce->enter($__internal_44a26e449529cd44326cbdac1a527138783bfda6b2b30f703b374d907dd991ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JuliePlatformBundle::layout.html.twig"));

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

\t\t\t\t\t\t<div id=\"authentication\">
\t\t\t\t\t\t\t";
        // line 85
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 86
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
\t\t\t\t\t\t\t\t<a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-default\" role=\"button\">
\t\t\t\t\t\t\t\t\t";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"/Julie/web/app_dev.php/NouvelleGalerie\" class=\"btn btn-default\" role=\"button\">Nouvelle Galerie</a>
\t\t\t\t\t\t\t\t";
        } else {
            // line 92
            echo "\t\t\t\t\t\t\t\t";
            // line 93
            echo "\t\t\t\t\t\t\t";
        }
        // line 94
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 96
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 97
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 98
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 100
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "\t\t\t\t\t\t";
        }
        // line 105
        echo "
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 107
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 109
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<canvas id=\"banniere\" width=\"3000\" height=\"70\"></canvas>
\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\tvar canvas = document.getElementById('banniere');
\t\t\t\t\t\t\t\tvar ctx = canvas.getContext('2d');
\t\t\t\t\t\t\t\tvar numberOfLines = 5;
\t\t\t\t\t\t\t\tvar i = 0;
\t\t\t\t\t\t\t\tvar cycle = function() {
\t\t\t\t\t\t\t\t  ctx.clearRect(0, 0, canvas.width, canvas.height);
\t\t\t\t\t\t\t\t  for(var j=0; j<numberOfLines; ++j) {
\t\t\t\t\t\t\t\t    ctx.lineWidth = 1+2*(numberOfLines-j);
\t\t\t\t\t\t\t\t    ctx.strokeStyle = 'rgba(100,200,'+Math.floor(Math.abs(Math.cos(i/80)*256))+','+(j/5+0.1)+')';
\t\t\t\t\t\t\t\t    var offset = (i+j*10*Math.abs(Math.cos(i/100)))/20;
\t\t\t\t\t\t\t\t    var y = (Math.sin(offset)+1)*canvas.height/2;
\t\t\t\t\t\t\t\t    var cpy1 = (Math.cos(offset)+0.5)*canvas.height;
\t\t\t\t\t\t\t\t    var cpy2 = canvas.height - cpy1;
\t\t\t\t\t\t\t\t    ctx.beginPath();
\t\t\t\t\t\t\t\t    ctx.moveTo(0, y);
\t\t\t\t\t\t\t\t    ctx.bezierCurveTo(canvas.width/3, cpy1, 2*canvas.width/3, cpy2, canvas.width, y);
\t\t\t\t\t\t\t\t    ctx.stroke();
\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t\t  i++;
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\tsetInterval(cycle, 30);
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 137
        $this->displayBlock('right_side', $context, $blocks);
        // line 139
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 141
        $this->displayBlock('footer', $context, $blocks);
        // line 143
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div> <!-- div container-fluid -->

\t\t\t\t\t<script type=\"text/Javascript\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t<script type=\"text/Javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t<script type=\"text/Javascript\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t<script type=\"text/Javascript\" src=\"";
        // line 149
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
        
        $__internal_44a26e449529cd44326cbdac1a527138783bfda6b2b30f703b374d907dd991ce->leave($__internal_44a26e449529cd44326cbdac1a527138783bfda6b2b30f703b374d907dd991ce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bee680a7a0f37d427c7d7a878469c7de484637ba669ae0f47b61b5ff29c37a83 = $this->env->getExtension("native_profiler");
        $__internal_bee680a7a0f37d427c7d7a878469c7de484637ba669ae0f47b61b5ff29c37a83->enter($__internal_bee680a7a0f37d427c7d7a878469c7de484637ba669ae0f47b61b5ff29c37a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Julie Franchet";
        
        $__internal_bee680a7a0f37d427c7d7a878469c7de484637ba669ae0f47b61b5ff29c37a83->leave($__internal_bee680a7a0f37d427c7d7a878469c7de484637ba669ae0f47b61b5ff29c37a83_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe9a881602ddeb2656af03af0900785d30f23e2d9e8f914a6079eb73a7b27ddf = $this->env->getExtension("native_profiler");
        $__internal_fe9a881602ddeb2656af03af0900785d30f23e2d9e8f914a6079eb73a7b27ddf->enter($__internal_fe9a881602ddeb2656af03af0900785d30f23e2d9e8f914a6079eb73a7b27ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fe9a881602ddeb2656af03af0900785d30f23e2d9e8f914a6079eb73a7b27ddf->leave($__internal_fe9a881602ddeb2656af03af0900785d30f23e2d9e8f914a6079eb73a7b27ddf_prof);

    }

    // line 107
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8676753a59571ef406f7548573e469d349074b40dc8ca0905df1740f43566d5f = $this->env->getExtension("native_profiler");
        $__internal_8676753a59571ef406f7548573e469d349074b40dc8ca0905df1740f43566d5f->enter($__internal_8676753a59571ef406f7548573e469d349074b40dc8ca0905df1740f43566d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 108
        echo "\t\t\t\t\t\t\t";
        
        $__internal_8676753a59571ef406f7548573e469d349074b40dc8ca0905df1740f43566d5f->leave($__internal_8676753a59571ef406f7548573e469d349074b40dc8ca0905df1740f43566d5f_prof);

    }

    // line 137
    public function block_right_side($context, array $blocks = array())
    {
        $__internal_c962790f5f66bdfeb127b01956982d2fc8e2c0b430e9e4f3ccc9fea6b4056f93 = $this->env->getExtension("native_profiler");
        $__internal_c962790f5f66bdfeb127b01956982d2fc8e2c0b430e9e4f3ccc9fea6b4056f93->enter($__internal_c962790f5f66bdfeb127b01956982d2fc8e2c0b430e9e4f3ccc9fea6b4056f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_side"));

        // line 138
        echo "\t\t\t\t\t\t\t";
        
        $__internal_c962790f5f66bdfeb127b01956982d2fc8e2c0b430e9e4f3ccc9fea6b4056f93->leave($__internal_c962790f5f66bdfeb127b01956982d2fc8e2c0b430e9e4f3ccc9fea6b4056f93_prof);

    }

    // line 141
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b01af1f53790564a1d9465a4fac0d8eee04ed3e3cff4d949b48c2353248ce63f = $this->env->getExtension("native_profiler");
        $__internal_b01af1f53790564a1d9465a4fac0d8eee04ed3e3cff4d949b48c2353248ce63f->enter($__internal_b01af1f53790564a1d9465a4fac0d8eee04ed3e3cff4d949b48c2353248ce63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 142
        echo "\t\t\t\t\t\t\t";
        
        $__internal_b01af1f53790564a1d9465a4fac0d8eee04ed3e3cff4d949b48c2353248ce63f->leave($__internal_b01af1f53790564a1d9465a4fac0d8eee04ed3e3cff4d949b48c2353248ce63f_prof);

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
        return array (  329 => 142,  323 => 141,  316 => 138,  310 => 137,  303 => 108,  297 => 107,  288 => 13,  284 => 12,  280 => 11,  275 => 10,  269 => 9,  257 => 7,  238 => 149,  234 => 148,  230 => 147,  226 => 146,  221 => 143,  219 => 141,  215 => 139,  213 => 137,  183 => 109,  181 => 107,  177 => 105,  174 => 104,  168 => 103,  159 => 100,  154 => 99,  149 => 98,  144 => 97,  142 => 96,  138 => 94,  135 => 93,  133 => 92,  126 => 88,  122 => 87,  117 => 86,  115 => 85,  105 => 77,  42 => 15,  40 => 9,  35 => 7,  27 => 1,);
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
/* */
/* 						<div id="authentication">*/
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
/* 							<canvas id="banniere" width="3000" height="70"></canvas>*/
/* 							<script>*/
/* 								var canvas = document.getElementById('banniere');*/
/* 								var ctx = canvas.getContext('2d');*/
/* 								var numberOfLines = 5;*/
/* 								var i = 0;*/
/* 								var cycle = function() {*/
/* 								  ctx.clearRect(0, 0, canvas.width, canvas.height);*/
/* 								  for(var j=0; j<numberOfLines; ++j) {*/
/* 								    ctx.lineWidth = 1+2*(numberOfLines-j);*/
/* 								    ctx.strokeStyle = 'rgba(100,200,'+Math.floor(Math.abs(Math.cos(i/80)*256))+','+(j/5+0.1)+')';*/
/* 								    var offset = (i+j*10*Math.abs(Math.cos(i/100)))/20;*/
/* 								    var y = (Math.sin(offset)+1)*canvas.height/2;*/
/* 								    var cpy1 = (Math.cos(offset)+0.5)*canvas.height;*/
/* 								    var cpy2 = canvas.height - cpy1;*/
/* 								    ctx.beginPath();*/
/* 								    ctx.moveTo(0, y);*/
/* 								    ctx.bezierCurveTo(canvas.width/3, cpy1, 2*canvas.width/3, cpy2, canvas.width, y);*/
/* 								    ctx.stroke();*/
/* 								  }*/
/* 								  i++;*/
/* 								};*/
/* 								setInterval(cycle, 30);*/
/* 							</script>*/
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
