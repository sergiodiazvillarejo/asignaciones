<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5b2f8708c2a7d687731e8b675f3f73b57feba1449b2f7663b8bc2383b37ef103 extends Twig_Template
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
        $__internal_33769e37edd376c72fd8d91dcd77090aec3c823e50659ee4f2a4cfcbf0e70d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33769e37edd376c72fd8d91dcd77090aec3c823e50659ee4f2a4cfcbf0e70d2c->enter($__internal_33769e37edd376c72fd8d91dcd77090aec3c823e50659ee4f2a4cfcbf0e70d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_33769e37edd376c72fd8d91dcd77090aec3c823e50659ee4f2a4cfcbf0e70d2c->leave($__internal_33769e37edd376c72fd8d91dcd77090aec3c823e50659ee4f2a4cfcbf0e70d2c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
