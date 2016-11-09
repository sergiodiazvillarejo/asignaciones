<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_446ab353e582a4d575ec46c380c0fcd262e80db8c083932c59363fb35bb997e8 extends Twig_Template
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
        $__internal_49d891e0b854ef6edb14a3d508e677d09fb62d09c4ae332f6ed2aed4164c69b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d891e0b854ef6edb14a3d508e677d09fb62d09c4ae332f6ed2aed4164c69b2->enter($__internal_49d891e0b854ef6edb14a3d508e677d09fb62d09c4ae332f6ed2aed4164c69b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_49d891e0b854ef6edb14a3d508e677d09fb62d09c4ae332f6ed2aed4164c69b2->leave($__internal_49d891e0b854ef6edb14a3d508e677d09fb62d09c4ae332f6ed2aed4164c69b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
