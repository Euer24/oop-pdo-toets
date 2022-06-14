<?php
/**
 * Dit is de Teacher class
 */

 class Teacher extends Person
 {
     //properties, fields
    private $salary;
    private $yearInservice;
     //getters and setter

     //constructor
    public function __construct($firstname, $infix, $lastname, $bankaccountnumber, $salary, $yearInservice, $phonenumber)
    {
        parent::__construct($firstname, $infix, $lastname, $bankaccountnumber);
        $this->salary = $salary;
        $this->yearInservice = $yearInservice;
        $this->phonenumber = $phonenumber;
    }
     //Methods
     public function exposeMySalary()
     {
         return "Mijn naam is:" . " " . $this->firstname . " " . $this->infix . " " . $this->lastname . " " . "salaris is:" . " " . $this->salary . " " . "Per maand" . " " . "En mijn bankrekeningnummer is" . " " . $this->bankaccountnumber . " " . "Ik ben" . " " . $this->yearInservice . " Jaren dienst" . " Mijn telefoonnummer is: " . $this->phonenumber;
     }
 }
?>