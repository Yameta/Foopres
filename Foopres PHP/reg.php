<?php 
require "systems.php";
global $pdo;
if(trim($_POST['login'] !== '') && trim($_POST['password'] !== '')) { // Проверка есть ли логин и пароль, удаление пробелов

    $query = "INSERT INTO `authorization` (`Authorization_Email`,  `Password`) VALUES ( :login, :password)"; // SQL запрос к базе users, а именно к столбцам login и password

    $params = [
       
      ':login' => trim($_POST['login']), // логин без пробелов
      ':password' => $password = password_hash($_POST['password'], PASSWORD_DEFAULT) // хэширование пароля
    
    ];

    $data = $pdo->prepare($query); // Подготавливаем запрос

    $data->execute($params); // Отправляем параметры

    $_SESSION['user'] = $_POST['login']; // Заносим пользователя в базу
    header('Location: /PHP/'); // перенаправляем на главную
} 
$query = "SELECT ID_Roles FROM 'roles' "
