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
        $__internal_e4aa34419d5472786ec2c2b587f2b672937d239962dca646023c73123ed2ab09 = $this->env->getExtension("native_profiler");
        $__internal_e4aa34419d5472786ec2c2b587f2b672937d239962dca646023c73123ed2ab09->enter($__internal_e4aa34419d5472786ec2c2b587f2b672937d239962dca646023c73123ed2ab09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4aa34419d5472786ec2c2b587f2b672937d239962dca646023c73123ed2ab09->leave($__internal_e4aa34419d5472786ec2c2b587f2b672937d239962dca646023c73123ed2ab09_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc278590b86c6bdf72d138f78122c484b24fe94b21e08c316d6ad026d8ec9811 = $this->env->getExtension("native_profiler");
        $__internal_fc278590b86c6bdf72d138f78122c484b24fe94b21e08c316d6ad026d8ec9811->enter($__internal_fc278590b86c6bdf72d138f78122c484b24fe94b21e08c316d6ad026d8ec9811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fc278590b86c6bdf72d138f78122c484b24fe94b21e08c316d6ad026d8ec9811->leave($__internal_fc278590b86c6bdf72d138f78122c484b24fe94b21e08c316d6ad026d8ec9811_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c266cc570633768d183c0111fb5951ee551a5a81334afc03e27602c95c8e4e22 = $this->env->getExtension("native_profiler");
        $__internal_c266cc570633768d183c0111fb5951ee551a5a81334afc03e27602c95c8e4e22->enter($__internal_c266cc570633768d183c0111fb5951ee551a5a81334afc03e27602c95c8e4e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c266cc570633768d183c0111fb5951ee551a5a81334afc03e27602c95c8e4e22->leave($__internal_c266cc570633768d183c0111fb5951ee551a5a81334afc03e27602c95c8e4e22_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_313ef3fbf239bb975b2aa81dc009112a8ea300b787aa6b81f5746390c56e8d11 = $this->env->getExtension("native_profiler");
        $__internal_313ef3fbf239bb975b2aa81dc009112a8ea300b787aa6b81f5746390c56e8d11->enter($__internal_313ef3fbf239bb975b2aa81dc009112a8ea300b787aa6b81f5746390c56e8d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_313ef3fbf239bb975b2aa81dc009112a8ea300b787aa6b81f5746390c56e8d11->leave($__internal_313ef3fbf239bb975b2aa81dc009112a8ea300b787aa6b81f5746390c56e8d11_prof);

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
