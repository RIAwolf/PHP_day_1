<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/31/2018
 * Time: 11:43
 */

include "../fragments/header.php";


/*
 * Parašyti kodą kuris gauna žodį per parametrus atspausdintų kiek simbolių yra
tame žodyje.
 * */

if(isset($_REQUEST["zodis"])){
    $zodis = $_REQUEST["zodis"];

    $ilgis = strlen($zodis);


    echo "Žodyje: ".$zodis." yra ".$ilgis." simboliai";
}


?>