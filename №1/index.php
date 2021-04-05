<?php
    /*require_once 'include/PDO.php';*/
    require_once 'include/rb.php';
    require_once 'include/RedBean_connect.php';

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
	        <div class="wrapper col-md-8 offset-3">
		        <form action="include/add.php" method="POST">
			        <div class="mb-3">
				        <label for="exampleInputEmail1" class="form-label">Name</label>
				        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			        </div>
			        <div class="mb-3">
				        <label for="exampleInputPassword1" class="form-label">description</label>
				        <input name="description" type="text" class="form-control" id="exampleInputPassword1">
			        </div>
			        <div class="mb-3">
				        <label for="Select" class="form-label">Category_id</label>
			        <select name="category_id"  id="Select" class="form-select" aria-label="Default select example">
				        <option selected>Open this select menu</option>
				        <option value="1">One</option>
				        <option value="2">Two</option>
				        <option value="3">Three</option>
			        </select>
			        </div>
			        <div class="mb-3">
				        <label for="exampleInputPassword1" class="form-label">Price</label>
				        <input name="price" type="number" class="form-control" id="exampleInputPassword1">
			        </div>
			        <button type="submit" class="btn btn-primary">Submit</button>
		        </form>

		        <br>
		        <br>
		        <br>
		        <table>
			        <tr>
				        <th>ID</th>
				        <th>Name</th>
				        <th>Category</th>
			        </tr>
			        <?
			            $users = R::find('products');



			            foreach ($users as $dt):
                            /*echo  "<pre>";
                            print_r($dt);
                            echo  "</pre>";*/
			        ?>
			        <tr>
				        <td><? echo $dt['id']?></td>
				        <td><? echo $dt['name']?></td>
				        <td><? echo $dt['category_id']?></td>
				        <td><a class="btn btn-info" href="include/single.php?id=<?= $dt['id']?>">Открыть Пост</a></td>
				        <td><a  class="btn btn-warning" href="include/edit.php?id=<?= $dt['id']?>">Изменить Пост</a></td>
				        <td><a  class="btn btn-danger" href="include/delete.php?id=<?= $dt['id']?>">Удалить Пост</a></td>
			        </tr>
			        <?
			            endforeach;
			        ?>
		        </table>
	        </div>

        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
