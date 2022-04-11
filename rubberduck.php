<?php
require_once "duck.php";
require_once "flynoway.php";
require_once "quack.php";

class RubberDuck extends Duck {
    public function __construct() {
        $this->flyBehavior = new FlyNoWay();
        $this->quackbehavior = new Squack();
        
    }
    public function display() {
        echo 'Я резиновая утка.<br>';
    }
}
?>