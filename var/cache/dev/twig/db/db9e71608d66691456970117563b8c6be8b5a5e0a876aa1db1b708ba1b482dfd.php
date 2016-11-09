<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_31007f83a383d66c7bbde4cb3c6b9bfecc8bf3b0b5b35ad8bbe7745e1b5cf03f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_4c15a7634377b2429d67fcf128c3303863f03f5c9e76dad32a658c0b218cc5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c15a7634377b2429d67fcf128c3303863f03f5c9e76dad32a658c0b218cc5f2->enter($__internal_4c15a7634377b2429d67fcf128c3303863f03f5c9e76dad32a658c0b218cc5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c15a7634377b2429d67fcf128c3303863f03f5c9e76dad32a658c0b218cc5f2->leave($__internal_4c15a7634377b2429d67fcf128c3303863f03f5c9e76dad32a658c0b218cc5f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b20bd46b4a59ccaaf6b5e4dde262e5218236369003f0bf00416ebc2389de19e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20bd46b4a59ccaaf6b5e4dde262e5218236369003f0bf00416ebc2389de19e5->enter($__internal_b20bd46b4a59ccaaf6b5e4dde262e5218236369003f0bf00416ebc2389de19e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b20bd46b4a59ccaaf6b5e4dde262e5218236369003f0bf00416ebc2389de19e5->leave($__internal_b20bd46b4a59ccaaf6b5e4dde262e5218236369003f0bf00416ebc2389de19e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1562adb04a59e9e4f67529d03ea2348803e919f6d6d09f52edaba3aa81d4471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1562adb04a59e9e4f67529d03ea2348803e919f6d6d09f52edaba3aa81d4471->enter($__internal_e1562adb04a59e9e4f67529d03ea2348803e919f6d6d09f52edaba3aa81d4471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e1562adb04a59e9e4f67529d03ea2348803e919f6d6d09f52edaba3aa81d4471->leave($__internal_e1562adb04a59e9e4f67529d03ea2348803e919f6d6d09f52edaba3aa81d4471_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7d3c1dc8fc31fb80de6f949793d1b04e8f4f4793f04494de1e07897983469bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d3c1dc8fc31fb80de6f949793d1b04e8f4f4793f04494de1e07897983469bc->enter($__internal_c7d3c1dc8fc31fb80de6f949793d1b04e8f4f4793f04494de1e07897983469bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c7d3c1dc8fc31fb80de6f949793d1b04e8f4f4793f04494de1e07897983469bc->leave($__internal_c7d3c1dc8fc31fb80de6f949793d1b04e8f4f4793f04494de1e07897983469bc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
