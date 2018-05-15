<?php

/* View/User/submitCode.twig */
class __TwigTemplate_61e9d1f812252558d92c63ba2167a7195fac7634291f027aeb01f03e1d6c0a73 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("View/Layout.twig", "View/User/submitCode.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlePage' => array($this, 'block_titlePage'),
            'arenas' => array($this, 'block_arenas'),
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
        echo " Envio ";
    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        echo "Envio";
    }

    // line 4
    public function block_arenas($context, array $blocks = array())
    {
        echo " active ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form class = \"offset-sm-2 col-sm-8 rounded p-4 border\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("wanda.arena.submit.save", array("id" => twig_get_attribute($this->env, $this->source, ($context["arena"] ?? null), "id", array()))), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">

        <div class=\"form-group\">
            <label for=\"nickname\">Apelido:</label>
            <input type=\"text\" class=\"form-control\" id=\"nickname\" name=\"nickname\" placeholder=\"Apelido\">
        </div>
        Arquivo:
        <input type=\"file\" name=\"code\"><br>
        <div class=\"form-group row offset-8 col-4\">
            <button class=\"form-control btn btn-primary\" id=\"submit\" type=\"submit\">Enviar</button>
        </div>
    </form>

";
    }

    public function getTemplateName()
    {
        return "View/User/submitCode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  53 => 5,  47 => 4,  41 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} Envio {% endblock %}
{% block titlePage %}Envio{% endblock %}
{% block arenas %} active {% endblock %}
{% block content %}
    <form class = \"offset-sm-2 col-sm-8 rounded p-4 border\" method=\"post\" action=\"{{ path_for('wanda.arena.submit.save',{\"id\" : arena.id}) }}\" enctype=\"multipart/form-data\">

        <div class=\"form-group\">
            <label for=\"nickname\">Apelido:</label>
            <input type=\"text\" class=\"form-control\" id=\"nickname\" name=\"nickname\" placeholder=\"Apelido\">
        </div>
        Arquivo:
        <input type=\"file\" name=\"code\"><br>
        <div class=\"form-group row offset-8 col-4\">
            <button class=\"form-control btn btn-primary\" id=\"submit\" type=\"submit\">Enviar</button>
        </div>
    </form>

{% endblock %}", "View/User/submitCode.twig", "/var/www/html/Wandarena/app/src/View/User/submitCode.twig");
    }
}
