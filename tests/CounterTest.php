<?php

namespace Paldi\Test;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class CounterTest extends TestCase{
    
    public function testCounter(){
        $counter = new Counter();
        $counter->increment();
        $this->assertEquals(1, $counter->getCounter());
    }

    // public function testOther(){
    //     echo "other".PHP_EOL;
    // }

}