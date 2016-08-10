<?php

require_once('autoloader.php');
require_once('vendor/autoload.php');

$loader = new Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}!',
));
$twig = new Twig_Environment($loader);

echo $twig->render('index', array('name' => 'Drew')).'<br />';

$calculator = new Calculator();

$calculator->setOperation(new Add)->calc(1, 2, 3, 4, 5);
$calculator->setOperation(new Subtract)->calc(10, 3, 11);
$calculator->setOperation(new Multiply)->calc(-2, 20, 3, -1);
$calculator->calc(-1);
$calculator->setOperation(new Divide)->calc(90);

$calculator->printResults();

?>
