<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9d08ac289ed713d56e4d1200381cf0390e1db5a19e9400fe1fa052981500468b extends Twig_Template
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
        $__internal_7a03d1f6e71bb87cd2308c58c1362e1092db314a1fc8fc1222f647dfeeb7bf52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a03d1f6e71bb87cd2308c58c1362e1092db314a1fc8fc1222f647dfeeb7bf52->enter($__internal_7a03d1f6e71bb87cd2308c58c1362e1092db314a1fc8fc1222f647dfeeb7bf52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_7a03d1f6e71bb87cd2308c58c1362e1092db314a1fc8fc1222f647dfeeb7bf52->leave($__internal_7a03d1f6e71bb87cd2308c58c1362e1092db314a1fc8fc1222f647dfeeb7bf52_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
