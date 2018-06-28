<?php 
class Test{
    public $name;   //$nameという枠をつくりましたよ
    function callA(){
        echo "shota";
    }
    function callB(){
        echo "taiki";
    }
    
}

$manA = new Test();
$manA->name = "shota";
$manA->callA();

$manB = new Test();
$manB->name = "taiki";
$manB->callB();