<?php

/*require_once 'PDO.php';*/
require_once 'rb.php';
require_once 'RedBean_connect.php';

//PDO

/*$id = $_GET['id'];

$sql = "DELETE FROM `products` WHERE `id` = $id";

$res = $pdo->query($sql);*/

//RedBean

$id = $_GET['id'];

$user = R::load('products', $id);

R::trash($user); // Удалить данного пользователя

header('Location: /№1/');
