<?php

require_once 'PDO.php';

$id = $_GET['id'];

$sql = "DELETE FROM `products` WHERE `id` = $id";

$res = $pdo->query($sql);

header('Location: /№1/');
