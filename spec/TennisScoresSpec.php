<?php

namespace spec;

use TennisScores;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TennisScoresSpec extends ObjectBehavior
{
    protected $john;
    protected $jane;

    function let()
    {
        $this->john = new \Player('John', 0);
        $this->jane = new \Player('Jane', 0);

        $this->beConstructedWith($this->john, $this->jane);
    }

    function it_scores_a_scoreless_game()
    {
        $this->score()->shouldReturn('Love-All');
    }

    function it_scores_a_1_0_as_fifteen_love()
    {
        $this->john->earnPoints(1);
        $this->score()->shouldReturn('Fifteen-Love');
    }

    function it_scores_a_2_0_as_thirty_love()
    {
        $this->john->earnPoints(2);
        $this->score()->shouldReturn('Thirty-Love');
    }

    function it_scores_a_3_0_as_forty_love()
    {
        $this->john->earnPoints(3);
        $this->score()->shouldReturn('Forty-Love');
    }

    function it_scores_a_1_1_as_fifteen_all()
    {
        $this->john->earnPoints(1);
        $this->jane->earnPoints(1);
        $this->score()->shouldReturn('Fifteen-All');
    }

    function it_scores_a_2_2_as_thirty_all()
    {
        $this->john->earnPoints(2);
        $this->jane->earnPoints(2);
        $this->score()->shouldReturn('Thirty-All');
    }

    function it_scores_a_3_3_as_deuce()
    {
        $this->john->earnPoints(3);
        $this->jane->earnPoints(3);
        $this->score()->shouldReturn('Deuce');
    }

    function it_scores_a_2_1_as_thirty_fifteen()
    {
        $this->john->earnPoints(2);
        $this->jane->earnPoints(1);
        $this->score()->shouldReturn('Thirty-Fifteen');
    }

    function it_scores_a_1_2_as_fifteen_thirty()
    {
        $this->john->earnPoints(1);
        $this->jane->earnPoints(2);
        $this->score()->shouldReturn('Fifteen-Thirty');
    }

    function it_scores_a_4_0_as_player1_won()
    {
        $this->john->earnPoints(4);
        $this->score()->shouldReturn('Win for John');
    }

    function it_scores_a_4_1_as_player1_won()
    {
        $this->john->earnPoints(4);
        $this->jane->earnPoints(1);
        $this->score()->shouldReturn('Win for John');
    }

    function it_scores_a_1_4_as_player2_won()
    {
        $this->john->earnPoints(1);
        $this->jane->earnPoints(4);
        $this->score()->shouldReturn('Win for Jane');
    }

    function it_scores_a_4_4_as_Deuce()
    {
        $this->john->earnPoints(4);
        $this->jane->earnPoints(4);
        $this->score()->shouldReturn('Deuce');
    }

    function it_scores_a_8_6_as_Player_1_Won()
    {
        $this->john->earnPoints(8);
        $this->jane->earnPoints(6);
        $this->score()->shouldReturn('Win for John');
    }

    function it_scores_a_9_11_as_Player_2_won()
    {
        $this->john->earnPoints(9);
        $this->jane->earnPoints(11);
        $this->score()->shouldReturn('Win for Jane');
    }
    
    function it_scores_a_5_4_as_Advantage_Player_1()
    {
        $this->john->earnPoints(5);
        $this->jane->earnPoints(4);
        $this->score()->shouldReturn('Advantage John');
    }

    function it_scores_a_7_8_as_Advantage_Player_2()
    {
        $this->john->earnPoints(7);
        $this->jane->earnPoints(8);
        $this->score()->shouldReturn('Advantage Jane');
    }
}