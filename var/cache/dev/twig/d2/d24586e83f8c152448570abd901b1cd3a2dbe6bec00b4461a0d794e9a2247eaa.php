<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_febf43f6be2c9c2973fb9d67abe54dbc46dbefd5a9bee3dc6bd174986560cad4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed010165ef389208b591f35f13780b0991a76bfb0c862e7bbb4555ea9627022d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed010165ef389208b591f35f13780b0991a76bfb0c862e7bbb4555ea9627022d->enter($__internal_ed010165ef389208b591f35f13780b0991a76bfb0c862e7bbb4555ea9627022d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed010165ef389208b591f35f13780b0991a76bfb0c862e7bbb4555ea9627022d->leave($__internal_ed010165ef389208b591f35f13780b0991a76bfb0c862e7bbb4555ea9627022d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a3ba10a7c542f00965551dec699ecd275350e3c45746a364df3cf3cad94f9c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ba10a7c542f00965551dec699ecd275350e3c45746a364df3cf3cad94f9c30->enter($__internal_a3ba10a7c542f00965551dec699ecd275350e3c45746a364df3cf3cad94f9c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a3ba10a7c542f00965551dec699ecd275350e3c45746a364df3cf3cad94f9c30->leave($__internal_a3ba10a7c542f00965551dec699ecd275350e3c45746a364df3cf3cad94f9c30_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6896b07683b5117db053a29165fa75c757311bf668b0f02b2fb736881599e9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6896b07683b5117db053a29165fa75c757311bf668b0f02b2fb736881599e9ff->enter($__internal_6896b07683b5117db053a29165fa75c757311bf668b0f02b2fb736881599e9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6896b07683b5117db053a29165fa75c757311bf668b0f02b2fb736881599e9ff->leave($__internal_6896b07683b5117db053a29165fa75c757311bf668b0f02b2fb736881599e9ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9d51d197c3fbe8f2c56c653b6161ab4539046934a72d37229020ca4399c57e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d51d197c3fbe8f2c56c653b6161ab4539046934a72d37229020ca4399c57e1->enter($__internal_a9d51d197c3fbe8f2c56c653b6161ab4539046934a72d37229020ca4399c57e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a9d51d197c3fbe8f2c56c653b6161ab4539046934a72d37229020ca4399c57e1->leave($__internal_a9d51d197c3fbe8f2c56c653b6161ab4539046934a72d37229020ca4399c57e1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
