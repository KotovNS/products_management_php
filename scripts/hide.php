<?php

include('connection.php');

$results = mysqli_query($connection, "UPDATE `products` SET `DISPLAY` = '0' WHERE `products`.`ID` = " . $_GET['id']);

header('Location: ../index.php');

?>