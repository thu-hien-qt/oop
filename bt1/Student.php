<?php
namespace bt1;
require "Person.php";

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