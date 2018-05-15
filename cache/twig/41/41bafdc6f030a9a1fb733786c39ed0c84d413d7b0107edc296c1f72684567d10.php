<?php

/* View/Arena/arenasControl.twig */
class __TwigTemplate_37fa2b475365702b93c9335d26b00f0e4715fc5af03c0d4263482fb62533f7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("View/Layout.twig", "View/Arena/arenasControl.twig", 1);
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
        echo " Controle Arenas ";
    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        echo "Controle de Arenas";
    }

    // line 4
    public function block_arenasControl($context, array $blocks = array())
    {
        echo " active ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"row offset-11 mb-4\">
        <a class=\"btn btn-primary\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.arena.register.index"), "html", null, true);
        echo "\">Criar Arena</a>
    </div>
    <table class=\"table\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Título</th>
                <th scope=\"col\">Data</th>
                <th scope=\"col\">Descrição</th>
                <th scope=\"col\">Jogo</th>
                <th scope=\"col\">Deletar</th>
                <th scope=\"col\">Alterar</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arenas"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["arena"]) {
            // line 24
            echo "        <tr>
            <div class=\"container row\">
                <th>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo "</th>
                <td class=\"text-truncate\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "title", array()), "html", null, true);
            echo "</td>
                <td class=\"text-truncate\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "getDateDefault", array(), "method"), "html", null, true);
            echo "</td>
                <td class=\"text-truncate\" style=\"max-width: 20rem;\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "description", array()), "html", null, true);
            echo "</td>
                <td class=\"text-truncate\" style=\"max-width: 20rem;\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "getGameName", array(), "method"), "html", null, true);
            echo "</td>
                <td class=\"text-truncate\"><a class=\"btn btn-danger\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.arena.control.delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "id", array()))), "html", null, true);
            echo "\">Deletar</a></td>
                <td class=\"text-truncate\"><a class=\"btn btn-success\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.arena.control.change", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "id", array()))), "html", null, true);
            echo "\">Alterar</a></td>
            </div>
        </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arena'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>


";
    }

    public function getTemplateName()
    {
        return "View/Arena/arenasControl.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 36,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  103 => 28,  99 => 27,  95 => 26,  91 => 24,  74 => 23,  56 => 8,  52 => 6,  49 => 5,  43 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} Controle Arenas {% endblock %}
{% block titlePage %}Controle de Arenas{% endblock %}
{% block arenasControl %} active {% endblock %}
{% block content %}

    <div class=\"row offset-11 mb-4\">
        <a class=\"btn btn-primary\" href=\"{{ path_for('wanda.arena.register.index') }}\">Criar Arena</a>
    </div>
    <table class=\"table\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Título</th>
                <th scope=\"col\">Data</th>
                <th scope=\"col\">Descrição</th>
                <th scope=\"col\">Jogo</th>
                <th scope=\"col\">Deletar</th>
                <th scope=\"col\">Alterar</th>
            </tr>
        </thead>
        <tbody>
        {% for arena in arenas %}
        <tr>
            <div class=\"container row\">
                <th>{{ loop.index }}</th>
                <td class=\"text-truncate\">{{ arena.title }}</td>
                <td class=\"text-truncate\">{{ arena.getDateDefault() }}</td>
                <td class=\"text-truncate\" style=\"max-width: 20rem;\">{{ arena.description }}</td>
                <td class=\"text-truncate\" style=\"max-width: 20rem;\">{{ arena.getGameName() }}</td>
                <td class=\"text-truncate\"><a class=\"btn btn-danger\" href=\"{{ path_for('wanda.arena.control.delete',{\"id\" : arena.id}) }}\">Deletar</a></td>
                <td class=\"text-truncate\"><a class=\"btn btn-success\" href=\"{{ path_for('wanda.arena.control.change',{\"id\" : arena.id}) }}\">Alterar</a></td>
            </div>
        </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "View/Arena/arenasControl.twig", "/var/www/html/Wandarena/app/src/View/Arena/arenasControl.twig");
    }
}
