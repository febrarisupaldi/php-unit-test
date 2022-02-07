<?php

namespace Paldi\Test;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class CounterTest extends TestCase{
    
    private Counter $counter;

    protected function setUp():void{
        $this->counter = new Counter();
        echo "Membuat counter". PHP_EOL;
    }

    public function testIncrement(){
        $this->assertEquals(0, $this->counter->getCounter());
        $this->markTestIncomplete("TODO do Counter again");
    }

    public function testCounter(){
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());
    }

    /**
     * @test
     */
    public function increment(){
        $this->markTestSkipped("Unit Test Skipped");
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());
    }

    public function testFirst():Counter{
        
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());
        return $this->counter;
    }

    /**
     *  @depends testFirst
     */
    public function testSecond(Counter $counter):void{
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }

    protected function tearDown():void{
        echo "Tear Down". PHP_EOL;
    }

    /**
     * @after
     */
    protected function after(): void{
        echo "After". PHP_EOL;
    }

    /**
     * @requires OSFamily Windows
     */
    public function testOnlyWindows(){
        $this->assertTrue(true, "Only on windows");
    }



    // public function testOther(){
    //     echo "other".PHP_EOL;
    // }

}