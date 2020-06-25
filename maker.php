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
    <title>Вопросы</title>
</head>
<body style="padding: 0; margin: 0;">
    <header class = "head_quiz" style="background: #000; height: 80px; margin-bottom: 50px; display: flex; align-items: center;">
        <a style="color: #fff; " href="index.php">Вернуться на главную страницу</a>
    </header>
    <main>
        <form action="data_form.php" method="post" class = "form_make">
            <fieldset>
                <label class="autorization__item">Название опроса
									<input type="text" required name = "quiz_name" id = "quiz_name">
								</label>
            </div>
            <?php
                if(isset($_SESSION['test'])){
                    for($i=0; $i < count($_SESSION['test']['tests']); $i++){
                        echo $_SESSION['test']['tests'][array_keys($_SESSION['test']['tests'])[$i]];

                    }
                }
            ?>
            <a style="margin: 20px 0;" href = "add.php">Добавить поле</a>
						<button type = "submit">Создать форму</button>
							</fieldset>
        </form>
    </main>
</body>
</html>