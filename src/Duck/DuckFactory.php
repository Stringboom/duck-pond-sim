<?php 

namespace Fittinq\DuckPond\Duck;

use UnexpectedValueException;

/**
* @author     Johan Westermann
* @version    1
* 
*/
class DuckFactory
{
    public function letThereBeDuck(string $duck = ''): object 
    {
        try {
            return new $duck;
        } catch (\Throwable $th) {
            throw new UnexpectedValueException("This duck is not yet known");
        }
    }
}