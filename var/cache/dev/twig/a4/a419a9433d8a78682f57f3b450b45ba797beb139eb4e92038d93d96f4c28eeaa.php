<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bd6a81bf185ce5eab15082a07ed9342f0b42ba3e15ead24b342a49e37fe37b11 extends Twig_Template
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
        $__internal_a7af2c5786267f7389b047f865e93680518ee25e23fa6d5f8604b8b4e4c71f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7af2c5786267f7389b047f865e93680518ee25e23fa6d5f8604b8b4e4c71f2b->enter($__internal_a7af2c5786267f7389b047f865e93680518ee25e23fa6d5f8604b8b4e4c71f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a7af2c5786267f7389b047f865e93680518ee25e23fa6d5f8604b8b4e4c71f2b->leave($__internal_a7af2c5786267f7389b047f865e93680518ee25e23fa6d5f8604b8b4e4c71f2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
