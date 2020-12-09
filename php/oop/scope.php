<?php
header('Content-Type: text/html; charset=utf-8');
include('ScopeClass.php');

$scope1 = new Scope();
//echo $scope1->public; // Работает
//echo $scope1->protected; // Неисправимая ошибка
//echo $scope1->private; // Неисправимая ошибка

//$scope1->printHello(); // Выводит Public, Protected и Private

class ScopeExtends extends Scope {
    //public $public = 'Public2'; // ++
    //protected $protected = 'Protected2'; // ++
    //private $private = 'Private2'; // ошибка

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$scope2 = new ScopeExtends();
var_dump($scope2);
//echo $scope2->public; // Работает
//echo $scope2->protected; // Неисправимая ошибка
//echo $scope2->private; // Неопределен

//$scope2->printHello(); // Выводит Public2, Protected2, Undefined
?>