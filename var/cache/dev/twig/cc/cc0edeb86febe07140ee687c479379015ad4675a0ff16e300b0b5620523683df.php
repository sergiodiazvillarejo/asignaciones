<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_0d17b8ab3bf0b7607da077e5e79da680b0d338288f6ebdf64987d9e65f38f340 extends Twig_Template
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
        $__internal_29bf9dfdbcaee74814f52a388aff9bcd91dffad1c17cbea615b813a639ee8698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29bf9dfdbcaee74814f52a388aff9bcd91dffad1c17cbea615b813a639ee8698->enter($__internal_29bf9dfdbcaee74814f52a388aff9bcd91dffad1c17cbea615b813a639ee8698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_29bf9dfdbcaee74814f52a388aff9bcd91dffad1c17cbea615b813a639ee8698->leave($__internal_29bf9dfdbcaee74814f52a388aff9bcd91dffad1c17cbea615b813a639ee8698_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
