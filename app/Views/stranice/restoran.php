

<?php
foreach ($restoran as $res) {
    $suma=$res->brojRecenzija*$res->Prosecna_ocena;
    echo "<tr><td>{$res->Ime}</td> &nbsp <td>{$res->Adresa}</td> <td><b>$suma</b></td><br>";
}
?>