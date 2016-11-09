<?php

/* UserBundle:User:index.html.twig */
class __TwigTemplate_825bdef4ef561eefbc1ed3acf14fe86e3f612868211374a95045862afe40ebcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "UserBundle:User:index.html.twig", 1);
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
        $__internal_e8006aad93f96cc73b0a103e3f0aa2fcd5f75ffa9c0381df5f13935889c956fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8006aad93f96cc73b0a103e3f0aa2fcd5f75ffa9c0381df5f13935889c956fb->enter($__internal_e8006aad93f96cc73b0a103e3f0aa2fcd5f75ffa9c0381df5f13935889c956fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8006aad93f96cc73b0a103e3f0aa2fcd5f75ffa9c0381df5f13935889c956fb->leave($__internal_e8006aad93f96cc73b0a103e3f0aa2fcd5f75ffa9c0381df5f13935889c956fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b70606418d21e1137d29578cef39209c0610897f81d74180229e95d16e61b405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70606418d21e1137d29578cef39209c0610897f81d74180229e95d16e61b405->enter($__internal_b70606418d21e1137d29578cef39209c0610897f81d74180229e95d16e61b405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Menu.Users"), "html", null, true);
        echo "</h2>
            </div>";
        // line 10
        echo "            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entidad.Usuario.Username"), "html", null, true);
        echo "</th>
                            <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entidad.Usuario.First name"), "html", null, true);
        echo "</th>
                            <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entidad.Usuario.Last name"), "html", null, true);
        echo "</th>
                            <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entidad.Usuario.Email"), "html", null, true);
        echo "</th>
                            <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entidad.Usuario.Role"), "html", null, true);
        echo "</th>
                            <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entidad.Usuario.Created"), "html", null, true);
        echo "</th>
                            <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entidad.Usuario.Updated"), "html", null, true);
        echo "</th>
                            <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entidad.Usuario.Actions"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "                            <tr>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 32
            if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                // line 33
                echo "                                        <strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entidad.Usuario.Administrator"), "html", null, true);
                echo "</strong>
                                    ";
            } elseif (($this->getAttribute(            // line 34
$context["user"], "role", array()) == "ROLE_USER")) {
                // line 35
                echo "                                        <strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Entidad.Usuario.User"), "html", null, true);
                echo "</strong>
                                    ";
            }
            // line 37
            echo "                                </td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "getCreatedAt", array()), "d-m-y H:i"), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "getUpdateAt", array()), "d-m-y H:i"), "html", null, true);
            echo "</td>
                                <td class=\"actions\">
                                    <a href=\"#\" class=\"btn btn-sm btn-info\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Botones.View"), "html", null, true);
            echo "</a>
                                    <a href=\"#\" class=\"btn btn-sm btn-primary\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Botones.Edit"), "html", null, true);
            echo "</a>
                                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Botones.Delete"), "html", null, true);
            echo "</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </tbody>
                </table>
            </div>";
        // line 50
        echo "        </div>";
        // line 51
        echo "    </div> ";
        
        $__internal_b70606418d21e1137d29578cef39209c0610897f81d74180229e95d16e61b405->leave($__internal_b70606418d21e1137d29578cef39209c0610897f81d74180229e95d16e61b405_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 51,  166 => 50,  162 => 47,  152 => 43,  148 => 42,  144 => 41,  139 => 39,  135 => 38,  132 => 37,  126 => 35,  124 => 34,  119 => 33,  117 => 32,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  97 => 26,  93 => 25,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  52 => 10,  48 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'layout.html.twig' %}

{% block body %}
    {{ parent() }}
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">{{ 'Menu.Users'|trans }}</h2>
            </div>{# .page-header margin-none #}
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>{{ 'Entidad.Usuario.Username'|trans }}</th>
                            <th>{{ 'Entidad.Usuario.First name'|trans }}</th>
                            <th>{{ 'Entidad.Usuario.Last name'|trans }}</th>
                            <th>{{ 'Entidad.Usuario.Email'|trans }}</th>
                            <th>{{ 'Entidad.Usuario.Role'|trans }}</th>
                            <th>{{ 'Entidad.Usuario.Created'|trans }}</th>
                            <th>{{ 'Entidad.Usuario.Updated'|trans }}</th>
                            <th>{{ 'Entidad.Usuario.Actions'|trans }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for user in users %}
                            <tr>
                                <td>{{ user.username }}</td>
                                <td>{{ user.firstName }}</td>
                                <td>{{ user.lastName }}</td>
                                <td>{{ user.email }}</td>
                                <td>
                                    {% if user.role == 'ROLE_ADMIN' %}
                                        <strong>{{ 'Entidad.Usuario.Administrator'|trans }}</strong>
                                    {% elseif user.role == 'ROLE_USER' %}
                                        <strong>{{ 'Entidad.Usuario.User'|trans }}</strong>
                                    {% endif %}
                                </td>
                                <td>{{ user.getCreatedAt|date('d-m-y H:i') }}</td>
                                <td>{{ user.getUpdateAt|date('d-m-y H:i') }}</td>
                                <td class=\"actions\">
                                    <a href=\"#\" class=\"btn btn-sm btn-info\">{{ 'Botones.View'|trans }}</a>
                                    <a href=\"#\" class=\"btn btn-sm btn-primary\">{{ 'Botones.Edit'|trans }}</a>
                                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">{{ 'Botones.Delete'|trans }}</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>{# .table-responsive #}
        </div>{# .col-md-12 #}
    </div> {# .container #}
{% endblock %}";
    }
}
