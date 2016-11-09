<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_756e0c0f816f41131b8bf795184f42a73d3daf071af4cec9c591b945610046b9 extends Twig_Template
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
        $__internal_4f1db8dd14a9ce523bcd2f43aec2e7983632918d2354a713ee901dcd1a1d5698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1db8dd14a9ce523bcd2f43aec2e7983632918d2354a713ee901dcd1a1d5698->enter($__internal_4f1db8dd14a9ce523bcd2f43aec2e7983632918d2354a713ee901dcd1a1d5698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4f1db8dd14a9ce523bcd2f43aec2e7983632918d2354a713ee901dcd1a1d5698->leave($__internal_4f1db8dd14a9ce523bcd2f43aec2e7983632918d2354a713ee901dcd1a1d5698_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
