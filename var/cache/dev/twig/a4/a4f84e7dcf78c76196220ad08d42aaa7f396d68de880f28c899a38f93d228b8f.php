<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9e3833285592e13d4c347ac6a19adc3f1df541071f9d964893ad018a93b3ea73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_1496355917f31757579be4d52af814ff7d4f5e7723fa93aab063ca190c3348e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1496355917f31757579be4d52af814ff7d4f5e7723fa93aab063ca190c3348e2->enter($__internal_1496355917f31757579be4d52af814ff7d4f5e7723fa93aab063ca190c3348e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1496355917f31757579be4d52af814ff7d4f5e7723fa93aab063ca190c3348e2->leave($__internal_1496355917f31757579be4d52af814ff7d4f5e7723fa93aab063ca190c3348e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc9ac0cef95b2c81b8e304fabc6e8c7aec2643d8a4e536ec4cf959425bb86e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9ac0cef95b2c81b8e304fabc6e8c7aec2643d8a4e536ec4cf959425bb86e4f->enter($__internal_cc9ac0cef95b2c81b8e304fabc6e8c7aec2643d8a4e536ec4cf959425bb86e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cc9ac0cef95b2c81b8e304fabc6e8c7aec2643d8a4e536ec4cf959425bb86e4f->leave($__internal_cc9ac0cef95b2c81b8e304fabc6e8c7aec2643d8a4e536ec4cf959425bb86e4f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2353e8c35487b677d28ac726d071e2add30389ea6322e5a74c0aacf710521d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2353e8c35487b677d28ac726d071e2add30389ea6322e5a74c0aacf710521d25->enter($__internal_2353e8c35487b677d28ac726d071e2add30389ea6322e5a74c0aacf710521d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2353e8c35487b677d28ac726d071e2add30389ea6322e5a74c0aacf710521d25->leave($__internal_2353e8c35487b677d28ac726d071e2add30389ea6322e5a74c0aacf710521d25_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
