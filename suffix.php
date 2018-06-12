<?php

class swallows {
    public $dajun = '';
    public $batter = '';

    public $hp = 10;
    public $power = 3;

    function __construct($dajun,$batter,$power) {
        $this->batter = $batter;
        $this->dajun = $dajun;
        $this->power = $power;
    }

    function name() {
        return $this->dajun . $this->batter;
    }

    function hit($character_name) {
        print $this->name() . 'が' . $character_name . 'を打って' . $this->power . 'ランホームランになった！' . PHP_EOL;
    }
}

$swallows_A = new swallows('1番','山田','3');
$swallows_B = new swallows('2番','青木','2');
$swallows_A->hit('菅野');
$swallows_B->hit('菅野');
