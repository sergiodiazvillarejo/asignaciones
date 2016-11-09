<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4d9ce6778f2e902d26a6f7d45ffcabae956cad5e38812103b8081e1a5a5915cf extends Twig_Template
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
        $__internal_d982c07d8a96b98ba34fe5dba55d6fd16320e9e1999626fb36b96b31bcddbcfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d982c07d8a96b98ba34fe5dba55d6fd16320e9e1999626fb36b96b31bcddbcfd->enter($__internal_d982c07d8a96b98ba34fe5dba55d6fd16320e9e1999626fb36b96b31bcddbcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d982c07d8a96b98ba34fe5dba55d6fd16320e9e1999626fb36b96b31bcddbcfd->leave($__internal_d982c07d8a96b98ba34fe5dba55d6fd16320e9e1999626fb36b96b31bcddbcfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
