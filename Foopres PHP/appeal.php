<!DOCTYPE html>
<html lang="ru">  <!-- Тег <html> является контейнером, который заключает в себе все содержимое веб-страницы, включая теги <head> и <body>. -->
<head> <!-- Этот раздел предназначен для заголовка страницы и технической информации. -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="appeal.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>Обращение</title>
</head>
<body><!-- А здесь надо размещать все, что хочется увидеть на странице. -->
    <header> <!-- Задает «шапку» сайта или раздела, в которой обычно располагается заголовок. -->
        <nav> <!-- Тег <nav> задает навигацию по сайту -->
            <ul class="nav__left">  <!-- Тег <ul> используется для создания маркированного (неупорядоченного) списка -->
                 <!-- Тег <li> определяет пункты списка и может включать в себя любые другие HTML-элементы -->
                <li><a href="index.php"><img src="img/Logo%20full.svg" alt="Logo"></a></li>
                <li><a href="appeal.php" >Помощь</a></li> <!-- Тег <a> является одним из важных элементов HTML и предназначен для создания ссылок. -->
                <li><a href="index.php">Соискателям</a></li> <!-- Тег <a> является одним из важных элементов HTML и предназначен для создания ссылок. -->
                <li><a href="index_employer.php">Работодателям</a></li> <!-- Тег <a> является одним из важных элементов HTML и предназначен для создания ссылок. -->
            </ul>
            <ul class="nav__right"> <!-- Тег <ul> используется для создания маркированного (неупорядоченного) списка -->
                <li><a href="reg_applicant.php" title="Регистрация для соискателей" class="btn">Зарегистрироваться</a></li>
                <li><a href="login_applicant.php" title="Вход  для соискателей"class="btn">Войти</a></li>
            </ul>
        </nav>
    </header>
    <main> <!-- Элемент <main> предназначен для основного содержимого документа. -->
        <section class="write__box"> <!-- Задаёт раздел документа, может применяться для блока новостей, контактной информации, глав текста. -->
            <h1>Написать письмо</h1> <!-- Тег <h1> представляет собой наиболее важный заголовок первого уровня -->
        </section> 
        <section class="appeal"> <!-- Задаёт раздел документа, может применяться для блока новостей, контактной информации, глав текста. -->
            <h2>Кому вы адресуете свое сообщение</h2>
            <div>
                <button class="choice__box" onclick="myFunction()" >Не выбрано</button> <!-- Тег <button> создает на веб-странице кнопки -->
                <div class="dropdown-content" id="myDropdown">
                    <a href="#">Не выбрано</a> <!-- Тег <a> является одним из важных элементов HTML и предназначен для создания ссылок. -->
                    <a href="#">Отдел по работе с соискателем</a> <!-- Тег <a> является одним из важных элементов HTML и предназначен для создания ссылок. -->
                    <a href="#">Отдел по работе с работодателем</a>  <!-- Тег <a> является одним из важных элементов HTML и предназначен для создания ссылок. -->
                  </div>
            </div>
        </section>
        <section class="copyright"> <!-- Задаёт раздел документа, может применяться для блока новостей, контактной информации, глав текста. -->
            <img class="img" src="img/vk-fill.png" alt="VK">
            <img src="img/telegram-fill.png" alt="Telegram">
            <p>Copyright © 2022–2022, группа компаний Foopres</p>
        </section>
    </main>
    <!-- Тег <script> предназначен для описания скриптов, может содержать ссылку на программу или ее текст на определенном языке -->
    <script>  
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
          if (!e.target.matches('.choice__box')) {
            var myDropdown = document.getElementById("myDropdown");
              if (myDropdown.classList.contains('show')) {
                myDropdown.classList.remove('show');
              }
          }
        }
        </script>
</body>
</html>