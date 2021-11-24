<?php

// Реализация класса
// $numberOfGoods - количество выводимых товаров

class CProducts {
    static function getTable($numberOfGoods) {

        include('connection.php');

        $results = mysqli_query($connection, "SELECT ID, PRODUCT_ID, PRODUCT_NAME, PRODUCT_PRICE, PRODUCT_ARTICLE, PRODUCT_QUANTITY, DATE_CREATE, DISPLAY FROM `products` WHERE DISPLAY<>0 ORDER BY `products`.`DATE_CREATE` DESC LIMIT ".$numberOfGoods);

        while ($rows = mysqli_fetch_array($results)) {
            echo "<tr>";

            $result = mysqli_query($connection,"SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'test_db' AND TABLE_NAME = 'products'; ");

            while ($row = mysqli_fetch_array($result)) {
                echo "<td>";
                echo $rows[$row['COLUMN_NAME']];

                if($row['COLUMN_NAME'] == 'PRODUCT_QUANTITY') {
                    echo "<span class='adjust'>";
                    echo "<button onclick='counter(" . $rows['ID'] . ", \"+\");'>+</button>";
                    echo "<button onclick='counter_(" . $rows['ID'] . ", \"-\");'>-</button>";
                    echo "</span>";
                }

                echo "</td>";
            }
            echo "<td>";
            echo "<button onclick='hide(" . $rows['ID'] . ");'>Скрыть</button>";
            echo "</td>";
            echo "</tr>";
        }
        
        mysqli_close($connection);
    }
}

?>