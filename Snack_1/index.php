<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$match = [
    [
        "squadraCasa" => "Olimpia Milano",
        "puntiCasa" => 55,
        "squadraOspite" => "Cantù",
        "puntiOspite" => 60,
    ],
    [
        "squadraCasa" => "Virtus Roma",
        "puntiCasa" => 75,
        "squadraOspite" => "Varese",
        "puntiOspite" => 50,
    ],
    [
        "squadraCasa" => "Fortitudo Bologna",
        "puntiCasa" => 72,
        "squadraOspite" => "Dinamo Sassari",
        "puntiOspite" => 71,
    ],


];
?>
<h2>Risultati</h2>

<ul>
    <?php
    for ($i = 0; $i < count($match); $i++) {
        echo "<li>" . $match[$i]["squadraCasa"] . " " . " - " . $match[$i]["squadraOspite"] . " " . " | " . $match[$i]["puntiCasa"] . " " . " - " . $match[$i]["puntiOspite"] . "</li>";
    }

    ?>
</ul>