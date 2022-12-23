<?php

//atribut
//method

class Human
{  //class
    public $name;
    public $age;

    function __construct($name, $age)
    {  //method , fungsi construct dipanggil ketika object dibuat
        $this->name = $name;
        $this->age = $age;
    }

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }
}

$fulan = new Human("fulan", 22);
echo $fulan->getName();
echo "<br>";
$fulan->setName("John Doe");
echo $fulan->getName();
echo "<br>";
print_r($fulan);

// --------------------