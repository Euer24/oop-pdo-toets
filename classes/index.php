<?php
require("./functions.php");

// Dit is een object van de class
$person = new Person("Jonas", " ", "Bloemendaal", "NLB 12345678");
$person->__set("firstname", "Thomas");
echo $person->sayHello();
 // Ik wil Jonas  zijn bankrekeningnummer toevoegen
$person->__set("bankaccountnumber", "100000");
echo "<hr>";
echo "bankrekening van jonas: " . $person->__get("bankaccountnumber");
var_dump();


echo "<hr>";
 // echo $person ->firstname . " " . $person ->infix . " " . $person ->lastname;
$person1 = new Person("Jaswand", " ", "Soekhoe", "NLB 12345678");
echo $person1->sayHello();
$person1->__set("bankaccountnumber", "200000");
echo "<hr>";
echo "bankrekening van Jaswand: " . $person1->__get("bankaccountnumber");
echo "<hr>";
var_dump();


$person2 = new Person("Euer", " ", "Keanthongjaroen", "NLB 12345678");
echo $person2->sayHello();
$person2->__set("bankaccountnumber", "300000");
echo "<hr>";
echo "bankrekening van Euer: " . $person2->__get("bankaccountnumber");
echo "<hr>";
var_dump();


$person3 = new Person("Priya", " ", "Soekhoe", "NLB 12345678");
echo $person3->sayHello();
$person3->__set("bankaccountnumber", "400000");
echo "<hr>";
echo "bankrekening van Priya: " . $person3->__get("bankaccountnumber");
echo "<hr>";
var_dump();


$person4 = new Person("Tony", " ", "Stark", "NLB 12345678");
echo $person4->sayHello();
$person4->__set("bankaccountnumber", "500000");
echo "<hr>";
echo "bankrekening van Tony: " . $person4->__get("bankaccountnumber");
echo "<hr>";
var_dump();


?>