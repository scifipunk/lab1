<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'lab1');

    if (!$connect) {
        die('Error connect to DataBase');
    }