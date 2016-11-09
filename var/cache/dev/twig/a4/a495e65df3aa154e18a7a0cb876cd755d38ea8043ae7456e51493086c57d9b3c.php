<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8d14148cb6d10cda5a3dba3428df53c6809c98313d875a6db385933826ca4c73 extends Twig_Template
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
        $__internal_5e3f7cecf4d046bfe25c8d0049bc71f8321ecfc31557483e464ca7447b126cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3f7cecf4d046bfe25c8d0049bc71f8321ecfc31557483e464ca7447b126cc0->enter($__internal_5e3f7cecf4d046bfe25c8d0049bc71f8321ecfc31557483e464ca7447b126cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5e3f7cecf4d046bfe25c8d0049bc71f8321ecfc31557483e464ca7447b126cc0->leave($__internal_5e3f7cecf4d046bfe25c8d0049bc71f8321ecfc31557483e464ca7447b126cc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
