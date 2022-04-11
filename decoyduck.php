<?php
require_once "duck.php";
require_once "flynoway.php";
require_once "quack.php";

class DecoyDuck extends Duck {
    public function __construct() {
        $this->flyBehavior = new FlyNoWay();
        $this->quackbehavior = new MuteQuack();
        
    }
    public function display() {
        echo 'Я утка-приманка.<br>';
    }
}
?>