<?php
require_once 'PDO.php';

$name = trim($_POST['name']);
$description = trim($_POST['description']);
$category_id = trim($_POST['category_id']);
$price = trim($_POST['price']);

$sql = "INSERT INTO products (`id`,`name`,`description`,`category_id`,`price`) VALUE (null, :name, :description, :category_id, :price)";

if (!empty($pdo)) {
    $statement = $pdo->prepare($sql);
}
if (isset($statement)) {
    $db = $statement->execute([
        'name' => $name,
        'description' => $description,
        'category_id' => $category_id,
        'price' => $price,
    ]);
}

header('Location: /№1/');





