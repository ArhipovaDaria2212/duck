<?php
require_once "quackbehavior.php";

class Squack implements QuackBehavior {
    public function quack1() {
        echo 'Пииии-пиии!<br>';
    }
}
?>