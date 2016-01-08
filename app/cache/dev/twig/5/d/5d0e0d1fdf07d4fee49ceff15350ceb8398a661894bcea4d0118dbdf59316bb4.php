<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_df13e4e257a89639ea0740b35bdf36b750811ef2d984dd9db9f93726ed031f70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_480dd640d395e216d665e6e7a26f036c4355a70fcf65a3e2eb95bc3889f778d3 = $this->env->getExtension("native_profiler");
        $__internal_480dd640d395e216d665e6e7a26f036c4355a70fcf65a3e2eb95bc3889f778d3->enter($__internal_480dd640d395e216d665e6e7a26f036c4355a70fcf65a3e2eb95bc3889f778d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_480dd640d395e216d665e6e7a26f036c4355a70fcf65a3e2eb95bc3889f778d3->leave($__internal_480dd640d395e216d665e6e7a26f036c4355a70fcf65a3e2eb95bc3889f778d3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b358b2df5e4602f22769ba090a97e0cf657a8beb4ca914ea6360615d09da665 = $this->env->getExtension("native_profiler");
        $__internal_1b358b2df5e4602f22769ba090a97e0cf657a8beb4ca914ea6360615d09da665->enter($__internal_1b358b2df5e4602f22769ba090a97e0cf657a8beb4ca914ea6360615d09da665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1b358b2df5e4602f22769ba090a97e0cf657a8beb4ca914ea6360615d09da665->leave($__internal_1b358b2df5e4602f22769ba090a97e0cf657a8beb4ca914ea6360615d09da665_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_49f388612cceabb3ea77b6ac1f612d8cd291c47cb48c5c13556a9db8f30b95cb = $this->env->getExtension("native_profiler");
        $__internal_49f388612cceabb3ea77b6ac1f612d8cd291c47cb48c5c13556a9db8f30b95cb->enter($__internal_49f388612cceabb3ea77b6ac1f612d8cd291c47cb48c5c13556a9db8f30b95cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_49f388612cceabb3ea77b6ac1f612d8cd291c47cb48c5c13556a9db8f30b95cb->leave($__internal_49f388612cceabb3ea77b6ac1f612d8cd291c47cb48c5c13556a9db8f30b95cb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_08df328a10e52ad38db68e063782b3b33842393d9f4558be1b04f70ca94d429a = $this->env->getExtension("native_profiler");
        $__internal_08df328a10e52ad38db68e063782b3b33842393d9f4558be1b04f70ca94d429a->enter($__internal_08df328a10e52ad38db68e063782b3b33842393d9f4558be1b04f70ca94d429a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_08df328a10e52ad38db68e063782b3b33842393d9f4558be1b04f70ca94d429a->leave($__internal_08df328a10e52ad38db68e063782b3b33842393d9f4558be1b04f70ca94d429a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
