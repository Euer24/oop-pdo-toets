<?php

require("./Person.php");
require("./Teacher.php");

require("./functions.php");

// We maken een nieuwe object van de class Teacher
$Teacher = new Teacher("Rowanda", "van", "smink", "NLB978979", 2100, 777, '06-54832742');
echo $Teacher->exposeMySalary();

echo "<hr>";

$Teacher1 = new Teacher("Eurina", "de", "legend", "NLB324534", 900, 890, '06-87434634');
echo $Teacher1->exposeMySalary();

echo "<hr>";

$Teacher2 = new Teacher("Thomasio", "van", "Happé", "NLB32523",2222, 10, '06-89439643');
echo $Teacher2->exposeMySalary();

?>