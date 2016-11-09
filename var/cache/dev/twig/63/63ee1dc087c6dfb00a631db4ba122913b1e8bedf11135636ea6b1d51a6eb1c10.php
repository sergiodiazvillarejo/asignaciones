<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_48ecd191c4069c11a2eaf66fbe0115754ce4340f2155daea86716c2785878a0a extends Twig_Template
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
        $__internal_8f22ba1b95980029d34fad45a8a3832efc60e6c926f4a630485cba4c52ca3ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f22ba1b95980029d34fad45a8a3832efc60e6c926f4a630485cba4c52ca3ac7->enter($__internal_8f22ba1b95980029d34fad45a8a3832efc60e6c926f4a630485cba4c52ca3ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8f22ba1b95980029d34fad45a8a3832efc60e6c926f4a630485cba4c52ca3ac7->leave($__internal_8f22ba1b95980029d34fad45a8a3832efc60e6c926f4a630485cba4c52ca3ac7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
