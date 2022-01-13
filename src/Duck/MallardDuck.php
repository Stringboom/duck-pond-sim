<?php 

namespace Fittinq\DuckPond\Duck;

use  Fittinq\DuckPond\Constants\{ Display, Quack, Swim, Fly };

/**
* @author     Johan Westermann
* @version    1
* 
*/
class MallardDuck extends Duck
{
    public function __construct() 
    {
        parent::__construct([
            "display" => Display::MALLARD,
            "quack"   => $this->default_quack(),
            "fly"     => $this->default_flap()
        ]);
    }
}

