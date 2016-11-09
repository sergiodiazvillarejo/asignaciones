<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2cedde8d6ac035cf37f0e573d1b1b3e87d7ce8027ccb6469e5a9f3338527e8a3 extends Twig_Template
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
        $__internal_cfd5a397a524258278c7ca4200c80c039433fae160cd7ee00e7d4917027ae041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd5a397a524258278c7ca4200c80c039433fae160cd7ee00e7d4917027ae041->enter($__internal_cfd5a397a524258278c7ca4200c80c039433fae160cd7ee00e7d4917027ae041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cfd5a397a524258278c7ca4200c80c039433fae160cd7ee00e7d4917027ae041->leave($__internal_cfd5a397a524258278c7ca4200c80c039433fae160cd7ee00e7d4917027ae041_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
