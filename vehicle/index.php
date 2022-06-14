<h1>De vijf duurste auto's ter wereld </1h> <br>

<a href="./create.php">Nieuwe Record</a>

<?php
/**
 * We gaan een verbinding maken met de database d.m.v. PDO
 */
require '../classes/Database.php';
$db = new Database();

$db->query("SELECT `id`, `brand`, `model`, `topspeed`, `price` FROM `vehicle`");

// var_dump($db->selectAll());

$vehicle = $db->selectAll();

$tbody = "";

foreach($vehicle as $key => $value)
{
    $tbody .= "<tr>
              <td>" . $value->brand . "</td>
              <td>" . $value->model . "</td>
              <td>" . $value->topspeed . "</td>
              <td>" . $value->price . "</td>
              </tr>";
}

?>

<table>
    <thead>
        <tr>
            <th></th>
            <th>Merk</th>
            <th>model</th>
            <th>Topsnelheid</th>    
            <th>prijs</th>
        </tr>
    </thead>
    <tbody>
    <?= $tbody; ?>
    </tbody>
</table>

