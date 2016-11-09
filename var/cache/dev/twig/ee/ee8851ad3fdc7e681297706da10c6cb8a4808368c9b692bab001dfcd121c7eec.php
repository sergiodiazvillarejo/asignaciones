<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_51647c0d13c9f2dafd0621842d458d56d5a9ef5990051ed0f24d1d27b1a6af30 extends Twig_Template
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
        $__internal_e79e2d0e180334049904a56047891ca77117d5986d7a6bda959b68c7801a4750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e79e2d0e180334049904a56047891ca77117d5986d7a6bda959b68c7801a4750->enter($__internal_e79e2d0e180334049904a56047891ca77117d5986d7a6bda959b68c7801a4750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e79e2d0e180334049904a56047891ca77117d5986d7a6bda959b68c7801a4750->leave($__internal_e79e2d0e180334049904a56047891ca77117d5986d7a6bda959b68c7801a4750_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
