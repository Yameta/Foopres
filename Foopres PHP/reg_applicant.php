<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reg_applicant.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация соискателя</title>
</head>
<body>
    <header>
        <nav>
            <ul class="nav__left">
                <li><a href="index.php"><img src="img/Logo%20full.svg" alt="Logo"></a></li>
                <li><a href="appeal.php">Помощь</a></li>
            </ul>
            <ul class="nav__right">
                <li><a href="reg_applicant.php" class="btn">Создать резюме</a></li>
                <li><a href="login_applicant.php" class="btn">Войти</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Регистрация соискателя</h1>
        <form class="form" method="post" action="reg.php">
            <p>Email или телефон<span class="red">*</span></p>
            <input  class="login__input" type="email" id="login" name="login" placeholder="Email или телефон">
            <p>Пароль<span class="red">*</span></p>
            <input  class="login__input" type="password" id="password" name="password" placeholder="Пароль">
            <button type="submit" class="registration">Зарегистрироваться</button>
        </form>
        <section class="login">
            <p>Уже зарегистрированы?</p>
            <p>Нажимая «Зарегистрироваться», вы принимаете условия<br>соискательского соглашения</p>
        </section>
        
         <a href="login_applicant.php" class="log">Войти</a>
         <img src="img/reg__applicant.png" alt="chel_ti">
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