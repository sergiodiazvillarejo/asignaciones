<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_09d50daa00be2f65af4d34ca75e44e5a1505382ef839c0053e4f8152940ec442 extends Twig_Template
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
        $__internal_a37ff39ba9707eb7e25bd387250a397a90477f08cdf7a2e84239ae0944e65694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37ff39ba9707eb7e25bd387250a397a90477f08cdf7a2e84239ae0944e65694->enter($__internal_a37ff39ba9707eb7e25bd387250a397a90477f08cdf7a2e84239ae0944e65694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_a37ff39ba9707eb7e25bd387250a397a90477f08cdf7a2e84239ae0944e65694->leave($__internal_a37ff39ba9707eb7e25bd387250a397a90477f08cdf7a2e84239ae0944e65694_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
