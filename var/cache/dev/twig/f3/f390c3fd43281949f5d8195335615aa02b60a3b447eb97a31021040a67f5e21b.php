<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_eb09b01402ae24b8551148b7204beea82cd556e9aee3faddaeec0d4ea8fdc518 extends Twig_Template
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
        $__internal_bbcbfbb6e474082f70aadd52ec3ba1bc49fc89816e5c09edcec9e7841dfdb5fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbcbfbb6e474082f70aadd52ec3ba1bc49fc89816e5c09edcec9e7841dfdb5fc->enter($__internal_bbcbfbb6e474082f70aadd52ec3ba1bc49fc89816e5c09edcec9e7841dfdb5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_bbcbfbb6e474082f70aadd52ec3ba1bc49fc89816e5c09edcec9e7841dfdb5fc->leave($__internal_bbcbfbb6e474082f70aadd52ec3ba1bc49fc89816e5c09edcec9e7841dfdb5fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
