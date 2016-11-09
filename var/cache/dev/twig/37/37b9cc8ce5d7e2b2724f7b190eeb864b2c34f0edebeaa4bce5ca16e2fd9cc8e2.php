<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_55a5f9e4eb46e165e884732d3ae454abb6c383bf4ee9cb3e9e5826a96ba12e9a extends Twig_Template
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
        $__internal_ee95dfbee7456094d4890a061cb180386ec97dbc9e36d78f4a565a6eec150033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee95dfbee7456094d4890a061cb180386ec97dbc9e36d78f4a565a6eec150033->enter($__internal_ee95dfbee7456094d4890a061cb180386ec97dbc9e36d78f4a565a6eec150033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ee95dfbee7456094d4890a061cb180386ec97dbc9e36d78f4a565a6eec150033->leave($__internal_ee95dfbee7456094d4890a061cb180386ec97dbc9e36d78f4a565a6eec150033_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
