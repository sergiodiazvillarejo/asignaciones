<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_80ba2d5a794e40b51b63e6e7e3db8fee972f199129af5e4aacb5c18136fe6005 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_f6b1f7fc6a619d3d32c1b12c295e91deb16d24bb2230bc2b55b864e804f6c0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b1f7fc6a619d3d32c1b12c295e91deb16d24bb2230bc2b55b864e804f6c0ed->enter($__internal_f6b1f7fc6a619d3d32c1b12c295e91deb16d24bb2230bc2b55b864e804f6c0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6b1f7fc6a619d3d32c1b12c295e91deb16d24bb2230bc2b55b864e804f6c0ed->leave($__internal_f6b1f7fc6a619d3d32c1b12c295e91deb16d24bb2230bc2b55b864e804f6c0ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e787d25280385676a5394ab422026169aa05039cd5a51fbd2b03aaf1c6ba243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e787d25280385676a5394ab422026169aa05039cd5a51fbd2b03aaf1c6ba243->enter($__internal_6e787d25280385676a5394ab422026169aa05039cd5a51fbd2b03aaf1c6ba243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6e787d25280385676a5394ab422026169aa05039cd5a51fbd2b03aaf1c6ba243->leave($__internal_6e787d25280385676a5394ab422026169aa05039cd5a51fbd2b03aaf1c6ba243_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_90a95e104a1835743a0a01c47104001af0f1eecb9c2726c3a038d4efeb5e3b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a95e104a1835743a0a01c47104001af0f1eecb9c2726c3a038d4efeb5e3b94->enter($__internal_90a95e104a1835743a0a01c47104001af0f1eecb9c2726c3a038d4efeb5e3b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_90a95e104a1835743a0a01c47104001af0f1eecb9c2726c3a038d4efeb5e3b94->leave($__internal_90a95e104a1835743a0a01c47104001af0f1eecb9c2726c3a038d4efeb5e3b94_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_028102a1e3b1a203d1f816856303a72aa6aba8ac5b8db8f92145a8d160e6d2cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028102a1e3b1a203d1f816856303a72aa6aba8ac5b8db8f92145a8d160e6d2cd->enter($__internal_028102a1e3b1a203d1f816856303a72aa6aba8ac5b8db8f92145a8d160e6d2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_028102a1e3b1a203d1f816856303a72aa6aba8ac5b8db8f92145a8d160e6d2cd->leave($__internal_028102a1e3b1a203d1f816856303a72aa6aba8ac5b8db8f92145a8d160e6d2cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
