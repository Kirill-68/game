<?php
include_once 'db.php';
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    //Данные с формы
    $formData = array_map('trim', $_POST);
    $fields=[
        'email',
        'first_name',
        'last_name',
        'phone',
        'password',
        'password-confirm',
    ];
    $errors=[];
    foreach($formData as $key => $field){
        $formData[$key]=htmlspecialchars($field);
    }
    foreach ($fields as $key => $field){
        if(array_key_exists($field, $formData)){
            if($formData[$field]){
            continue;
            }
        }
        $errors[$field][]='Zapolny pole';
        if(empty($errors[$field])){
            $errors[$field][]=' ';
        }
        if(empty($errors)){
            if(!empty($user)){
                if($users[0]['phone']==$phone){
                    $errors['phone'][]='Takoy user est';
                }
                if($users[0]['email']==$email){
                    $errors['email'][]='Takoy user est';
                }
            }
        header("Location: registerationUser.php");
        exit;
    }

}
    if($formData['password']!==$formData['password-confirm']){
        $errors['password-confirm'][]='Paroly ne sovpadaut';
    }

    if(!empty($errors)){
        $_SESSION['register-errors']=$errors;
        header("Location: ../login.php");
    }
    $phone=$formData['phone'];
    $user=$db->query("SELECT `id` FROM users WHERE phone='$phone'")->fetchAll();
    $phone=$formData['phone'];
    $email=$formData['email'];
    $users=$db->query("
    SELECT phone, email FROM users WHERE phone='$phone' OR email='$email'")->fetchAll();
    if(empty($errors)){
        $request=$db->
        prepare("INSERT INTO `users`( `name`, `surname`, `email`, `phone`, `passwords`, `agree`) VALUES (?,?,?,?,?,?)")->
        execute([
            $formData['first_name'],
            $formData['last_name'],
            $formData['email'],
            $formData['phone'],
            password_hash($formData['password'], PASSWORD_BCRYPT),
            $formData['agree'] ? 1:0,
        ]);
        $_SESSION['register-errors']=[];
        header("Location: ../login.php");
        echo 'пустой';
    }
    if(!empty($errors)){
        $_SESSION['register-errors']=$errors;
        header("Location: ../register.php");
    }
    echo 'Запрос верный';
    echo json_encode($errors);
}
else{
    echo 'Запрос неверный';
}
?>