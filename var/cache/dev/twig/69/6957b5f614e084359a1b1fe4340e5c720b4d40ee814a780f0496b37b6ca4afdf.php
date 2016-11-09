<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_121a8b99b4e6f8d3100aa1c9018f68a39ed8c03a8d7c8ef495a5ffedbe304db5 extends Twig_Template
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
        $__internal_2a8663ba46558c8a28010647ec5c85a56a25373ac761224be2828a5e6e3e8365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8663ba46558c8a28010647ec5c85a56a25373ac761224be2828a5e6e3e8365->enter($__internal_2a8663ba46558c8a28010647ec5c85a56a25373ac761224be2828a5e6e3e8365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2a8663ba46558c8a28010647ec5c85a56a25373ac761224be2828a5e6e3e8365->leave($__internal_2a8663ba46558c8a28010647ec5c85a56a25373ac761224be2828a5e6e3e8365_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
