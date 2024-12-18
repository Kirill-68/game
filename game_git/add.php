<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новая жизнь | Новое объявление</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
    <header>
    <div class="container">
        <a href="glavn.html"></a>
    </div>
</header>
<main>
    <section class="add">
        <div class="container">
            <form>
                <label for="phone">Номер телефона</label>
                <input type="tel" name="phone" id="phone">
                <label for="email">Почта</label>
                <input type="email" name="email" id="email">
                <select name="type" id="type">
                    <option value="cat">Кот</option>
                    <option value="dog">Собака</option>
                </select>
                <label for="photo">Фотографии животного</label>
                <input type="file" name="photo" id="photo">
                <label for="desc">Дополнительная информация</label>
                <textarea name="desc" id="desc"></textarea>
                <label for="mark">Клеймо (если есть)</label>
                <input type="text" name="mark" id="mark">
                <select name="place" id="place">
                    <option value="0">Кировский р-н</option>
                    <option value="1">Центр</option>
                </select>
                <label for="date">Дата</label>
                <input type="date" name="date" id="date">
                <label for="agree">
                    <input type="checkbox" name="agree" id="agree">
                    Согласие на обработку персональных данных
                </label>
            </form>
        </div>
    </section>
</main>
</body>
</html>