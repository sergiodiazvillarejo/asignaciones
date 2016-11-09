<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_d55454db7fbdee90c7cd3acea160f6414c6dd58a8d7373759b3a859b0e5a7168 extends Twig_Template
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
        $__internal_88f65357e46c4804b1ea53f48e748aa46ad33fafeac5b4391f2313ca5ce1e00b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f65357e46c4804b1ea53f48e748aa46ad33fafeac5b4391f2313ca5ce1e00b->enter($__internal_88f65357e46c4804b1ea53f48e748aa46ad33fafeac5b4391f2313ca5ce1e00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_88f65357e46c4804b1ea53f48e748aa46ad33fafeac5b4391f2313ca5ce1e00b->leave($__internal_88f65357e46c4804b1ea53f48e748aa46ad33fafeac5b4391f2313ca5ce1e00b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
