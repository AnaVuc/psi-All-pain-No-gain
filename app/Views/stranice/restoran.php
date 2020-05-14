
<?php

<<<<<<< HEAD
foreach ($restoran as $res) {
    $suma=$res->brojRecenzija*$res->Prosecna_ocena;
    echo "<tr><td>{$res->Ime}</td> &nbsp <td>{$res->Vrsta_hrane}</td> <td><i>{$res->Prosecna_ocena}</i></td> <td><i>{$res->Cenovni_rang}</i></td> <td><b>$suma</b></td><br>";
=======

foreach ($restoran as $res) {
    $suma=$res->brojRecenzija*$res->Prosecna_ocena;
    echo "<tr><td>{$res->Ime}</td> &nbsp <td>{$res->Adresa}</td> <td><i>{$res->Prosecna_ocena}</i></td> <td><i>{$res->Cenovni_rang}</i></td> <td><b>$suma</b></td><br>";
>>>>>>> 043716c9a6fa5e86c45dbff50116cd02620e1057
}
?>