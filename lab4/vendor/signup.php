<?php

    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $fathername = $_POST['fathername'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        }

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `surname`, `fathername`, `avatar`, `email`, `password`, `username`) VALUES (NULL, '$name', '$surname', '$fathername', '$path', '$email', '$password', '$username')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../login.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>
