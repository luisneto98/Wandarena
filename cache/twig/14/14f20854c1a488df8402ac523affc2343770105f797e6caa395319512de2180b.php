<?php

/* View/User/registerUser.twig */
class __TwigTemplate_a3afa5da159526c43f7068e7a692309fb02445f3d2a4cce0c93e42efe9baf29b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("View/Layout.twig", "View/User/registerUser.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlePage' => array($this, 'block_titlePage'),
            'registerUser' => array($this, 'block_registerUser'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "View/Layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Cadastro Usuário ";
    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        echo "Cadastro Usuário";
    }

    // line 4
    public function block_registerUser($context, array $blocks = array())
    {
        echo " active ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form class = \"offset-sm-2 col-sm-8 rounded p-4 border\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.user.save"), "html", null, true);
        echo "\">
        ";
        // line 7
        if ((($context["user"] ?? null) != null)) {
            // line 8
            echo "            <input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "id", array()), "html", null, true);
            echo "\">

        ";
        }
        // line 11
        echo "        <div class=\"form-group \">
            <label for=\"user\">Usuário:</label>
            <input type=\"text\" class=\"form-control\" id=\"user\" name=\"username\" placeholder=\"Usuário\" ";
        // line 13
        if ((($context["user"] ?? null) != null)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "username", array()), "html", null, true);
            echo "\"";
        }
        echo " required>
            <small class=\"help-block form-text text-danger\">";
        // line 14
        if (($context["usernameinval"] ?? null)) {
            echo "Usuário Inválido";
        }
        echo "</small>
        </div>

        <div class=\"form-group\">
            <label for=\"name\">Nome:</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Nome\" ";
        // line 19
        if ((($context["user"] ?? null) != null)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "name", array()), "html", null, true);
            echo "\"";
        }
        echo " required>
        </div>
        <label class=\"d-inline-block\">Tipo de Usuário:</label>
        <div class=\"form-group\">

            <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"radio\" name=\"typeUser\" id=\"option1\" value=\"admin\">
                <label class=\"form-check-label\" for=\"option1\">Administrador</label>
            </div>
            <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"radio\" name=\"typeUser\" id=\"option2\" value=\"user\" checked>
                <label class=\"form-check-label\" for=\"option2\">Aluno</label>
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"inputPassword\" class=\"control-label\">Senha:</label>
            <div class=\"form-group\">
                <input type=\"password\" data-minlength=\"6\" class=\"form-control\" id=\"inputPassword\" placeholder=\"Senha\" name=\"password\" required>
                <small class=\"help-block form-text text-danger\">";
        // line 37
        if (($context["passwordinval"] ?? null)) {
            echo "Senhas não combinaram";
        }
        echo "</small>
            </div>
            <div class=\"form-group\">
                <input type=\"password\" name=\"confirmPassword\" class=\"form-control\" id=\"inputPasswordConfirm\" data-match=\"#inputPassword\" data-match-error=\"As senhas são diferentes\" placeholder=\"Confirmação\" required>
                <small class=\"help-block form-text text-muted\"></small>
            </div>
        </div>
        <div class=\"form-group row offset-8 col-4\">
            <button class=\"form-control btn btn-primary\" id=\"submit\" type=\"submit\">Enviar</button>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "View/User/registerUser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  88 => 19,  78 => 14,  70 => 13,  66 => 11,  59 => 8,  57 => 7,  52 => 6,  49 => 5,  43 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} Cadastro Usuário {% endblock %}
{% block titlePage %}Cadastro Usuário{% endblock %}
{% block registerUser %} active {% endblock %}
{% block content %}
    <form class = \"offset-sm-2 col-sm-8 rounded p-4 border\" method=\"post\" action=\"{{ path_for(\"wanda.user.save\") }}\">
        {% if user != NULL %}
            <input type=\"hidden\" name=\"id\" value=\"{{ user.id }}\">

        {% endif %}
        <div class=\"form-group \">
            <label for=\"user\">Usuário:</label>
            <input type=\"text\" class=\"form-control\" id=\"user\" name=\"username\" placeholder=\"Usuário\" {% if user != NULL %} value=\"{{ user.username }}\"{% endif %} required>
            <small class=\"help-block form-text text-danger\">{% if usernameinval %}Usuário Inválido{% endif %}</small>
        </div>

        <div class=\"form-group\">
            <label for=\"name\">Nome:</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Nome\" {% if user != NULL %} value=\"{{ user.name }}\"{% endif %} required>
        </div>
        <label class=\"d-inline-block\">Tipo de Usuário:</label>
        <div class=\"form-group\">

            <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"radio\" name=\"typeUser\" id=\"option1\" value=\"admin\">
                <label class=\"form-check-label\" for=\"option1\">Administrador</label>
            </div>
            <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"radio\" name=\"typeUser\" id=\"option2\" value=\"user\" checked>
                <label class=\"form-check-label\" for=\"option2\">Aluno</label>
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"inputPassword\" class=\"control-label\">Senha:</label>
            <div class=\"form-group\">
                <input type=\"password\" data-minlength=\"6\" class=\"form-control\" id=\"inputPassword\" placeholder=\"Senha\" name=\"password\" required>
                <small class=\"help-block form-text text-danger\">{% if passwordinval %}Senhas não combinaram{% endif %}</small>
            </div>
            <div class=\"form-group\">
                <input type=\"password\" name=\"confirmPassword\" class=\"form-control\" id=\"inputPasswordConfirm\" data-match=\"#inputPassword\" data-match-error=\"As senhas são diferentes\" placeholder=\"Confirmação\" required>
                <small class=\"help-block form-text text-muted\"></small>
            </div>
        </div>
        <div class=\"form-group row offset-8 col-4\">
            <button class=\"form-control btn btn-primary\" id=\"submit\" type=\"submit\">Enviar</button>
        </div>
    </form>
{% endblock %}", "View/User/registerUser.twig", "/var/www/html/Wandarena/app/src/View/User/registerUser.twig");
    }
}
