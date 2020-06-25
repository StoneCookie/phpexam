<?php
    session_start();
    if($_SESSION['user']){
        header('Location: index.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Авторизация</title>
</head>
<body>
    <!-- Форма аунтефикации-->
    <form action="includes/sign_in.php" method="post">
        <div class="input-field">
            <label for="exampleInputEmail1">Логин</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "login">
        </div>
        <div class="input-field">
            <label for="exampleInputPassword1">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name = "pass">
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
        <p><?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
						?>
				</p>
    </form>
</body>
</html>