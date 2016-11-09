<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5e0be3ec4069788219b9fc7a2179f5d0efa55b936f352838cf2a54e4190b581c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_31488065d2d8bd6b051bd19f139a93cc79025aad6cec895fd7d2adc0afb47321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31488065d2d8bd6b051bd19f139a93cc79025aad6cec895fd7d2adc0afb47321->enter($__internal_31488065d2d8bd6b051bd19f139a93cc79025aad6cec895fd7d2adc0afb47321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31488065d2d8bd6b051bd19f139a93cc79025aad6cec895fd7d2adc0afb47321->leave($__internal_31488065d2d8bd6b051bd19f139a93cc79025aad6cec895fd7d2adc0afb47321_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a56acb92ee9ea2f7c440a3a6354332f324c792e32591b6a4c473d86b43aa6019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56acb92ee9ea2f7c440a3a6354332f324c792e32591b6a4c473d86b43aa6019->enter($__internal_a56acb92ee9ea2f7c440a3a6354332f324c792e32591b6a4c473d86b43aa6019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a56acb92ee9ea2f7c440a3a6354332f324c792e32591b6a4c473d86b43aa6019->leave($__internal_a56acb92ee9ea2f7c440a3a6354332f324c792e32591b6a4c473d86b43aa6019_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cede9fd9a13688f90953df082cc3a9e0e3828a2e3377685be362691e85a1d2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cede9fd9a13688f90953df082cc3a9e0e3828a2e3377685be362691e85a1d2c7->enter($__internal_cede9fd9a13688f90953df082cc3a9e0e3828a2e3377685be362691e85a1d2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cede9fd9a13688f90953df082cc3a9e0e3828a2e3377685be362691e85a1d2c7->leave($__internal_cede9fd9a13688f90953df082cc3a9e0e3828a2e3377685be362691e85a1d2c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
