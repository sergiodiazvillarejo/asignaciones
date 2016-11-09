<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_a3127167015ad3a36b6d9c4b0499b9170b56a9fb5369aee8c07ecf1497ea7f73 extends Twig_Template
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
        $__internal_ec382a3d3157eaacd49f4fc9c7053fd652dd159c75d5235ba0d16392492a4c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec382a3d3157eaacd49f4fc9c7053fd652dd159c75d5235ba0d16392492a4c29->enter($__internal_ec382a3d3157eaacd49f4fc9c7053fd652dd159c75d5235ba0d16392492a4c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ec382a3d3157eaacd49f4fc9c7053fd652dd159c75d5235ba0d16392492a4c29->leave($__internal_ec382a3d3157eaacd49f4fc9c7053fd652dd159c75d5235ba0d16392492a4c29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
