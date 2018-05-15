<?php

/* View/Layout.twig */
class __TwigTemplate_51562c30e9bf539d4bf42650ca73a3839d2fe550b6dfcf81a8b142ebd75b9597 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'scripthead' => array($this, 'block_scripthead'),
            'arena' => array($this, 'block_arena'),
            'practice' => array($this, 'block_practice'),
            'registerUser' => array($this, 'block_registerUser'),
            'arenasControl' => array($this, 'block_arenasControl'),
            'titlePage' => array($this, 'block_titlePage'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!doctype html>
<html lang=\"pt-br\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <meta name=\"description\" content=\"site Wandarena\">
    <meta name=\"author\" content=\"Luis Alves\">
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/css/bootstrap.min.css\" >
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/css/style.css\">
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <title>Wandarena | ";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 19
        $this->displayBlock('scripthead', $context, $blocks);
        // line 20
        echo "


</head>
<body class=\" backgroundBody\">
    <div style=\"max-height: 100%; min-height: 100%\">
        <header class=\"d-inline\">
            <nav class=\"navbar navbar-expand-lg bg-yellow navbar-light\">
                <a class=\"navbar-brand font-weight-bold text-dark\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("wanda.home.index"), "html", null, true);
        echo "\">Wandarena<b class=\"font-weight-normal text-secondary\">Telemídia</b></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse d-inline\" id=\"navbarNavAltMarkup\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item ";
        // line 34
        $this->displayBlock('arena', $context, $blocks);
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("wanda.home.listar"), "html", null, true);
        echo "\">Arenas </a>
                        </li>
                        ";
        // line 37
        if ((($context["admin"] ?? null) == true)) {
            // line 38
            echo "                            <li class=\"nav-item ";
            $this->displayBlock('practice', $context, $blocks);
            echo "\">
                                <a class=\"nav-link\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("wanda.home.practice"), "html", null, true);
            echo "\">Praticar </a>
                            </li>
                        ";
        }
        // line 42
        echo "                        ";
        if ((($context["admin"] ?? null) == true)) {
            // line 43
            echo "                            <li class=\"nav-item ";
            $this->displayBlock('registerUser', $context, $blocks);
            echo "\">
                                <a class=\"nav-link\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("wanda.user.register"), "html", null, true);
            echo "\">Cadastrar Usuário </a>
                            </li>
                            <li class=\"nav-item ";
            // line 46
            $this->displayBlock('arenasControl', $context, $blocks);
            echo "\">
                                <a class=\"nav-link\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("wanda.arena.control.index"), "html", null, true);
            echo "\">Controle de Arenas </a>
                            </li>
                        ";
        }
        // line 50
        echo "
                    </ul>
                    <a class=\"nav-link\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("logout"), "html", null, true);
        echo "\">Sair</a>
                </div>

            </nav>

        </header>
       <main>
           <h3 class=\"mb-5 mt-3 ml-5\"> ";
        // line 59
        $this->displayBlock('titlePage', $context, $blocks);
        echo "</h3>
           <section class=\"container-fluid mb-5\" >
               ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "           </section>
       </main>
        <footer class=\"mt-auto bg-dark text-light border-top footer border-white position-fixed\" style=\"bottom: 0px; width: 100%\">
            <div class=\" float-right hidden-xs mr-2 version\">
                <b>Version</b> 0.1.2
            </div>
            <strong>Copyright &copy; 2017-2018 <a href=\"mailto:alvesgamadossantos@gmail.com\">Luis Alves</a> e <a href=\"#\">Telemídia</a></strong>.
            All rights
            reserved.
        </footer>

    </div>
</body>

</html>";
    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
    }

    // line 19
    public function block_scripthead($context, array $blocks = array())
    {
    }

    // line 34
    public function block_arena($context, array $blocks = array())
    {
    }

    // line 38
    public function block_practice($context, array $blocks = array())
    {
    }

    // line 43
    public function block_registerUser($context, array $blocks = array())
    {
    }

    // line 46
    public function block_arenasControl($context, array $blocks = array())
    {
    }

    // line 59
    public function block_titlePage($context, array $blocks = array())
    {
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "View/Layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 61,  198 => 59,  193 => 46,  188 => 43,  183 => 38,  178 => 34,  173 => 19,  168 => 18,  150 => 62,  148 => 61,  143 => 59,  133 => 52,  129 => 50,  123 => 47,  119 => 46,  114 => 44,  109 => 43,  106 => 42,  100 => 39,  95 => 38,  93 => 37,  88 => 35,  84 => 34,  75 => 28,  65 => 20,  63 => 19,  59 => 18,  52 => 14,  48 => 13,  44 => 12,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!doctype html>
<html lang=\"pt-br\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <meta name=\"description\" content=\"site Wandarena\">
    <meta name=\"author\" content=\"Luis Alves\">
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/bootstrap.min.css\" >
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/style.css\">
    <script src=\"{{ base_url() }}/js/bootstrap.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <title>Wandarena | {% block title %}{% endblock %}</title>
    {% block scripthead %}{% endblock %}



</head>
<body class=\" backgroundBody\">
    <div style=\"max-height: 100%; min-height: 100%\">
        <header class=\"d-inline\">
            <nav class=\"navbar navbar-expand-lg bg-yellow navbar-light\">
                <a class=\"navbar-brand font-weight-bold text-dark\" href=\"{{  path_for('wanda.home.index') }}\">Wandarena<b class=\"font-weight-normal text-secondary\">Telemídia</b></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse d-inline\" id=\"navbarNavAltMarkup\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item {% block arena %}{% endblock %}\">
                            <a class=\"nav-link\" href=\"{{ path_for('wanda.home.listar') }}\">Arenas </a>
                        </li>
                        {% if admin == true %}
                            <li class=\"nav-item {% block practice %}{% endblock %}\">
                                <a class=\"nav-link\" href=\"{{ path_for('wanda.home.practice') }}\">Praticar </a>
                            </li>
                        {% endif %}
                        {% if admin == true %}
                            <li class=\"nav-item {% block registerUser %}{% endblock %}\">
                                <a class=\"nav-link\" href=\"{{ path_for('wanda.user.register') }}\">Cadastrar Usuário </a>
                            </li>
                            <li class=\"nav-item {% block arenasControl %}{% endblock %}\">
                                <a class=\"nav-link\" href=\"{{ path_for('wanda.arena.control.index') }}\">Controle de Arenas </a>
                            </li>
                        {% endif %}

                    </ul>
                    <a class=\"nav-link\" href=\"{{ path_for('logout') }}\">Sair</a>
                </div>

            </nav>

        </header>
       <main>
           <h3 class=\"mb-5 mt-3 ml-5\"> {% block titlePage %}{% endblock %}</h3>
           <section class=\"container-fluid mb-5\" >
               {% block content%} {% endblock %}
           </section>
       </main>
        <footer class=\"mt-auto bg-dark text-light border-top footer border-white position-fixed\" style=\"bottom: 0px; width: 100%\">
            <div class=\" float-right hidden-xs mr-2 version\">
                <b>Version</b> 0.1.2
            </div>
            <strong>Copyright &copy; 2017-2018 <a href=\"mailto:alvesgamadossantos@gmail.com\">Luis Alves</a> e <a href=\"#\">Telemídia</a></strong>.
            All rights
            reserved.
        </footer>

    </div>
</body>

</html>", "View/Layout.twig", "/var/www/html/Wandarena/app/src/View/Layout.twig");
    }
}
