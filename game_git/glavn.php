<?php
session_start();
//include_once 'api/logoutUser.php';
//include_once 'api/authUser.php';

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(array_key_exists('token', $_SESSION)){
        header("Location: api/logoutUser.php");
    }
//     $token2 = "<a href='api/logoutUser.php'>На страницу профиля</a>";
//     $token3 = "<a href='api/logoutUser.php'>Выход</a>";
//     // if(array_key_exists('token', $_SESSION)){
//     //     echo "<li><a href='api/logoutUser.php' class='reviews'>Выход</a></li>";
//     // }
//     if($token2){
//         //if(array_key_exists('token', $_SESSION)){
//          echo "<li><a href='user.php'>На страницу профиля</a></li>";
//    // }
// }
//     if($token3){
//         if(array_key_exists('token', $_SESSION)){
//         echo "<li><a href='api/logoutUser.php' class='reviews'>Выход</a></li>";
//     }
// }

    ?>
</body>
</html>