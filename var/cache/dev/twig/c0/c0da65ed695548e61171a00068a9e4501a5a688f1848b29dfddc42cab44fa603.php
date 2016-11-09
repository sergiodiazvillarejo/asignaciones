<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e2d352162424a90c247a6138892fd39b60b971b22e72ca09b84046dd9ef64d26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e42bc7747440dc6643877c1cd6254445f73141e56ecc7900c3e172118bb9a2b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42bc7747440dc6643877c1cd6254445f73141e56ecc7900c3e172118bb9a2b7->enter($__internal_e42bc7747440dc6643877c1cd6254445f73141e56ecc7900c3e172118bb9a2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e42bc7747440dc6643877c1cd6254445f73141e56ecc7900c3e172118bb9a2b7->leave($__internal_e42bc7747440dc6643877c1cd6254445f73141e56ecc7900c3e172118bb9a2b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_941d47cefe8bf50be4d70d1163f6ead91106bf7155033745a0113c531c508862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941d47cefe8bf50be4d70d1163f6ead91106bf7155033745a0113c531c508862->enter($__internal_941d47cefe8bf50be4d70d1163f6ead91106bf7155033745a0113c531c508862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_941d47cefe8bf50be4d70d1163f6ead91106bf7155033745a0113c531c508862->leave($__internal_941d47cefe8bf50be4d70d1163f6ead91106bf7155033745a0113c531c508862_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2141445b3009218e211e07962d438efb7118f4100e5a457514ffeb12d5584c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2141445b3009218e211e07962d438efb7118f4100e5a457514ffeb12d5584c71->enter($__internal_2141445b3009218e211e07962d438efb7118f4100e5a457514ffeb12d5584c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2141445b3009218e211e07962d438efb7118f4100e5a457514ffeb12d5584c71->leave($__internal_2141445b3009218e211e07962d438efb7118f4100e5a457514ffeb12d5584c71_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf3f7b88e4f7b56931c523ad03ce6fc9a85e3284b39a0187340c244b20d8efb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3f7b88e4f7b56931c523ad03ce6fc9a85e3284b39a0187340c244b20d8efb0->enter($__internal_bf3f7b88e4f7b56931c523ad03ce6fc9a85e3284b39a0187340c244b20d8efb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bf3f7b88e4f7b56931c523ad03ce6fc9a85e3284b39a0187340c244b20d8efb0->leave($__internal_bf3f7b88e4f7b56931c523ad03ce6fc9a85e3284b39a0187340c244b20d8efb0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
