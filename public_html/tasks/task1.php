<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/31/2018
 * Time: 11:43
 */

include "../fragments/header.php";


/*
 * Parašyti kodą kuris gauna per parametrus vartotojo vardą ir jį atspausdina penkis
kartus
 * */

if(isset($_REQUEST["vardas"])){
    $vardas = $_REQUEST["vardas"];

    echo $vardas."<br/>";
    echo $vardas."<br/>";
    echo $vardas."<br/>";
    echo $vardas."<br/>";
    echo $vardas;

}


?>