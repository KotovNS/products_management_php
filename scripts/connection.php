<?php

// Соединение с БД

$connection = mysqli_connect('localhost', 'root', '', 'test_db');

if (!$connection) {
    echo 'Не удалось подключиться к БД!<br/>' . mysqli_connect_error();
    exit();
}

?>