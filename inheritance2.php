<?php
class Human{
    public $arm = 2;
    public $leg = 2;
    public $eyes = 2;
    public $fingers = 10;
    public $ears = 2;
    public $name = "";

  function __construct($n){
        $this->name = $n;
      
    } 
}

class Male extends Human{
    public $sex = "m";
}    

class Female extends Human{
    public $sex = "f";
}

$yata = new Male('yata');
print_r($yata);
$eiko = new Female('eiko');
     