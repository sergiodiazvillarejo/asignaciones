<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_b3d5be91ab7bd9cf2baaf53a5a43d145e60437afa00d1068e67e427ca2a5fc93 extends Twig_Template
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
        $__internal_9dc0c42f7d8576376d0a5ab22f4d860f35ec37ca7238996d74d681681206f6de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc0c42f7d8576376d0a5ab22f4d860f35ec37ca7238996d74d681681206f6de->enter($__internal_9dc0c42f7d8576376d0a5ab22f4d860f35ec37ca7238996d74d681681206f6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9dc0c42f7d8576376d0a5ab22f4d860f35ec37ca7238996d74d681681206f6de->leave($__internal_9dc0c42f7d8576376d0a5ab22f4d860f35ec37ca7238996d74d681681206f6de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
