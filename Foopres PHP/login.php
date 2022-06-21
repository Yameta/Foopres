<?php
        require "systems.php";
        //Проверка на существование переменных логина и пароля в POST-запросе
        if(isset($_POST["login"]) && isset($_POST["password"])) {
            $sql = "SELECT * FROM authorization WHERE Authorization_Email = :login AND BINARY Password = :password";
            $query = $pdo->prepare($sql);
            $query->execute(array(
                "login" => $_POST["login"],
                "password" => $_POST["password"]
            ));
            //Для проверки успешности авторизации производится
            //подсчёт количество строк из переменной $sql.
            if($query->rowCount() == 1) {
                /*  Если количество строк — 1 (иначе невозможно),
                    то выполняются действия для успешного входа.
                */
                $user = $query->fetch(PDO::FETCH_ASSOC);
                //Вызов функции сохранения авторизации с передачей ID пользователя:
                saveAuth($user["ID_Authorization"]);
                header("Location: /PHP/");
                }
            else {
                //Если логин и пароль не совпадают, повторно вызывается форма... =>
                include("login_applicant.php");
                //=> ...и выводится сообщение о неправильном вводе данных:
                echo "<p>The username or password is incorrect.</p>";
            }
        }
        else {
            //Если указанные на 13 строке переменные не сущетсвуют, просто подключается форма авторизации.
            include("login_applicant.php");
        }
        if(isset($_POST["login"]))
        { 
            if (empty($_POST["login"])) {
                $error[] = 'Почта отсутсвует';
            }
            return $error;
        }
        
    ?>