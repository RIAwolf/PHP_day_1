<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/31/2018
 * Time: 11:43
 */

include "../fragments/header.php";


/*
 * PHP gauna du kintamuosius: atstumas kilometrais ir sąnaudos litrais,
apskaičiuoti kiek vidutiniškai sunaudojama kuro 100tui kilometrų pagal formulę:
vidurkis = litrai * 100 / atstumo
Kintamuosius iš $_REQUEST pasiimti vienoje funkcijoje, o skaičiavimą atlikti
kitoje.
 * */

function pasiimti()
{
    $atstumas = $_REQUEST["atstumas"];
    $sanaudos = $_REQUEST["sanaudos"];

    echo "Gavau atstumą: " . $atstumas . " km";
    echo " ir sąnaudas: " . $sanaudos . " l";
    echo "<br/>";

    skaiciuok($sanaudos, $atstumas);
}

function skaiciuok($sanaudos, $atstumas)
{
    $vidurkis = $sanaudos * 100 / $atstumas;
    echo "Vidutinės sąnaudos 100km yra: " . $vidurkis . " l<br/>";
}

if (isset($_REQUEST["atstumas"]) && isset($_REQUEST["sanaudos"])) {
    pasiimti();
}

?>