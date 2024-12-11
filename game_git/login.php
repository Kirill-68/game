<?php
include_once 'glavn.php';
//session_start();
// if(!array_key_exists('token', $_SESSION)){
// header("Location: login.php");
// }
// else{
//     header("Location: search.php"); 
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новая жизнь | Авторизация</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <a href="glavn.php">На главную</a>
    <main>
    <section>
        <?php
                function showError($field){
                    if(!array_key_exists('auth-errors', $_SESSION)){
                        echo '';
                        // $error=implode(',', $listErrors[$field]);
                        // echo "<span class='error'>$error</span>";
                    }
                    else{
                        $listErrors=$_SESSION['auth-errors'];
                        if(array_key_exists($field, $listErrors)){
                            $error=implode(',', $listErrors[$field]);
                            echo "<span class='error'>$error</span>";
                        }
                    }
                }
                ?>
        <form action="api/authUser.php" method="post">
            <label for="email" class='email'>Email <?php if(empty($_POST['email'])){showError('email');}?></label>
            <input type="email" name="email" id="email" placeholder="example@mail.ru">
            <label for="password" class='password'>Password <?php if(empty($_POST['password'])){showError('password');}?></label>
            <input type="password" name="password" id="password"></input>
            <button type="submit">Вход</button>
            <a href="register.html">Регистрация</a>
        </form>
    </section>
</main>
</body>
</html>