<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/css.css">
    <title>Events List</title>
</head>
<body>
    <?php require_once ('templates/header.php');?>
    <div class="event_list"><br>
        <h1>Выберите какое событие вы хотите создать</h1>
        <div class="catalogue">
            <a href="cinema_event.php"><button>Кино</button></a>
            <a href="#"><button>Театр</button></a>
            <a href="#"><button class="cat">Концерты</button></a>
            <a href="#"><button class="cat_1">Сертификаты</button></a>
            <a href="#"><button class="cat">Выставки</button></a>
        </div>
    </div>
</body>
</html>