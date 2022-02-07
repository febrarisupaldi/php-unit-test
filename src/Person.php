<?php

namespace Paldi\Test;

class Person{
    private string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function sayHello(?string $name){
        if($name == null) throw new \Exception("Name is null");

        return "Hi $name, my name is $this->name";
    }

    public function sayGoodBye(?string $name):void{
        echo "Good Bye $name".PHP_EOL;
    }
}