<?php
// Подключение файла соединения с БД
include_once 'db.class.php';

// хост БД
define('db_host','localhost:3306');

// Имя БД
define('db_name','testsmao');

// Пользователь БД
define('db_user','admin');

// Пароль БД
define('db_pass','admin_password');

// Обявление класса для подключения к бд
$db = new DB_class(db_host,db_name,db_user,db_pass);

$query = $db->select(true,"*","tasks","task_id='1'");



?>



<!DOCTYPE html>
<html>
<head>
	<title>Задачник который надеюсь будет работать</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="tasks">
	<div class="task">
		<div class="task-control">
			<input type="checkbox" name="">
		</div>
		<div class="task-text">Проснуться утром</div>
		<div class="task-date">
			<input type="date" name="">
		</div>		
	</div>
		<div class="task">
		<div class="task-control">
			<input type="checkbox" name="">
		</div>
		<div class="task-text">Открыть глаза</div>
		<div class="task-date">
			<input type="date" name="">
		</div>		
	</div>
		<div class="task">
		<div class="task-control">
			<input type="checkbox" name="">
		</div>
		<div class="task-text">Встать с кровати</div>
		<div class="task-date">
			<input type="date" name="">
		</div>		
	</div>
		<div class="task">
		<div class="task-control">
			<input type="checkbox" name="">
		</div>
		<div class="task-text">Сьесть чтото съедобое</div>
		<div class="task-date">
			<input type="date" name="">
		</div>		
	</div>
		<div class="task">
		<div class="task-control">
			<input type="checkbox" name="">
		</div>
		<div class="task-text">Включить комп</div>
		<div class="task-date">
			<input type="date" name="">
		</div>		
</div>
</body>
</html>
