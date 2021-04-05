<?php
require_once 'rb.php';
require_once 'RedBean_connect.php';

//Обращение к таблице (вызывает таблицу или создает если ее нет)
$products = R::dispense('products');

echo  "<pre>";
$products['name'] = 'Ivan';
$products['description'] = 'bobobo';
$products['category_id'] = 2;
$products['price'] = 100;
echo $products;

echo  "</pre>";
//Занеесение переменной в базу данных
R::store($products);



//Вывести все поля и записи из таблицы
$all = R::findAll('products');
echo  "<pre>";
print_r($all);
echo  "</pre>";



//Вывести одну определенную запись по $id в данном случае
$id = 27;
$post = R::load('products', $id);
?>
    <h1><?= $post['name']?></h1>
    <p><?= $post['description']?></p>
    <p><?= $post['category_id']?></p>
    <p><?= $post['price']?></p>
<?php



// вывод по критериям
$comments = R::find('coment' , 'post_id = ?' , [$id]);


// Удалить данного пользователя(строку из таблицы)
R::trash($user);

//Удалить всю ТАБЛИЦУ
R::wipe('comment');

