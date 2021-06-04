<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/css.css">
    <title>Edit</title>
</head>
<body>

<?php require_once ('templates/header.php');?>
<div class="edit">
    <h2>Профиль > Редактирование профиля</h2>
    <form action="vendor/edit_profile.php" method="POST" enctype="multipart/form-data">
        <p><input type="hidden" name="id" value="<?= $_SESSION['user']['id'] ?>"></p>
        <p><input class="row" style="padding: 1em; border: none;" type="file" name="avatar" required></p>
        <button type="submit">Сохранить</button>
        <p>
            <a href="profile.php">Назад</a>
        </p>
    </form>
</div>
</body>
</html>