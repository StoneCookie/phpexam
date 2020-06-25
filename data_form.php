<?php
    session_start();
    require_once 'includes/connect.php';

    $title = $_POST['quiz_name'];
    $string1 = "";
    $string2 = "";

    for($i=0; $i < count($_SESSION['test']['all_ids']); $i++){
        if($_POST['mem'] == "chislo"){
//            $string = $string."<div class = 'fields'><p>".$_POST['naming'.$_SESSION['test']['all_ids'][array_keys($_SESSION['test']['all_ids'])[$i]]]."</p><input type = 'number' name = 'info".$i."'></div>";
            $string1 = $string1.$_POST['naming'.$_SESSION['test']['all_ids'][array_keys($_SESSION['test']['all_ids'])[$i]]]." ";
            $string2 = $string2."chislo"." ";
        }
        else if($_POST['mem'] == "pol_chislo"){
//            $string = $string."<div class = 'fields'><p>".$_POST['naming'.$_SESSION['test']['all_ids'][array_keys($_SESSION['test']['all_ids'])[$i]]]."</p><input type = 'number' min = '0' name = 'info".$i."'></div>";
            $string1 = $string1.$_POST['naming'.$_SESSION['test']['all_ids'][array_keys($_SESSION['test']['all_ids'])[$i]]]." ";
            $string2 = $string2."pol_chislo"." ";
        }
        else if($_POST['mem'] == "string"){
//            $string = $string."<div class = 'fields'><p>".$_POST['naming'.$_SESSION['test']['all_ids'][array_keys($_SESSION['test']['all_ids'])[$i]]]."</p><input type = 'text' minlength='1' maxlength = '30' name = 'info".$i."'></div>";
            $string1 = $string1.$_POST['naming'.$_SESSION['test']['all_ids'][array_keys($_SESSION['test']['all_ids'])[$i]]]." ";
            $string2 = $string2."string"." ";
        }
        else if($_POST['mem'] == "text"){
//            $string = $string."<div class = 'fields'><p>".$_POST['naming'.$_SESSION['test']['all_ids'][array_keys($_SESSION['test']['all_ids'])[$i]]]."</p><input type = 'text' minlength='1' maxlength = '255' name = 'info".$i."'></div>";
            $string1 = $string1.$_POST['naming'.$_SESSION['test']['all_ids'][array_keys($_SESSION['test']['all_ids'])[$i]]]." ";
            $string2 = $string2."text"." ";
        }
        else if($_POST['mem'] == "ed_vibor"){
//            $string = $string."<div class = 'fields'><p>".$_POST['naming'.$_SESSION['test']['all_ids'][array_keys($_SESSION['test']['all_ids'])[$i]]]."</p><input type = 'text' name = 'info".$i."'></div>";
            $string1 = $string1.$_POST['naming'.$_SESSION['test']['all_ids'][array_keys($_SESSION['test']['all_ids'])[$i]]]." ";
            $string2 = $string2."ed_vibor"." ";
        }
        else if($_POST['mem'] == "eb_monz"){
//            $string = $string."<div class = 'fields'><p>".$_POST['naming'.$_SESSION['test']['all_ids'][array_keys($_SESSION['test']['all_ids'])[$i]]]."</p><input type = 'text' name = 'info".$i."'></div>";
            $string1 = $string1.$_POST['naming'.$_SESSION['test']['all_ids'][array_keys($_SESSION['test']['all_ids'])[$i]]]." ";
            $string2 = $string2."eb_monz"." ";
        }
    }
$time1 = time() + 100;
$time2 = time() + 150;
$time3 = time() + 350;
mysqli_query($connect, "INSERT INTO `polls` (`id`, `title`, `exiter`, `value_pole`, `url1`, `url2`, `url3`) VALUES (NULL, '$title', '$string1', '$string2', '$time1', '$time2', '$time3');");
    unset($_SESSION["test"]);
    $_SESSION['urls'] = [
        'url1' => $time1,
        'url2' => $time2,
        'url3' => $time3,

    ];
    header('Location: urls.php');
?>