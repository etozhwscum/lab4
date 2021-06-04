<?php
session_start();
?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
     <link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
<?php require_once('templates/header.php');?>
    <div class="user">
        <h2>Профиль</h2>
        <form class="current_user">
            <img class="userPic" src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="Фото профиля">
            <div class="user_info">
                <p><b><?= $_SESSION['user']['surname'] ?></b></p>
                <p><b><?= $_SESSION['user']['name'] ?></b></p>
                <p><b><?= $_SESSION['user']['fathername'] ?></b></p>
                <a href="#"><b><?= $_SESSION['user']['email'] ?></b></a>
            </div>
        </form>
        <div class="links">
                <p><a href="edit.php"><button class="change">Редактировать профиль</button></a></p>
        </div>
    </div>
</body>
</html>