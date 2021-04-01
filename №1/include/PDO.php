<?php

define('DRIVER','mysql');
define('HOST','localhost');
define('DB_NAME','test_1');
define('LOGIN','root');
define('PASS','root');

try {
    $pdo = new PDO(DRIVER.':host='.HOST.'; dbname='.DB_NAME, LOGIN, PASS);
    /*echo 'ok';*/
} catch (PDOException $e){
   /* echo "Не удалось подключиться ".$e->getMessage();*/
}
