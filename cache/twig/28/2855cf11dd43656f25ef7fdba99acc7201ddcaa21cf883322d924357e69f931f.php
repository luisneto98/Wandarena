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
            'ControlArenas' => array($this, 'block_ControlArenas'),
            'container' => array($this, 'block_container'),
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
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Arenas ";
        // line 33
        $this->displayBlock('Arenas', $context, $blocks);
        echo "</a>
                    </li>
                    ";
        // line 35
        if ((($context["admin"] ?? null) == false)) {
            // line 36
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Praticar ";
            // line 37
            $this->displayBlock('Pratice', $context, $blocks);
            echo "</a>
                        </li>
                    ";
        }
        // line 40
        echo "                    ";
        if ((($context["admin"] ?? null) == true)) {
            // line 41
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Cadastrar Usuário ";
            // line 42
            $this->displayBlock('registerUser', $context, $blocks);
            echo "</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Controle Arenas ";
            // line 45
            $this->displayBlock('ControlArenas', $context, $blocks);
            echo "</a>
                        </li>
                    ";
        }
        // line 48
        echo "                </ul>
            </div>
        </nav>

    </header>
   <section class=\" container\">
       ";
        // line 54
        $this->displayBlock('container', $context, $blocks);
        // line 55
        echo "
   </section>
    <footer class=\"mt-auto bg-dark text-light fixed-bottom border-top border-white\">
        <div class=\"float-right hidden-xs border-right version\">
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

    // line 33
    public function block_Arenas($context, array $blocks = array())
    {
    }

    // line 37
    public function block_Pratice($context, array $blocks = array())
    {
    }

    // line 42
    public function block_registerUser($context, array $blocks = array())
    {
    }

    // line 45
    public function block_ControlArenas($context, array $blocks = array())
    {
    }

    // line 54
    public function block_container($context, array $blocks = array())
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
        return array (  158 => 54,  153 => 45,  148 => 42,  143 => 37,  138 => 33,  133 => 18,  115 => 55,  113 => 54,  105 => 48,  99 => 45,  93 => 42,  90 => 41,  87 => 40,  81 => 37,  78 => 36,  76 => 35,  71 => 33,  53 => 18,  46 => 14,  42 => 13,  38 => 12,  25 => 1,);
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
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Arenas {% block Arenas %}{% endblock %}</a>
                    </li>
                    {% if admin == false %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Praticar {% block Pratice %}{% endblock %}</a>
                        </li>
                    {% endif %}
                    {% if admin == true %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Cadastrar Usuário {% block registerUser %}{% endblock %}</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Controle Arenas {% block ControlArenas %}{% endblock %}</a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </nav>

    </header>
   <section class=\" container\">
       {% block container%} {% endblock %}

   </section>
    <footer class=\"mt-auto bg-dark text-light fixed-bottom border-top border-white\">
        <div class=\"float-right hidden-xs border-right version\">
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
