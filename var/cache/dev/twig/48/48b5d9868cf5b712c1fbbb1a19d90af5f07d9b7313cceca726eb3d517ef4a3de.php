<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4507d514661d6aaf7324886b05d0a3f5eb9d6c03d8ecd3b62ac6934b17738ef6 extends Twig_Template
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
        $__internal_747a4b59518f9edd2ee9987e1039ab7cf2e99e138ddeee0cdcffb1b0c4b4e1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747a4b59518f9edd2ee9987e1039ab7cf2e99e138ddeee0cdcffb1b0c4b4e1a5->enter($__internal_747a4b59518f9edd2ee9987e1039ab7cf2e99e138ddeee0cdcffb1b0c4b4e1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_747a4b59518f9edd2ee9987e1039ab7cf2e99e138ddeee0cdcffb1b0c4b4e1a5->leave($__internal_747a4b59518f9edd2ee9987e1039ab7cf2e99e138ddeee0cdcffb1b0c4b4e1a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
