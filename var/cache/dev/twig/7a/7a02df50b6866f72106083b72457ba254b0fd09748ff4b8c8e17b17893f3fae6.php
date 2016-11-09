<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e55b8ba02b1a11da8bfd6aa1fbbb11546272b3cf03e11ac76fd1e647cb0faf9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a38e75390dd1ab72895655c81617026371f632a7a8c72cf052633a576e5f6a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38e75390dd1ab72895655c81617026371f632a7a8c72cf052633a576e5f6a27->enter($__internal_a38e75390dd1ab72895655c81617026371f632a7a8c72cf052633a576e5f6a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a38e75390dd1ab72895655c81617026371f632a7a8c72cf052633a576e5f6a27->leave($__internal_a38e75390dd1ab72895655c81617026371f632a7a8c72cf052633a576e5f6a27_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1109ae9ea5f8473dade291c21cde0976f5491523f3be103deb6f35ef43bac72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1109ae9ea5f8473dade291c21cde0976f5491523f3be103deb6f35ef43bac72a->enter($__internal_1109ae9ea5f8473dade291c21cde0976f5491523f3be103deb6f35ef43bac72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1109ae9ea5f8473dade291c21cde0976f5491523f3be103deb6f35ef43bac72a->leave($__internal_1109ae9ea5f8473dade291c21cde0976f5491523f3be103deb6f35ef43bac72a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
