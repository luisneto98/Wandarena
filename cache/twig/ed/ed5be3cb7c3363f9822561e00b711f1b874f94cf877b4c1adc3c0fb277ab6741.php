<?php

/* View/Practice/practice.twig */
class __TwigTemplate_68633ec5222b07f23586ba2e686dcba27e2dd8a8072e9fa10bdef6f057bec21b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("View/Layout.twig", "View/Practice/practice.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlePage' => array($this, 'block_titlePage'),
            'practice' => array($this, 'block_practice'),
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
        echo " Praticar ";
    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        echo "Praticar";
    }

    // line 4
    public function block_practice($context, array $blocks = array())
    {
        echo " active ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("wanda.home.teste"), "html", null, true);
        echo "\" method=\"POST\"
          enctype=\"multipart/form-data\">
        Arquivo: <input type=\"file\" name=\"code\"><br>
        <input type=\"submit\" value=\"Enviar\">
    </form>

";
    }

    public function getTemplateName()
    {
        return "View/Practice/practice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 7,  56 => 6,  53 => 5,  47 => 4,  41 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} Praticar {% endblock %}
{% block titlePage %}Praticar{% endblock %}
{% block practice %} active {% endblock %}
{% block content %}

    <form action=\"{{ path_for('wanda.home.teste') }}\" method=\"POST\"
          enctype=\"multipart/form-data\">
        Arquivo: <input type=\"file\" name=\"code\"><br>
        <input type=\"submit\" value=\"Enviar\">
    </form>

{% endblock %}", "View/Practice/practice.twig", "/var/www/html/Wandarena/app/src/View/Practice/practice.twig");
    }
}
