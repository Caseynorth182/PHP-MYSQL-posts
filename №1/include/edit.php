<?php

/*require_once 'PDO.php';*/
require_once 'rb.php';
require_once 'RedBean_connect.php';


$id = $_GET['id'];

//PDO

/*$sql = $pdo->query("SELECT * FROM `products` WHERE `id` = '$id'");
$post = $sql->fetch(PDO::FETCH_ASSOC);*/

//RedBean
$post = R::load('products', $id);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible"
	      content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
	      rel="stylesheet"
	      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
	      crossorigin="anonymous">
	<link rel="stylesheet"
	      href="../css/style.css">
	<title>Document</title>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3"

			<div class="col-md-6 offset-3">
				<figure class="text-center">
					<blockquote class="blockquote">
						<p>A well-known quote, contained in a blockquote element.</p>
					</blockquote>
					<figcaption class="blockquote-footer">
						Someone famous in <cite title="Source Title">Source Title</cite>
					</figcaption>
				</figure>

			<form action="update.php"
			      method="POST">
				<div class="mb-3">
					<!--//скрытый пост ID для того что бы его потом получить в POST[id]-->

					<input type="hidden"
					       name="id"
					value="<?= $post['id']?>">

					<label for="exampleInputEmail1"
					       class="form-label">Name</label>
					<input value="<?= $post['name'] ?>"
					       name="name"
					       type="text"
					       class="form-control"
					       id="exampleInputEmail1"
					       aria-describedby="emailHelp">
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1"
					       class="form-label">description</label>
					<input value="<?= $post['description'] ?>"
					       name="description"
					       type="text"
					       class="form-control"
					       id="exampleInputPassword1">
				</div>
				<div class="mb-3">
					<label for="Select"
					       class="form-label">Category_id</label>
					<select value="<?= $post['description'] ?>"
					        name="category_id"
					        id="Select"
					        class="form-select"
					        aria-label="Default select example">
						<option selected>Open this select menu</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1"
					       class="form-label">Price</label>
					<input value="<?= $post['price'] ?>"
					       name="price"
					       type="number"
					       class="form-control"
					       id="exampleInputPassword1">
				</div>
				<button type="submit"
				        class="btn btn-primary">Сохранить изменения
				</button>
			</form>
			<hr>

			<a class="btn btn-success"
			   href="/№1/">На главную</a>
			</div>
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>
</html>
