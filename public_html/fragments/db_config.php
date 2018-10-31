<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/31/2018
 * Time: 15:05
 */


$servername = "localhost";
$username = "root";
$password = "root";
$dbName = "kcs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br/>";

function spausdinkLentele($result)
{
    echo "<table>";


    while ($eilute = $result->fetch_assoc()) {
        $tekstas = "<tr>";
        foreach ($eilute as $laukelis) {
            $tekstas .= "<td>" . $laukelis . "</td>";
        }
        echo "$tekstas</tr>";
    }
    echo "</table>";

}

?>

