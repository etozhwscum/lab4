<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: profile.php');
}

?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
<?php require_once('templates/header.php');?>
	<div class="form">
		<h1>Войти</h1>
		<form action="vendor/signin.php" method="post">
        <p><input class="row" type="text" name="username" placeholder="Имя пользователя" required></p>
        <p><input class="row" type="password" name="password" placeholder="Пароль" required></p>
        <button class="button" type="submit">Войти</button>
        <p>
           <a href="register.php">Зарегистрироваться</a>
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