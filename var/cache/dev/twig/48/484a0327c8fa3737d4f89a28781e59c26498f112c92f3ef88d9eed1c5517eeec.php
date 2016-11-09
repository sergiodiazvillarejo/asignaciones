<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b42d20ba5c0818b4d0d80f3512c947bdea2a176e80936657672eeed4f985c9c2 extends Twig_Template
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
        $__internal_2d43558ff925c4d444b2743a71f4444ae2a06498b883f73457504b740c412931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d43558ff925c4d444b2743a71f4444ae2a06498b883f73457504b740c412931->enter($__internal_2d43558ff925c4d444b2743a71f4444ae2a06498b883f73457504b740c412931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2d43558ff925c4d444b2743a71f4444ae2a06498b883f73457504b740c412931->leave($__internal_2d43558ff925c4d444b2743a71f4444ae2a06498b883f73457504b740c412931_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
