<?php 

namespace Fittinq\DuckPond\Duck;

use  Fittinq\DuckPond\Constants\{ Display, Quack, Swim, Fly };

/**
* @author     Johan Westermann
* @version    1
* 
*/
class RubberDuck extends Duck
{
    public function __construct() 
    {
        parent::__construct([
            "display" => Display::RUBBER_DUCK,
            "quack"   => Quack::SQUEAK_SQUEAK
        ]);
    }
}