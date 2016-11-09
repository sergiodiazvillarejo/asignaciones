<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ae03d08400de0f181d17e3cf6a339a9adcc927e1b0f35af62b68fc66d638f38c extends Twig_Template
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
        $__internal_9f82091c5b328b6c2e56099cf178f281198cd1c2aec414488fe5390cb2a51f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f82091c5b328b6c2e56099cf178f281198cd1c2aec414488fe5390cb2a51f13->enter($__internal_9f82091c5b328b6c2e56099cf178f281198cd1c2aec414488fe5390cb2a51f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9f82091c5b328b6c2e56099cf178f281198cd1c2aec414488fe5390cb2a51f13->leave($__internal_9f82091c5b328b6c2e56099cf178f281198cd1c2aec414488fe5390cb2a51f13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
