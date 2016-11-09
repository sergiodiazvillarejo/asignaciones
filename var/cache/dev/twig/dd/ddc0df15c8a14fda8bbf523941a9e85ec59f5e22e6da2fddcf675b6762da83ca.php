<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5dded3be0acba1b1397258780999c74fad9edb53058b231711fad05403bf6d1d extends Twig_Template
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
        $__internal_cb42af4f7a631f0c38836dffbc6f37492cd99ff0ae630266bc4415bd9ae3a39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb42af4f7a631f0c38836dffbc6f37492cd99ff0ae630266bc4415bd9ae3a39b->enter($__internal_cb42af4f7a631f0c38836dffbc6f37492cd99ff0ae630266bc4415bd9ae3a39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_cb42af4f7a631f0c38836dffbc6f37492cd99ff0ae630266bc4415bd9ae3a39b->leave($__internal_cb42af4f7a631f0c38836dffbc6f37492cd99ff0ae630266bc4415bd9ae3a39b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
