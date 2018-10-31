<?php

include "../fragments/db_config.php";
include "../fragments/header.php";


$sql = "SELECT * FROM `students`";
$result = $conn->query($sql);

spausdinkLentele($result);

?>