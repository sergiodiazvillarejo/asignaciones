<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7873d255e39e3da8343ee59c0020235a1b23260a517510a3c1cbc122e1c739e0 extends Twig_Template
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
        $__internal_97fac8a96b7f8c20f6d7e3821c9efea95058a376f3600d145f5117e3328a2a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fac8a96b7f8c20f6d7e3821c9efea95058a376f3600d145f5117e3328a2a64->enter($__internal_97fac8a96b7f8c20f6d7e3821c9efea95058a376f3600d145f5117e3328a2a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_97fac8a96b7f8c20f6d7e3821c9efea95058a376f3600d145f5117e3328a2a64->leave($__internal_97fac8a96b7f8c20f6d7e3821c9efea95058a376f3600d145f5117e3328a2a64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
