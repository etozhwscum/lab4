<?php

    $connect = mysqli_connect('localhost', 'root', '', 'afisha');

    if (!$connect) {
        die('Error connect to DataBase');
    }