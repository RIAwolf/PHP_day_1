<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/31/2018
 * Time: 11:43
 */

include "../fragments/header.php";

$atstumas=0;
$sanaudos=0;

/*
 * PHP gauna du kintamuosius: atstumas kilometrais ir sąnaudos litrais,
apskaičiuoti kiek vidutiniškai sunaudojama kuro 100tui kilometrų pagal formulę:
vidurkis = litrai * 100 / atstumo
Kintamuosius iš $_REQUEST pasiimti vienoje funkcijoje, o skaičiavimą atlikti
kitoje. ABi funkcijas parašyti be parametrų ir pasidėti reikšmes į globalius
kintamuosius, naudoti $_GLOBAL
 * */

function pasiimti()
{
    $GLOBALS["atstumas"] = $_REQUEST["atstumas"];
    $GLOBALS["sanaudos"] = $_REQUEST["sanaudos"];

    echo "Gavau atstumą: " . $GLOBALS["atstumas"] . " km";
    echo " ir sąnaudas: " . $GLOBALS["sanaudos"] . " l";
    echo "<br/>";


}

function skaiciuok()
{
    $vidurkis = $GLOBALS["sanaudos"] * 100 / $GLOBALS["atstumas"];
    echo "Vidutinės sąnaudos 100km yra: " . $vidurkis . " l<br/>";
}

if (isset($_REQUEST["atstumas"]) && isset($_REQUEST["sanaudos"])) {
    pasiimti();
    skaiciuok();
}

?>