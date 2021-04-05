<?php
/*require_once 'PDO.php';*/
require_once 'rb.php';
require_once 'RedBean_connect.php';


$id = $_POST['id'];
$name = trim($_POST['name']);
$description = trim($_POST['description']);
$category_id = trim($_POST['category_id']);
$price = trim($_POST['price']);

//PDO
/*$sql = "UPDATE `products` SET `description` = :description,`name` = :name,`category_id` = :category_id ,`price` = :price  WHERE `id` = '$id'";*/

//RedBean
//загружаем пользователя из бд
$user = R::load('products', $id);

$user['name'] = $name;
$user['description'] = $description;
$user['category_id'] = $category_id;
$user['price'] = $price;

R::store($user);
echo('Пост обновлен');
echo '<a href="/№1/">На главную</a>';


//PDO -> обновление полей
/*if($sql){
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
}*/