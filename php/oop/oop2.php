<?php
header('Content-Type: text/html; charset=utf-8');
include('PrivateWorkerClass.php');

$worker1 = new Worker;
$worker1->setName('Иван');
$worker1->setAge(99);
$worker1->setSalary(1000);

$worker2 = new Worker;
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);

//var_dump($worker1);
//var_dump($worker2);

$sumSalary = $worker1->getSalary()+$worker2->getSalary();
$sumAge = $worker1->getAge()+$worker2->getAge();

Print_r("Сумма зарплат: {$sumSalary}</br>");
Print_r("Сумма зарплат: {$sumAge}");

?>