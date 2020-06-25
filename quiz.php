<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main_style.css">
	<title>Document</title>
</head>
<body>
<?php

unset($_SESSION["kekers"]);

require_once "includes/connect.php";

$url = $_GET['url'];

$result = mysqli_query($connect, "SELECT * FROM `polls` WHERE url1 = '$url' OR url2 = '$url' OR url3 = '$url'");

if(mysqli_num_rows($result) > 0){
		$info = mysqli_fetch_assoc($result);
		$title = $info['title'];
		$string_name = explode(" ", $info['exiter']);
		$_SESSION["kekers"] = [
				"title" => $title,
				'count' => count($string_name)
		];
		$type_text = explode(" ", $info['value_pole']);
		echo "<h3>Опрос: $title</h3><form action = 'register_anse.php' method='post' style='display: flex; justify-content: center;'><fieldset style='border: 0;
		display: flex;
		flex-direction: column;'>";
		for($i=0; $i < count($string_name); $i++){
				if($type_text[$i] == "chislo"){
						echo "<div style='display: flex;
						flex-direction: column;
						margin-bottom: 20px 0;'><p>".$string_name[$i]."</p>";
						echo "<input type = 'number' name = 'info".$i."' required></div>";
				}
				else if($type_text[$i] == "pol_chislo"){
						echo "<div><p>".$string_name[$i]."</p>";
						echo "<input type = 'number' min = '0' name = 'info".$i."' required></div>";
				}
				else if($type_text[$i] == "string"){
						echo "<div><p>".$string_name[$i]."</p>";
						echo "<input type = 'text' minlength='1' maxlength = '30' name = 'info".$i."' required></div>";
				}
				else if($type_text[$i] == "text"){
						echo "<div><p>".$string_name[$i]."</p>";
						echo "<input type = 'text' minlength='1' maxlength = '255' name = 'info".$i."' required></div>";
				}
				else if($type_text[$i] == "ed_vibor"){
						echo "<div><p>".$string_name[$i]."</p>";
						echo "<input type = 'text' name = 'info".$i."' required></div>";
				}
				else if($type_text[$i] == "eb_monz"){
						echo "<div><p>".$string_name[$i]."</p>";
						echo "<input type = 'text' name = 'info".$i."' required></div>";
				}
		}
		echo "<button type  = 'submit' style='margin-top: 20px; cursor: pointer;'>Отправить</button></fieldset></form>";

}
?>
</body>
</html>