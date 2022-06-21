<!DOCTYPE html>
<html lang="en">
<head>
    <!-- мозг сайта -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reg_employer.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация работодателя</title>
</head>
</head>
<body>
    <header>
    <ul>
        <li><a href="index.php"><img src="img/Logo%20full.svg" alt="Logo"></a></li>
        <li>Нужна помощь? Свяжитесь с нами:</li>
        <li>Москва и область</li>
        <li>+7 495 232-90-09</li>
        <li>Санкт-Петербург и область</li>
        <li>+7 812 458-45-45</li>
        <li>Регионы</li>
        <li>8 800 100-64-27</li>
    </ul>
    </header>
    <main>
        <form action="/" method="post">
            <h1>Регистрация работодателя</h1>
            <h2>Имя</h2>
            <input class="name" type="text" name="FirstName">
            <h2>Фамилия</h2>
            <input class="name" type="text" name="LastName">
            <h2>Телефон</h2>
            <input class="phone" type="text" name="Phone" placeholder="+7(999) 999-99-99">
            <h2>Email</h2>
            <input class="name" type="email" name="Email">
            <h2>Название компании</h2>
            <input class="name" type="text" name="FirstName">
            <button class="begin__btn">Зарегистрироваться</button>
            <p>Нажимая «Зарегистрироваться», вы подтверждаете, что ознакомлены и полностью согласны с условиями использования сайта.</p>
            <section>
                <a href="login_employer.php" class="log">У меня уже есть доступ, войти</a>
                <a href="index.php" class="log">Я ищу работу</a>
            </section>
        </form>
    </main>
</body>
</html>