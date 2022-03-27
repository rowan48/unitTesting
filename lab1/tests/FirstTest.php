<?php
use App;
require "./src/Checkout.php";

class FirstTest extends PHPUnit\Framework\TestCase{
    function testTrue(){
        return $this->assertTrue(fact(0)==1);
    }
    function testTruetwo(){
        return $this->assertTrue(fact(1)==1);

    }
    function testTruethree(){
        return $this->assertTrue(fact(5)==120);
    }
    function testTruefour(){
        return $this->assertTrue(fact(-3)==null);

    }
     function testTruefive(){
         return $this->assertTrue(fact(1.5)==null);

    }
     function testTruesix(){
         return $this->assertTrue(fact(false)==null);

     }
     function testTrueseven(){
         return $this->assertTrue(fact('abc')==null);

     }
     function testTrueeight(){
        return $this->assertTrue(fact(4)==4*fact(3));

    }
}