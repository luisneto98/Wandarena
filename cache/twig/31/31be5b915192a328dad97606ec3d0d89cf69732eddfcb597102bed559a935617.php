<?php

/* View/Arena/arenaList.twig */
class __TwigTemplate_afb9539fad66853684cd241d72dc82d5098dddb48daedc158088031d1ea50648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("View/Layout.twig", "View/Arena/arenaList.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlePage' => array($this, 'block_titlePage'),
            'arena' => array($this, 'block_arena'),
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
        echo " Arenas ";
    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        echo "Lista de Arenas";
    }

    // line 4
    public function block_arena($context, array $blocks = array())
    {
        echo " active ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row ml-5\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arenas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["arena"]) {
            // line 8
            echo "        <div class=\"card m-3\">
            <img class=\"card-img-top\" style=\"max-width: 20rem; max-height: 10rem\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "getBGArena", array(), "method"), "html", null, true);
            echo "\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "title", array()), "html", null, true);
            echo "</h5>
                <h6 class=\"card-subtitle text-muted\"> ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "getGameName", array(), "method"), "html", null, true);
            echo " </h6>
                <div style=\"max-height: 20rem; max-width: 15rem;\">
                    <span title=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "description", array()), "html", null, true);
            echo "\"><p class=\"card-text text-truncate\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "description", array()), "html", null, true);
            echo "</p></span>

                    <p class=\"card-text\"><small class=\"text-muted\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "getDateDefault", array(), "method"), "html", null, true);
            echo "</small></p>
                </div>
                <a class=\"btn btn-primary float-right\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.arena.submit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "id", array()))), "html", null, true);
            echo "\">Entrar</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arena'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "View/Arena/arenaList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  89 => 18,  84 => 16,  77 => 14,  72 => 12,  68 => 11,  62 => 9,  59 => 8,  55 => 7,  52 => 6,  49 => 5,  43 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} Arenas {% endblock %}
{% block titlePage %}Lista de Arenas{% endblock %}
{% block arena %} active {% endblock %}
{% block content %}
    <div class=\"row ml-5\">
    {% for arena in arenas %}
        <div class=\"card m-3\">
            <img class=\"card-img-top\" style=\"max-width: 20rem; max-height: 10rem\" src=\"{{ base_url() }}{{ arena.getBGArena() }}\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ arena.title }}</h5>
                <h6 class=\"card-subtitle text-muted\"> {{ arena.getGameName() }} </h6>
                <div style=\"max-height: 20rem; max-width: 15rem;\">
                    <span title=\"{{ arena.description }}\"><p class=\"card-text text-truncate\" >{{ arena.description }}</p></span>

                    <p class=\"card-text\"><small class=\"text-muted\">{{ arena.getDateDefault() }}</small></p>
                </div>
                <a class=\"btn btn-primary float-right\" href=\"{{ path_for('wanda.arena.submit',{\"id\" : arena.id}) }}\">Entrar</a>
            </div>
        </div>
    {% endfor %}
    </div>
{% endblock %}", "View/Arena/arenaList.twig", "/var/www/html/Wandarena/app/src/View/Arena/arenaList.twig");
    }
}
