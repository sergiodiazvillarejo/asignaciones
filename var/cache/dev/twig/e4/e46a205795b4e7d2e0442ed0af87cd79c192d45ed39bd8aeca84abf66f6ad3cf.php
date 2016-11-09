<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_9bf646411f1076d012088bfb0c916c672d37491a102c538bef44b6bb36a862e4 extends Twig_Template
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
        $__internal_82aac90a6f3b40ff81bb9595349abd175461b3d1e001f8fe7c20205b2cc2e7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82aac90a6f3b40ff81bb9595349abd175461b3d1e001f8fe7c20205b2cc2e7eb->enter($__internal_82aac90a6f3b40ff81bb9595349abd175461b3d1e001f8fe7c20205b2cc2e7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_82aac90a6f3b40ff81bb9595349abd175461b3d1e001f8fe7c20205b2cc2e7eb->leave($__internal_82aac90a6f3b40ff81bb9595349abd175461b3d1e001f8fe7c20205b2cc2e7eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
