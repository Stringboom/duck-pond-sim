<?php 

namespace Fittinq\DuckPond\Duck;

use  Fittinq\DuckPond\Constants\{ Display, Quack, Swim, Fly };

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
    private string $flyDuck;

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

        if(isset($args["fly"])){
            $this->flyDuck = $args["fly"];
        }else{
            $this->flyDuck = Fly::NO_FLY;
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

    public function fly(): string
    {
        return $this->flyDuck;
    }

}