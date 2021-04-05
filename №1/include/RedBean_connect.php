<?php

define('DRIVER','mysql');
define('HOST','localhost');
define('DB_NAME','test_1');
define('LOGIN','root');
define('PASS','root');

require_once 'rb.php';
//RadBeanPHP
//Подключение к БД
R::setup( DRIVER.':host='.HOST.'; dbname='.DB_NAME, LOGIN, PASS );
