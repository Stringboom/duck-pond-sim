<?php 

namespace Fittinq\DuckPond\Duck;

use  Fittinq\DuckPond\Constants\{ Display, Quack, Swim, Fly };

/**
* @author     Johan Westermann
* @version    1
* 
*/
class WoodenDecoyDuck extends Duck
{
    public function __construct() 
    {
        parent::__construct([
            "display" => Display::WOODEN_DECOY_DUCK,
        ]);
    }
}