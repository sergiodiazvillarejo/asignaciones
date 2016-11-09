<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_843556aa1ffed385436532d412278b41b4b4b9a2f8460a31877042882c4f029c extends Twig_Template
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
        $__internal_b9bb5bde29dd0615eaa9207c6adb94e26fc93d457b84dc9d41ee4c6de6ccbf8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9bb5bde29dd0615eaa9207c6adb94e26fc93d457b84dc9d41ee4c6de6ccbf8f->enter($__internal_b9bb5bde29dd0615eaa9207c6adb94e26fc93d457b84dc9d41ee4c6de6ccbf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b9bb5bde29dd0615eaa9207c6adb94e26fc93d457b84dc9d41ee4c6de6ccbf8f->leave($__internal_b9bb5bde29dd0615eaa9207c6adb94e26fc93d457b84dc9d41ee4c6de6ccbf8f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
