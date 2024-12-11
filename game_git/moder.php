<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <link rel="stylesheet" href="styles/settings.css">
    <link rel="stylesheet" href="styles/pages/moder.css">
    <title>Новая Жизнь | Модератор</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="glavn.php">На главную страницу</a>
        </div>
    </header>
    <main>
        <section class="filter">
            <div class="container">
                <form>
                    <label for="data-form">От</label>
                    <input type="date" name="data-form" id="data-form">
                    <label for="data-to">До</label>
                    <input type="date" name="data-to" id="data-to">
                    <select name="type" id="type">
                        <option value="0">На модерации</option>
                        <option value="1">Активно</option>
                        <option value="2">Найдено</option>
                        <option value="3">В архиве</option>
                    </select>
                    <button type="submit">Поиск</button>
                </form>
            </div>
        </section>
        <section class="items">
            <div class="container">
                <div class="items-content">
                    <img src="img/1.jpg" alt="Фото автора" class="author-avatar">
                    <div class="items-info">
                        <h3 class="author-name">Анна Петрова</h3>
                        <span class="items-date">15 марта 2024</span>
                    </div>
                    <div class="items-pet">
                        <img src="img/1.jpg" alt="Фото питомца" class="pet-photo">
                    </div>
                    <p class="items-text">
                        Благодаря этому сайту я нашла своего потерянного Негра Ovuvuevuevue Enyetuenwuevue Ugbemugbem Osas! 
                        Спасибо большое за помощь и поддержку. Сервис работает отлично, 
                        откликнулось много неравнодушных людей.
                    </p>
                </div>
                <div class="items-content">
                    <img src="img/1.jpg" alt="Фото автора" class="author-avatar">
                    <div class="items-info">
                        <h3 class="author-name">Анна Петрова</h3>
                        <span class="items-date">15 марта 2024</span>
                    </div>
                    <div class="items-pet">
                        <img src="img/1.jpg" alt="Фото питомца" class="pet-photo">
                    </div>
                    <p class="items-text">
                        Благодаря этому сайту я нашла своего потерянного Негра Ovuvuevuevue Enyetuenwuevue Ugbemugbem Osas! 
                        Спасибо большое за помощь и поддержку. Сервис работает отлично, 
                        откликнулось много неравнодушных людей.
                    </p>
                </div>
                <div class="items-content">
                    <img src="img/1.jpg" alt="Фото автора" class="author-avatar">
                    <div class="items-info">
                        <h3 class="author-name">Анна Петрова</h3>
                        <span class="items-date">15 марта 2024</span>
                    </div>
                    <div class="items-pet">
                        <img src="img/1.jpg" alt="Фото питомца" class="pet-photo">
                    </div>
                    <p class="items-text">
                        Благодаря этому сайту я нашла своего потерянного Негра Ovuvuevuevue Enyetuenwuevue Ugbemugbem Osas! 
                        Спасибо большое за помощь и поддержку. Сервис работает отлично, 
                        откликнулось много неравнодушных людей.
                    </p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>