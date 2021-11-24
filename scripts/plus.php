<?php

include('connection.php');

$ID = $_GET['id'];

$result = mysqli_query($connection, "SELECT ID, PRODUCT_QUANTITY FROM products WHERE `ID`=" . $ID);

while ($row = mysqli_fetch_array($result)) {
    $count = $row['PRODUCT_QUANTITY'] + 1;
    $results = mysqli_query($connection, "UPDATE `products` SET `PRODUCT_QUANTITY` = '" . $count . "' WHERE `products`.`ID` = " . $ID);

    header('Location: ../index.php');

    exit;
}

?>