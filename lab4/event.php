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
        <form action="vendor/create_event.php" method="post" enctype="multipart/form-data">
        <p><input class="row" style="padding: 1em; border: none;" type="file" name="avatar" required></p>
        <p><input class="row" type="text" name="title" placeholder="Заголовок" required></p>
        <p><input class="row" type="date" name="date" placeholder="Дата" required></p>
        <p><input class="row" type="text" name="price" placeholder="Цена"></p>
            <p><input type="radio" name="event_type" value="cinema">Кино</p>
            <p><input type="radio" name="event_type" value="theater">Театр</p>
            <p><input type="radio" name="event_type" value="concert">Концерт</p>
            <p><input type="radio" name="event_type" value="certificate">Сертификат</p>
            <p><input type="radio" name="event_type" value="exhibition">Выставка</p>
        <button class="button_1" type="submit">Создать</button>
        <p>
            <a href="index.php">Назад</a>
        </p>
        </form>
    </div>
</body>
</html>