<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a6e23efdd7784159df3a597179997042df16dec37ce5e9f89ec9f63e12cdd191 extends Twig_Template
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
        $__internal_9bf530ea67a7fe12ce9e1221760fd7a86756cc3e29f860d1ec97a8f0f8abe038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf530ea67a7fe12ce9e1221760fd7a86756cc3e29f860d1ec97a8f0f8abe038->enter($__internal_9bf530ea67a7fe12ce9e1221760fd7a86756cc3e29f860d1ec97a8f0f8abe038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9bf530ea67a7fe12ce9e1221760fd7a86756cc3e29f860d1ec97a8f0f8abe038->leave($__internal_9bf530ea67a7fe12ce9e1221760fd7a86756cc3e29f860d1ec97a8f0f8abe038_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
