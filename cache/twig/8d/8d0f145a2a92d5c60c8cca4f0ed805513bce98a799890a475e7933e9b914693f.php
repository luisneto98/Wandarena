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
        // line 8
        $context["countStages"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["arena"] ?? null), "countStages", array(), "method");
        // line 9
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["countStages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "            <div class=\"card text-center\">
                <div class=\"card-header bg-secondary rounded text-white\">
                    ";
            // line 12
            if (((($context["countStages"] ?? null) - $context["i"]) == 3)) {
                // line 13
                echo "                        Oitavas de Final
                    ";
            } elseif (((            // line 14
($context["countStages"] ?? null) - $context["i"]) == 2)) {
                // line 15
                echo "                        Quartas de Final
                    ";
            } elseif (((            // line 16
($context["countStages"] ?? null) - $context["i"]) == 1)) {
                // line 17
                echo "                        Semi Final
                    ";
            } elseif (((            // line 18
($context["countStages"] ?? null) - $context["i"]) == 0)) {
                // line 19
                echo "                        Final
                    ";
            } else {
                // line 21
                echo "                        Etapa ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
                    ";
            }
            // line 23
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
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["arena"] ?? null), "confrontations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["confrontation"]) {
                // line 36
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["confrontation"], "stage", array()) == $context["i"])) {
                    // line 37
                    echo "
                                        <tr>
                                            <th scope=\"row\">";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["confrontation"], "order", array()), "html", null, true);
                    echo "</th>
                                            <td><a class=\"btn btn-outline-primary\" href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.arena.play", array("idArena" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["arena"] ?? null), "id", array()), "idConfrontation" => twig_get_attribute($this->env, $this->getSourceContext(), $context["confrontation"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["confrontation"], "player1", array()), "nickname", array()), "html", null, true);
                    echo " x
                                                ";
                    // line 41
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
                // line 46
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['confrontation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                            </tbody>
                        </table>

                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
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
        return array (  160 => 54,  148 => 47,  142 => 46,  129 => 41,  123 => 40,  119 => 39,  115 => 37,  112 => 36,  108 => 35,  94 => 23,  88 => 21,  84 => 19,  82 => 18,  79 => 17,  77 => 16,  74 => 15,  72 => 14,  69 => 13,  67 => 12,  63 => 10,  58 => 9,  56 => 8,  52 => 6,  49 => 5,  43 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} Lista de Confrontos {% endblock %}
{% block titlePage %} Lista de Confrontos {% endblock %}
{% block arena %} active {% endblock %}
{% block content %}

    <div class=\"offset-3 col-6\">
        {% set countStages = arena.countStages() %}
        {% for i in 1..countStages %}
            <div class=\"card text-center\">
                <div class=\"card-header bg-secondary rounded text-white\">
                    {% if ((countStages - i ) == 3) %}
                        Oitavas de Final
                    {% elseif  ((countStages - i) == 2)%}
                        Quartas de Final
                    {% elseif  ((countStages - i) == 1)%}
                        Semi Final
                    {% elseif  ((countStages - i) == 0)%}
                        Final
                    {% else %}
                        Etapa {{ i }}
                    {% endif %}

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
                                {% if confrontation.stage == i %}

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
