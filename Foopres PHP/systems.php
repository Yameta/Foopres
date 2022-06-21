<?php
    //Подключение базы данных перемещается сюда из других файлов:
    require "db.php";
    //Старт сессии для работы с её переменными в коде:
    session_start();

    //Функция сохранения авторизации. Аргумент ф-ции — ID пользователя
    function saveAuth($id) {
        global $pdo;
        //Запись в суперглобальный массив $_SESSION идентификатора пользователя:
        $_SESSION["id"] = $id;
        //Объявление SQL-запроса на поиск прользователя по указанному ID с получанием его группы и индекса прав
        $sql = "SELECT ID_authorization,ID_roles,Authorization_Email FROM authorization JOIN roles ON authorization.id_roles = roles.id_roles WHERE ID_authorization = :id";
        $query = $pdo->prepare($sql);
        $query->execute(array("id" => $id));
        $user = $query->fetch(PDO::FETCH_ASSOC);
        // //Запись в суперглобальный массив дополнительных значений из результата SQL-запроса:
        $_SESSION["roles"] = $user["ID_roles"];
        $_SESSION["login"] = $user["Authorizarion_email"];
    }