<?php

/* View/Arena/registerArena.twig */
class __TwigTemplate_4f2195a92b0d5e9639fae643d1fa5c1fc7c029640c44ec84249f6242de97bb98 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("View/Layout.twig", "View/Arena/registerArena.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlePage' => array($this, 'block_titlePage'),
            'arenasControl' => array($this, 'block_arenasControl'),
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

    // line 4
    public function block_arenasControl($context, array $blocks = array())
    {
        echo "active";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <form class = \"offset-sm-2 col-sm-8 rounded p-4 border\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("wanda.arena.register.save"), "html", null, true);
        echo "\">
        ";
        // line 8
        if ((($context["arena"] ?? null) != null)) {
            // line 9
            echo "            <input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["arena"] ?? null), "id", array()), "html", null, true);
            echo "\">

        ";
        }
        // line 12
        echo "        <div class=\"form-group \">
            <label for=\"Title\">Título:</label>
            <input type=\"text\" class=\"form-control\" id=\"Title\" name=\"title\" placeholder=\"Título...\" ";
        // line 14
        if ((($context["arena"] ?? null) != null)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["arena"] ?? null), "title", array()), "html", null, true);
            echo "\"";
        }
        echo " required>
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
            <textarea class=\"form-control\" id=\"Description\" rows=\"3\" name=\"description\" required>";
        // line 25
        if ((($context["arena"] ?? null) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["arena"] ?? null), "description", array()), "html", null, true);
        }
        echo "</textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"date\">Data:</label>
            <input type=\"datetime-local\"  class=\"form-control\" id=\"date\" name=\"date\" ";
        // line 29
        if ((($context["arena"] ?? null) != null)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["arena"] ?? null), "getDateDefault", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo " required>
        </div>
        <div class=\"form-group row offset-8 col-4\">
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
        return array (  102 => 29,  92 => 25,  74 => 14,  70 => 12,  63 => 9,  61 => 8,  56 => 7,  53 => 6,  47 => 4,  41 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} Cadastrar Arena {% endblock %}
{% block titlePage %}Cadastro de Arena{% endblock %}
{% block arenasControl %}active{% endblock %}

{% block content %}
    <form class = \"offset-sm-2 col-sm-8 rounded p-4 border\" method=\"post\" action=\"{{ path_for(\"wanda.arena.register.save\") }}\">
        {% if arena != NULL %}
            <input type=\"hidden\" name=\"id\" value=\"{{ arena.id }}\">

        {% endif %}
        <div class=\"form-group \">
            <label for=\"Title\">Título:</label>
            <input type=\"text\" class=\"form-control\" id=\"Title\" name=\"title\" placeholder=\"Título...\" {% if arena != NULL %} value=\"{{ arena.title }}\"{% endif %} required>
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
            <textarea class=\"form-control\" id=\"Description\" rows=\"3\" name=\"description\" required>{% if arena != NULL %} {{ arena.description }}{% endif %}</textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"date\">Data:</label>
            <input type=\"datetime-local\"  class=\"form-control\" id=\"date\" name=\"date\" {% if arena != NULL %} value=\"{{ arena.getDateDefault() }}\"{% endif %} required>
        </div>
        <div class=\"form-group row offset-8 col-4\">
            <button class=\"form-control btn btn-primary\" id=\"submit\" type=\"submit\">Enviar</button>
        </div>
    </form>
{% endblock %}", "View/Arena/registerArena.twig", "/var/www/html/Wandarena/app/src/View/Arena/registerArena.twig");
    }
}
