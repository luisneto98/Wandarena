<?php

/* View/Arena/registerArena.twig */
class __TwigTemplate_3a558961d516063423837084d89ef6049a74f10a06fea0b238b9e42d31e587c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("View/Layout.twig", "View/Arena/registerArena.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlePage' => array($this, 'block_titlePage'),
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
        echo " Cadastrar Arena ";
    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        echo "Cadastro de Arena";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form class = \"offset-sm-2 col-sm-8 rounded p-4\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.arena.register.save"), "html", null, true);
        echo "\">
        <div class=\"form-group \">
            <label for=\"Title\">Título:</label>
            <input type=\"text\" class=\"form-control\" id=\"Title\" name=\"title\" placeholder=\"Título...\" ";
        // line 9
        if ((($context["arena"] ?? null) != null)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["arena"] ?? null), "title", array()), "html", null, true);
            echo "\"";
        }
        echo ">
        </div>
        <div class=\"form-group\">
            <label for=\"Game\">Selecione o jogo:</label>
            <select class=\"form-control\" id=\"Game\" name=\"game\">
                <option>Jo-Ken-Po</option>
                <option>Divide and Conquer</option>
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"Description\">Descrição:</label>
            <textarea class=\"form-control\" id=\"Description\" rows=\"3\" name=\"description\" >";
        // line 20
        if ((($context["arena"] ?? null) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["arena"] ?? null), "description", array()), "html", null, true);
        }
        echo "</textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"date\">Data:</label>
            <input type=\"datetime-local\"  class=\"form-control\" id=\"date\" name=\"date\" ";
        // line 24
        if ((($context["arena"] ?? null) != null)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["arena"] ?? null), "getDateDefault", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">
        </div>
        <div class=\"form-group row offset-8 float-right col-4\">
            <button class=\"form-control btn btn-primary\" id=\"submit\" type=\"submit\">Enviar</button>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "View/Arena/registerArena.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  70 => 20,  52 => 9,  45 => 6,  42 => 5,  36 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} Cadastrar Arena {% endblock %}
{% block titlePage %}Cadastro de Arena{% endblock %}

{% block content %}
    <form class = \"offset-sm-2 col-sm-8 rounded p-4\" method=\"post\" action=\"{{ path_for(\"wanda.arena.register.save\") }}\">
        <div class=\"form-group \">
            <label for=\"Title\">Título:</label>
            <input type=\"text\" class=\"form-control\" id=\"Title\" name=\"title\" placeholder=\"Título...\" {% if arena != NULL %} value=\"{{ arena.title }}\"{% endif %}>
        </div>
        <div class=\"form-group\">
            <label for=\"Game\">Selecione o jogo:</label>
            <select class=\"form-control\" id=\"Game\" name=\"game\">
                <option>Jo-Ken-Po</option>
                <option>Divide and Conquer</option>
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"Description\">Descrição:</label>
            <textarea class=\"form-control\" id=\"Description\" rows=\"3\" name=\"description\" >{% if arena != NULL %} {{ arena.description }}{% endif %}</textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"date\">Data:</label>
            <input type=\"datetime-local\"  class=\"form-control\" id=\"date\" name=\"date\" {% if arena != NULL %} value=\"{{ arena.getDateDefault() }}\"{% endif %}>
        </div>
        <div class=\"form-group row offset-8 float-right col-4\">
            <button class=\"form-control btn btn-primary\" id=\"submit\" type=\"submit\">Enviar</button>
        </div>
    </form>
{% endblock %}", "View/Arena/registerArena.twig", "/var/www/html/Wandarena/app/src/View/Arena/registerArena.twig");
    }
}
