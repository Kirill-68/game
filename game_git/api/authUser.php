<?php
include_once 'db.php';
include_once 'logoutUser.php';
//include_once 'login.php';
//session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    //Данные с формы
    $formData = array_map('trim', $_POST);
    $fields=[
        'email',
        'password',
    ];
    $errors=[];
    foreach($formData as $key => $value2){
        $formData[$key]=htmlspecialchars($value2);
    }
    foreach ($fields as $key => $value2){
        if(array_key_exists($value2, $formData)){
            if($formData[$value2]){
            continue;
            }
        }
        if(empty($formData[$value2])){
            $errors[$value2][]='Заполни поле';
        }
        echo $formData[$value2];
    }
        //Проверка на совпадение почты
        $email=$formData['email'];
        $user=$db->query("
        SELECT id FROM users WHERE email='$email'")->fetchAll();
        if(empty($user)){
            $errors['email'][]='User not found';
        }
        //Проверка на совпадение пароля
        $password=$formData['password'];
        $checkUser=$db->query("
        SELECT id FROM users WHERE passwords='$password' AND email='$email'
        ")->fetchAll();
        if(empty($checkUser) && !empty($password)){
            $errors['password'][]='Ненайден пароль';
        }
    // if($formData['password']!==$formData['password-confirm']){
    //     $errors['password-confirm'][]='Пароли не совпадают';
    // }
    if(empty($errors)){
        $email=$formData['email'];
        $password=$formData['password'];
        $hash = time();
        $token = base64_encode("hash=$hash&email=$email&password=$password");
        echo $token;

        $db->query("
        UPDATE users SET api_token='$token'
        WHERE email='$email' AND passwords='$password'
        ")->fetchAll();

        $_SESSION['token']=$token;
        //header("Location: ../login.php");
     }
    if(!empty($errors)){
        // $errors['email'][]='Pole ne zapolneno';
        // $errors['first_name'][]='Pole ne zapolneno';
        // $errors['last_name'][]='Pole ne zapolneno';
        // $errors['phone'][]='Pole ne zapolneno';
        // $errors['password'][]='Pole ne zapolneno';
        $_SESSION['auth-errors']=$errors;
        header("Location: ../login.php");
    }
    // else{
    //     header("Location: ../glavn.php");
    // }
}
else{
    echo 'Запрос неверный';
}
?>