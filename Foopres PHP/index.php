<?php
    require "systems.php";
    require "classes/Database.php";
    if(!isset($_SESSION["id"])){
        saveAuth(4);
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>Главная для соискателей</title>
</head>
<body>
    <div class="bg">
        <header>
            <nav>
                <ul class="nav__left">
                    <li><a href="index.php"><img src="img/Logo%20full.svg" alt="Logo"></a></li>
                    <li><a href="appeal.php">Помощь</a></li>
                    <li><a href="index.php">Соискателям</a></li>
                    <li><a href="index_employer.php">Работодателям</a></li>
                </ul>
                <ul class="nav__right">
                    <li><a href="services_applicant.php" class="btn">Готовое резюме</a></li>
                    <li><a href="reg_applicant.php" class="btn">Создать резюме</a></li>
                    <li><a href="login_applicant.php" class="btn">Войти</a></li>
                </ul>
            </nav>
        </header>
        <section class="WelcomeBox">
            <h1>Работа найдется для каждого</h1>
            <form class="search" method="post">
                <input class="search__job" type="search" name="search" placeholder="Профессия,должность или компания">
                <a href="#" class="search__btn">Найти работу</a>
            </form>
            <a href="index_employer.php" class="switch__search">Я ищу сотрудника</a>
        </section>
        <section class="stats">
            <p>10 000<span><br>резюме<br></span></p>
            <p>5 000<span><br>вакансий<br></span></p>
            <p>200<span><br>компаний<br></span></p>
        </section>
    </div>
    <main>
    <h1 class="main__h1">Популярные вакансии</h1>
    <section class="container">
        <a href="#">
            <section class="card__one">
            <h2>Курьер</h2>
        </section>
        </a>
        <a href="#">
            <section class="card__two">
                <h2>Системный администратор</h2>
            </section>
        </a>
        <a href="#">
            <section class="card__three">
                <h2>Оператор</h2>
            </section>
        </a>
        <a href="#">
             <section class="card__four">
            <h2>Программист</h2>
             </section>
        </a>
        <a href="#">
            <section class="card__five">
                <h2>Администратор</h2>
            </section>
        </a>
        <a href="#">
            <section class="card__six">
                <h2>Менеджер</h2>
            </section>
        </a>
        <a href="#">
            <section class="card__seven">
                <h2>Кассир</h2>
            </section>
        </a>
        <a href="#">
            <section class="card__eight">
                <h2>Водитель</h2>
            </section>
        </a>
    </section>
    <section class="info">
        <h1 class="main__h1">Работа в России</h1>
        <p>Работа составляет большую часть жизни почти каждого из нас. Но ничто не вечно: случается, что однажды приходится менять место работы и с головой погружаться в поиски вакансий — хочется ведь найти хорошую альтернативу текущей должности.
            <br>
         <br>Однако зачастую при смене работы мы задумываемся не только о смене компании, но и об изменении профессиональной деятельности. И именно в эти моменты возникает вопрос: «Как теперь найти хорошую работу в Москве? А главное, какой должна быть эта работа?»
            <br>
        <br>Чтобы решать такие вопросы легко и быстро, достаточно всего лишь зайти на foopres.ru!
            <br>
         <br>   На нашем сайте вы всегда можете узнать последние новости рынка труда, а также изучить свежий обзор зарплат, с помощью которого легко оценить, на какие должности стоит нацелиться. Если вы уже определились, вакансии каких специальностей вас интересуют, вам остаётся только создать резюме и приступать к поиску работы мечты!
            <br>
        <br>Удобнее всего искать работу с помощью нашего каталога вакансий: всего пару раз кликнув мышкой, вы получите список актуальных и качественных вакансий в Москве или другом регионе России. Но это не единственный вариант поиска работы. На нашем сайте вы можете создать привлекательное резюме, и вакансии сами начнут стекаться к вам! А скомбинировав оба эти метода, вы сможете получить наиболее быстрый, а главное, эффективный способ поиска работы!</p>
    </section>
    <h1 class="main__h1">Наши партнёры</h1>
    <section class="partners__container" id="partners">
        <section class="partners">
            <img class="partner__logo" src="img/ozon.svg" alt="Logo">
            <section class="partner__info">
                <p>OZON<span><br>1 000 вакансий<br></span></p>
            </section>
        </section>
        <section class="partners__blue">
            <img class="partner__logo" src="img/pepsico.svg" alt="Logo">
            <section class="partner__info">
                <p>PepsiCo<span><br>167 вакансий<br></span></p>
            </section>
        </section>
        <section class="partners__lightgreen">
            <img class="partner__logo" src="img/1c.svg" alt="Logo">
            <section class="partner__info">
                <p>Группа 1С<span><br>642 вакансии<br></span></p>
            </section>
        </section>
        <section class="partners__toxic">
            <img class="partner__logo" src="img/burger%20king.svg" alt="Logo">
            <section class="partner__info">
                <p>Burger King<span><br>431 вакансии<br></span></p>
            </section>
        </section>
        <section class="partners">
            <img class="partner__logo" src="img/yandex.svg" alt="Logo">
            <section class="partner__info">
                <p>Яндекс<span><br>500 вакансий<br></span></p>
            </section>
        </section>
        <section class="partners__blue">
            <img class="partner__logo" src="img/sber.svg" alt="Logo">
            <section class="partner__info">
                <p>Сбербанк<span><br>389 вакансий<br></span></p>
            </section>
        </section>
        <section class="partners__lightgreen">
            <img class="partner__logo" src="img/starbucks.svg" alt="Logo">
            <section class="partner__info">
                <p>Starbucks<span><br>170 вакансий<br></span></p>   
            </section>
        </section>
        <section class="partners__toxic">
            <img class="partner__logo" src="img/kfc.svg" alt="Logo">
            <section class="partner__info">
                <p>KFC<span><br>334 вакансии<br></span></p>
            </section>
        </section>
    </section>
</main> 
    <footer>
        <section class="footer__container">
            <ul>
                <li><a href="index.php"><img src="img/Logo%20full.svg" alt="Logo"></a></li>
                <li><a href="about_us.php">О компании</a></li>
                <li><a href="about_us.php">Контакты</a></li>
                <li><a href="#partners">Список партнёров</a></li>
            </ul>
            <ul>
                <li class="footer__title">Сервисы  для соискателей</li>
                <li><a href="services_applicant.php">Тарифы для соискателей</a></li>
                <li><a href="vacancy.php">Вакансии</a></li>
            </ul>
            <ul>
                <li class="footer__title">Сервисы для работодателей</li>
                <li><a href="services_employer.php">Тарифы для работодателей</a></li>
                <li class="phone__title">По вопросам найма работников</li>
                <li><img src="img/+7%20(495)%20232-90-09.png" alt="phone"></li>
                <li class="phone__title">По вопросам поиска работы:</li>
                <li><img src="img/+7%20(495)%20876-83-22.png" alt="phone"></li>
                <section class="logo__container">
                    <li class="img"><img src="img/akar-icons_vk-fill.png" alt="VK"></li>
                    <li><img src="img/akar-icons_telegram-fill.png" alt="Telegram"></li>
                </section>  
            </ul>
        </section>
    </footer>
</body>
</html>