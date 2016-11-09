<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5f3492194820b38f31c4076204fd777b5e40d9e7bcf33ce5b5666f1bf2dc7381 extends Twig_Template
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
        $__internal_2f2ef784bccd9e22be954b791fb5051ac03ed1100427e1f5e6dd276ef64dfb38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2ef784bccd9e22be954b791fb5051ac03ed1100427e1f5e6dd276ef64dfb38->enter($__internal_2f2ef784bccd9e22be954b791fb5051ac03ed1100427e1f5e6dd276ef64dfb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2f2ef784bccd9e22be954b791fb5051ac03ed1100427e1f5e6dd276ef64dfb38->leave($__internal_2f2ef784bccd9e22be954b791fb5051ac03ed1100427e1f5e6dd276ef64dfb38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
