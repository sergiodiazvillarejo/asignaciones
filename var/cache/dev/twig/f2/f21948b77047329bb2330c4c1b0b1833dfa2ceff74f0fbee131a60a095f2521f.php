<?php

/* @User/User/add.html.twig */
class __TwigTemplate_6bb7ef3961b3dce3c0e6dcdcada1cf013415a324c29fe0f3a99f8c022a060bb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@User/User/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ef2290ec63c02eb950232b38aeecc6f9f3ebbed41920b932da81e95ad4c5dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef2290ec63c02eb950232b38aeecc6f9f3ebbed41920b932da81e95ad4c5dd6->enter($__internal_4ef2290ec63c02eb950232b38aeecc6f9f3ebbed41920b932da81e95ad4c5dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/User/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ef2290ec63c02eb950232b38aeecc6f9f3ebbed41920b932da81e95ad4c5dd6->leave($__internal_4ef2290ec63c02eb950232b38aeecc6f9f3ebbed41920b932da81e95ad4c5dd6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3baec5eb019b323db7928446cb00c4aae99e1362b75ec4ee8df6155ad98e1eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3baec5eb019b323db7928446cb00c4aae99e1362b75ec4ee8df6155ad98e1eaf->enter($__internal_3baec5eb019b323db7928446cb00c4aae99e1362b75ec4ee8df6155ad98e1eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div>
                    <h2>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("New User", array(), "messages");
        echo "</h2>
                </div>
                ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "

                <div class=\"form-group\">

                    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your username")));
        echo "
                    <span class=\"text-danger\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>
                </div>

                    <div class=\"form-group\">
                        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "
                        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your first name")));
        echo "
                        <span class=\"text-danger\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'label');
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your last name")));
        echo "
                        <span class=\"text-danger\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "</span>
                     </div>

                    <div class=\"form-group\">
                        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your email")));
        echo "
                        <span class=\"text-danger\">";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your password")));
        echo "
                        <span class=\"text-danger\">";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'label');
        echo "
                        ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your role")));
        echo "
                        <span class=\"text-danger\">";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"checkbox\">
                        <label>
                            ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'widget');
        echo "Active
                            <span class=\"text-danger\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'errors');
        echo "</span>
                        </label>
                    </div>
                    <p>
                        ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Create user", "attr" => array("class" => "btn btn-success")));
        echo "
                    </p>
                ";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_3baec5eb019b323db7928446cb00c4aae99e1362b75ec4ee8df6155ad98e1eaf->leave($__internal_3baec5eb019b323db7928446cb00c4aae99e1362b75ec4ee8df6155ad98e1eaf_prof);

    }

    public function getTemplateName()
    {
        return "@User/User/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 59,  163 => 57,  156 => 53,  152 => 52,  144 => 47,  140 => 46,  136 => 45,  129 => 41,  125 => 40,  121 => 39,  114 => 35,  110 => 34,  106 => 33,  99 => 29,  95 => 28,  91 => 27,  84 => 23,  80 => 22,  76 => 21,  69 => 17,  65 => 16,  61 => 15,  54 => 11,  49 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'layout.html.twig' %}

{% block body %}
    {{ parent() }}
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div>
                    <h2>{% trans %}New User{% endtrans %}</h2>
                </div>
                {{ form_start(form, {'attr': {'novalidate': 'novalidate','role' : 'form'}}) }}

                <div class=\"form-group\">

                    {{ form_label(form.username) }}
                    {{ form_widget(form.username, {'attr': {'class': 'form-control', 'placeholder': 'Your username'}}) }}
                    <span class=\"text-danger\">{{ form_errors(form.username) }}</span>
                </div>

                    <div class=\"form-group\">
                        {{ form_label(form.firstName) }}
                        {{ form_widget(form.firstName, {'attr': {'class': 'form-control', 'placeholder': 'Your first name'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.firstName) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.lastName) }}
                        {{ form_widget(form.lastName, {'attr': {'class': 'form-control', 'placeholder': 'Your last name'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.lastName) }}</span>
                     </div>

                    <div class=\"form-group\">
                        {{ form_label(form.email) }}
                        {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'Your email'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.email) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.password) }}
                        {{ form_widget(form.password, {'attr': {'class': 'form-control', 'placeholder': 'Your password'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.password) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.role) }}
                        {{ form_widget(form.role, {'attr': {'class': 'form-control', 'placeholder': 'Your role'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.role) }}</span>
                    </div>

                    <div class=\"checkbox\">
                        <label>
                            {{ form_widget(form.isActive) }}Active
                            <span class=\"text-danger\">{{ form_errors(form.isActive) }}</span>
                        </label>
                    </div>
                    <p>
                        {{ form_widget(form.save, {'label' : 'Create user', 'attr': {'class': 'btn btn-success'}}) }}
                    </p>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}";
    }
}
