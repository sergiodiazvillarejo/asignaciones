<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_56dce6b5e572c977d2faaef20016ee8b8fff2b39db4e6b491ae7f9f720ed87e9 extends Twig_Template
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
        $__internal_e7f5c0575c3dbc7275530f2a2e03fda91ce53cd416fd194d38649e4d2542d396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f5c0575c3dbc7275530f2a2e03fda91ce53cd416fd194d38649e4d2542d396->enter($__internal_e7f5c0575c3dbc7275530f2a2e03fda91ce53cd416fd194d38649e4d2542d396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e7f5c0575c3dbc7275530f2a2e03fda91ce53cd416fd194d38649e4d2542d396->leave($__internal_e7f5c0575c3dbc7275530f2a2e03fda91ce53cd416fd194d38649e4d2542d396_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
