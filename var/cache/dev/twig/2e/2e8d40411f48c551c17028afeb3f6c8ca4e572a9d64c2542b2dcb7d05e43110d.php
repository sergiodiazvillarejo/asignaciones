<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_789f180c8af26ed6994b909e04d3705557c7a3668a7a159c358e7e7a60388100 extends Twig_Template
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
        $__internal_e146083039490803d51b327a8ee2f63c86131bfd5afe5b17b4f66cd2721a261f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e146083039490803d51b327a8ee2f63c86131bfd5afe5b17b4f66cd2721a261f->enter($__internal_e146083039490803d51b327a8ee2f63c86131bfd5afe5b17b4f66cd2721a261f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e146083039490803d51b327a8ee2f63c86131bfd5afe5b17b4f66cd2721a261f->leave($__internal_e146083039490803d51b327a8ee2f63c86131bfd5afe5b17b4f66cd2721a261f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
