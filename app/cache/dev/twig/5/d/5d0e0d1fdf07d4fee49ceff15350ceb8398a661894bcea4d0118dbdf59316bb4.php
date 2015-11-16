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
        $__internal_2bcd6128a68695a230f76779ec2fd01460a0b5287ff6ea5448485ae1bde6946d = $this->env->getExtension("native_profiler");
        $__internal_2bcd6128a68695a230f76779ec2fd01460a0b5287ff6ea5448485ae1bde6946d->enter($__internal_2bcd6128a68695a230f76779ec2fd01460a0b5287ff6ea5448485ae1bde6946d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bcd6128a68695a230f76779ec2fd01460a0b5287ff6ea5448485ae1bde6946d->leave($__internal_2bcd6128a68695a230f76779ec2fd01460a0b5287ff6ea5448485ae1bde6946d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_533c9c2785e05a585be1bd7602b4d056c7e406558971f25c520e4de867cb1a85 = $this->env->getExtension("native_profiler");
        $__internal_533c9c2785e05a585be1bd7602b4d056c7e406558971f25c520e4de867cb1a85->enter($__internal_533c9c2785e05a585be1bd7602b4d056c7e406558971f25c520e4de867cb1a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_533c9c2785e05a585be1bd7602b4d056c7e406558971f25c520e4de867cb1a85->leave($__internal_533c9c2785e05a585be1bd7602b4d056c7e406558971f25c520e4de867cb1a85_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa5b464824c59def78fd0f317b58d73a5aa8f5ca4b3d8a39dd09f65c0188c06f = $this->env->getExtension("native_profiler");
        $__internal_aa5b464824c59def78fd0f317b58d73a5aa8f5ca4b3d8a39dd09f65c0188c06f->enter($__internal_aa5b464824c59def78fd0f317b58d73a5aa8f5ca4b3d8a39dd09f65c0188c06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aa5b464824c59def78fd0f317b58d73a5aa8f5ca4b3d8a39dd09f65c0188c06f->leave($__internal_aa5b464824c59def78fd0f317b58d73a5aa8f5ca4b3d8a39dd09f65c0188c06f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_14bcbe46f1f9cd425f589b58aea52eb62e9a766ce254986573798b539d4583ec = $this->env->getExtension("native_profiler");
        $__internal_14bcbe46f1f9cd425f589b58aea52eb62e9a766ce254986573798b539d4583ec->enter($__internal_14bcbe46f1f9cd425f589b58aea52eb62e9a766ce254986573798b539d4583ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_14bcbe46f1f9cd425f589b58aea52eb62e9a766ce254986573798b539d4583ec->leave($__internal_14bcbe46f1f9cd425f589b58aea52eb62e9a766ce254986573798b539d4583ec_prof);

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
