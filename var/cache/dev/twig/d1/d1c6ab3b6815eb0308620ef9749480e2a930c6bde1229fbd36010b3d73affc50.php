<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_e98f9627b3e4cca33c35de8cde509a9127044842572abeee4ecbf3ac8cede386 extends Twig_Template
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
        $__internal_84898ee17504657b41dba327f5773fdd9fdcd7f9834deffffba55ab46fbb469e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84898ee17504657b41dba327f5773fdd9fdcd7f9834deffffba55ab46fbb469e->enter($__internal_84898ee17504657b41dba327f5773fdd9fdcd7f9834deffffba55ab46fbb469e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_84898ee17504657b41dba327f5773fdd9fdcd7f9834deffffba55ab46fbb469e->leave($__internal_84898ee17504657b41dba327f5773fdd9fdcd7f9834deffffba55ab46fbb469e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
