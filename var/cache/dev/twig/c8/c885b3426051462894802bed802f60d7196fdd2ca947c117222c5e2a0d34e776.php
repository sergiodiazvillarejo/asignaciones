<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_077eff06a18fff531ce05bf63c4bd19e5a42ecb01de3ffc0cfa7f9c4d71cf907 extends Twig_Template
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
        $__internal_bce1104fc09cf67536aed4c77df10955d3163aa8a0b84760f85326d21f323ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce1104fc09cf67536aed4c77df10955d3163aa8a0b84760f85326d21f323ad0->enter($__internal_bce1104fc09cf67536aed4c77df10955d3163aa8a0b84760f85326d21f323ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_bce1104fc09cf67536aed4c77df10955d3163aa8a0b84760f85326d21f323ad0->leave($__internal_bce1104fc09cf67536aed4c77df10955d3163aa8a0b84760f85326d21f323ad0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
