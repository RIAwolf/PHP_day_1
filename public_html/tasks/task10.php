<?php


/*
 * Pasinaudojant forma parašyti skaičiuotuvą kuris atlieką dviejų skaičių sumą,
skirtumą, sandaugą, dalybą.*/


/*
 * 1) pasirasyti html forma
 * 1.1) Forma turi kreiptis i uzduoties faila paspaudus submit
 * 1.2) Forma tures du ivediomo laukus
 * 1.2.1) pirmo lauko name reikšmė bus a
 * 1.2.2) antro lauko name reikšmė bus b
 * 1.3) Forma turės vieną input kurio tipas submit
 * 1.4) Formos method duomenu siuntimui bus get
 * */

include "../fragments/header.php";
$suma = "";
$skirtumas = "";
$sandauga = "";
$dalyba = "";
if (isset($_REQUEST["a"]) && isset($_REQUEST["b"])) {
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];

    $suma = $a + $b;
    $skirtumas = $a - $b;
    $sandauga = $a * $b;
    $dalyba = $a / $b;
}

?>

<form action="/tasks/task10.php" method="get">
    <input type="text" name="a">
    <input type="text" name="b">
    <input type="submit">
</form>

<ul>
    <li>Suma: <?php echo $suma; ?></li>
    <li>Skirtumas: <?php echo $skirtumas; ?></li>
    <li>Sandauga: <?php echo $sandauga; ?></li>
    <li>Dalyba: <?php echo $dalyba; ?></li>
</ul>
