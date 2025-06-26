<?php

class Person
{
    protected $name = "sample";
    protected $age;
    private $gender;
    private $personality;

    public function __construct()
    {
        echo "Welcome";
    }
}

class Student extends Person
{
    private $grade = 20;
    protected $name = "New boy";

    function printName()
    {
        echo $this->name;
    }
}

$user = new Student();
$user->printName();