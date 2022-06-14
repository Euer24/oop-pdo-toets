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
              <td>" . $value->id  . "</td>
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
            <th>id</th>
            <th>brand</th>
            <th>model</th>
            <th>topspeed</th>    
            <th>price</th>
        </tr>
    </thead>
    <tbody>
    <?= $tbody; ?>
    </tbody>
</table>

