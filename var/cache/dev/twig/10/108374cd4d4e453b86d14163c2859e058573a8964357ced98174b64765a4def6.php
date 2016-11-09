<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0baac9d382d0b4d4c4b708f89db7c49a69fda25590cda00ff4a3a1988b78564f extends Twig_Template
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
        $__internal_982671db48771f807dbc682a35d8a4b3df34b9ee8c13b5b2fed572209bfb9133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982671db48771f807dbc682a35d8a4b3df34b9ee8c13b5b2fed572209bfb9133->enter($__internal_982671db48771f807dbc682a35d8a4b3df34b9ee8c13b5b2fed572209bfb9133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_982671db48771f807dbc682a35d8a4b3df34b9ee8c13b5b2fed572209bfb9133->leave($__internal_982671db48771f807dbc682a35d8a4b3df34b9ee8c13b5b2fed572209bfb9133_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
