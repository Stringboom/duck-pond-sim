<?php 

namespace Fittinq\DuckPond\Duck;

use  Fittinq\DuckPond\Constants\{ Display, Quack, Swim };

/**
* @author     Johan Westermann
* @version    1
* 
*/
class RedheadDuck extends Duck
{
    public function __construct() 
    {
        parent::__construct([
            "display" => Display::REDHEAD_DUCK,
            "quack"   => Quack::QUACK_QUACK,
        ]);
    }
}