<?php
    session_start();
    echo "<a href = 'quiz.php/?url=".$_SESSION['urls']['url1']."'>Ссылка 1</a><br>";
    echo "<a href = 'quiz.php/?url=".$_SESSION['urls']['url2']."'>Ссылка 2</a><br>";
    echo "<a href = 'quiz.php/?url=".$_SESSION['urls']['url3']."'>Ссылка 3</a><br>";
    echo "<a href = 'index.php'>На главную!</a>"
?>