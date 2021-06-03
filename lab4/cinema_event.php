<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Event</title>
    <link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
<?php require_once('templates/header.php');?>
    <div class="event_form">
        <h1>Создание события</h1>
        <form action="vendor/create_cinema_ivent.php" method="post" enctype="multipart/form-data">
        <p><input class="row" style="padding: 1em; border: none;" type="file" name="avatar" required></p>
        <p><input class="row" type="text" name="title" placeholder="Заголовок" required></p>
        <p><input class="row" type="date" name="date" placeholder="Дата" required></p>
        <p><input class="row" type="text" name="price" placeholder="Цена"></p>
        <button class="button_1" type="submit">Создать</button>
        <p>
            <a href="events_catalogue.php">Назад</a>
        </p>
    </form>
    </div>
</body>
</html>