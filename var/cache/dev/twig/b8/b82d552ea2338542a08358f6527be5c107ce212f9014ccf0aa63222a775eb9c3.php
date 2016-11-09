<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f1f6c7bc17ffed9c401391d4cdeb08ebb3fc9c21ae37914163af939318ba0257 extends Twig_Template
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
        $__internal_5f9c7188a9377846434ab6128c81764a145e739f3068fdd0da3e6eff9f0cd2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9c7188a9377846434ab6128c81764a145e739f3068fdd0da3e6eff9f0cd2b0->enter($__internal_5f9c7188a9377846434ab6128c81764a145e739f3068fdd0da3e6eff9f0cd2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5f9c7188a9377846434ab6128c81764a145e739f3068fdd0da3e6eff9f0cd2b0->leave($__internal_5f9c7188a9377846434ab6128c81764a145e739f3068fdd0da3e6eff9f0cd2b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
