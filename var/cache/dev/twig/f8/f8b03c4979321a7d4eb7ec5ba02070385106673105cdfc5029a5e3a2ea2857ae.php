<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_20373dbe01adad8a83f0b7107e5b20b976e56b6a03caca2c29651e2b3fbfa5ea extends Twig_Template
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
        $__internal_89970081613c799dde7459a4fc5efe09ebd6ae8475e83060c1b2d73a851c1620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89970081613c799dde7459a4fc5efe09ebd6ae8475e83060c1b2d73a851c1620->enter($__internal_89970081613c799dde7459a4fc5efe09ebd6ae8475e83060c1b2d73a851c1620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_89970081613c799dde7459a4fc5efe09ebd6ae8475e83060c1b2d73a851c1620->leave($__internal_89970081613c799dde7459a4fc5efe09ebd6ae8475e83060c1b2d73a851c1620_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
