<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_6df51df678c7e9e50c2bf69e0618f007ed9d54ecd077a6f4de466b5a73a97623 extends Twig_Template
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
        $__internal_73cea35a1d54731e3183cf16334e7eea52160f6f6366a1ad41237095f2b09f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73cea35a1d54731e3183cf16334e7eea52160f6f6366a1ad41237095f2b09f5d->enter($__internal_73cea35a1d54731e3183cf16334e7eea52160f6f6366a1ad41237095f2b09f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_73cea35a1d54731e3183cf16334e7eea52160f6f6366a1ad41237095f2b09f5d->leave($__internal_73cea35a1d54731e3183cf16334e7eea52160f6f6366a1ad41237095f2b09f5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
