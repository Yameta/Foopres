
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login_applicant.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход для соискателя</title>
</head>
<body>
    <header>
        <nav>
            <ul class="nav__left">
                <li><a href="index.php"><img src="img/Logo%20full.svg" alt="Logo"></a></li>
                <li><a href="appeal.php">Помощь</a></li>
                <li><a href="index.php">Соискателям</a></li>
                <li><a href="index_employer.php">Работодателям</a></li>
            </ul>
            <ul class="nav__right">
                <li><a href="reg_applicant.php" class="btn">Создать резюме</a></li>
                <li><a href="login_applicant.php" class="btn">Войти</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form class="login__form" action="login.php" method="post"> 
            <h1>Поиск работы</h1>
            <input  class="login__input" type="email" name="login" id="login" placeholder="Email или телефон" required>
            <input  class="login__input" type="password" name="password" id="password" placeholder="Пароль" required>
            <img src="img/login_photo.png" alt="Login photo" width="218" height="174">
            <button type="submit" id="submit" name="submit" class="begin__btn">Войти</button>
        </form>
        <div class="line"></div>
        <section class="login__employer">
            <h1>Поиск сотрудников</h1>
            <h2>Размещение вакансий и доступ к базе резюме</h2>
            <img src="img/login__employer.png" alt="Login photo" width="218" height="174">
            <a href="login_employer.php" class="login__link">Я ищу сотрудников</a>
        </section>
        <p class="offer">Нажимая «продолжить», вы подтверждаете, что ознакомлены, полностью согласны и принимаете условия «Соглашения об оказании услуг по содействию в трудоустройстве (оферта)»</p>
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