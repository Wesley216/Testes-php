<?php

require_once 'Classes/person.php';
require_once 'Classes/sale.php';

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase{

    public function testDay(){
    
        $age = 22;

        $obj = new Person($age);

        $obj->day();

        $cont = 22;

        $this-> assertSame($cont, $age); //Mostra exatamente onde falho e monstra a linha onde falho
    }
}
