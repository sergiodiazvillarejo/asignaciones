<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e4445a9a38d295ec7e75d6631fc40d21b946341f6b817c5495a53cd9cf6e3ddb extends Twig_Template
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
        $__internal_1e0f2e7796e61ad6277c9758be41b00f09f2ee9be1c1239b8a61b56b5b755050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0f2e7796e61ad6277c9758be41b00f09f2ee9be1c1239b8a61b56b5b755050->enter($__internal_1e0f2e7796e61ad6277c9758be41b00f09f2ee9be1c1239b8a61b56b5b755050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1e0f2e7796e61ad6277c9758be41b00f09f2ee9be1c1239b8a61b56b5b755050->leave($__internal_1e0f2e7796e61ad6277c9758be41b00f09f2ee9be1c1239b8a61b56b5b755050_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
