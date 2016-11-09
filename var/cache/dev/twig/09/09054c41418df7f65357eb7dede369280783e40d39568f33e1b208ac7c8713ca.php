<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_d04bb8f03541ecac985fb6e4951ae586f775440e8d3bd0e8780f2c2609c661a3 extends Twig_Template
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
        $__internal_e3444f46b6e6fe9a096458972c97db94b219279af337869423ed5afdbb7967fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3444f46b6e6fe9a096458972c97db94b219279af337869423ed5afdbb7967fa->enter($__internal_e3444f46b6e6fe9a096458972c97db94b219279af337869423ed5afdbb7967fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e3444f46b6e6fe9a096458972c97db94b219279af337869423ed5afdbb7967fa->leave($__internal_e3444f46b6e6fe9a096458972c97db94b219279af337869423ed5afdbb7967fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
