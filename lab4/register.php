<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
    }
?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
<?php require_once('templates/header.php');?>
    <div class="form">
        <h1>Регистрация</h1>
        <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <p><input class="row" type="text" name="name" placeholder="Имя" required></p>
        <p><input class="row" type="text" name="surname" placeholder="Фамилия" required></p>
        <p><input class="row" type="text" name="fathername" placeholder="Отчество" required></p>
        <p><input class="row" type="text" name="username" placeholder="Имя пользователя" required></p>
        <p><input class="row" type="email" name="email" placeholder="E-mail" required></p>
        <p><input class="row" style="padding: 1em; border: none;" type="file" name="avatar" required></p>
        <p><input class="row" type="password" name="password" placeholder="Пароль" required></p>
        <p><input class="row" type="password" name="password_confirm" placeholder="Подтверждение пароля"></p>
        <button class="button_1" type="submit">Зарегистрироваться</button>
        <p>
            <a href="login.php">Войти</a>
        </p>
        <?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
    </div>
</body>
</html>