<?php

/* View/Practice/practice.twig */
class __TwigTemplate_91ccb7e49f3fc33dbba0847ee408bc6b5e4413711050a5aee2ba51e8b7ed423d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.home.teste"), "html", null, true);
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
        return array (  55 => 7,  52 => 6,  49 => 5,  43 => 4,  37 => 3,  31 => 2,  11 => 1,);
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
