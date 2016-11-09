<?php

/* ::base.html.twig */
class __TwigTemplate_71a27429443d7ac5ba6fc7f8f37dc1dc2cc72bf1b77c52ddf86df46e35eeddc9 extends Twig_Template
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
        $__internal_bf096002cf570ed0077a6e68144e5b655945e0f87ba9e2bf2b8e22d49e2110ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf096002cf570ed0077a6e68144e5b655945e0f87ba9e2bf2b8e22d49e2110ff->enter($__internal_bf096002cf570ed0077a6e68144e5b655945e0f87ba9e2bf2b8e22d49e2110ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_bf096002cf570ed0077a6e68144e5b655945e0f87ba9e2bf2b8e22d49e2110ff->leave($__internal_bf096002cf570ed0077a6e68144e5b655945e0f87ba9e2bf2b8e22d49e2110ff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f522122ce95e25bc85f498f10a3e7a072750fb1451014671477c11a4f326e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f522122ce95e25bc85f498f10a3e7a072750fb1451014671477c11a4f326e41->enter($__internal_2f522122ce95e25bc85f498f10a3e7a072750fb1451014671477c11a4f326e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2f522122ce95e25bc85f498f10a3e7a072750fb1451014671477c11a4f326e41->leave($__internal_2f522122ce95e25bc85f498f10a3e7a072750fb1451014671477c11a4f326e41_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94561ca9493b6a57355cfad37e4a19cfe361aeb4037227a8170156a2d187cce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94561ca9493b6a57355cfad37e4a19cfe361aeb4037227a8170156a2d187cce9->enter($__internal_94561ca9493b6a57355cfad37e4a19cfe361aeb4037227a8170156a2d187cce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_94561ca9493b6a57355cfad37e4a19cfe361aeb4037227a8170156a2d187cce9->leave($__internal_94561ca9493b6a57355cfad37e4a19cfe361aeb4037227a8170156a2d187cce9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_86c8edf85e62a08084995d3fab2ff946924f030846e32a0fd1dffa9083aaf7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c8edf85e62a08084995d3fab2ff946924f030846e32a0fd1dffa9083aaf7dd->enter($__internal_86c8edf85e62a08084995d3fab2ff946924f030846e32a0fd1dffa9083aaf7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_86c8edf85e62a08084995d3fab2ff946924f030846e32a0fd1dffa9083aaf7dd->leave($__internal_86c8edf85e62a08084995d3fab2ff946924f030846e32a0fd1dffa9083aaf7dd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_598db870dbf7c436329e9cf93788446dd7dee1dd315f0c293e48cb3d5b2dffdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598db870dbf7c436329e9cf93788446dd7dee1dd315f0c293e48cb3d5b2dffdf->enter($__internal_598db870dbf7c436329e9cf93788446dd7dee1dd315f0c293e48cb3d5b2dffdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_598db870dbf7c436329e9cf93788446dd7dee1dd315f0c293e48cb3d5b2dffdf->leave($__internal_598db870dbf7c436329e9cf93788446dd7dee1dd315f0c293e48cb3d5b2dffdf_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
