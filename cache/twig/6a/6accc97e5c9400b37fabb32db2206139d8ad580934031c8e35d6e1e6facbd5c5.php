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
            'arena' => array($this, 'block_arena'),
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
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["gameinfo"] ?? null), "name", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["gameinfo"] ?? null), "name", array()), "html", null, true);
    }

    // line 4
    public function block_arena($context, array $blocks = array())
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
        echo "    <div class=\"container-fluid\">
        <div class=\"btn-group-vertical float-left\" role=\"group\" aria-label=\"velocidade\">
            <button type=\"button\" onclick=\"upVelocity()\" class=\"btn btn-primary\">+</button>
            <button type=\"button\" onclick=\"downVelocity()\" class=\"btn btn-primary\">-</button>
        </div>
        <canvas id=\"wanda\" class=\"mx-auto d-block\" width=\"1024\" height=\"512\">
            <script>

                var ctx = loadCanvasCtx();
                var requestAnimationFrame =
                    window.requestAnimationFrame ||
                    window.webkitRequestAnimationFrame ||
                    window.mozRequestAnimationFrame ||
                    window.msRequestAnimationFrame ||
                    window.oRequestAnimationFrame ||
                    function(callback) {
                        return setTimeout(callback, 1);
                    };
                var gamedata;
                /////background
                var imageBG = new Image();
                imageBG.src = \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["gameinfo"] ?? null), "imagebg", array()), "html", null, true);
        echo "\";
                ////////
                ///////enemy
                var imageEnemy1 = new Image();
                imageEnemy1.src = \"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["gameinfo"] ?? null), "imagesperson", array()), "enemy", array()), "html", null, true);
        echo "\";
                var imageEnemy2 = new Image();
                imageEnemy2.src = \"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["gameinfo"] ?? null), "imagesperson", array()), "enemy", array()), "html", null, true);
        echo "\";
                ///////
                //////face
                var imageFace1 = new Image();
                imageFace1.src = \"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["gameinfo"] ?? null), "imagesperson", array()), "face", array()), "html", null, true);
        echo "\";
                var imageFace2 = new Image();
                imageFace2.src = \"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["gameinfo"] ?? null), "imagesperson", array()), "face", array()), "html", null, true);
        echo "\";
                ///////
                //////var system
                var match = 0;
                var round = 0;
                var max_matchs = ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["gameinfo"] ?? null), "matchs", array()), "html", null, true);
        echo ";
                var max_rounds = ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["gameinfo"] ?? null), "rounds", array()), "html", null, true);
        echo ";
                var heightDeck = 300;
                var widthScreen = 1024;
                var heightScreen = 512;
                var qtdcards = ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["gameinfo"] ?? null), "countcards", array()), "html", null, true);
        echo ";
                var imageCards = [];
                loadImageCards();
                var marginCard = (heightDeck / (qtdcards + 1))/qtdcards;
                var heightCard = (heightDeck / (qtdcards)) - marginCard;
                var widthCard = heightCard;
                var loserCardAnimate = false;
                var selectedcardAnimate = true;
                var displacementCard = 30;
                var startMatch = true;
                var winnerMatch = 0;
                var time = 0;
                var velocity = 99;
                var limitVelocity = 500;

                //////
                ///////player1
                var player1 = {round: [], deck:[] , name: \"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["confrontation"] ?? null), "player1", array()), "nickname", array()), "html", null, true);
        echo "\", pointsInMatch: 0 , pointsInGame : 0, posiXDeck: 150 , posiYDeck:150,loser: false , selectedCardInMatch: 0};
                ///////
                ///////Player2
                var player2 = {round: [], deck:[] , name: ";
        // line 71
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["confrontation"] ?? null), "player2", array()) != null)) {
            // line 72
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["confrontation"] ?? null), "player2", array()), "nickname", array()), "html", null, true);
            echo "\"";
        } else {
            echo "\"Bot\"";
        }
        // line 73
        echo "                    , pointsInMatch: 0 , pointsInGame : 0, posiXDeck: widthScreen-150 , posiYDeck:150, loser: false, selectedCardInMatch: 0};
                ///////

                function upVelocity(){
                    if(velocity < limitVelocity)
                        velocity += 10;
                }function downVelocity(){
                    if(velocity > 0)
                        velocity -= 10;
                }
                function loadImageCards(){
                    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["gameinfo"] ?? null), "cardsimages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 85
            echo "                    imageCards[\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["card"], "name", array()), "html", null, true);
            echo "\"] = new Image();
                    imageCards[\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["card"], "name", array()), "html", null, true);
            echo "\"].src = \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["card"], "image", array()), "html", null, true);
            echo "\";
                    imageCards[\"";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["card"], "name", array()), "html", null, true);
            echo "\"].width = widthCard;
                    imageCards[\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["card"], "name", array()), "html", null, true);
            echo "\"].height = heightCard;
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                }
                function configCards(){
                    console.log(player1.round[round].hand);
                    console.log(gamedata.matchs[match].rounds[round].player1.hand);
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
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["game"] ?? null), "winner", array()), "html", null, true);
        echo ";

                    ";
        // line 122
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
            // line 123
            echo "                    gamedata.matchs[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "] = {};
                    gamedata.matchs[";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].player1 = {};
                    gamedata.matchs[";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].player1.cards = [];
                    ";
            // line 126
            $context["loop1"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array());
            // line 127
            echo "
                    ";
            // line 128
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
                // line 129
                echo "                    gamedata.matchs[";
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
            // line 131
            echo "
                    gamedata.matchs[";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].player2 = {};
                    gamedata.matchs[";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].player2.cards = [];

                    ";
            // line 135
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
                // line 136
                echo "                    gamedata.matchs[";
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
            // line 138
            echo "

                    gamedata.matchs[";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].rounds = [];
                    gamedata.matchs[";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "].winner = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["match"], "winner", array()), "html", null, true);
            echo ";
                    ";
            // line 142
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
                // line 143
                echo "                    gamedata.matchs[";
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "] = {};
                    gamedata.matchs[";
                // line 144
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].winner = ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["round"], "winner", array()), "html", null, true);
                echo ";
                    gamedata.matchs[";
                // line 145
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player1 = {};
                    gamedata.matchs[";
                // line 146
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player1.hand = [];
                    ";
                // line 147
                $context["loop2"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array());
                // line 148
                echo "                    ";
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
                    // line 149
                    echo "                    gamedata.matchs[";
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
                // line 151
                echo "                    gamedata.matchs[";
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player1.playedcard = \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["round"], "player1", array()), "playedCard", array()), "html", null, true);
                echo "\";

                    gamedata.matchs[";
                // line 153
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player2 = {};
                    gamedata.matchs[";
                // line 154
                echo twig_escape_filter($this->env, ($context["loop1"] ?? null), "html", null, true);
                echo "].rounds[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "].player2.hand = [];
                    ";
                // line 155
                $context["loop2"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array());
                // line 156
                echo "                    ";
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
                    // line 157
                    echo "                    gamedata.matchs[";
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
                // line 159
                echo "                    gamedata.matchs[";
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
            // line 161
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
        // line 163
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

                    round = 0;
                }
                ///////////////////////
                load();

                function load(){
                    loadGameData();
                    setInterval(update,1);
                }
                function update(){
                    if(time % (limitVelocity - velocity) == 0){

                        zas = gamedata.matchs[match].rounds[round].winner;
                        if(startMatch) {
                            loadMatch();
                            startMatch = false;
                        }

                        canvas_draw();
                        if(selectedcardAnimate) {
                            selectedcardAnimate = animateSelectedCard();
                            if(selectedcardAnimate == false)
                                loserCardAnimate = true;
                        }else if(loserCardAnimate) {
                            loserCardAnimate = animateLoserCard();
                        }else{

                            round++;
                            if(round == 2){
                                winnerMatch = 0;
                                if(player1.pointsInMatch > player2.pointsInMatch){
                                    winnerMatch = 1;
                                }else if(player2.pointsInMatch > player1.pointsInMatch){
                                    winnerMatch = 2;
                                }
                            }
                            if(round > 2){
                                round = 0;
                                if(player1.pointsInMatch > player2.pointsInMatch){
                                    player1.pointsInGame++;
                                }else if(player2.pointsInMatch > player1.pointsInMatch){
                                    player2.pointsInGame++;
                                }
                                player1.pointsInMatch = 0;
                                player2.pointsInMatch = 0;
                                startMatch = true;
                                match++;
                            }
                            if(zas == 1){
                                player1.pointsInMatch++;

                            }if(zas == 2){
                                player2.pointsInMatch++;
                            }
                            selectedcardAnimate = true;
                            configCards();
                        }
                    }
                    time++;
                }
                function animateSelectedCard(){
                    var getPosiSelectedCard = function(player){
                        for(i = 0 ; i < player.round[round].hand.length ; i++){
                            if(player.round[round].hand[i].name == player.round[round].playedcard){

                                return i;
                            }

                        }
                    };
                    var posiCardP1 = getPosiSelectedCard(player1);
                    var posiCardP2 = getPosiSelectedCard(player2);
                    player1.selectedCardInMatch = posiCardP1;
                    player2.selectedCardInMatch = posiCardP2;
                    var control = false; //define final ou continuação da animação
                    if((player1.round[round].hand[posiCardP1].posiX+widthCard+marginCard) < widthScreen/2){
                        player1.round[round].hand[posiCardP1].posiX += displacementCard;
                        control = true;
                    }
                    if((player2.round[round].hand[posiCardP2].posiX+marginCard) > widthScreen/2){
                        player2.round[round].hand[posiCardP2].posiX -= displacementCard;
                        control = control && true;
                    }
                    return control;

                }
                function animateLoserCard(){
                    if(zas == 2){
                        player1.round[round].hand[player1.selectedCardInMatch].posiY += displacementCard;
                        if(player1.round[round].hand[player1.selectedCardInMatch].posiY > heightScreen)
                            return false;
                    }else if(zas == 1){

                        player2.round[round].hand[player2.selectedCardInMatch].posiY += displacementCard;
                        if(player2.round[round].hand[player2.selectedCardInMatch].posiY > heightScreen)
                            return false;
                    }else{
                        player1.round[round].hand[player1.selectedCardInMatch].posiY += displacementCard;
                        player2.round[round].hand[player2.selectedCardInMatch].posiY += displacementCard;
                        if(player1.round[round].hand[player1.selectedCardInMatch].posiY > heightScreen &&
                            player2.round[round].hand[player2.selectedCardInMatch].posiY > heightScreen)
                            return false;
                    }
                    return true;
                }
                function printNames(){
                    ctx.save();
                    ctx.fillStyle = \"rgba(255, 255, 255, 255)\";
                    ctx.scale(3, 3);
                    //ctx.font = 'bold 10pt Courier'; /* Experimental */
                    ctx.fillText(player1.name/*\"Jogador 1\"*/, 200/3, 50/3);
                    //ctx.fillText(namejog1.toUpperCase()/*\"Jogador 1\"*/, 255/3, 50/3); // Verificar se está correto posteriormente
                    ctx.fillText(player2.name/*\"Jogador 2\"*/, (widthScreen - 380)/3, 50/3);
                    //ctx.fillText(namejog2.toUpperCase()/*\"Jogador 2\"*/, 540/3, 50/3); // Lembre-se da posição original em relação a desenhos de textos no canvas (verificar isso)
                    ctx.scale(1, 1);
                    ctx.restore();
                }

                function drawScores(){
                    ctx.save();
                    ctx.fillStyle = \"rgba(255, 255, 255, 255)\"
                    ctx.save();
                    ctx.scale(3, 3);
                    ctx.fillText(\"Ganhou:\" + player1.pointsInGame, 145/3, 80/3);
                    ctx.fillText(\"Ganhou:\" + player2.pointsInGame, (widthScreen - 300)/3, 80/3);
                    ctx.restore();
                    ctx.save();
                    ctx.scale(1.2, 1.2);
                    ctx.fillText(\"Restam:\" + (max_matchs - match-1), 430/1.2, 10/1.2);
                    ctx.save();
                    ctx.scale(1.4, 1.4);
                    ctx.fillText(\"Atual: \" + player1.pointsInMatch, 12/1.4, 154/1.4);
                    ctx.fillText(\"Atual: \" + player2.pointsInMatch, (1024-12-250)/1.4, 154/1.4);
                    ctx.fillText(\"Velocidade:\" + velocity, 10, 10);
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
                    if(round == 2){
                        if(winnerMatch == 1)
                            ctx.fillText(\"VENCEDOR: \" + player1.name, 80/4, 250/4);
                        if(winnerMatch == 2)
                            ctx.fillText(\"VENCEDOR: \" + player2.name, 80/4, 250/4);
                        if(winnerMatch == 0)
                            ctx.fillText(\"EMPATE!\", 480/4, 250/4);
                        ctx.scale(1, 1);

                    }
                    ctx.restore();

                }

                function drawcards(){
                    var j = 0;

                    for(i = 0 ; i < player1.round[round].hand.length ; i++){
                        ctx.drawImage(player1.round[round].hand[i].image, player1.round[round].hand[i].posiX, player1.round[round].hand[i].posiY,
                            widthCard,heightCard);

                    }
                    for(i = 0 ; i < player2.round[round].hand.length ; i++){
                        ctx.drawImage(player2.round[round].hand[i].image, player2.round[round].hand[i].posiX, player2.round[round].hand[i].posiY,
                            widthCard,heightCard);

                    }

                }
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
        </canvas>

    </div>
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
        return array (  569 => 163,  554 => 161,  533 => 159,  510 => 157,  492 => 156,  490 => 155,  484 => 154,  478 => 153,  468 => 151,  445 => 149,  427 => 148,  425 => 147,  419 => 146,  413 => 145,  405 => 144,  398 => 143,  381 => 142,  375 => 141,  371 => 140,  367 => 138,  346 => 136,  329 => 135,  324 => 133,  320 => 132,  317 => 131,  296 => 129,  279 => 128,  276 => 127,  274 => 126,  270 => 125,  266 => 124,  261 => 123,  244 => 122,  239 => 120,  207 => 90,  199 => 88,  195 => 87,  188 => 86,  183 => 85,  179 => 84,  166 => 73,  159 => 72,  157 => 71,  151 => 68,  131 => 51,  124 => 47,  120 => 46,  111 => 41,  105 => 39,  97 => 35,  91 => 33,  83 => 29,  60 => 8,  57 => 7,  52 => 5,  46 => 4,  40 => 3,  32 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"View/Layout.twig\" %}
{% block title %} {{ gameinfo.name }} {% endblock %}
{% block titlePage %}{{ gameinfo.name }}{% endblock %}
{% block arena %} active {% endblock %}
{% block scripthead %}
{% endblock %}
{% block content %}
    <div class=\"container-fluid\">
        <div class=\"btn-group-vertical float-left\" role=\"group\" aria-label=\"velocidade\">
            <button type=\"button\" onclick=\"upVelocity()\" class=\"btn btn-primary\">+</button>
            <button type=\"button\" onclick=\"downVelocity()\" class=\"btn btn-primary\">-</button>
        </div>
        <canvas id=\"wanda\" class=\"mx-auto d-block\" width=\"1024\" height=\"512\">
            <script>

                var ctx = loadCanvasCtx();
                var requestAnimationFrame =
                    window.requestAnimationFrame ||
                    window.webkitRequestAnimationFrame ||
                    window.mozRequestAnimationFrame ||
                    window.msRequestAnimationFrame ||
                    window.oRequestAnimationFrame ||
                    function(callback) {
                        return setTimeout(callback, 1);
                    };
                var gamedata;
                /////background
                var imageBG = new Image();
                imageBG.src = \"{{ base_url() }}{{ gameinfo.imagebg }}\";
                ////////
                ///////enemy
                var imageEnemy1 = new Image();
                imageEnemy1.src = \"{{ base_url() }}{{ gameinfo.imagesperson.enemy }}\";
                var imageEnemy2 = new Image();
                imageEnemy2.src = \"{{ base_url() }}{{ gameinfo.imagesperson.enemy }}\";
                ///////
                //////face
                var imageFace1 = new Image();
                imageFace1.src = \"{{ base_url() }}{{ gameinfo.imagesperson.face }}\";
                var imageFace2 = new Image();
                imageFace2.src = \"{{ base_url() }}{{ gameinfo.imagesperson.face }}\";
                ///////
                //////var system
                var match = 0;
                var round = 0;
                var max_matchs = {{ gameinfo.matchs }};
                var max_rounds = {{ gameinfo.rounds }};
                var heightDeck = 300;
                var widthScreen = 1024;
                var heightScreen = 512;
                var qtdcards = {{ gameinfo.countcards }};
                var imageCards = [];
                loadImageCards();
                var marginCard = (heightDeck / (qtdcards + 1))/qtdcards;
                var heightCard = (heightDeck / (qtdcards)) - marginCard;
                var widthCard = heightCard;
                var loserCardAnimate = false;
                var selectedcardAnimate = true;
                var displacementCard = 30;
                var startMatch = true;
                var winnerMatch = 0;
                var time = 0;
                var velocity = 99;
                var limitVelocity = 500;

                //////
                ///////player1
                var player1 = {round: [], deck:[] , name: \"{{ confrontation.player1.nickname }}\", pointsInMatch: 0 , pointsInGame : 0, posiXDeck: 150 , posiYDeck:150,loser: false , selectedCardInMatch: 0};
                ///////
                ///////Player2
                var player2 = {round: [], deck:[] , name: {% if(confrontation.player2 != NULL ) %}
                    \"{{ confrontation.player2.nickname }}\"{% else %}\"Bot\"{% endif %}
                    , pointsInMatch: 0 , pointsInGame : 0, posiXDeck: widthScreen-150 , posiYDeck:150, loser: false, selectedCardInMatch: 0};
                ///////

                function upVelocity(){
                    if(velocity < limitVelocity)
                        velocity += 10;
                }function downVelocity(){
                    if(velocity > 0)
                        velocity -= 10;
                }
                function loadImageCards(){
                    {% for card in gameinfo.cardsimages %}
                    imageCards[\"{{ card.name }}\"] = new Image();
                    imageCards[\"{{ card.name }}\"].src = \"{{ base_url() }}{{ card.image }}\";
                    imageCards[\"{{ card.name }}\"].width = widthCard;
                    imageCards[\"{{ card.name }}\"].height = heightCard;
                    {% endfor %}
                }
                function configCards(){
                    console.log(player1.round[round].hand);
                    console.log(gamedata.matchs[match].rounds[round].player1.hand);
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
                    gamedata.matchs[{{ loop1 }}].rounds[{{ loop.index0 }}].winner = {{ round.winner }};
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

                    round = 0;
                }
                ///////////////////////
                load();

                function load(){
                    loadGameData();
                    setInterval(update,1);
                }
                function update(){
                    if(time % (limitVelocity - velocity) == 0){

                        zas = gamedata.matchs[match].rounds[round].winner;
                        if(startMatch) {
                            loadMatch();
                            startMatch = false;
                        }

                        canvas_draw();
                        if(selectedcardAnimate) {
                            selectedcardAnimate = animateSelectedCard();
                            if(selectedcardAnimate == false)
                                loserCardAnimate = true;
                        }else if(loserCardAnimate) {
                            loserCardAnimate = animateLoserCard();
                        }else{

                            round++;
                            if(round == 2){
                                winnerMatch = 0;
                                if(player1.pointsInMatch > player2.pointsInMatch){
                                    winnerMatch = 1;
                                }else if(player2.pointsInMatch > player1.pointsInMatch){
                                    winnerMatch = 2;
                                }
                            }
                            if(round > 2){
                                round = 0;
                                if(player1.pointsInMatch > player2.pointsInMatch){
                                    player1.pointsInGame++;
                                }else if(player2.pointsInMatch > player1.pointsInMatch){
                                    player2.pointsInGame++;
                                }
                                player1.pointsInMatch = 0;
                                player2.pointsInMatch = 0;
                                startMatch = true;
                                match++;
                            }
                            if(zas == 1){
                                player1.pointsInMatch++;

                            }if(zas == 2){
                                player2.pointsInMatch++;
                            }
                            selectedcardAnimate = true;
                            configCards();
                        }
                    }
                    time++;
                }
                function animateSelectedCard(){
                    var getPosiSelectedCard = function(player){
                        for(i = 0 ; i < player.round[round].hand.length ; i++){
                            if(player.round[round].hand[i].name == player.round[round].playedcard){

                                return i;
                            }

                        }
                    };
                    var posiCardP1 = getPosiSelectedCard(player1);
                    var posiCardP2 = getPosiSelectedCard(player2);
                    player1.selectedCardInMatch = posiCardP1;
                    player2.selectedCardInMatch = posiCardP2;
                    var control = false; //define final ou continuação da animação
                    if((player1.round[round].hand[posiCardP1].posiX+widthCard+marginCard) < widthScreen/2){
                        player1.round[round].hand[posiCardP1].posiX += displacementCard;
                        control = true;
                    }
                    if((player2.round[round].hand[posiCardP2].posiX+marginCard) > widthScreen/2){
                        player2.round[round].hand[posiCardP2].posiX -= displacementCard;
                        control = control && true;
                    }
                    return control;

                }
                function animateLoserCard(){
                    if(zas == 2){
                        player1.round[round].hand[player1.selectedCardInMatch].posiY += displacementCard;
                        if(player1.round[round].hand[player1.selectedCardInMatch].posiY > heightScreen)
                            return false;
                    }else if(zas == 1){

                        player2.round[round].hand[player2.selectedCardInMatch].posiY += displacementCard;
                        if(player2.round[round].hand[player2.selectedCardInMatch].posiY > heightScreen)
                            return false;
                    }else{
                        player1.round[round].hand[player1.selectedCardInMatch].posiY += displacementCard;
                        player2.round[round].hand[player2.selectedCardInMatch].posiY += displacementCard;
                        if(player1.round[round].hand[player1.selectedCardInMatch].posiY > heightScreen &&
                            player2.round[round].hand[player2.selectedCardInMatch].posiY > heightScreen)
                            return false;
                    }
                    return true;
                }
                function printNames(){
                    ctx.save();
                    ctx.fillStyle = \"rgba(255, 255, 255, 255)\";
                    ctx.scale(3, 3);
                    //ctx.font = 'bold 10pt Courier'; /* Experimental */
                    ctx.fillText(player1.name/*\"Jogador 1\"*/, 200/3, 50/3);
                    //ctx.fillText(namejog1.toUpperCase()/*\"Jogador 1\"*/, 255/3, 50/3); // Verificar se está correto posteriormente
                    ctx.fillText(player2.name/*\"Jogador 2\"*/, (widthScreen - 380)/3, 50/3);
                    //ctx.fillText(namejog2.toUpperCase()/*\"Jogador 2\"*/, 540/3, 50/3); // Lembre-se da posição original em relação a desenhos de textos no canvas (verificar isso)
                    ctx.scale(1, 1);
                    ctx.restore();
                }

                function drawScores(){
                    ctx.save();
                    ctx.fillStyle = \"rgba(255, 255, 255, 255)\"
                    ctx.save();
                    ctx.scale(3, 3);
                    ctx.fillText(\"Ganhou:\" + player1.pointsInGame, 145/3, 80/3);
                    ctx.fillText(\"Ganhou:\" + player2.pointsInGame, (widthScreen - 300)/3, 80/3);
                    ctx.restore();
                    ctx.save();
                    ctx.scale(1.2, 1.2);
                    ctx.fillText(\"Restam:\" + (max_matchs - match-1), 430/1.2, 10/1.2);
                    ctx.save();
                    ctx.scale(1.4, 1.4);
                    ctx.fillText(\"Atual: \" + player1.pointsInMatch, 12/1.4, 154/1.4);
                    ctx.fillText(\"Atual: \" + player2.pointsInMatch, (1024-12-250)/1.4, 154/1.4);
                    ctx.fillText(\"Velocidade:\" + velocity, 10, 10);
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
                    if(round == 2){
                        if(winnerMatch == 1)
                            ctx.fillText(\"VENCEDOR: \" + player1.name, 80/4, 250/4);
                        if(winnerMatch == 2)
                            ctx.fillText(\"VENCEDOR: \" + player2.name, 80/4, 250/4);
                        if(winnerMatch == 0)
                            ctx.fillText(\"EMPATE!\", 480/4, 250/4);
                        ctx.scale(1, 1);

                    }
                    ctx.restore();

                }

                function drawcards(){
                    var j = 0;

                    for(i = 0 ; i < player1.round[round].hand.length ; i++){
                        ctx.drawImage(player1.round[round].hand[i].image, player1.round[round].hand[i].posiX, player1.round[round].hand[i].posiY,
                            widthCard,heightCard);

                    }
                    for(i = 0 ; i < player2.round[round].hand.length ; i++){
                        ctx.drawImage(player2.round[round].hand[i].image, player2.round[round].hand[i].posiX, player2.round[round].hand[i].posiY,
                            widthCard,heightCard);

                    }

                }
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
        </canvas>

    </div>
{% endblock %}", "View/Arena/cardsGamePlayer.twig", "/var/www/html/Wandarena/app/src/View/Arena/cardsGamePlayer.twig");
    }
}
