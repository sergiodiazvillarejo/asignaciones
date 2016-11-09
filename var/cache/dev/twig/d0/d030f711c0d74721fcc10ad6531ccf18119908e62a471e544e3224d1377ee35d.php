<?php

/* UserBundle:User:add.html.twig */
class __TwigTemplate_53fc5019d1200bea4659a50aee06def11393fca398bcb4ccdd0a4a60903a56ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "UserBundle:User:add.html.twig", 1);
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
        $__internal_e930ce812e12718364c37f6a8b6bd41ca0e409ce0e9d321dee10f9de83886c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e930ce812e12718364c37f6a8b6bd41ca0e409ce0e9d321dee10f9de83886c16->enter($__internal_e930ce812e12718364c37f6a8b6bd41ca0e409ce0e9d321dee10f9de83886c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e930ce812e12718364c37f6a8b6bd41ca0e409ce0e9d321dee10f9de83886c16->leave($__internal_e930ce812e12718364c37f6a8b6bd41ca0e409ce0e9d321dee10f9de83886c16_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bb09cc9aadd76e2e2255ec13c545b72fed5ce01ce622567daa95b2da9b7d614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb09cc9aadd76e2e2255ec13c545b72fed5ce01ce622567daa95b2da9b7d614->enter($__internal_4bb09cc9aadd76e2e2255ec13c545b72fed5ce01ce622567daa95b2da9b7d614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div>
                    ";
        // line 10
        echo "                    <h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New User"), "html", null, true);
        echo "</h2>
                </div>
                ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "

                <div class=\"form-group\">

                    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Entidad.Usuario.Your Usename")));
        echo "
                    <span class=\"text-danger\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>
                </div>

                    <div class=\"form-group\">
                        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "
                        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Entidad.Usuario.Your first name")));
        echo "
                        <span class=\"text-danger\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'label');
        echo "
                        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Entidad.Usuario.Your last name")));
        echo "
                        <span class=\"text-danger\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "</span>
                     </div>

                    <div class=\"form-group\">
                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your email")));
        echo "
                        <span class=\"text-danger\">";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
                        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your password")));
        echo "
                        <span class=\"text-danger\">";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'label');
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Entidad.Usuario.Your role")));
        echo "
                        <span class=\"text-danger\">";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"checkbox\">
                        <label>
                            ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'widget');
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activo"), "html", null, true);
        echo "
                            <span class=\"text-danger\">";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'errors');
        echo "</span>
                        </label>
                    </div>
                    <p>
                        ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Entidad.Usuario.Create User", "attr" => array("class" => "btn btn-success")));
        echo "
                    </p>
                ";
        // line 60
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_4bb09cc9aadd76e2e2255ec13c545b72fed5ce01ce622567daa95b2da9b7d614->leave($__internal_4bb09cc9aadd76e2e2255ec13c545b72fed5ce01ce622567daa95b2da9b7d614_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 60,  165 => 58,  158 => 54,  153 => 53,  145 => 48,  141 => 47,  137 => 46,  130 => 42,  126 => 41,  122 => 40,  115 => 36,  111 => 35,  107 => 34,  100 => 30,  96 => 29,  92 => 28,  85 => 24,  81 => 23,  77 => 22,  70 => 18,  66 => 17,  62 => 16,  55 => 12,  49 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
                    {#<h2>{% trans %}New User{% endtrans %}</h2>#}
                    <h2>{{ 'New User'|trans }}</h2>
                </div>
                {{ form_start(form, {'attr': {'novalidate': 'novalidate','role' : 'form'}}) }}

                <div class=\"form-group\">

                    {{ form_label(form.username) }}
                    {{ form_widget(form.username, {'attr': {'class': 'form-control', 'placeholder': 'Entidad.Usuario.Your Usename'}}) }}
                    <span class=\"text-danger\">{{ form_errors(form.username) }}</span>
                </div>

                    <div class=\"form-group\">
                        {{ form_label(form.firstName) }}
                        {{ form_widget(form.firstName, {'attr': {'class': 'form-control', 'placeholder': 'Entidad.Usuario.Your first name'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.firstName) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.lastName) }}
                        {{ form_widget(form.lastName, {'attr': {'class': 'form-control', 'placeholder': 'Entidad.Usuario.Your last name'}}) }}
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
                        {{ form_widget(form.role, {'attr': {'class': 'form-control', 'placeholder': 'Entidad.Usuario.Your role'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.role) }}</span>
                    </div>

                    <div class=\"checkbox\">
                        <label>
                            {{ form_widget(form.isActive) }}{{ 'Activo'|trans }}
                            <span class=\"text-danger\">{{ form_errors(form.isActive) }}</span>
                        </label>
                    </div>
                    <p>
                        {{ form_widget(form.save, {'label' : 'Entidad.Usuario.Create User', 'attr': {'class': 'btn btn-success'}}) }}
                    </p>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}";
    }
}
