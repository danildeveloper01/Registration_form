<?php

    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


    if (strlen($login) < 5){
        echo "Login length is too short. The minimum length is 5 characters, the maximum is 50";
        exit();
    } else if(strlen($login) > 50) {
        echo "Login length is too long. The minimum length is 5 characters, the maximum is 50";
        exit();
    } else if (strlen($name) < 1){
        echo "Name length is too short. The minimum length is 1 characters, the maximum is 100";
        exit();
    } else if(strlen($name) > 100){
        echo "Name length is too long. The minimum length is 1 characters, the maximum is 100";
        exit();
    } else if (strlen($pass) < 2){
        echo "Password length is too short. The minimum length is 2 characters, the maximum is 30";
        exit();
    } else if(strlen($pass) > 30){
        echo "Password length is too long. The minimum length is 2 characters, the maximum is 30";
        exit();
    }

    $pass = md5($pass."ojshv9879");

    $mysql = new mysqli('localhost', 'root', '', 'register-bd');
    $mysql -> query("INSERT INTO `users` (`name`, `login`, `pass`) VALUES ('$name', '$login', '$pass')");

    $mysql -> close();

    header("location: /");
