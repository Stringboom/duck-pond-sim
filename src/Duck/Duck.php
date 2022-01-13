<?php 

namespace Fittinq\DuckPond\Duck;

use  Fittinq\DuckPond\Constants\{ Display, Quack, Swim };

/**
* @author     Johan Westermann
* @version    1
* 
*/
class Duck
{

    private string $displayDuck;
    private string $swimDuck;
    private string $quackDuck;

    public function __construct(array $args) 
    {

        if(isset($args["display"])){
            $this->displayDuck = $args["display"];
        }else{
            $this->displayDuck = 'no display';
        }

        if(isset($args["swim"])){
            $this->swimDuck = $args["swim"];
        }else{
            $this->swimDuck = Swim::SPLASH_SPLASH;
        }

        if(isset($args["quack"])){
            $this->quackDuck = $args["quack"];
        }else{
            $this->quackDuck = Quack::NO_QUACK;
        }

    }

    public function display(): string
    {
        return $this->displayDuck;
    }

    public function swim(): string
    {
        return $this->swimDuck;
    }

    public function quack(): string
    {
        return $this->quackDuck;
    }

}