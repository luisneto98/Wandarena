<?php

/* View/Arena/listConfrontations.twig */
class __TwigTemplate_50f3752d30e4b3b50aa53df89b7aba8cb3fa582078428b88bdf7e0b5b8cfd7b2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        echo "    <!-- Button trigger modal -->
    <button type=\"button\" class=\"btn btn-primary offset-10\" data-toggle=\"modal\" data-target=\"#winnerModal\">
        Exibir Vencedor
    </button>
    <div class=\"offset-3 col-6\">
        ";
        // line 11
        $context["countStages"] = twig_get_attribute($this->env, $this->source, ($context["arena"] ?? null), "countStages", array(), "method");
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["countStages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "            <div class=\"card text-center\">
                <div class=\"card-header bg-secondary rounded text-white\">
                    ";
            // line 15
            if (((($context["countStages"] ?? null) - $context["i"]) == 3)) {
                // line 16
                echo "                        Oitavas de Final
                    ";
            } elseif (((            // line 17
($context["countStages"] ?? null) - $context["i"]) == 2)) {
                // line 18
                echo "                        Quartas de Final
                    ";
            } elseif (((            // line 19
($context["countStages"] ?? null) - $context["i"]) == 1)) {
                // line 20
                echo "                        Semi Final
                    ";
            } elseif (((            // line 21
($context["countStages"] ?? null) - $context["i"]) == 0)) {
                // line 22
                echo "                        Final
                    ";
            } else {
                // line 24
                echo "                        Etapa ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
                    ";
            }
            // line 26
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
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["arena"] ?? null), "confrontations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["confrontation"]) {
                // line 39
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["confrontation"], "stage", array()) == $context["i"])) {
                    // line 40
                    echo "
                                        <tr>
                                            <th scope=\"row\">";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["confrontation"], "order", array()), "html", null, true);
                    echo "</th>
                                            <td><a class=\"btn btn-outline-primary\" href=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("wanda.arena.play", array("idArena" => twig_get_attribute($this->env, $this->source, ($context["arena"] ?? null), "id", array()), "idConfrontation" => twig_get_attribute($this->env, $this->source, $context["confrontation"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["confrontation"], "player1", array()), "nickname", array()), "html", null, true);
                    echo " x
                                                ";
                    // line 44
                    if ((twig_get_attribute($this->env, $this->source, $context["confrontation"], "player2", array()) != null)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["confrontation"], "player2", array()), "nickname", array()), "html", null, true);
                        echo " ";
                    } else {
                        echo " BOT ";
                    }
                    echo "</a></td>
                                        </tr>


                                ";
                }
                // line 49
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['confrontation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                            </tbody>
                        </table>

                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
        <!-- Modal -->
        <div class=\"modal fade\" id=\"winnerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"winnerModal\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Vencedor</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["arena"] ?? null), "winner", array()), "nickname", array()), "html", null, true);
        echo "
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        return array (  181 => 69,  167 => 57,  155 => 50,  149 => 49,  136 => 44,  130 => 43,  126 => 42,  122 => 40,  119 => 39,  115 => 38,  101 => 26,  95 => 24,  91 => 22,  89 => 21,  86 => 20,  84 => 19,  81 => 18,  79 => 17,  76 => 16,  74 => 15,  70 => 13,  65 => 12,  63 => 11,  56 => 6,  53 => 5,  47 => 4,  41 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} Lista de Confrontos {% endblock %}
{% block titlePage %} Lista de Confrontos {% endblock %}
{% block arena %} active {% endblock %}
{% block content %}
    <!-- Button trigger modal -->
    <button type=\"button\" class=\"btn btn-primary offset-10\" data-toggle=\"modal\" data-target=\"#winnerModal\">
        Exibir Vencedor
    </button>
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

        <!-- Modal -->
        <div class=\"modal fade\" id=\"winnerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"winnerModal\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Vencedor</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        {{ arena.winner.nickname }}
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "View/Arena/listConfrontations.twig", "/var/www/html/Wandarena/app/src/View/Arena/listConfrontations.twig");
    }
}
