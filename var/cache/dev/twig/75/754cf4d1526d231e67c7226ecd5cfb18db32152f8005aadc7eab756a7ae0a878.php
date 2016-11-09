<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_dae361457af77e4db8b0833e797b310b1805807c0066838b44b93fee1d03851b extends Twig_Template
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
        $__internal_fb612e7ab455e05b34ab354c3bd4c849ae0c44e302b0d7b392106d140b737e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb612e7ab455e05b34ab354c3bd4c849ae0c44e302b0d7b392106d140b737e5e->enter($__internal_fb612e7ab455e05b34ab354c3bd4c849ae0c44e302b0d7b392106d140b737e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_fb612e7ab455e05b34ab354c3bd4c849ae0c44e302b0d7b392106d140b737e5e->leave($__internal_fb612e7ab455e05b34ab354c3bd4c849ae0c44e302b0d7b392106d140b737e5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
