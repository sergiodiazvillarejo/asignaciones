<?php

/* @User/User/index.html.twig */
class __TwigTemplate_8ce8257bcf8e746147eb9ddc3b8093b64b7d73a10eb3910bca7e5c1e543b984d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@User/User/index.html.twig", 1);
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
        $__internal_ca5a537e6a07d2a09da43f786097baf4d302374024286b79eeb3c608c4f6dca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5a537e6a07d2a09da43f786097baf4d302374024286b79eeb3c608c4f6dca0->enter($__internal_ca5a537e6a07d2a09da43f786097baf4d302374024286b79eeb3c608c4f6dca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/User/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca5a537e6a07d2a09da43f786097baf4d302374024286b79eeb3c608c4f6dca0->leave($__internal_ca5a537e6a07d2a09da43f786097baf4d302374024286b79eeb3c608c4f6dca0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32cb2bb089a312761e0afcff24f52002da38f1be550d6cb4d21ea47e97c108ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cb2bb089a312761e0afcff24f52002da38f1be550d6cb4d21ea47e97c108ac->enter($__internal_32cb2bb089a312761e0afcff24f52002da38f1be550d6cb4d21ea47e97c108ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">Users</h2>
            </div>";
        // line 10
        echo "            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>First name</th>
                            <th>Las Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created</th>
                            <th>Update</th>
                            <th>Actions</th>
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
                echo "                                        <strong>Administrator</strong>
                                    ";
            } elseif (($this->getAttribute(            // line 34
$context["user"], "role", array()) == "ROLE_USER")) {
                // line 35
                echo "                                        <strong>User</strong>
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
                                    <a href=\"#\" class=\"btn btn-sm btn-info\">View</a>
                                    <a href=\"#\" class=\"btn btn-sm btn-primary\">Edit</a>
                                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">Delete</a>
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
        
        $__internal_32cb2bb089a312761e0afcff24f52002da38f1be550d6cb4d21ea47e97c108ac->leave($__internal_32cb2bb089a312761e0afcff24f52002da38f1be550d6cb4d21ea47e97c108ac_prof);

    }

    public function getTemplateName()
    {
        return "@User/User/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 51,  126 => 50,  122 => 47,  108 => 39,  104 => 38,  101 => 37,  97 => 35,  95 => 34,  92 => 33,  90 => 32,  85 => 30,  81 => 29,  77 => 28,  73 => 27,  70 => 26,  66 => 25,  49 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'layout.html.twig' %}

{% block body %}
    {{ parent() }}
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">Users</h2>
            </div>{# .page-header margin-none #}
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>First name</th>
                            <th>Las Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created</th>
                            <th>Update</th>
                            <th>Actions</th>
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
                                        <strong>Administrator</strong>
                                    {% elseif user.role == 'ROLE_USER' %}
                                        <strong>User</strong>
                                    {% endif %}
                                </td>
                                <td>{{ user.getCreatedAt|date('d-m-y H:i') }}</td>
                                <td>{{ user.getUpdateAt|date('d-m-y H:i') }}</td>
                                <td class=\"actions\">
                                    <a href=\"#\" class=\"btn btn-sm btn-info\">View</a>
                                    <a href=\"#\" class=\"btn btn-sm btn-primary\">Edit</a>
                                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">Delete</a>
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
