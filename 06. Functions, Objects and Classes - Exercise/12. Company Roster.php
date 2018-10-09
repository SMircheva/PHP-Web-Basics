<?php

$n = intval(readline());

$departments = [];

for ($i = 0; $i < $n; $i++)
{
    $input = explode(' ', readline());
    $name = $input[0];
    $salary = floatval($input[1]);
    $position = $input[2];
    $departmentName = $input[3];
    if (count($input) == 4) {
        $employee = new Employee($name, $salary, $position, $departmentName);
    } else if (count($input) == 5){
        if(strpos($input[4],'@')) {
            $email = $input[4];
            $employee = new Employee($name, $salary, $position, $departmentName, $email);;
        }
        else {
            $email = 'n/a';
            $age = intval($input[4]);
            $employee = new Employee($name, $salary, $position, $departmentName, $email, $age);;
        }
    } else {
        $email = $input[4];
        $age = intval($input[5]);
        $employee = new Employee($name, $salary, $position, $departmentName, $email, $age);;
    }




    if (!key_exists($departmentName, $departments)) {
        $department = new Department($departmentName);
        $departments[$departmentName] = $department;
    }
    $departments[$departmentName]->addEmployee($employee);
}

$maxAverageSalary = 0;
$bestDepartment = "";

foreach ($departments as $key=>$department) {
    if ($department->getAverageSalary() > $maxAverageSalary) {
        $maxAverageSalary = $department->getAverageSalary();
        $bestDepartment = $key;
    }
}

echo "Highest Average Salary: $bestDepartment".PHP_EOL;
$toPrint = $departments[$bestDepartment]->getEmployees();

usort($toPrint, function (Employee $e1, Employee $e2) {
    return $e2->getSalary() - $e1->getSalary();
});

foreach ($toPrint as $employee) {
    echo $employee;
}


class Employee {
    private $name;
    private $salary;
    private $position;
    private $department;
    private $email;
    private $age;

    /**
     * Employee constructor.
     * @param $name
     * @param $salary
     * @param $position
     * @param $department
     * @param $email
     * @param $age
     */
    public function __construct(string $name, float $salary, string $position, string $department, $email = 'n/a', $age = -1)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->age = $age;
    }

    public function __toString()
    {
        $salaryFormatted = number_format($this->salary, 2);
        return "$this->name $salaryFormatted $this->email $this->age".PHP_EOL;

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

}

class Department {
    private $name;
    private $employees;

    /**
     * Department constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->employees = [];
    }

    public function addEmployee(Employee $emploee) {
        $this->employees[] = $emploee;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getEmployees(): array
    {
        return $this->employees;
    }

    public function getAverageSalary () {
        $sum = 0;
        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary();
        }
        return $sum / count($this->employees);
    }

}