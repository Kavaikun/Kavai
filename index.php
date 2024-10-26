<?php
// Подключение файла соединения с БД
include_once 'db.class.php';

// хост БД
define('db_host','localhost');

// Имя БД
define('db_name','testsmao');

// Пользователь БД
define('db_user','admin');

// Пароль БД
define('db_pass','admin_password');

// Обявление класса для подключения к бд
$db = new DB_class(db_host,db_name,db_user,db_pass);

$query = $db->select(true,"*","tasks","task_id='1'");

print_r($query);



?>
