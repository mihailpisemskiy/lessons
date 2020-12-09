<?

class Worker {
    private $name;
    private $age;
    private $salary;

    function __construct($name = null, $age = null, $salary = null) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getAge() {
        return $this->age;
    }

}

?>