<?php

/* View/login.twig */
class __TwigTemplate_7d3f7e626fdf2ef47c495ffc90836fa8ada976830c7ef17e15683df6ab11d317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
    <meta name=\"description\" content=\"pagina de login do site Wandarena\">
    <meta name=\"author\" content=\"Luis Alves\">
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/bootstrap.min.css\" >
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/sigin.css\">
    <title>Wandarena | log in</title>



</head>

<body class=\"text-center\">
<form class=\"form-signin\" method=\"post\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth"), "html", null, true);
        echo "\">
    <img class=\"mb-4 text-center\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/Images/System/Logo_Wandarena.png\" alt=\"\" width=\"330\" height=\"300\">
    <h6 class=\"h6 mb-3 font-weight-normal\">Bem vindo ao sistema Wandarena</h6>
    <label for=\"inputUser\" class=\"sr-only\">Usuario</label>
    <input type=\"text\" name=\"username\" id=\"inputUser\" class=\"form-control\" placeholder=\"Usuário\" required autofocus>
    <label for=\"inputPassword\" class=\"sr-only\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Senha\" required>
    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Entrar</button>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "View/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  45 => 19,  34 => 11,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!doctype html>
<html lang=\"pt-br\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"pagina de login do site Wandarena\">
    <meta name=\"author\" content=\"Luis Alves\">
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/bootstrap.min.css\" >
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/sigin.css\">
    <title>Wandarena | log in</title>



</head>

<body class=\"text-center\">
<form class=\"form-signin\" method=\"post\" action=\"{{ path_for('auth') }}\">
    <img class=\"mb-4 text-center\" src=\"{{ base_url() }}/Images/System/Logo_Wandarena.png\" alt=\"\" width=\"330\" height=\"300\">
    <h6 class=\"h6 mb-3 font-weight-normal\">Bem vindo ao sistema Wandarena</h6>
    <label for=\"inputUser\" class=\"sr-only\">Usuario</label>
    <input type=\"text\" name=\"username\" id=\"inputUser\" class=\"form-control\" placeholder=\"Usuário\" required autofocus>
    <label for=\"inputPassword\" class=\"sr-only\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Senha\" required>
    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Entrar</button>
</form>
</body>
</html>", "View/login.twig", "/var/www/html/Wandarena/app/src/View/login.twig");
    }
}
