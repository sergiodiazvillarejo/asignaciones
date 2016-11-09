<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_693ff35135c7b5c8373cff0de7c5d42469b33057774fd6d04c3bd7ec63271a77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3d10ad2916a1825862a7b270a2491dc37b1cce540b274b59d2c11c7557a20f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d10ad2916a1825862a7b270a2491dc37b1cce540b274b59d2c11c7557a20f6->enter($__internal_c3d10ad2916a1825862a7b270a2491dc37b1cce540b274b59d2c11c7557a20f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c3d10ad2916a1825862a7b270a2491dc37b1cce540b274b59d2c11c7557a20f6->leave($__internal_c3d10ad2916a1825862a7b270a2491dc37b1cce540b274b59d2c11c7557a20f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
