<?php
/**
 * Dit is een class Person
 */

 class Person
 {
     // De properties, fields, instance variables
    protected $firstname = "Jaswand";
    protected $infix = " ";
    Protected $lastname = "Soekhoe";
    protected $bankaccountnumber;
    protected $phonenumber;     

    // Dit is een set-functie voor het opgeven van een waarde voor een property 
    public function __set($property, $value)
    {
        if (property_exists($this, $property))
        {
            $this->$property = $value;
        }
    }
    
    // Dit is een get-functie voor bankaccountnumber
    public function __get($property)
    {
        if (property_exists($this, $property))
        {
            return $this->$property;
        }
    }

    // Dit is een constructor en $this verwijst altijd naar de object
    public function __construct($firstname, $infix, $lastname, $bankaccountnumber, $phonenumber = NULL)
    {
        $this->firstname = $firstname;
        $this->infix = $infix;
        $this->lastname = $lastname;
        $this->bankaccountnumber = $bankaccountnumber;
    }

    // Dit is een method
    public function sayHello()
    {
         return "Groetjes van " . $this->firstname . " " . $this->infix . " " . $this->lastname . "👑" ;
    }    
 }

 