<?php
		session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Главная</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-space-between">
            <a class="navbar-brand" href="#">PHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="form-inline justify-content-space-between w-15">
                <?php
                    if(isset($_SESSION["user"])){
                        echo ' <ul class = "navbar-nav"><li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  '.$_SESSION["user"]["full_name"].'
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="includes/logout.php">Выход</a>
                                </div>
                              </li></ul>';
                    }
                    else{
                        echo '<ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="login.php">Авторизация</a>
                                </li>
                            </ul>';
                    }
                ?>
            </form>
        </nav>
    </header>
    <main>
        <div class = "add_quiz" style="display: flex; flex-direction: column; align-items: center;">
						<a href = "maker.php" style="margin-bottom: 100px;">Добавить опрос</a>
						<?php
								require_once "includes/connect.php";
								$memas = mysqli_query($connect, "SELECT * FROM polls");
							while($users = mysqli_fetch_assoc($memas)) {
									echo "<h2>ОПРОС:" . $users['title'] . "</h2>";
							}?>
        </div>
    </main>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src = "js/main.js"></script>
</body>
</html>