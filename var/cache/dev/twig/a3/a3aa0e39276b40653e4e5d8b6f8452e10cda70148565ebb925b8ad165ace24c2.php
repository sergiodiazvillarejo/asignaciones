<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_439814222f481b477763e3ef9021522f5ceffc0f6eed74c7e264dac183b7ea11 extends Twig_Template
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
        $__internal_9ccf5a4f742ca6b0608ca655c6ad9685a65c74f73251e770f96e5cfb6226e8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ccf5a4f742ca6b0608ca655c6ad9685a65c74f73251e770f96e5cfb6226e8c8->enter($__internal_9ccf5a4f742ca6b0608ca655c6ad9685a65c74f73251e770f96e5cfb6226e8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_9ccf5a4f742ca6b0608ca655c6ad9685a65c74f73251e770f96e5cfb6226e8c8->leave($__internal_9ccf5a4f742ca6b0608ca655c6ad9685a65c74f73251e770f96e5cfb6226e8c8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
