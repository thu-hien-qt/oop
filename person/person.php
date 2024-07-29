<?php

class Person
{
    private $name;
    private $address;

    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function toString()
    {
        return "Person[name=" . $this->getName() . ",address=" . $this->getAddress() . "]";
    }
}

class Student extends Person
{
    private $program;
    private int $year;
    private float $fee;

    public function __construct($name, $address, $program, $year, $fee)
    {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function getProgram()
    {
        return $this->program;
    }

    public function setProgram($program)
    {
        $this->program = $program;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getFee()
    {
        return $this->fee;
    }

    public function setFee($fee)
    {
        $this->fee = $fee;
    }

    public function toString()
    {
        return "Student[Person[name=" . $this->getName() . ",address=" . $this->getAddress() .
        "],program=" . $this->getProgram() . ",year=" . $this->getYear() . ",fee=" . $this->getFee() . "]";
    }
}

class Staff extends Person {
    private $school;
    private float $pay;

    public function __construct($name, $address, $school, $pay)
    {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }

    public function getSchool() {
        return $this->school;
    }

    public function setSchool($school) {
        $this->school = $school;
    }

    public function getPay() {
        return $this->pay;
    }

    public function setPay($pay) {
        $this->pay = $pay;
    }

    public function toString() {
        return "Staff[Person[name=".$this->getName().",address=".
        $this->getAddress().",school=".$this->getSchool().",pay=".$this->getPay()."]";
    }
}

$ha = new Student("ha", "hoi an", "gioi", "2003", "8.5");
echo $ha->toString();
