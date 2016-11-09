<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_d2f3c58c105301836ee2a99c6232c17bc63136281e5b15797690af1d6da4738b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6db8853b7ce3f9884cb1d90d40aeb627f53c4439c9b10aca79e77eb92701127d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db8853b7ce3f9884cb1d90d40aeb627f53c4439c9b10aca79e77eb92701127d->enter($__internal_6db8853b7ce3f9884cb1d90d40aeb627f53c4439c9b10aca79e77eb92701127d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6db8853b7ce3f9884cb1d90d40aeb627f53c4439c9b10aca79e77eb92701127d->leave($__internal_6db8853b7ce3f9884cb1d90d40aeb627f53c4439c9b10aca79e77eb92701127d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9cc8ae19c9d4248d2730edad2f376f470a87d088a7acc5e482c0849052a076ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc8ae19c9d4248d2730edad2f376f470a87d088a7acc5e482c0849052a076ea->enter($__internal_9cc8ae19c9d4248d2730edad2f376f470a87d088a7acc5e482c0849052a076ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9cc8ae19c9d4248d2730edad2f376f470a87d088a7acc5e482c0849052a076ea->leave($__internal_9cc8ae19c9d4248d2730edad2f376f470a87d088a7acc5e482c0849052a076ea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
