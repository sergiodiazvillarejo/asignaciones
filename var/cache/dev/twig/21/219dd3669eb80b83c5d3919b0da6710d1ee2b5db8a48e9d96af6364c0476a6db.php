<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6a1822e4f571a739313315c09a15e90a110fa9aad731c6be27f2a1fb1cff72fa extends Twig_Template
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
        $__internal_cf0f03d060e6df3aae71aa86fcf4f3e5a83fa0a543524b87f48b05a4e712619c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0f03d060e6df3aae71aa86fcf4f3e5a83fa0a543524b87f48b05a4e712619c->enter($__internal_cf0f03d060e6df3aae71aa86fcf4f3e5a83fa0a543524b87f48b05a4e712619c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_cf0f03d060e6df3aae71aa86fcf4f3e5a83fa0a543524b87f48b05a4e712619c->leave($__internal_cf0f03d060e6df3aae71aa86fcf4f3e5a83fa0a543524b87f48b05a4e712619c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
