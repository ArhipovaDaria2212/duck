<?php
require_once 'mallardduck.php';

$duck1 = new MallardDuck();
$duck1->display();
$duck1->performFly();
$duck1->performQuack();
$duck1->swim();
echo '<br>';
$duck2 = new RedHeadDuck();
$duck2->display();
$duck2->performFly();
$duck2->performQuack();
$duck2->swim();
echo '<br>';
$duck3 = new RubberDuck();
$duck3->display();
$duck3->performFly();
$duck3->performQuack();
$duck3->swim();
echo '<br>';
$duck3 = new DecoyDuck();
$duck3->display();
$duck3->performFly();
$duck3->performQuack();
$duck3->swim();
?>