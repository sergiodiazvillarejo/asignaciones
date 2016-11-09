<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_a5569b349a31f18a79735885528d7b8a74e0f5bdd8920f0c96f71ac3f3628ef6 extends Twig_Template
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
        $__internal_98aa16d8336effa6765cc60ea1c4214449b819e647a7b78122c5873280d97c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98aa16d8336effa6765cc60ea1c4214449b819e647a7b78122c5873280d97c79->enter($__internal_98aa16d8336effa6765cc60ea1c4214449b819e647a7b78122c5873280d97c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_98aa16d8336effa6765cc60ea1c4214449b819e647a7b78122c5873280d97c79->leave($__internal_98aa16d8336effa6765cc60ea1c4214449b819e647a7b78122c5873280d97c79_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
