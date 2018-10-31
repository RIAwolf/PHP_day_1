<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/31/2018
 * Time: 11:43
 */

include "../fragments/header.php";


/*
 * PHP gauna du kintamuosius: ūgis metrais ir svoris kilogramais, išvesti kūno
masės indeksą pagal formulę
KMI = svoris/(ugis*ugis)
KMI skaičiavimas turi būti atskiroje funkcijoje
 * */

function skaiciuokKMI($ug, $sv)
{
    $kmi = $sv / ($ug * $ug);
    echo "KMI yra: " . $kmi . "<br/>";
}

if (isset($_REQUEST["ugis"]) && isset($_REQUEST["svoris"])) {
    $ugis = $_REQUEST["ugis"];
    $svoris = $_REQUEST["svoris"];


    echo "Gavau ūgį:" . $ugis . " m";
    echo " ir svorį: " . $svoris . " kg";
    echo "<br/>";

    skaiciuokKMI($ugis, $svoris);


}


?>