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
        if ($this->moreThan3Points()) {
            if ($this->player1->points >= $this->player2->points + 2) {
                return 'Player 1 Won';
            }

            if ($this->player2->points >= $this->player1->points + 2) {
                return 'Player 2 Won';
            }

            if ($this->player2->points === $this->player1->points) {
                return 'Deuce';
            }

            if ($this->player1->points >= $this->player2->points + 1) {
                return 'Adventage Player 1';
            }

            if ($this->player2->points >= $this->player1->points + 1) {
                return 'Adventage Player 2';
            }
        }

        if ($this->player2->points != $this->player1->points) {
            return $this->map[$this->player1->points] . '-' . $this->map[$this->player2->points];
        }

        if ($this->player2->points === $this->player1->points) {
            return $this->map[$this->player1->points] . '-All';
        }
    }

    protected function moreThan3Points()
    {
        return $this->player1->points >= 4 || $this->player2->points >= 4;
    }
}