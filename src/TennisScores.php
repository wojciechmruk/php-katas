<?php

class TennisScores
{
    private $map = [
        'Love',
        'Fifteen',
        'Thirty',
        'Forty',
    ];
    protected $player1;
    protected $player2;

    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function score()
    {

        if ($this->hasAWinner()) {
            return 'Win for ' . $this->winner()->name;
        }

        if ($this->hasTheAdvantage()) {
            return 'Advantage ' . $this->winner()->name;
        }

        if ($this->inDeuce()) {
            return 'Deuce';
        }

        $general_result = $this->map[$this->player1->points] . '-';

        return $general_result .= $this->tied() ? 'All' : $this->map[$this->player2->points];
    }

    protected function hasAWinner()
    {
        return $this->hasEnoughPointsToBeWon() && $this->isLeadingByTwo();
    }

    protected function hasEnoughPointsToBeWon()
    {
        return max([$this->player1->points, $this->player2->points]) > 3;
    }

    protected function inDeuce()
    {
        return $this->player1->points + $this->player2->points >= 6 && $this->tied();
    }

    protected function tied()
    {
        return $this->player1->points == $this->player2->points;
    }

    protected function isLeadingByTwo()
    {
        return (abs($this->player1->points - $this->player2->points) >= 2);
    }

    protected function winner()
    {
        return $this->player1->points > $this->player2->points ? $this->player1 : $this->player2;
    }

    protected function hasTheAdvantage()
    {
        return $this->hasEnoughPointsToBeWon() && (abs($this->player1->points - $this->player2->points) == 1);
    }

    protected function moreThan3Points()
    {
        return $this->player1->points >= 4 || $this->player2->points >= 4;
    }
}