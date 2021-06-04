<?php


session_start();
require_once 'connect.php';

$id = $_POST['id'];
$path = 'uploads/' . time() . $_FILES['avatar']['name'];
if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {

}
mysqli_query($connect, "UPDATE `users` SET `avatar` = '$path' WHERE `users`.`id` = '$id'");

$_SESSION['user']['avatar'] = $path;

header('Location: ../profile.php');

