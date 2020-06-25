<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST["login"];
    $pass = md5($_POST['pass']);

    $check_user = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login' AND password = '$pass'");
    if(mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            'id' => $user['id'],
            'full_name' => $user['name'],
            'privilege' => $user['privilege']
        ];
        header("Location: ../index.php");
    }
    else{
        $_SESSION['message'] = 'Неверный логин или пароль!';
        header('Location: ../login.php');
    }
?>