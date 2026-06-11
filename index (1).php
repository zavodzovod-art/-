<?php

require_once 'Employee.php';

$rabotnik = new Employee('Иван', 1000, 30);

$rabotnik->pokazat();

echo "\n";

echo $rabotnik->getImya() . "\n";
echo $rabotnik->getZarplata() . "\n";
echo $rabotnik->getVozrast() . "\n";

echo "\n";

$rabotnik->setImya('Петр');
$rabotnik->setVozrast(25);


echo "\n";

$rabotnik->povysitZarplatu();
echo $rabotnik->getZarplata() . "\n"; 

?>
