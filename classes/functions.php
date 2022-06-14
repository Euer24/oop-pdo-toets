<?php
/**
 * Deze functie laadt automatsiche de classes die gebruikt gaat worden 
 */
function load_class($classname)
{
    // bouw het pad op naar het bestand van de class in zit
    $pathToFile = '../classes/' . $classname . '.php';
    // check of het bestand waar de class in zit bestaat
    if (file_exists($pathToFile))
    {
        // als het  bestand met de class erin bestaat, laadt hem dan op de pagina
        require($pathToFile);
    } else {
        // Als het bestand niet bestaat geef dan de onderstaande melding
        echo "Class is niet gevonden";
    }
}

spl_autoload_register('load_class');


?>

