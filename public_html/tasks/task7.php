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
 * */

if (isset($_REQUEST["atstumas"]) && isset($_REQUEST["sanaudos"])) {
    $atstumas = $_REQUEST["atstumas"];
    $sanaudos = $_REQUEST["sanaudos"];


    echo "Gavau atstumą: " . $atstumas . " km";
    echo " ir sąnaudas: " . $sanaudos . " l";
    echo "<br/>";


    $vidurkis = $sanaudos * 100 / $atstumas;
    echo "Vidutinės sąnaudos 100km yra: " . $vidurkis . " l<br/>";


}


?>