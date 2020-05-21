<?php

interface IEmployee
{
    public function Hello();
}

abstract class Person implements IEmployee
{
    protected $name;
    protected $surname;
    protected $age;

    function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    function __destruct()
    {
        echo "Destructor!";
    }
}

class Worker extends Person
{
    private $skills = [];
    private $position;

    function __construct($name, $surname, $age, $postion)
    {
        parent::__construct($name, $surname, $age);
        $this->position = $postion;
    }

    function Hello()
    {
        echo "<H1>" . "Hello! " . $this->name . "  "  . $this->surname . "  " . $this->age . " " . $this->position . "</H1>";
    }

    function SetSkill($newSkill)
    {
        array_push($this->skills, $newSkill);
    }

    function GetSkills()
    {
        foreach ($this->skills  as $skill) {
            echo "<h2>" . $skill . "</h2>";
        }
    }
}

// $person1 = new Person("Bill", "Gates", 60);
// $person1->Hello();

$worker = new Worker("John", "Doui", 45, "Programmer");
$worker->Hello();
$worker->SetSkill("PHP");
$worker->SetSkill("C#");
$worker->SetSkill("JS");
$worker->SetSkill("SQL");
$worker->GetSkills();
