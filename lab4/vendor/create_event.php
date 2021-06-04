<?php

session_start();
require_once 'connect.php';

$title = $_POST['title'];
$date = $_POST['date'];
$price = $_POST['price'];
$event_type = $_POST['event_type'];

$path = 'uploads/' . time() . $_FILES['avatar']['name'];
if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {

}
mysqli_query($connect, "INSERT INTO `$event_type` (`id`, `avatar`, `title`, `date`, `price`) VALUES (NULL, '$path', '$title', '$date','$price')");

header('Location: ../cinema.php');

