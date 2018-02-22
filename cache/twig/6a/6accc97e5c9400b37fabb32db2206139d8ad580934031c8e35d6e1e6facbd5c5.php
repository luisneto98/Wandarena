<?php

/* View/Arena/cardsGamePlayer.twig */
class __TwigTemplate_e64f239b895bd363d8f83430afd17a24d1ba09ae0ce6482b039df96c30d4bc88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("View/Layout.twig", "View/Arena/cardsGamePlayer.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlePage' => array($this, 'block_titlePage'),
            'arenas' => array($this, 'block_arenas'),
            'scripthead' => array($this, 'block_scripthead'),
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
        echo " Tocador ";
    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        echo "Tocador";
    }

    // line 4
    public function block_arenas($context, array $blocks = array())
    {
        echo " active ";
    }

    // line 5
    public function block_scripthead($context, array $blocks = array())
    {
        // line 6
        echo "    <script>

        \$(document).ready(function(){
            \$(\"#velocidade\").change(function(){
                aux = parseInt(\$(\"#velocidade\").val());
                if(aux >= 0)
                    cardspeed = aux;
            });
        });

        function update(){
            canvas = document.getElementById('canv');
            if(canvas.getContext){
                ctx = canvas.getContext('2d');
                loadGameData();
                loadImages();
                animate();
            }
        }
/*
        function animate(){
            if(zas == -1)
                requestAnimationFrame( animate );
            else{
                //console.log(\"oi\");
                cancelAnimationFrame( animate );
                if(modotv != false){
                    //console.log(\"oi\");
                    setTimeout(function() { window.location.href = \"../modotv.php\"; }, 5000);
                }
            }
            //setTimeout(animate, 1000);
            partida();
        }
*/
    </script>
";
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        // line 44
        echo "    <input id=\"velocidade\" type=\"number\">
    <canvas id=\"canv\" width=\"1024\" height=\"512\">
    <script>
        var gamedata;
        function loadGameData(){
            gamedata = {};
            gamedata.matchs = [];
            gamedata.winner = ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["game"] ?? null), "winner", array()), "html", null, true);
        echo ";

                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["game"] ?? null), "matchs", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 54
            echo "                    gamedata.matchs[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "] = {};
                    gamedata.matchs[";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].player1 = {};
                    gamedata.matchs[";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].player1.cards = [];
                    ";
            // line 57
            $context["loop1"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array());
            // line 58
            echo "
                    ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["match"], "player1", array()), "deck", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 60
                echo "                        gamedata.matchs[";
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].player1.cards[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "] = \"";
                echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                echo "\";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "
                    gamedata.matchs[";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].player2 = {};
                    gamedata.matchs[";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].player2.cards = [];

                    ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["match"], "player2", array()), "deck", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 67
                echo "                        gamedata.matchs[";
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].player2.cards[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "] = \"";
                echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                echo "\";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "

                    gamedata.matchs[";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].rounds = [];
                    gamedata.matchs[";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].winner = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["match"], "winner", array()), "html", null, true);
            echo ";
                    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["match"], "rounds", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["round"]) {
                // line 74
                echo "                        gamedata.matchs[";
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "] = {};
                        gamedata.matchs[";
                // line 75
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player1 = {};
                        gamedata.matchs[";
                // line 76
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player1.hand = [];
                        ";
                // line 77
                $context["loop2"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array());
                // line 78
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["round"], "player1", array()), "hand", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                    // line 79
                    echo "                            gamedata.matchs[";
                    echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                    echo "].rounds[";
                    echo twig_escape_filter($this->env, ($context["loop2"] ?? null), "html", null, true);
                    echo "].player1.hand[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                    echo "] = \"";
                    echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                    echo "\";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                        gamedata.matchs[";
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player1.playedcard = \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["round"], "player1", array()), "playedCard", array()), "html", null, true);
                echo "\";

                        gamedata.matchs[";
                // line 83
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player2 = {};
                        gamedata.matchs[";
                // line 84
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player2.hand = [];
                        ";
                // line 85
                $context["loop2"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array());
                // line 86
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["round"], "player2", array()), "hand", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                    // line 87
                    echo "                        gamedata.matchs[";
                    echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                    echo "].rounds[";
                    echo twig_escape_filter($this->env, ($context["loop2"] ?? null), "html", null, true);
                    echo "].player2.hand[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                    echo "] = \"";
                    echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                    echo "\";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                        gamedata.matchs[";
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player2.playedcard = \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["round"], "player2", array()), "playedCard", array()), "html", null, true);
                echo "\";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['round'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
        }
        loadGameData();
        console.log(gamedata);
        ///////////////////////
        function printNames(){
            ctx.save();
            ctx.fillStyle = \"rgba(255, 255, 255, 255)\";
            ctx.scale(3, 3);
            //ctx.font = 'bold 10pt Courier'; /* Experimental */
            ctx.fillText(namejog1.toUpperCase()/*\"Jogador 1\"*/, 150/3, 50/3);
            //ctx.fillText(namejog1.toUpperCase()/*\"Jogador 1\"*/, 255/3, 50/3); // Verificar se está correto posteriormente
            ctx.fillText(namejog2.toUpperCase()/*\"Jogador 2\"*/, 542/3, 50/3);
            //ctx.fillText(namejog2.toUpperCase()/*\"Jogador 2\"*/, 540/3, 50/3); // Lembre-se da posição original em relação a desenhos de textos no canvas (verificar isso)
            ctx.scale(1, 1);
            ctx.restore();
        }

        function drawScores(){
            ctx.save();
            ctx.fillStyle = \"rgba(255, 255, 255, 255)\"
            ctx.save();
            ctx.scale(3.2, 3.15);
            ctx.fillText(\"Ganhou:\" + jogador1.rodadas, 145/3.12, 80/3.15);
            ctx.fillText(\"Ganhou:\" + jogador2.rodadas, 527/3.12, 80/3.15);
            ctx.restore();
            ctx.save();
            ctx.scale(1.2, 1.2);
            ctx.fillText(\"Restam:\" + (totalRodadas - rodada), 430/1.2, 10/1.2);
            ctx.save();
            ctx.scale(1.4, 1.4);
            ctx.fillText(\"Atual: \" + jogador1.confronto, 12/1.4, 154/1.4);
            ctx.fillText(\"Atual: \" + jogador2.confronto, (1024-12-250)/1.4, 154/1.4);
            ctx.restore();
            ctx.save();
            ctx.scale(1, 1);
            ctx.fillRect(120, 90, jogador1.rodadas*(610/100), 30);
            ctx.fillRect(840-106-jogador2.rodadas*(610/100), 90,jogador2.rodadas*(610/100), 30);
            ctx.restore();
            ctx.restore();
            ctx.scale(4, 4);
            if(zas == 1)
                ctx.fillText(\"VENCEDOR: \" + namejog1.toUpperCase(), 80/4, 250/4);
            if(zas == 2)
                ctx.fillText(\"VENCEDOR: \" + namejog2.toUpperCase(), 80/4, 250/4);
            if(zas == 0)
                ctx.fillText(\"EMPATE!\", 480/4, 250/4);
            ctx.scale(1, 1);
            ctx.restore();

        }

        function drawacard(n, x, y){
            ctx.drawImage(cardsImage[n], x, y);
        }

        function drawcards(){
            var j = 0;
            for(var i in jogador1.mao){
                drawacard(jogador1.mao[i], jogador1.cardx[j], jogador1.cardy[j]);
                j++;
            }
            j = 0;
            for(var i in jogador2.mao){
                drawacard(jogador2.mao[i], jogador2.cardx[j], jogador2.cardy[j]);
                j++;
            }
        }

        function canvas_draw(){
            ctx.font = \"12px Comic Sans\";
            ctx.save();
            ctx.drawImage(imageBG2, 0, 0, imageBG2.width, imageBG2.height);

            ctx.drawImage(imageEnemy_1, 20, 340, imageEnemy_1.width, imageEnemy_1.height);
            ctx.drawImage(imageEnemy_2, 1024-180, 340);
            ctx.drawImage(imageFace_1, 12, 20);
            ctx.drawImage(imageFace_2, 1024-140, 20);
            ctx.restore();
            printNames();
            drawcards();
            drawScores();
        }

    </script>
";
    }

    public function getTemplateName()
    {
        return "View/Arena/cardsGamePlayer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 93,  412 => 91,  391 => 89,  368 => 87,  350 => 86,  348 => 85,  342 => 84,  336 => 83,  326 => 81,  303 => 79,  285 => 78,  283 => 77,  277 => 76,  271 => 75,  264 => 74,  247 => 73,  241 => 72,  237 => 71,  233 => 69,  212 => 67,  195 => 66,  190 => 64,  186 => 63,  183 => 62,  162 => 60,  145 => 59,  142 => 58,  140 => 57,  136 => 56,  132 => 55,  127 => 54,  110 => 53,  105 => 51,  96 => 44,  93 => 43,  53 => 6,  50 => 5,  44 => 4,  38 => 3,  32 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} Tocador {% endblock %}
{% block titlePage %}Tocador{% endblock %}
{% block arenas %} active {% endblock %}
{% block scripthead %}
    <script>

        \$(document).ready(function(){
            \$(\"#velocidade\").change(function(){
                aux = parseInt(\$(\"#velocidade\").val());
                if(aux >= 0)
                    cardspeed = aux;
            });
        });

        function update(){
            canvas = document.getElementById('canv');
            if(canvas.getContext){
                ctx = canvas.getContext('2d');
                loadGameData();
                loadImages();
                animate();
            }
        }
/*
        function animate(){
            if(zas == -1)
                requestAnimationFrame( animate );
            else{
                //console.log(\"oi\");
                cancelAnimationFrame( animate );
                if(modotv != false){
                    //console.log(\"oi\");
                    setTimeout(function() { window.location.href = \"../modotv.php\"; }, 5000);
                }
            }
            //setTimeout(animate, 1000);
            partida();
        }
*/
    </script>
{% endblock %}
{% block content %}
    <input id=\"velocidade\" type=\"number\">
    <canvas id=\"canv\" width=\"1024\" height=\"512\">
    <script>
        var gamedata;
        function loadGameData(){
            gamedata = {};
            gamedata.matchs = [];
            gamedata.winner = {{ game.winner }};

                {% for match in game.matchs %}
                    gamedata.matchs[{{ loop.index0 }}] = {};
                    gamedata.matchs[{{ loop.index0 }}].player1 = {};
                    gamedata.matchs[{{ loop.index0 }}].player1.cards = [];
                    {% set loop1 = loop.index0 %}

                    {% for card in match.player1.deck %}
                        gamedata.matchs[{{ loop1 }}].player1.cards[{{  loop.index0  }}] = \"{{ card }}\";
                    {% endfor %}

                    gamedata.matchs[{{ loop.index0 }}].player2 = {};
                    gamedata.matchs[{{ loop.index0 }}].player2.cards = [];

                    {% for card in match.player2.deck %}
                        gamedata.matchs[{{ loop1 }}].player2.cards[{{  loop.index0  }}] = \"{{ card }}\";
                    {% endfor %}


                    gamedata.matchs[{{ loop.index0 }}].rounds = [];
                    gamedata.matchs[{{ loop.index0 }}].winner = {{ match.winner }};
                    {% for round in match.rounds %}
                        gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}] = {};
                        gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}].player1 = {};
                        gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}].player1.hand = [];
                        {% set loop2 = loop.index0 %}
                        {% for card in round.player1.hand %}
                            gamedata.matchs[{{ loop1 }}].rounds[{{ loop2 }}].player1.hand[{{ loop.index0 }}] = \"{{ card }}\";
                        {% endfor %}
                        gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}].player1.playedcard = \"{{ round.player1.playedCard }}\";

                        gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}].player2 = {};
                        gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}].player2.hand = [];
                        {% set loop2 = loop.index0 %}
                        {% for card in round.player2.hand %}
                        gamedata.matchs[{{ loop1 }}].rounds[{{ loop2 }}].player2.hand[{{ loop.index0 }}] = \"{{ card }}\";
                        {% endfor %}
                        gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}].player2.playedcard = \"{{ round.player2.playedCard }}\";
                    {% endfor %}

                 {% endfor %}

        }
        loadGameData();
        console.log(gamedata);
        ///////////////////////
        function printNames(){
            ctx.save();
            ctx.fillStyle = \"rgba(255, 255, 255, 255)\";
            ctx.scale(3, 3);
            //ctx.font = 'bold 10pt Courier'; /* Experimental */
            ctx.fillText(namejog1.toUpperCase()/*\"Jogador 1\"*/, 150/3, 50/3);
            //ctx.fillText(namejog1.toUpperCase()/*\"Jogador 1\"*/, 255/3, 50/3); // Verificar se está correto posteriormente
            ctx.fillText(namejog2.toUpperCase()/*\"Jogador 2\"*/, 542/3, 50/3);
            //ctx.fillText(namejog2.toUpperCase()/*\"Jogador 2\"*/, 540/3, 50/3); // Lembre-se da posição original em relação a desenhos de textos no canvas (verificar isso)
            ctx.scale(1, 1);
            ctx.restore();
        }

        function drawScores(){
            ctx.save();
            ctx.fillStyle = \"rgba(255, 255, 255, 255)\"
            ctx.save();
            ctx.scale(3.2, 3.15);
            ctx.fillText(\"Ganhou:\" + jogador1.rodadas, 145/3.12, 80/3.15);
            ctx.fillText(\"Ganhou:\" + jogador2.rodadas, 527/3.12, 80/3.15);
            ctx.restore();
            ctx.save();
            ctx.scale(1.2, 1.2);
            ctx.fillText(\"Restam:\" + (totalRodadas - rodada), 430/1.2, 10/1.2);
            ctx.save();
            ctx.scale(1.4, 1.4);
            ctx.fillText(\"Atual: \" + jogador1.confronto, 12/1.4, 154/1.4);
            ctx.fillText(\"Atual: \" + jogador2.confronto, (1024-12-250)/1.4, 154/1.4);
            ctx.restore();
            ctx.save();
            ctx.scale(1, 1);
            ctx.fillRect(120, 90, jogador1.rodadas*(610/100), 30);
            ctx.fillRect(840-106-jogador2.rodadas*(610/100), 90,jogador2.rodadas*(610/100), 30);
            ctx.restore();
            ctx.restore();
            ctx.scale(4, 4);
            if(zas == 1)
                ctx.fillText(\"VENCEDOR: \" + namejog1.toUpperCase(), 80/4, 250/4);
            if(zas == 2)
                ctx.fillText(\"VENCEDOR: \" + namejog2.toUpperCase(), 80/4, 250/4);
            if(zas == 0)
                ctx.fillText(\"EMPATE!\", 480/4, 250/4);
            ctx.scale(1, 1);
            ctx.restore();

        }

        function drawacard(n, x, y){
            ctx.drawImage(cardsImage[n], x, y);
        }

        function drawcards(){
            var j = 0;
            for(var i in jogador1.mao){
                drawacard(jogador1.mao[i], jogador1.cardx[j], jogador1.cardy[j]);
                j++;
            }
            j = 0;
            for(var i in jogador2.mao){
                drawacard(jogador2.mao[i], jogador2.cardx[j], jogador2.cardy[j]);
                j++;
            }
        }

        function canvas_draw(){
            ctx.font = \"12px Comic Sans\";
            ctx.save();
            ctx.drawImage(imageBG2, 0, 0, imageBG2.width, imageBG2.height);

            ctx.drawImage(imageEnemy_1, 20, 340, imageEnemy_1.width, imageEnemy_1.height);
            ctx.drawImage(imageEnemy_2, 1024-180, 340);
            ctx.drawImage(imageFace_1, 12, 20);
            ctx.drawImage(imageFace_2, 1024-140, 20);
            ctx.restore();
            printNames();
            drawcards();
            drawScores();
        }

    </script>
{% endblock %}", "View/Arena/cardsGamePlayer.twig", "/var/www/html/Wandarena/app/src/View/Arena/cardsGamePlayer.twig");
    }
}
