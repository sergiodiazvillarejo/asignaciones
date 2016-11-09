<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e79c110d732584446f6ffaa174b07cc8bbd90c0456ea820de45f9eed3d6552ea extends Twig_Template
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
        $__internal_077d1a7c98cd82ced1c6b36488275ae42e4bf52b2fbbe5e52931bbcc83519aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077d1a7c98cd82ced1c6b36488275ae42e4bf52b2fbbe5e52931bbcc83519aca->enter($__internal_077d1a7c98cd82ced1c6b36488275ae42e4bf52b2fbbe5e52931bbcc83519aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_077d1a7c98cd82ced1c6b36488275ae42e4bf52b2fbbe5e52931bbcc83519aca->leave($__internal_077d1a7c98cd82ced1c6b36488275ae42e4bf52b2fbbe5e52931bbcc83519aca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
