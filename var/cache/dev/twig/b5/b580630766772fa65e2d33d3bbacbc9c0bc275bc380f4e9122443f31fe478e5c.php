<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_f311bda722b0b8be7d628ec387090331baeb4a35fdbd4052b8a1b26483de4996 extends Twig_Template
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
        $__internal_d66f437558065ea95896da745ada6201ddd3e355999047a8b44bc6db50c15c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66f437558065ea95896da745ada6201ddd3e355999047a8b44bc6db50c15c37->enter($__internal_d66f437558065ea95896da745ada6201ddd3e355999047a8b44bc6db50c15c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d66f437558065ea95896da745ada6201ddd3e355999047a8b44bc6db50c15c37->leave($__internal_d66f437558065ea95896da745ada6201ddd3e355999047a8b44bc6db50c15c37_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
