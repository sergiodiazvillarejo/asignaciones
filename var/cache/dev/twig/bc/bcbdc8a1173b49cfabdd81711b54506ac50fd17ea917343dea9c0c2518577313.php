<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_aae874c759b0fb1ef2f63c9b27bb7678222520745d9d8095f724bb84f60f1f35 extends Twig_Template
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
        $__internal_29e600742f0ad0299f28ae0db0d62e1d05da6a5f5d36827871c1c50c4f6d6d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e600742f0ad0299f28ae0db0d62e1d05da6a5f5d36827871c1c50c4f6d6d09->enter($__internal_29e600742f0ad0299f28ae0db0d62e1d05da6a5f5d36827871c1c50c4f6d6d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_29e600742f0ad0299f28ae0db0d62e1d05da6a5f5d36827871c1c50c4f6d6d09->leave($__internal_29e600742f0ad0299f28ae0db0d62e1d05da6a5f5d36827871c1c50c4f6d6d09_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
