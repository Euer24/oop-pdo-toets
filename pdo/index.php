<a href="./create.php">Land Toevoegen</a>

<?php
/**
 * We gaan een verbinding maken met de database d.m.v. PDO
 */
require '../classes/Database.php';
$db = new Database();

$db->query("SELECT `id`, `country`, `capital`, `continent`, `population` FROM `country`");

// var_dump($db->selectAll());

$country = $db->selectAll();

$tbody = "";

foreach($country as $key => $value)
{
    $tbody .= "<tr>
              <td>" . $value->id  . "</td>
              <td>" . $value->country . "</td>
              <td>" . $value->capital . "</td>
              <td>" . $value->continent . "</td>
              <td>" . $value->population . "</td>
              </tr>";
}

?>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>country</th>
            <th>capital</th>
            <th>continent</th>    
            <th>population</th>
        </tr>
    </thead>
    <tbody>
    <?= $tbody; ?>
    </tbody>
</table>

