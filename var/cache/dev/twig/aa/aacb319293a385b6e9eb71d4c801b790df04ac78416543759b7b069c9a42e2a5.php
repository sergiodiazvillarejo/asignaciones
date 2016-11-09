<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_6c16de73720cfdae55d7d41ef5cf8f8a6cec2357a6d91f5be378388d60783d38 extends Twig_Template
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
        $__internal_30d27966a0c3674ec6779ca4c4a227ad98379be372a7deb77b5bcca2128b8226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d27966a0c3674ec6779ca4c4a227ad98379be372a7deb77b5bcca2128b8226->enter($__internal_30d27966a0c3674ec6779ca4c4a227ad98379be372a7deb77b5bcca2128b8226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_30d27966a0c3674ec6779ca4c4a227ad98379be372a7deb77b5bcca2128b8226->leave($__internal_30d27966a0c3674ec6779ca4c4a227ad98379be372a7deb77b5bcca2128b8226_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
