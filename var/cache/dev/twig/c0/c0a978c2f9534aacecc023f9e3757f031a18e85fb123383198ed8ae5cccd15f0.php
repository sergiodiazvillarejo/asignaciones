<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c8ede1ec5d4acea6fbdc88428871eb95e1e00826dc9df54421e60e4e4c767890 extends Twig_Template
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
        $__internal_98dec68ea49a9b2f2f9aa133102dd5d8753901f11449760de7eb19bcb181a6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98dec68ea49a9b2f2f9aa133102dd5d8753901f11449760de7eb19bcb181a6bc->enter($__internal_98dec68ea49a9b2f2f9aa133102dd5d8753901f11449760de7eb19bcb181a6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_98dec68ea49a9b2f2f9aa133102dd5d8753901f11449760de7eb19bcb181a6bc->leave($__internal_98dec68ea49a9b2f2f9aa133102dd5d8753901f11449760de7eb19bcb181a6bc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
