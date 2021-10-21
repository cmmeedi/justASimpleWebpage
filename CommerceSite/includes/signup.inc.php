<?php

$user = 'root';
$password = 'root';
$db = 'commercesite';
$host = 'localhost';
$port = 3306;


$conn = new mysqli()


$link = mysqli_init();
$success = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
    $port
    );