<?php
    session_start();
    require_once  'connect.php';

    $full_name = $_POST["fio"];
    $login = $_POST["login"];
    $email = $_POST['mail'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if($pass1 == $pass2){
        $pass1 = md5($pass1);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `privilege`) VALUES (NULL, '$full_name', '$login', '$email', '$pass1', 'user')");
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../login.php');
    }
    else{
        $_SESSION['message'] = "Пароли не совпадают";
        header('Location: ../register.php');
    }

?>