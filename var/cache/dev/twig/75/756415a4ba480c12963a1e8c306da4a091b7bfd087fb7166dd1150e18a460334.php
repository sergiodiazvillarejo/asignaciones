<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_902be40ea00949bef7b20f7722dc73cac2af16f7e3e6266658cf25ec415491ee extends Twig_Template
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
        $__internal_b6f75a5acbc0c736585a8ac010f3706c4b4cd747e7691cb7f8ce96cf27cb2e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f75a5acbc0c736585a8ac010f3706c4b4cd747e7691cb7f8ce96cf27cb2e5f->enter($__internal_b6f75a5acbc0c736585a8ac010f3706c4b4cd747e7691cb7f8ce96cf27cb2e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b6f75a5acbc0c736585a8ac010f3706c4b4cd747e7691cb7f8ce96cf27cb2e5f->leave($__internal_b6f75a5acbc0c736585a8ac010f3706c4b4cd747e7691cb7f8ce96cf27cb2e5f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
