<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_1aadf67917e57cb5c13aa31af63c62891d108442c189fd7d89b559c306e9026a extends Twig_Template
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
        $__internal_1caae319767fe1d4edb50d752da4ddd52fbf50db3626ead81d91b996da2c64a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1caae319767fe1d4edb50d752da4ddd52fbf50db3626ead81d91b996da2c64a7->enter($__internal_1caae319767fe1d4edb50d752da4ddd52fbf50db3626ead81d91b996da2c64a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1caae319767fe1d4edb50d752da4ddd52fbf50db3626ead81d91b996da2c64a7->leave($__internal_1caae319767fe1d4edb50d752da4ddd52fbf50db3626ead81d91b996da2c64a7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
