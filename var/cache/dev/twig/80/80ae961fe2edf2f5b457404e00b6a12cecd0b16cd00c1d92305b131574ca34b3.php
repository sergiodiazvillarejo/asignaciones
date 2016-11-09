<?php

/* layout.html.twig */
class __TwigTemplate_764a824dd5b359e57b4e5ddc184488e57cae8df3bc91d258aa974d2be80f6989 extends Twig_Template
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
        $__internal_1576fcc9e13b85438c3279801868d7e2d264d22b12587adb32d8308f00d946f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1576fcc9e13b85438c3279801868d7e2d264d22b12587adb32d8308f00d946f5->enter($__internal_1576fcc9e13b85438c3279801868d7e2d264d22b12587adb32d8308f00d946f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_1576fcc9e13b85438c3279801868d7e2d264d22b12587adb32d8308f00d946f5->leave($__internal_1576fcc9e13b85438c3279801868d7e2d264d22b12587adb32d8308f00d946f5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2251ae79e675ecf75dbae261a3b9490045a96a32838067f7363c86813de467e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2251ae79e675ecf75dbae261a3b9490045a96a32838067f7363c86813de467e0->enter($__internal_2251ae79e675ecf75dbae261a3b9490045a96a32838067f7363c86813de467e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignación de tareas";
        
        $__internal_2251ae79e675ecf75dbae261a3b9490045a96a32838067f7363c86813de467e0->leave($__internal_2251ae79e675ecf75dbae261a3b9490045a96a32838067f7363c86813de467e0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07b23ffd0d6c6d11f06fca2181ab2504850793c4225a57c9c6edcf60efb78966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b23ffd0d6c6d11f06fca2181ab2504850793c4225a57c9c6edcf60efb78966->enter($__internal_07b23ffd0d6c6d11f06fca2181ab2504850793c4225a57c9c6edcf60efb78966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_07b23ffd0d6c6d11f06fca2181ab2504850793c4225a57c9c6edcf60efb78966->leave($__internal_07b23ffd0d6c6d11f06fca2181ab2504850793c4225a57c9c6edcf60efb78966_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c4eb3beb1a7af27f92a1827d0687871ddd5d764cfd6f6643a22fd75b4da5404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4eb3beb1a7af27f92a1827d0687871ddd5d764cfd6f6643a22fd75b4da5404->enter($__internal_0c4eb3beb1a7af27f92a1827d0687871ddd5d764cfd6f6643a22fd75b4da5404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_0c4eb3beb1a7af27f92a1827d0687871ddd5d764cfd6f6643a22fd75b4da5404->leave($__internal_0c4eb3beb1a7af27f92a1827d0687871ddd5d764cfd6f6643a22fd75b4da5404_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2907dcbb97bdf0840a82a9b6bf3c5333bec37c4551fbbfa0443ea4942d9728aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2907dcbb97bdf0840a82a9b6bf3c5333bec37c4551fbbfa0443ea4942d9728aa->enter($__internal_2907dcbb97bdf0840a82a9b6bf3c5333bec37c4551fbbfa0443ea4942d9728aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_2907dcbb97bdf0840a82a9b6bf3c5333bec37c4551fbbfa0443ea4942d9728aa->leave($__internal_2907dcbb97bdf0840a82a9b6bf3c5333bec37c4551fbbfa0443ea4942d9728aa_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
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
