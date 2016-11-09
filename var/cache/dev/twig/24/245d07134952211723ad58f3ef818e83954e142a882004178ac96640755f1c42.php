<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8964796e2949ee1508e7d9389da2e22e460e275f36abfd2473ddd9c92ff750a2 extends Twig_Template
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
        $__internal_adcb823bb930573ea1e358e9ca7ca0b4c9617f8b5af8f5f97bd037ef2eaf13cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adcb823bb930573ea1e358e9ca7ca0b4c9617f8b5af8f5f97bd037ef2eaf13cb->enter($__internal_adcb823bb930573ea1e358e9ca7ca0b4c9617f8b5af8f5f97bd037ef2eaf13cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_adcb823bb930573ea1e358e9ca7ca0b4c9617f8b5af8f5f97bd037ef2eaf13cb->leave($__internal_adcb823bb930573ea1e358e9ca7ca0b4c9617f8b5af8f5f97bd037ef2eaf13cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
