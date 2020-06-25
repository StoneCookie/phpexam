<?php
    session_start();

    require_once "includes/connect.php";


    $title = $_SESSION['kekers']['title'];
    $amount = $_SESSION['kekers']['count'];
    $text = "";
    for($i=0; $i<$amount; $i++){
        $text = $text.$_POST['info'.$i].",";
    }

    mysqli_query($connect, "INSERT INTO `answ` (`id`, `title`, `answers`) VALUES (NULL, '$title', '$text');");

    echo "Вы успешно ответили на вопросы!";

?>