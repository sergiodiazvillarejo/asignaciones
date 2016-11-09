<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_c65068d9764bbe31182f6faa9a6987ab0fec501f52896f088843dd4c3725eff3 extends Twig_Template
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
        $__internal_f76df9117607d8ee893cac51ee9594e8b65a3d972a715c2a87fc676dc3aabbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76df9117607d8ee893cac51ee9594e8b65a3d972a715c2a87fc676dc3aabbdb->enter($__internal_f76df9117607d8ee893cac51ee9594e8b65a3d972a715c2a87fc676dc3aabbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f76df9117607d8ee893cac51ee9594e8b65a3d972a715c2a87fc676dc3aabbdb->leave($__internal_f76df9117607d8ee893cac51ee9594e8b65a3d972a715c2a87fc676dc3aabbdb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
