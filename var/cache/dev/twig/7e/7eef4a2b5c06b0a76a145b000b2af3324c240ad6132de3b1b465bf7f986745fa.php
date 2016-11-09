<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9cea0a18a0dd41fe3238a9517489a1ac15d0704d55cde5b98e5525b22cc60f68 extends Twig_Template
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
        $__internal_459ac2d01bb2f63a5c2fa443cb867fd4c5beb42dd31d74e84db4284a560e6636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459ac2d01bb2f63a5c2fa443cb867fd4c5beb42dd31d74e84db4284a560e6636->enter($__internal_459ac2d01bb2f63a5c2fa443cb867fd4c5beb42dd31d74e84db4284a560e6636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_459ac2d01bb2f63a5c2fa443cb867fd4c5beb42dd31d74e84db4284a560e6636->leave($__internal_459ac2d01bb2f63a5c2fa443cb867fd4c5beb42dd31d74e84db4284a560e6636_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
