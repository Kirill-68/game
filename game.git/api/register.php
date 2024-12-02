<?php
include_once './db.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    //Данные с формы
    $formData = $_POST;
    $fields=[
        'email',
        'first_name',
        'last_name',
        'phone',
        'password',
        'repeat_password',
    ];
    $errors=[];
    foreach ($fields as $key => $value){
        if(!$formData[$value]){
            $errors[][$value]='Field is required';
        }
        echo $formData[$value];
    }
    echo 'Запрос верный';
    echo json_encode($errors);
}
else{
    echo 'Запрос неверный';
}
?>