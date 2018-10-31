<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/31/2018
 * Time: 11:43
 */

include "../fragments/header.php";


/*
 * PHP gauna du skaičius ir atspausdina jų skirtumą bei sumą
 * */
function skirtumas ($x, $y){
    echo "Skirtumas: " . ($x - $y) . "<br/>";
}

function suma($x, $y){
    echo "Suma: " . ($x + $y) . "<br/>";
}

if (isset($_REQUEST["a"]) && isset($_REQUEST["b"])) {
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];


    echo "Gavau " . $a;
    echo " ir " . $b;
    echo "<br/>";

    skirtumas($a,$b);
    suma($a,$b);

    
}


?>