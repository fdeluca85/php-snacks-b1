<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<!-- strlen  Returns the length of the given string. -->
<!-- strpos — Find the position of the first occurrence of a substring in a string -->

<?php

if (isset($_GET['name']) && ($_GET['mail']) && ($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    var_dump($_GET["name"]);
    var_dump($_GET["mail"]);
    var_dump($_GET["age"]);


    // parametri mail
    $dot = ".";
    $at = "@";

    if (strlen($name) >= 3 && strpos($mail, $dot) && strpos($mail, $at) && is_numeric($age)) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
} else {
    echo "Dati mancanti  - inserisci nel seguente formato ?name=***&mail=***@***.***&age=***";
}


?>