<?php
require_once "flybehavior.php";
require_once "quackbehavior.php";

abstract class Duck {
    protected $flyBehavior; 
    protected $quackbehavior;
    
    abstract public function display();
    public function performFly() {
        $this->flyBehavior->fly();
    }

    public function performQuack() {
        $this->quackbehavior->quack1();
    }
    public function swim() {
        echo 'Все утки умеют плавать, даже деревянные<br>';
    }  
}
?>