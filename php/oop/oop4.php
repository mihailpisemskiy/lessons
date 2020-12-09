<?php
header('Content-Type: text/html; charset=utf-8');
include('Oop4Class.php');

$worker = new Worker('Дима', 25, 1000);

$productAgeSalary = $worker->getSalary()*$worker->getAge();

Print_r("Произведение зарплаты и возраста: {$productAgeSalary}</br>");

?>