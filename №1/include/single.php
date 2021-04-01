<?php
require_once 'PDO.php';
    $id =  $_GET['id'];

    $sql = $pdo->query("SELECT * FROM `products` WHERE `id` = '$id'");
    $post = $sql->fetch(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet"
          href="css/style.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="wrapper col-md-6 offset-3">
            <?
                if(!empty($post)) :

            ?>

            <h1><?= $post['name']?></h1>
            <p><?= $post['description']?></p>
            <p><?= $post['category_id']?></p>
            <p><?= $post['price']?></p>
            <?

                endif;
            ?>

            <a class="btn btn-success" href="/№1/">На главную</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
