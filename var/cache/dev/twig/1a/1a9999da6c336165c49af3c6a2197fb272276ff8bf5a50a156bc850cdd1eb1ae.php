<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_416c7a8ea9947bc4f34a18a8a04675ee554f004f1554097a0bf6a2e226b2bc8c extends Twig_Template
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
        $__internal_8ae3c6c9d4fe490377b5fef8e5076ab0c46e77b90845251b33d00729b150ef75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae3c6c9d4fe490377b5fef8e5076ab0c46e77b90845251b33d00729b150ef75->enter($__internal_8ae3c6c9d4fe490377b5fef8e5076ab0c46e77b90845251b33d00729b150ef75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8ae3c6c9d4fe490377b5fef8e5076ab0c46e77b90845251b33d00729b150ef75->leave($__internal_8ae3c6c9d4fe490377b5fef8e5076ab0c46e77b90845251b33d00729b150ef75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
