<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_4fc51e0a11ee1dea70c7e6e2b96d158af84537583d033e7a0b3f2b8a0649e06f extends Twig_Template
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
        $__internal_7abbb1603ca8934a530eaf61d38ea386937fef5d2b76aabb8d561048467dcc32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abbb1603ca8934a530eaf61d38ea386937fef5d2b76aabb8d561048467dcc32->enter($__internal_7abbb1603ca8934a530eaf61d38ea386937fef5d2b76aabb8d561048467dcc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7abbb1603ca8934a530eaf61d38ea386937fef5d2b76aabb8d561048467dcc32->leave($__internal_7abbb1603ca8934a530eaf61d38ea386937fef5d2b76aabb8d561048467dcc32_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
