<?php
session_start();

//Проверка аутентификации
include_once('api/db.php');

if(array_key_exists('token', $_SESSION)){
    $token = $_SESSION['token'];
    $userId = $db->query("
    SELECT id FROM users WHERE api_token='$token'
    ")->fetchAll();

    if(!empty($userId)){
        unset($_SESSION['token']);
        header("Location: user.php");
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новая жизнь | Регистрация</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <main>
        <?php
        function showError($field){
        if(!array_key_exists('register-errors', $_SESSION)){
            echo '';
            // $error=implode(',', $listErrors[$field]);
            // echo "<span class='error'>$error</span>";
        }
        else{
            $listErrors=$_SESSION['register-errors'];
            if(array_key_exists($field, $listErrors)){
                $error=implode(',', $listErrors[$field]);
                echo "<span class='error'>$error</span>";
            }
        }
    }
        ?>
    <section>
        <form action="api/registerationUser.php" method="POST" class="register-form">
            <label for="email">Email
            <?php
            showError('email');
            ?>
            </label>
            <input type="email" name="email" id="email" placeholder="example@mail.ru">
            <label for="first_name">Имя
                <?php
                showError('first_name');
                ?>
            </label>
            <input type="first_name" name="first_name" id="first_name"></input>
            <label for="last_name">Фамилия
                <?php
                showError('last_name');
                ?>
            </label>
            <input type="last_name" name="last_name" id="last_name"></input>
            <label for="phone">Телефон
                <?php
                showError('password');
                ?>
            </label>
            <input type="phone" name="phone" id="phone"></input>
            <label for="password">Password
                <?php
                showError('phone');
                ?>
            </label>
            <input type="password" name="password" id="password"></input>
            <label for="repeat_password">Repeat_Password
            <?php
                showError('password-confirm');
                ?>
            </label>
            <input type="password-confirm" name="password-confirm" id="password-confirm"></input>
            <input type="checkbox" name="agree" id="checkbox">
            <p class="pers">Согласие на обработку персональных данных</p>
            <button type="submit">Регистрация</button>
            <a href="index.html">На главную страницу</a>
            </form>
            </section>
        </main>
</body>
</html>