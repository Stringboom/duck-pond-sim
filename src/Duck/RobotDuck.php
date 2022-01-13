<?php 

namespace Fittinq\DuckPond\Duck;

use  Fittinq\DuckPond\Constants\{ Display, Quack, Swim, Fly };

/**
* @author     Johan Westermann
* @version    1
* 
*/
class RobotDuck extends Duck
{
    public function __construct() 
    {
        parent::__construct([
            "display" => Display::ROBOT_DUCK,
            "fly"     => Fly::ROCKET_GOES_BRRR
        ]);
    }
}