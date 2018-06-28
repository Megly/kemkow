<?php 
class Test{
    public $name;    //$nameという枠をつくりましたよ
    function call(){
        echo $this->name;
    }
}

$manA = new Test(); //$manAというインスタンスの中での$thisは$manA
$manA->name = "shota"; //$manAの$nameという枠に"shota"を入れましたよ//
$manA->call();

$manB = new Test(); ////$manBというインスタンスの中での$thisは$manB
$manB->name = "taiki"; //$manBの$nameという枠に"taiki"を入れましたよ//
$manB->call();