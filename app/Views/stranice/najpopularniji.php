<h1>Najpopularniji restorani </h1>

<?php
$niz=$output = array_slice($restoran, 0, 3);
foreach ($niz as $res){
    $suma=$res->brojRecenzija*$res->Prosecna_ocena;
    echo "<tr><td>{$res->Ime}</td> &nbsp <td>{$res->Adresa}</td> <td><b>$suma</b></td><br>";

}
?>