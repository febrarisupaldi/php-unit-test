<?php

namespace Paldi\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase{

    private Person $person;

    protected function setUp():void{
        //$this->person = new Person("Eko");
    }

    /**
     * @before
     */

    public function createPerson(){
        $this->person = new Person("Eko");
    }

    public function testSuccess(){
        
        $this->assertEquals("Hi Budi, my name is Eko", $this->person->sayHello("Budi"));
    }

    public function testException(){
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testOutput(){
        $this->expectOutputString("Good Bye Budi".PHP_EOL);
        $this->person->sayGoodbye("Budi");
    }
}