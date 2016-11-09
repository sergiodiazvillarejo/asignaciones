<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ad3f02bb53d2797c6666e99f07642c88d0965748fe5ff161eb71198e2a9356f2 extends Twig_Template
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
        $__internal_d6b18fa332b7bafb5b59fb699a0756dff971abdb1f06c3d7003970311fa19794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b18fa332b7bafb5b59fb699a0756dff971abdb1f06c3d7003970311fa19794->enter($__internal_d6b18fa332b7bafb5b59fb699a0756dff971abdb1f06c3d7003970311fa19794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d6b18fa332b7bafb5b59fb699a0756dff971abdb1f06c3d7003970311fa19794->leave($__internal_d6b18fa332b7bafb5b59fb699a0756dff971abdb1f06c3d7003970311fa19794_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
