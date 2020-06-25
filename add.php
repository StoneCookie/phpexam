<?php
		session_start();

    $id = $_SESSION["test"]['uuid'];
    $arrid = $_SESSION["test"]['all_ids'];
		$array = $_SESSION['test']['tests'];

    if(!isset($_SESSION["test"]['uuid'])){
        $id = 0;
    }
    else{
        $id++;
    }
    if(!isset($arrid)){
        $arrid = [];
    }
    else{
        array_push($arrid, $id);
    }
    if(!isset($array)){
        $array = [];
    }
    else{
        array_push($array, "<div class = 'fields'>
                                        <label for = 'naming$id'>Название поля</label>
                                        <input type='text' name = 'naming$id' id = 'naming$id'>
                                        <select name = 'mem'>
                                            <option value='chislo'>Число</option>
                                            <option value='pol_chislo'>Положительное число</option>
                                            <option value='string'>Строка</option>
                                            <option value='text'>Текст</option>
                                            <option value='ed_vibor'>С единственным выбором </option>
                                            <option value='eb_monz'>С множественным выбором</option>
                                        </select>
                                        <a href = 'delete.php/?delete=$id'>Удалить</a>
                                    </div>");
    }
    $_SESSION['test'] = ['tests' => $array,
                        'uuid' => $id,
                        'all_ids' => $arrid];
    header("Location: maker.php");
?>