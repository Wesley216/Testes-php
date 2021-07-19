<?php

class Person{
    private $age;

    public function __construct($age){
        $this->age = $age;
    }
    
    public function day(){
        
        if ($this->age > 18) {
            
            echo "Maior de idade.".PHP_EOL."Tem: {$this->age}.";

        }else{

            echo "Menor de idade. Tem: {$this->age}.".PHP_EOL;

        }
    }
}