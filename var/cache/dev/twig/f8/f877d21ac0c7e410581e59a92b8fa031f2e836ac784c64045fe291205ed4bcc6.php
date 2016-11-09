<?php

/* base.html.twig */
class __TwigTemplate_f111f04f9991c072cc7bb7d7af675af9e425edc0dd1e5e44c0c791363abfe917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ba60f17ff38fdf39f3cf6f685284b0cc2af2ba8823de79295a8c23e091f7f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba60f17ff38fdf39f3cf6f685284b0cc2af2ba8823de79295a8c23e091f7f81->enter($__internal_3ba60f17ff38fdf39f3cf6f685284b0cc2af2ba8823de79295a8c23e091f7f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3ba60f17ff38fdf39f3cf6f685284b0cc2af2ba8823de79295a8c23e091f7f81->leave($__internal_3ba60f17ff38fdf39f3cf6f685284b0cc2af2ba8823de79295a8c23e091f7f81_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_543f6c6502694b4cbdfaa13203dc6f54f02e1f7d5853de5d6e7f67a4133cef98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543f6c6502694b4cbdfaa13203dc6f54f02e1f7d5853de5d6e7f67a4133cef98->enter($__internal_543f6c6502694b4cbdfaa13203dc6f54f02e1f7d5853de5d6e7f67a4133cef98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_543f6c6502694b4cbdfaa13203dc6f54f02e1f7d5853de5d6e7f67a4133cef98->leave($__internal_543f6c6502694b4cbdfaa13203dc6f54f02e1f7d5853de5d6e7f67a4133cef98_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_53d7bcaedf5389b12d3fe91a59a7aab43415a18139c758536cdba7ad1c16d102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d7bcaedf5389b12d3fe91a59a7aab43415a18139c758536cdba7ad1c16d102->enter($__internal_53d7bcaedf5389b12d3fe91a59a7aab43415a18139c758536cdba7ad1c16d102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_53d7bcaedf5389b12d3fe91a59a7aab43415a18139c758536cdba7ad1c16d102->leave($__internal_53d7bcaedf5389b12d3fe91a59a7aab43415a18139c758536cdba7ad1c16d102_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6cef0c5412d5d98643c97e8469e6d6e133f415facef8bdf5a66e35ee7784573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6cef0c5412d5d98643c97e8469e6d6e133f415facef8bdf5a66e35ee7784573->enter($__internal_f6cef0c5412d5d98643c97e8469e6d6e133f415facef8bdf5a66e35ee7784573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f6cef0c5412d5d98643c97e8469e6d6e133f415facef8bdf5a66e35ee7784573->leave($__internal_f6cef0c5412d5d98643c97e8469e6d6e133f415facef8bdf5a66e35ee7784573_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce0ec8692ea85ce79258a079a18bfa5c446d36cd3d687c925af24d07c0dc7a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0ec8692ea85ce79258a079a18bfa5c446d36cd3d687c925af24d07c0dc7a1a->enter($__internal_ce0ec8692ea85ce79258a079a18bfa5c446d36cd3d687c925af24d07c0dc7a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ce0ec8692ea85ce79258a079a18bfa5c446d36cd3d687c925af24d07c0dc7a1a->leave($__internal_ce0ec8692ea85ce79258a079a18bfa5c446d36cd3d687c925af24d07c0dc7a1a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
