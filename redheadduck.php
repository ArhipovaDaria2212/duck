<?php
require_once "duck.php";
require_once "flynoway.php";
require_once "quack.php";

class RedHeadDuck extends Duck {
    public function __construct() {
        $this->flyBehavior = new FlyNoWay();
        $this->quackbehavior = new Quack();
        
    }
    public function display() {
        echo 'Я красноголовая утка =).<br>';
    }
}
?>