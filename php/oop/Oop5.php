<?php
header('Content-Type: text/html; charset=utf-8');

class User
{
    protected $name;
    protected $age;

    function __construct($name = null, $age = null)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge($age)
    {
        return $this->age;
    }
}

class Worker extends User
{
    private $salary;

    function __construct($name = null, $age = null, $salary = null)
    {
        parent::__construct($name, $age);
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary()
    {

    }
}

class Student extends User
{
    private $scholarship;
    private $course;

    public function setScholarship($scholarship)
    {
        $this->scholarship = $scholarship;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getScholarship()
    {
        return $this->scholarship;
    }

    public function getCourse()
    {
        return $this->course;
    }
}

$worker1 = new Worker('Иван', 25, 1000);
$worker2 = new Worker('Вася', 26, 2000);

$sumSalary = $worker1->getSalary() + $worker2->getSalary();

echo "Сумма зарплат: $sumSalary";