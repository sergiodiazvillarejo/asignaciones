<?php

/* ::layout.html.twig */
class __TwigTemplate_45d1ccc4b570f20fdd94354fc98b0d57cba2b019662d57790e319b088db58e90 extends Twig_Template
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
        $__internal_73d8c452838e8380f55db6bf5735e0c672792b10be303c2da16d3faa3f67f515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d8c452838e8380f55db6bf5735e0c672792b10be303c2da16d3faa3f67f515->enter($__internal_73d8c452838e8380f55db6bf5735e0c672792b10be303c2da16d3faa3f67f515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_73d8c452838e8380f55db6bf5735e0c672792b10be303c2da16d3faa3f67f515->leave($__internal_73d8c452838e8380f55db6bf5735e0c672792b10be303c2da16d3faa3f67f515_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1548a8ab7f70d81ae58e31b20313c554a551c05c8f37a3fdfc64a7ca27449880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1548a8ab7f70d81ae58e31b20313c554a551c05c8f37a3fdfc64a7ca27449880->enter($__internal_1548a8ab7f70d81ae58e31b20313c554a551c05c8f37a3fdfc64a7ca27449880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignación de tareas";
        
        $__internal_1548a8ab7f70d81ae58e31b20313c554a551c05c8f37a3fdfc64a7ca27449880->leave($__internal_1548a8ab7f70d81ae58e31b20313c554a551c05c8f37a3fdfc64a7ca27449880_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e3309f4e139b522c2759b3bce1ede5528f35ac152901f012564e254b527b61d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3309f4e139b522c2759b3bce1ede5528f35ac152901f012564e254b527b61d->enter($__internal_9e3309f4e139b522c2759b3bce1ede5528f35ac152901f012564e254b527b61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_9e3309f4e139b522c2759b3bce1ede5528f35ac152901f012564e254b527b61d->leave($__internal_9e3309f4e139b522c2759b3bce1ede5528f35ac152901f012564e254b527b61d_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c464b94ce052a39ccdd7d0d388ca069b12a02d0c6bbe21430fbaac18c78ea1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c464b94ce052a39ccdd7d0d388ca069b12a02d0c6bbe21430fbaac18c78ea1d->enter($__internal_9c464b94ce052a39ccdd7d0d388ca069b12a02d0c6bbe21430fbaac18c78ea1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_9c464b94ce052a39ccdd7d0d388ca069b12a02d0c6bbe21430fbaac18c78ea1d->leave($__internal_9c464b94ce052a39ccdd7d0d388ca069b12a02d0c6bbe21430fbaac18c78ea1d_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_898f571fc96cff02bc5d67e049b5551403774811ed2eb2324fb081fc86e331e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898f571fc96cff02bc5d67e049b5551403774811ed2eb2324fb081fc86e331e8->enter($__internal_898f571fc96cff02bc5d67e049b5551403774811ed2eb2324fb081fc86e331e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_898f571fc96cff02bc5d67e049b5551403774811ed2eb2324fb081fc86e331e8->leave($__internal_898f571fc96cff02bc5d67e049b5551403774811ed2eb2324fb081fc86e331e8_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 18,  113 => 17,  107 => 16,  97 => 14,  91 => 13,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 16,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Asignación de tareas{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/style.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
            {{ include('menu.html.twig') }}
        {% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('public/js/jquery-3.1.1.min.js') }}\"></script>
            <script src=\"{{ asset('public/js/bootstrap.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
";
    }
}
