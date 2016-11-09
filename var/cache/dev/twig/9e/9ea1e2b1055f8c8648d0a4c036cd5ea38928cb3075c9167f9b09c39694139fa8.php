<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_142ebd94b81185ceb3618f6fe9100c25f2838b51a3cb2220971bc6d5c5f54374 extends Twig_Template
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
        $__internal_6a9b21c1cfb1adec96a518c43bbead5a3025f56678957b738e4e53645ffa60d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9b21c1cfb1adec96a518c43bbead5a3025f56678957b738e4e53645ffa60d3->enter($__internal_6a9b21c1cfb1adec96a518c43bbead5a3025f56678957b738e4e53645ffa60d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6a9b21c1cfb1adec96a518c43bbead5a3025f56678957b738e4e53645ffa60d3->leave($__internal_6a9b21c1cfb1adec96a518c43bbead5a3025f56678957b738e4e53645ffa60d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
