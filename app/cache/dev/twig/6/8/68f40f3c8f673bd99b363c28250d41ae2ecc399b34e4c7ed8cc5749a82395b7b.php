<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_dbce2cc54c3a85357b4f9da1f01d84f72fbe13dbd45f256d16c3b3c7c5a9fd16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddeb4cf1c4bfefc2a2b829cf2b475c4f2b59f1ecdaf315b4a5a6f8ad9047ef82 = $this->env->getExtension("native_profiler");
        $__internal_ddeb4cf1c4bfefc2a2b829cf2b475c4f2b59f1ecdaf315b4a5a6f8ad9047ef82->enter($__internal_ddeb4cf1c4bfefc2a2b829cf2b475c4f2b59f1ecdaf315b4a5a6f8ad9047ef82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ddeb4cf1c4bfefc2a2b829cf2b475c4f2b59f1ecdaf315b4a5a6f8ad9047ef82->leave($__internal_ddeb4cf1c4bfefc2a2b829cf2b475c4f2b59f1ecdaf315b4a5a6f8ad9047ef82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
