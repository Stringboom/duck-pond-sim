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
    public function letThereBeDuck(string $duck = ''): void 
    {
        // Add test case later
        throw new UnexpectedValueException("This duck is not yet known");
    }
}