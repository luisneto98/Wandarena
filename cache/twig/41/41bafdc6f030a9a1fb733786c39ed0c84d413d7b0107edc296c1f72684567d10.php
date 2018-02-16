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
    <table class=\"table\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Título</th>
                <th scope=\"col\">Data</th>
                <th scope=\"col\">Descrição</th>
                <th scope=\"col\">Deletar</th>
                <th scope=\"col\">Alterar</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
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
            // line 20
            echo "        <tr>
            <th scope=\"row\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo "</th>
            <td class=\"text-truncate\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "title", array()), "html", null, true);
            echo "</td>
            <td class=\"text-truncate\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "getDateDefault", array(), "method"), "html", null, true);
            echo "</td>
            <td class=\"text-truncate\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "description", array()), "html", null, true);
            echo "</td>
            <td class=\"text-truncate\"><a class=\"btn btn-primary\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.arena.control.delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "id", array()))), "html", null, true);
            echo "\">Deletar</a></td>
            <td class=\"text-truncate\"><a class=\"btn btn-primary\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.arena.control.change", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["arena"], "id", array()))), "html", null, true);
            echo "\">Alterar</a></td>
            <td></td>
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
        // line 30
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
        return array (  125 => 30,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  84 => 20,  67 => 19,  52 => 6,  49 => 5,  43 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} Controle Arenas {% endblock %}
{% block titlePage %}Controle de Arenas{% endblock %}
{% block arenasControl %} active {% endblock %}
{% block content %}

    <table class=\"table\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Título</th>
                <th scope=\"col\">Data</th>
                <th scope=\"col\">Descrição</th>
                <th scope=\"col\">Deletar</th>
                <th scope=\"col\">Alterar</th>
            </tr>
        </thead>
        <tbody>
        {% for arena in arenas %}
        <tr>
            <th scope=\"row\">{{ loop.index }}</th>
            <td class=\"text-truncate\">{{ arena.title }}</td>
            <td class=\"text-truncate\">{{ arena.getDateDefault() }}</td>
            <td class=\"text-truncate\">{{ arena.description }}</td>
            <td class=\"text-truncate\"><a class=\"btn btn-primary\" href=\"{{ path_for('wanda.arena.control.delete',{\"id\" : arena.id}) }}\">Deletar</a></td>
            <td class=\"text-truncate\"><a class=\"btn btn-primary\" href=\"{{ path_for('wanda.arena.control.change',{\"id\" : arena.id}) }}\">Alterar</a></td>
            <td></td>
        </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "View/Arena/arenasControl.twig", "/var/www/html/Wandarena/app/src/View/Arena/arenasControl.twig");
    }
}
