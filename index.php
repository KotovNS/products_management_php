<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        <h1>Таблица товаров</h1>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>ID товара</td>
                    <td>Название</td>
                    <td>Цена</td>
                    <td>Артикул</td>
                    <td>Количество</td>
                    <td>Дата создания</td>
                    <td>Отображение в таблице</td>
                    <td>Скрыть товар</td>
                </tr>
            </thead>

            <tbody>
                <?php 

                include('scripts/CProducts.php');

                // В качестве параметра указывается количество выводимых товаров

                CProducts::getTable(100);

                ?>
            </tbody>
        </table>
    </main>

    <script src="scripts/redirect.js"></script>
</body>
</html>