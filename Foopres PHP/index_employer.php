<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="index_employer.css">
    <title>Главная для работодателя</title>
</head>
<body>
    <div class="bg">
        <header>
            <nav>
                <ul class="nav__left">
                    <li><a href="index.php"><img src="img/Logo full.svg" alt="Logo"></a></li>
                    <li><a href="appeal.php">Помощь</a></li>
                    <li><a href="index.php">Соискателям</a></li>
                    <li><a href="index_employer.php">Работодателям</a></li>
                </ul>
                <ul class="nav__right">
                    <li><a href="reg_employer.php" class="btn">Зарегистрироваться</a></li>
                    <li><a href="login_employer.php" class="btn">Войти</a></li>
                </ul>
            </nav>
        </header>
        <section class="WelcomeBox">
            <h1>Разместите вакансию на fr.ru</h1>
            <p class="WelcomeBox__text">И находите сотрудников среди тех, кто хочет у вас работать. fr.ru —<br>сервис №1 по поиску сотрудников в России*<br></p>
            <a href="reg_employer.php" class="post__btn">Разместить вакансию</a>
        </section>
    </div>
        <main>
            <div class="container">
                <h2>Какие сотрудники есть на fr.ru?</h2>
            <p>Не ждите откликов — найдите идеального сотрудника сами
                <br>среди 58 814 656 резюме у 35 862 576 соискателей</p>
                <form class="search" method="post">
                    <input class="search__job" type="search" name="search" placeholder="Поиск по резюме">
                    <a href="#"><button class="search__btn">Найти сотрудника</button></a>
                </form>
            </div>
            <h2>С чего начать поиск<br>сотрудников?</h2>
            <section class="container__begin">
                <section class="begin">
                    <img class="begin__img" src="img/01.png" alt="01">
                    <h3>Зарегистрируйтесь</h3>
                    <p class="begin__text">И получите доступ ко всем услугам fr.ru</p>
                </section>
                <section class="begin">
                    <img class="begin__img" src="img/02.png" alt="01">
                    <h3>Разместите вакансию</h3>
                    <p class="begin__text">Получайте отклики с контактами соискателей</p>
                </section>
                <section class="begin">
                    <img class="begin__img" src="img/03.png" alt="01">
                    <h3>Выбирайте лучших</h3>
                    <p class="begin__text">Из тех, кто уже хочет у вас работать</p>
                </section>
            </section>
            <a href="reg_employer.php" class="begin__btn">Начать подбор на fr.ru</a>
            <section class="response">
                <img src="img/chel.svg" alt="chel">
                <section class="response__text">
                    <h2 class="response__title">
                        Кто будет 
                        <br>откликаться?</h2>
                    <h4>Кандидаты нам доверяют</h4>
                    <p class="response__description">fr.ru занимает 1-е место в России среди сайтов по поиску работы и персонала</p>
                    <h4>Ваш кандидат уже здесь</h4>
                    <p class="response__description">≈ 55 млн резюме размещено на сервисе. Больше миллиона посетителей на fr.ru каждый день</p>
                    <h4>Качественные и проверенные кандидаты</h4>
                    <p class="response__description">Свыше 75% пользователей на сервисе с подтвержденными телефонными номерами</p>
                    <h4>Активные и заинтересованные кандидаты</h4>
                    <p class="response__description">На fr.ru пользователи проводят больше времени, чем на других сайтах по поиску работы и персонала</p>
                </section>
            </section>
            <h2>Помощь и поддержка</h2>
            <p>Техническая поддержка, помощь в выборе и расчёте пакета услуг по телефону</p>
            <section class="container__begin">
                <section class="begin">
                    <h3>+7 495 232-90-09</h3>
                    <p class="begin__text">Москва и МО</p> 
                </section>
                <section class="begin">
                    <h3>+7 812 458-45-45</h3>
                    <p class="begin__text">Санкт-Петербург и ЛО</p> 
                </section>
                <section class="begin">
                    <h3>8 800 100-64-27</h3>
                    <p class="begin__text">Регионы РФ</p> 
                </section> 
            </section>
        </main> 
        <footer>
            <section class="footer__container">
                <ul>
                    <li><a href="index.php"><img src="img/Logo%20full.svg" alt="Logo"></a></li>
                    <li><a href="about_us.php">О компании</a></li>
                    <li><a href="about_us.php">Контакты</a></li>
                    <li><a href="index.php">Список партнёров</a></li>
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
                    <li><img src="img/+7 (495) 232-90-09.png" alt="phone"></li>
                    <li class="phone__title">По вопросам поиска работы:</li>
                    <li><img src="img/+7 (495) 876-83-22.png" alt="phone"></li>
                    <div class="logo__container">
                        <li class="img"><img src="img/akar-icons_vk-fill.png" alt="VK"></li>
                        <li><img src="img/akar-icons_telegram-fill.png" alt="Telegram"></li>
                    </div>  
                </ul>
            </section>
        </footer>
</body>
</html>