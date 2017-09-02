<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Player
 *
 * @author Wojciech Mruk
 */
class Player
{
    public $name;
    public $points;

    public function __construct($name, $score)
    {
        $this->name = $name;
        $this->points = $score;
    }

    public function earnPoints($points)
    {
        $this->points = $points;
    }
}