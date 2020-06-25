<?php
    header('Location: ../index.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Регистрация</title>
</head>
<body>
<!-- Форма регистрации-->
    <form class = "" action = "includes/sign_up.php" method="post" style = "height: 550px !important; width: 300px;">
        <div class="input-field">
            <label for="exampleInputEmail1">ФИО</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "fio">
        </div>
        <div class="input-field">
            <label for="exampleInputEmail1">Логин</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "login">
        </div>
        <div class="input-field">
            <label for="exampleInputEmail1">Почта</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "mail">
        </div>
        <div class="input-field">
            <label for="exampleInputPassword1">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name = "pass1">
        </div>
        <div class="input-field">
            <label for="exampleInputPassword1">Подтверждение пароля</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name = "pass2">
        </div>
        <button type="submit" class="btn btn-primary">Регистрация</button>
        <div class="">
            <label class="form-check-label" for="exampleCheck1"> -- У вас уже есть аккаунт? </label>
            <a href = "login.php">Вход</a>
        </div>
        <p><?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?></p>
    </form>
</body>
</html>