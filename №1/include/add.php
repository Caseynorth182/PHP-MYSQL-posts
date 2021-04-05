<?php
/*require_once 'PDO.php';*/
require_once 'rb.php';
require_once 'RedBean_connect.php';



$name = trim($_POST['name']);
$description = trim($_POST['description']);
$category_id = trim($_POST['category_id']);
$price = trim($_POST['price']);

//PDO Добовление в БД

/*$sql = "INSERT INTO products (`id`,`name`,`description`,`category_id`,`price`) VALUE (null, :name, :description, :category_id, :price)";

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
}*/


//RedBean добовление в БД
$users = R::dispense('products');

$users['name'] = $name;
$users['description'] = $description;
$users['category_id'] = $category_id;
$users['price'] = $price;

R::store($users);


// redirect
header('Location: /№1/');





