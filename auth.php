<?php


    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);



    $pass = md5($pass."ojshv9879");

    $mysql = new mysqli('localhost', 'root', '', 'register-bd');
    $result = $mysql -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = $result -> fetch_assoc();
    if (count($user) == 0){
        echo "User is error";
        exit();
    }

   setcookie('user', $user['name'], time() + 60*60*24*365*100, "/");

    $mysql -> close();

    header("location: /");