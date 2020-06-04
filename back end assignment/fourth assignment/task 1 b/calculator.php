<?php

class MyCalculator
{
    private $number1;
    private $number2;

    public function __construct($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function add()
    {
        return ($this->number1 + $this->number2);
    }

    public function subtract()
    {
        return ($this->number1 - $this->number2);
    }

    public function multiply()
    {
        return ($this->number1 * $this->number2);        
    }

    public function divide()
    {
        return ($this->number1 / $this->number2);
    }

}

$mycalc = new MyCalculator( 12, 6);
echo "added : " . $mycalc-> add();
echo "<br>";

echo "subtracted : " . $mycalc-> subtract();
echo "<br>";

echo "multiplied : " . $mycalc-> multiply();
echo "<br>";

echo "divided : " . $mycalc-> divide();


//$student = new Student;
//$student->name = 'Ahmed ';
//$student->age = 25;
//
//$student->goToSchool();
//
//$student2 = new Student;
//$student2->name = 'Ali';
//
//echo $student->name;
//echo $student2->name;
//var_dump($student);
