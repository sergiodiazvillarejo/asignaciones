<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f8a0b5de9ba09c2f4ef6ee3c9742f38148a9bdca48a6a47521ee0ca682126616 extends Twig_Template
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
        $__internal_f9a6784eb12232538ffbd76bc0346a3fc17cfcb46892367edde4f88f21bf2dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a6784eb12232538ffbd76bc0346a3fc17cfcb46892367edde4f88f21bf2dd1->enter($__internal_f9a6784eb12232538ffbd76bc0346a3fc17cfcb46892367edde4f88f21bf2dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f9a6784eb12232538ffbd76bc0346a3fc17cfcb46892367edde4f88f21bf2dd1->leave($__internal_f9a6784eb12232538ffbd76bc0346a3fc17cfcb46892367edde4f88f21bf2dd1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
