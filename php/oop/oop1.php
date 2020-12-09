<?php
header('Content-Type: text/html; charset=utf-8');
include('WorkerClass.php');

$worker1 = new Worker;
$worker1->name = 'Иван';
$worker1->age = 25;
$worker1->salary = 1000;

$worker2 = new Worker;
$worker2->name = 'Вася';
$worker2->age = 26;
$worker2->salary = 2000;

$sumSalary = $worker1->salary+$worker2->salary;
$sumAge = $worker1->age+$worker2->age;

Print_r("Сумма зарплат: {$sumSalary}</br>");
Print_r("Сумма зарплат: {$sumAge}");

?>