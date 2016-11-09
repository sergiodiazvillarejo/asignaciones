<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9d3bcdf59c7aa7259bce86d86b0094ed7fd65a1834aeb472df245a71e54d14bc extends Twig_Template
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
        $__internal_a229e47f7fa8f28b256cd2a106b898aefc6bb19de4282fd57e3fa7b8baf229be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a229e47f7fa8f28b256cd2a106b898aefc6bb19de4282fd57e3fa7b8baf229be->enter($__internal_a229e47f7fa8f28b256cd2a106b898aefc6bb19de4282fd57e3fa7b8baf229be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a229e47f7fa8f28b256cd2a106b898aefc6bb19de4282fd57e3fa7b8baf229be->leave($__internal_a229e47f7fa8f28b256cd2a106b898aefc6bb19de4282fd57e3fa7b8baf229be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
