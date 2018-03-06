<?php

/* View/Arena/listConfrontations.twig */
class __TwigTemplate_786839fd6ee861aa25aff487c348e10deeddacd3e801c10cd1c53683c1249644 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("View/Layout.twig", "View/Arena/listConfrontations.twig", 1);
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
        echo " Lista de Confrontos ";
    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        echo " Lista de Confrontos ";
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
        echo "
    <div class=\"offset-3 col-6\">

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->getSourceContext(), ($context["arena"] ?? null), "countKeys", array(), "method"), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "            <div class=\"card text-center\">
                <div class=\"card-header bg-secondary rounded text-white\">
                    Chave ";
            // line 12
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "
                </div>
                <div class=\"card-body\">

                        <table class=\"table table-hover border\">
                            <thead class=\"bg-info\">
                            <tr>
                                <th scope=\"col\">Ordem</th>
                                <th scope=\"col\">Adversários</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["arena"] ?? null), "confrontations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["confrontation"]) {
                // line 25
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["confrontation"], "key", array()) == $context["i"])) {
                    // line 26
                    echo "
                                        <tr>
                                            <th scope=\"row\">";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["confrontation"], "order", array()), "html", null, true);
                    echo "</th>
                                            <td><a class=\"btn btn-outline-primary\" href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.arena.play", array("idArena" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["arena"] ?? null), "id", array()), "idConfrontation" => twig_get_attribute($this->env, $this->getSourceContext(), $context["confrontation"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["confrontation"], "player1", array()), "nickname", array()), "html", null, true);
                    echo " x
                                                ";
                    // line 30
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["confrontation"], "player2", array()) != null)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["confrontation"], "player2", array()), "nickname", array()), "html", null, true);
                        echo " ";
                    } else {
                        echo " BOT ";
                    }
                    echo "</a></td>
                                        </tr>


                                ";
                }
                // line 35
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['confrontation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                            </tbody>
                        </table>

                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "View/Arena/listConfrontations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 43,  120 => 36,  114 => 35,  101 => 30,  95 => 29,  91 => 28,  87 => 26,  84 => 25,  80 => 24,  65 => 12,  61 => 10,  57 => 9,  52 => 6,  49 => 5,  43 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} Lista de Confrontos {% endblock %}
{% block titlePage %} Lista de Confrontos {% endblock %}
{% block arena %} active {% endblock %}
{% block content %}

    <div class=\"offset-3 col-6\">

        {% for i in arena.countKeys()..1 %}
            <div class=\"card text-center\">
                <div class=\"card-header bg-secondary rounded text-white\">
                    Chave {{ i }}
                </div>
                <div class=\"card-body\">

                        <table class=\"table table-hover border\">
                            <thead class=\"bg-info\">
                            <tr>
                                <th scope=\"col\">Ordem</th>
                                <th scope=\"col\">Adversários</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for confrontation in arena.confrontations %}
                                {% if confrontation.key == i %}

                                        <tr>
                                            <th scope=\"row\">{{ confrontation.order }}</th>
                                            <td><a class=\"btn btn-outline-primary\" href=\"{{ path_for('wanda.arena.play',{\"idArena\":arena.id,\"idConfrontation\": confrontation.id}) }}\">{{ confrontation.player1.nickname }} x
                                                {% if confrontation.player2 != NULL %}{{ confrontation.player2.nickname }} {% else %} BOT {% endif %}</a></td>
                                        </tr>


                                {% endif %}
                            {% endfor %}
                            </tbody>
                        </table>

                </div>
            </div>

        {% endfor %}
    </div>

{% endblock %}", "View/Arena/listConfrontations.twig", "/var/www/html/Wandarena/app/src/View/Arena/listConfrontations.twig");
    }
}
