<?php
require_once 'PDO.php';

$id = $_POST['id'];
$name = trim($_POST['name']);
$description = trim($_POST['description']);
$category_id = trim($_POST['category_id']);
$price = trim($_POST['price']);

$sql = "UPDATE `products` SET `description` = :description,`name` = :name,`category_id` = :category_id ,`price` = :price  WHERE `id` = '$id'";



if($sql){
    $statement = $pdo->prepare($sql);
    $result = $statement->execute([
        'description' => $description,
        'name' => $name,
        'category_id' => $category_id,
        'price' => $price,
    ]);
    echo('Пост обновлен');
    echo '<a href="/№1/">На главную</a>';

}else {
    die('Не получилось обновить пост');
}