<?php

/* View/Layout.twig */
class __TwigTemplate_c863a9da9ec1fc0fd54f1fc69a6317b56368ec145f08e27a9f588caf694351ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Arenas' => array($this, 'block_Arenas'),
            'Pratice' => array($this, 'block_Pratice'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/bootstrap.min.css\" >
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/style.css\">
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <title>Wandarena | ";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>



</head>
<body class=\" backgroundBody\">
    <header>
        <nav class=\"navbar navbar-expand-lg bg-yellow navbar-light \">
            <a class=\"navbar-brand font-weight-bold text-dark\" href=\"#\">Wandarena<b class=\"font-weight-normal text-secondary\">Telemídia</b></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse \" id=\"navbarNavAltMarkup\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item ";
        // line 32
        $this->displayBlock('Arenas', $context, $blocks);
        echo "\">
                        <a class=\"nav-link\" href=\"#\">Arenas </a>
                    </li>
                    ";
        // line 35
        if ((($context["admin"] ?? null) == false)) {
            // line 36
            echo "                        <li class=\"nav-item ";
            $this->displayBlock('Pratice', $context, $blocks);
            echo "\">
                            <a class=\"nav-link\" href=\"#\">Praticar </a>
                        </li>
                    ";
        }
        // line 40
        echo "                    ";
        if ((($context["admin"] ?? null) == true)) {
            // line 41
            echo "                        <li class=\"nav-item ";
            $this->displayBlock('registerUser', $context, $blocks);
            echo "\">
                            <a class=\"nav-link\" href=\"#\">Cadastrar Usuário </a>
                        </li>
                        <li class=\"nav-item ";
            // line 44
            $this->displayBlock('arenasControl', $context, $blocks);
            echo "\">
                            <a class=\"nav-link\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("wanda.arena.control.index"), "html", null, true);
            echo "\">Controle de Arenas </a>
                        </li>
                    ";
        }
        // line 48
        echo "                </ul>
            </div>
        </nav>

    </header>
   <main>
       <h3 class=\"mb-5 mt-3 ml-5 display-4\"> ";
        // line 54
        $this->displayBlock('titlePage', $context, $blocks);
        echo "</h3>
       <section class=\"container-fluid\">
           ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "       </section>
   </main>
    <footer class=\"mt-auto bg-dark text-light fixed-bottom border-top border-white\">
        <div class=\"float-right hidden-xs mr-2 version\">
            <b>Version</b> 0.1.2
        </div>
        <strong>Copyright &copy; 2017-2018 <a href=\"mailto:alvesgamadossantos@gmail.com\">Luis Alves</a> e <a href=\"#\">Telemídia</a></strong>.
        All rights
        reserved.
    </footer>


</body>

</html>";
    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
    }

    // line 32
    public function block_Arenas($context, array $blocks = array())
    {
    }

    // line 36
    public function block_Pratice($context, array $blocks = array())
    {
    }

    // line 41
    public function block_registerUser($context, array $blocks = array())
    {
    }

    // line 44
    public function block_arenasControl($context, array $blocks = array())
    {
    }

    // line 54
    public function block_titlePage($context, array $blocks = array())
    {
    }

    // line 56
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
        return array (  170 => 56,  165 => 54,  160 => 44,  155 => 41,  150 => 36,  145 => 32,  140 => 18,  122 => 57,  120 => 56,  115 => 54,  107 => 48,  101 => 45,  97 => 44,  90 => 41,  87 => 40,  79 => 36,  77 => 35,  71 => 32,  54 => 18,  47 => 14,  43 => 13,  39 => 12,  26 => 1,);
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



</head>
<body class=\" backgroundBody\">
    <header>
        <nav class=\"navbar navbar-expand-lg bg-yellow navbar-light \">
            <a class=\"navbar-brand font-weight-bold text-dark\" href=\"#\">Wandarena<b class=\"font-weight-normal text-secondary\">Telemídia</b></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse \" id=\"navbarNavAltMarkup\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item {% block Arenas %}{% endblock %}\">
                        <a class=\"nav-link\" href=\"#\">Arenas </a>
                    </li>
                    {% if admin == false %}
                        <li class=\"nav-item {% block Pratice %}{% endblock %}\">
                            <a class=\"nav-link\" href=\"#\">Praticar </a>
                        </li>
                    {% endif %}
                    {% if admin == true %}
                        <li class=\"nav-item {% block registerUser %}{% endblock %}\">
                            <a class=\"nav-link\" href=\"#\">Cadastrar Usuário </a>
                        </li>
                        <li class=\"nav-item {% block arenasControl %}{% endblock %}\">
                            <a class=\"nav-link\" href=\"{{ path_for('wanda.arena.control.index') }}\">Controle de Arenas </a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </nav>

    </header>
   <main>
       <h3 class=\"mb-5 mt-3 ml-5 display-4\"> {% block titlePage %}{% endblock %}</h3>
       <section class=\"container-fluid\">
           {% block content%} {% endblock %}
       </section>
   </main>
    <footer class=\"mt-auto bg-dark text-light fixed-bottom border-top border-white\">
        <div class=\"float-right hidden-xs mr-2 version\">
            <b>Version</b> 0.1.2
        </div>
        <strong>Copyright &copy; 2017-2018 <a href=\"mailto:alvesgamadossantos@gmail.com\">Luis Alves</a> e <a href=\"#\">Telemídia</a></strong>.
        All rights
        reserved.
    </footer>


</body>

</html>", "View/Layout.twig", "/var/www/html/Wandarena/app/src/View/Layout.twig");
    }
}
