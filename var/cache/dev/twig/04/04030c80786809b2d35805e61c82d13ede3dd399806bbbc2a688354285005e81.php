<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0984cb75f081721f83943dffad100dcd39cd13d7ef571e11168be49e510439cb extends Twig_Template
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
        $__internal_74d1faa09ff9d08310547dac273b04146ec38f0d7e95668c1b36564588572402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d1faa09ff9d08310547dac273b04146ec38f0d7e95668c1b36564588572402->enter($__internal_74d1faa09ff9d08310547dac273b04146ec38f0d7e95668c1b36564588572402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_74d1faa09ff9d08310547dac273b04146ec38f0d7e95668c1b36564588572402->leave($__internal_74d1faa09ff9d08310547dac273b04146ec38f0d7e95668c1b36564588572402_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
