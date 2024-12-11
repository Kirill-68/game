<?php 
// session_start();
include_once 'db.php';
include_once 'authUser.php';
 $token2 = "<a href='../user.php'>На страницу профиля</a>";
//  $token4 = "<a href='../glavn.php'>На главную страницу</a>";
    $token3 = "<a href='api/checkAuth.php'>Выход</a>";
    if($token2){
              echo "<li><a href='../user.php'>На страницу профиля</a></li>";
     }
    if($token3){
        echo "<li><a href='checkAuth.php' class='reviews'>Выход</a></li>";
}
// if($token4){
//     echo "<li><a href='glavn.php' class='reviews'>На главную страницу</a></li>";      
// }
?>