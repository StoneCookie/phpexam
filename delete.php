<?php
    session_start();

    $kek = $_SESSION['test']['tests'];
    $ek = $_SESSION['test']['all_ids'];
    if(count($kek) > 1){
        for($i=0; $i < count($kek); $i++){
            if($_GET['delete']-1 == array_keys($kek)[$i]){
                unset($kek[array_keys($kek)[$i]]);
                unset($ek[array_keys($ek)[$i]]);
                break;
            }
        }
    }
    $_SESSION['test']['tests'] = $kek;
    $_SESSION['test']['all_ids'] = $ek;
    header('Location: ../maker.php');
?>
