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
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <input id=\"velocidade\" onload=\"draw();\" type=\"number\">
    <canvas id=\"wanda\"  width=\"1024\" height=\"512\">
    <script>

        var ctx = loadCanvasCtx();
        var gamedata;
        /////background
        var imageBG = new Image();
        imageBG.src = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, ($context["imagebg"] ?? null), "html", null, true);
        echo "\";
        ////////
        ///////enemy
        var imageEnemy1 = new Image();
        imageEnemy1.src = \"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["gameimages"] ?? null), "enemy", array()), "html", null, true);
        echo "\";
        var imageEnemy2 = new Image();
        imageEnemy2.src = \"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["gameimages"] ?? null), "enemy", array()), "html", null, true);
        echo "\";
        ///////
        //////face
        var imageFace1 = new Image();
        imageFace1.src = \"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["gameimages"] ?? null), "face", array()), "html", null, true);
        echo "\";
        var imageFace2 = new Image();
        imageFace2.src = \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["gameimages"] ?? null), "face", array()), "html", null, true);
        echo "\";
        ///////
        //////var system
        var match = 0;
        var round = 0;
        var max_matchs = ";
        // line 33
        echo twig_escape_filter($this->env, ($context["matchs"] ?? null), "html", null, true);
        echo ";
        var max_rounds = ";
        // line 34
        echo twig_escape_filter($this->env, ($context["rounds"] ?? null), "html", null, true);
        echo ";
        var heightDeck = 300;
        var widthScreen = 1024;
        var qtdcards = ";
        // line 37
        echo twig_escape_filter($this->env, ($context["qtdCards"] ?? null), "html", null, true);
        echo ";
        var imageCards = [];
        loadImageCards();
        var marginCard = (heightDeck / (qtdcards + 1))/qtdcards;
        var heightCard = (heightDeck / (qtdcards)) - marginCard;
        var widthCard = heightCard;
        //////
        ///////player1
        var player1 = {round: [], deck:[] , name: \"Jogador1\", pointsInMatch: 0 , pointsInGame : 0, posiXDeck: 150 , posiYDeck:150};
        ///////
        ///////Player2
        var player2 = {round: [], deck:[] , name: \"Jogador2\", pointsInMatch: 0 , pointsInGame : 0, posiXDeck: widthScreen-150 , posiYDeck:150};
        ///////


        function loadImageCards(){
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cardsimage"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 54
            echo "                imageCards[\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["card"], "name", array()), "html", null, true);
            echo "\"] = new Image();
                imageCards[\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["card"], "name", array()), "html", null, true);
            echo "\"].src = \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["card"], "image", array()), "html", null, true);
            echo "\";
                imageCards[\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["card"], "name", array()), "html", null, true);
            echo "\"].width = widthCard;
                imageCards[\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["card"], "name", array()), "html", null, true);
            echo "\"].height = heightCard;
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        }
        function configCards(){
            for (i = 0; i < player1.round[round].hand.length; i++) {
                var namecard = player1.round[round].hand[i];
                player1.round[round].hand[i] = {};
                player1.round[round].hand[i].name = namecard;
                player1.round[round].hand[i].image = imageCards[player1.round[round].hand[i].name];
                player1.round[round].hand[i].posiX = player1.posiXDeck;
                player1.round[round].hand[i].posiY = player1.posiYDeck + ((heightCard+marginCard)*i);
            }
            for (i = 0; i < player2.round[round].hand.length; i++) {
                var namecard = player2.round[round].hand[i];
                player2.round[round].hand[i] = {};
                player2.round[round].hand[i].name = namecard;
                player2.round[round].hand[i].image = imageCards[player2.round[round].hand[i].name];
                player2.round[round].hand[i].posiX = player2.posiXDeck-widthCard;
                player2.round[round].hand[i].posiY = player2.posiYDeck + ((heightCard+marginCard)*i);
            }
        }
        function loadCanvasCtx(){
            var c = document.getElementById(\"wanda\");
            var ctx = c.getContext(\"2d\");
            return ctx;
        }

        function loadGameData(){
            gamedata = {};
            gamedata.matchs = [];
            gamedata.winner = ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["game"] ?? null), "winner", array()), "html", null, true);
        echo ";

                ";
        // line 89
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
            // line 90
            echo "                    gamedata.matchs[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "] = {};
                    gamedata.matchs[";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].player1 = {};
                    gamedata.matchs[";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].player1.cards = [];
                    ";
            // line 93
            $context["loop1"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array());
            // line 94
            echo "
                    ";
            // line 95
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
                // line 96
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
            // line 98
            echo "
                    gamedata.matchs[";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].player2 = {};
                    gamedata.matchs[";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].player2.cards = [];

                    ";
            // line 102
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
                // line 103
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
            // line 105
            echo "

                    gamedata.matchs[";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].rounds = [];
                    gamedata.matchs[";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].winner = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["match"], "winner", array()), "html", null, true);
            echo ";
                    ";
            // line 109
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
                // line 110
                echo "                        gamedata.matchs[";
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "] = {};
                        gamedata.matchs[";
                // line 111
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player1 = {};
                        gamedata.matchs[";
                // line 112
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player1.hand = [];
                        ";
                // line 113
                $context["loop2"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array());
                // line 114
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
                    // line 115
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
                // line 117
                echo "                        gamedata.matchs[";
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player1.playedcard = \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["round"], "player1", array()), "playedCard", array()), "html", null, true);
                echo "\";

                        gamedata.matchs[";
                // line 119
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player2 = {};
                        gamedata.matchs[";
                // line 120
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player2.hand = [];
                        ";
                // line 121
                $context["loop2"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array());
                // line 122
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
                    // line 123
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
                // line 125
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
            // line 127
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
        // line 129
        echo "
        }

        function loadMatch(){
            for (i = 0; i < gamedata.matchs[match].rounds.length; i++) {
                player1.round[i] = {};
                player1.round[i].hand = gamedata.matchs[match].rounds[i].player1.hand;
                player1.round[i].playedcard = gamedata.matchs[match].rounds[i].player1.playedcard;
            }

            for (i = 0; i < gamedata.matchs[match].rounds.length; i++) {
                player2.round[i] = {};
                player2.round[i].hand = gamedata.matchs[match].rounds[i].player2.hand;
                player2.round[i].playedcard = gamedata.matchs[match].rounds[i].player2.playedcard;
            }
            configCards();
            match = match+1;
            round = 0;
        }

        loadGameData();
        loadMatch();
        console.log(gamedata);
        ///////////////////////
        function printNames(){
            ctx.save();
            ctx.fillStyle = \"rgba(255, 255, 255, 255)\";
            ctx.scale(3, 3);
            //ctx.font = 'bold 10pt Courier'; /* Experimental */
            ctx.fillText(player1.name/*\"Jogador 1\"*/, 255/3, 50/3);
            //ctx.fillText(namejog1.toUpperCase()/*\"Jogador 1\"*/, 255/3, 50/3); // Verificar se está correto posteriormente
            ctx.fillText(player2.name/*\"Jogador 2\"*/, 540/3, 50/3);
            //ctx.fillText(namejog2.toUpperCase()/*\"Jogador 2\"*/, 540/3, 50/3); // Lembre-se da posição original em relação a desenhos de textos no canvas (verificar isso)
            ctx.scale(1, 1);
            ctx.restore();
        }

        function drawScores(){
            ctx.save();
            ctx.fillStyle = \"rgba(255, 255, 255, 255)\"
            ctx.save();
            ctx.scale(3.2, 3.15);
            ctx.fillText(\"Ganhou:\" + player1.pointsInGame, 145/3.12, 80/3.15);
            ctx.fillText(\"Ganhou:\" + player2.pointsInGame, 527/3.12, 80/3.15);
            ctx.restore();
            ctx.save();
            ctx.scale(1.2, 1.2);
            ctx.fillText(\"Restam:\" + (max_matchs - match), 430/1.2, 10/1.2);
            ctx.save();
            ctx.scale(1.4, 1.4);
            ctx.fillText(\"Atual: \" + player1.pointsInMatch, 12/1.4, 154/1.4);
            ctx.fillText(\"Atual: \" + player2.pointsInMatch, (1024-12-250)/1.4, 154/1.4);
            ctx.restore();
            ctx.save();
            ctx.scale(1, 1);
            ctx.fillRect(120, 90, player1.pointsInGame*(610/100), 30);
            ctx.fillRect(840-106-player2.pointsInGame*(610/100), 90,player2.pointsInGame*(610/100), 30);
            //ctx.fillRect(player1.posiXDeck, player1.posiYDeck,100, 250);
            //ctx.fillRect(player2.posiXDeck-100, player2.posiYDeck,100, 250);
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

        function drawcards(){
            var j = 0;

            for(i = 0 ; i < player1.round[round].hand.length ; i++){
                console.log(player1.round[round].hand[i].image.width);
                ctx.drawImage(player1.round[round].hand[i].image, player1.round[round].hand[i].posiX, player1.round[round].hand[i].posiY,
                    widthCard,heightCard);

            }
            for(i = 0 ; i < player2.round[round].hand.length ; i++){
                console.log(player2.round[round].hand[i]);
                ctx.drawImage(player2.round[round].hand[i].image, player2.round[round].hand[i].posiX, player2.round[round].hand[i].posiY,
                    widthCard,heightCard);

            }

        }
        canvas_draw();
        function canvas_draw(){
            ctx.font = \"12px Comic Sans\";
            ctx.save();
            ctx.drawImage(imageBG, 0, 0, imageBG.width, imageBG.height);


            ctx.drawImage(imageEnemy1, 20, 340, imageEnemy1.width, imageEnemy1.height);
            ctx.drawImage(imageEnemy2, 1024-180, 340);
            ctx.drawImage(imageFace1, 12, 20);
            ctx.drawImage(imageFace2, 1024-140, 20);
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
        return array (  514 => 129,  499 => 127,  478 => 125,  455 => 123,  437 => 122,  435 => 121,  429 => 120,  423 => 119,  413 => 117,  390 => 115,  372 => 114,  370 => 113,  364 => 112,  358 => 111,  351 => 110,  334 => 109,  328 => 108,  324 => 107,  320 => 105,  299 => 103,  282 => 102,  277 => 100,  273 => 99,  270 => 98,  249 => 96,  232 => 95,  229 => 94,  227 => 93,  223 => 92,  219 => 91,  214 => 90,  197 => 89,  192 => 87,  162 => 59,  154 => 57,  150 => 56,  143 => 55,  138 => 54,  134 => 53,  115 => 37,  109 => 34,  105 => 33,  96 => 28,  90 => 26,  82 => 22,  76 => 20,  68 => 16,  58 => 8,  55 => 7,  50 => 5,  44 => 4,  38 => 3,  32 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} Tocador {% endblock %}
{% block titlePage %}Tocador{% endblock %}
{% block arenas %} active {% endblock %}
{% block scripthead %}
{% endblock %}
{% block content %}
    <input id=\"velocidade\" onload=\"draw();\" type=\"number\">
    <canvas id=\"wanda\"  width=\"1024\" height=\"512\">
    <script>

        var ctx = loadCanvasCtx();
        var gamedata;
        /////background
        var imageBG = new Image();
        imageBG.src = \"{{ base_url() }}{{ imagebg }}\";
        ////////
        ///////enemy
        var imageEnemy1 = new Image();
        imageEnemy1.src = \"{{ base_url() }}{{ gameimages.enemy }}\";
        var imageEnemy2 = new Image();
        imageEnemy2.src = \"{{ base_url() }}{{ gameimages.enemy }}\";
        ///////
        //////face
        var imageFace1 = new Image();
        imageFace1.src = \"{{ base_url() }}{{ gameimages.face }}\";
        var imageFace2 = new Image();
        imageFace2.src = \"{{ base_url() }}{{ gameimages.face }}\";
        ///////
        //////var system
        var match = 0;
        var round = 0;
        var max_matchs = {{ matchs }};
        var max_rounds = {{ rounds }};
        var heightDeck = 300;
        var widthScreen = 1024;
        var qtdcards = {{ qtdCards }};
        var imageCards = [];
        loadImageCards();
        var marginCard = (heightDeck / (qtdcards + 1))/qtdcards;
        var heightCard = (heightDeck / (qtdcards)) - marginCard;
        var widthCard = heightCard;
        //////
        ///////player1
        var player1 = {round: [], deck:[] , name: \"Jogador1\", pointsInMatch: 0 , pointsInGame : 0, posiXDeck: 150 , posiYDeck:150};
        ///////
        ///////Player2
        var player2 = {round: [], deck:[] , name: \"Jogador2\", pointsInMatch: 0 , pointsInGame : 0, posiXDeck: widthScreen-150 , posiYDeck:150};
        ///////


        function loadImageCards(){
            {% for card in cardsimage %}
                imageCards[\"{{ card.name }}\"] = new Image();
                imageCards[\"{{ card.name }}\"].src = \"{{ base_url() }}{{ card.image }}\";
                imageCards[\"{{ card.name }}\"].width = widthCard;
                imageCards[\"{{ card.name }}\"].height = heightCard;
            {% endfor %}
        }
        function configCards(){
            for (i = 0; i < player1.round[round].hand.length; i++) {
                var namecard = player1.round[round].hand[i];
                player1.round[round].hand[i] = {};
                player1.round[round].hand[i].name = namecard;
                player1.round[round].hand[i].image = imageCards[player1.round[round].hand[i].name];
                player1.round[round].hand[i].posiX = player1.posiXDeck;
                player1.round[round].hand[i].posiY = player1.posiYDeck + ((heightCard+marginCard)*i);
            }
            for (i = 0; i < player2.round[round].hand.length; i++) {
                var namecard = player2.round[round].hand[i];
                player2.round[round].hand[i] = {};
                player2.round[round].hand[i].name = namecard;
                player2.round[round].hand[i].image = imageCards[player2.round[round].hand[i].name];
                player2.round[round].hand[i].posiX = player2.posiXDeck-widthCard;
                player2.round[round].hand[i].posiY = player2.posiYDeck + ((heightCard+marginCard)*i);
            }
        }
        function loadCanvasCtx(){
            var c = document.getElementById(\"wanda\");
            var ctx = c.getContext(\"2d\");
            return ctx;
        }

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

        function loadMatch(){
            for (i = 0; i < gamedata.matchs[match].rounds.length; i++) {
                player1.round[i] = {};
                player1.round[i].hand = gamedata.matchs[match].rounds[i].player1.hand;
                player1.round[i].playedcard = gamedata.matchs[match].rounds[i].player1.playedcard;
            }

            for (i = 0; i < gamedata.matchs[match].rounds.length; i++) {
                player2.round[i] = {};
                player2.round[i].hand = gamedata.matchs[match].rounds[i].player2.hand;
                player2.round[i].playedcard = gamedata.matchs[match].rounds[i].player2.playedcard;
            }
            configCards();
            match = match+1;
            round = 0;
        }

        loadGameData();
        loadMatch();
        console.log(gamedata);
        ///////////////////////
        function printNames(){
            ctx.save();
            ctx.fillStyle = \"rgba(255, 255, 255, 255)\";
            ctx.scale(3, 3);
            //ctx.font = 'bold 10pt Courier'; /* Experimental */
            ctx.fillText(player1.name/*\"Jogador 1\"*/, 255/3, 50/3);
            //ctx.fillText(namejog1.toUpperCase()/*\"Jogador 1\"*/, 255/3, 50/3); // Verificar se está correto posteriormente
            ctx.fillText(player2.name/*\"Jogador 2\"*/, 540/3, 50/3);
            //ctx.fillText(namejog2.toUpperCase()/*\"Jogador 2\"*/, 540/3, 50/3); // Lembre-se da posição original em relação a desenhos de textos no canvas (verificar isso)
            ctx.scale(1, 1);
            ctx.restore();
        }

        function drawScores(){
            ctx.save();
            ctx.fillStyle = \"rgba(255, 255, 255, 255)\"
            ctx.save();
            ctx.scale(3.2, 3.15);
            ctx.fillText(\"Ganhou:\" + player1.pointsInGame, 145/3.12, 80/3.15);
            ctx.fillText(\"Ganhou:\" + player2.pointsInGame, 527/3.12, 80/3.15);
            ctx.restore();
            ctx.save();
            ctx.scale(1.2, 1.2);
            ctx.fillText(\"Restam:\" + (max_matchs - match), 430/1.2, 10/1.2);
            ctx.save();
            ctx.scale(1.4, 1.4);
            ctx.fillText(\"Atual: \" + player1.pointsInMatch, 12/1.4, 154/1.4);
            ctx.fillText(\"Atual: \" + player2.pointsInMatch, (1024-12-250)/1.4, 154/1.4);
            ctx.restore();
            ctx.save();
            ctx.scale(1, 1);
            ctx.fillRect(120, 90, player1.pointsInGame*(610/100), 30);
            ctx.fillRect(840-106-player2.pointsInGame*(610/100), 90,player2.pointsInGame*(610/100), 30);
            //ctx.fillRect(player1.posiXDeck, player1.posiYDeck,100, 250);
            //ctx.fillRect(player2.posiXDeck-100, player2.posiYDeck,100, 250);
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

        function drawcards(){
            var j = 0;

            for(i = 0 ; i < player1.round[round].hand.length ; i++){
                console.log(player1.round[round].hand[i].image.width);
                ctx.drawImage(player1.round[round].hand[i].image, player1.round[round].hand[i].posiX, player1.round[round].hand[i].posiY,
                    widthCard,heightCard);

            }
            for(i = 0 ; i < player2.round[round].hand.length ; i++){
                console.log(player2.round[round].hand[i]);
                ctx.drawImage(player2.round[round].hand[i].image, player2.round[round].hand[i].posiX, player2.round[round].hand[i].posiY,
                    widthCard,heightCard);

            }

        }
        canvas_draw();
        function canvas_draw(){
            ctx.font = \"12px Comic Sans\";
            ctx.save();
            ctx.drawImage(imageBG, 0, 0, imageBG.width, imageBG.height);


            ctx.drawImage(imageEnemy1, 20, 340, imageEnemy1.width, imageEnemy1.height);
            ctx.drawImage(imageEnemy2, 1024-180, 340);
            ctx.drawImage(imageFace1, 12, 20);
            ctx.drawImage(imageFace2, 1024-140, 20);
            ctx.restore();
            printNames();
            drawcards();
            drawScores();

        }

    </script>
{% endblock %}", "View/Arena/cardsGamePlayer.twig", "/var/www/html/Wandarena/app/src/View/Arena/cardsGamePlayer.twig");
    }
}
