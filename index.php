<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
<?php
// $array = array(1,2,3,4);

// $a = 1;
// $b = 1;
// if($a <> $b) {
// //echo "true";
// } else {
// //	echo "false";
// }

// define("x", "5"); 
// $x = x + 10; 
// //echo x;


// $db_name = "medic";  // имя БД
 
// $mysqli = new mysqli('localhost', 'root', '', $db_name);
 
// if (mysqli_connect_errno()) {
//     printf("Ошибка соединения: %s\n", mysqli_connect_error());
//     exit;
// }
// $mysqli->set_charset("utf8");
 
// $rows_doctors = $mysqli->query("SELECT `doctors` FROM `staff` WHERE `speciality` = 'эндокринолог' and `experience` >= 50");
// if(mysqli_num_rows($rows_doctors) >= 1) {
// 		while($doctor = mysqli_fetch_assoc($rows_doctors)) {
// 		echo $doctor['doctors'];
// 	}
// }
//  else {
// 	echo 'Не найден доктор со специализацией эндокринолог и опытом не менее 50 лет!';
// }


// $var = 1;
//net echo '$var';
//da echo $var;
//da echo("$var");
//da print($var);


// массив

?>



<?
$doctors = array(
	array(
	'name' => 'Иванов', 
	'specialty' => 'хирург'
	),
	array(
	'name' => 'Петров',
	'specialty' => 'кардиолог'
	)
);
?>

<p>До обработки:</p>

<?
echo var_dump($doctors);
?>

<?
foreach ($doctors as $id_num => $items) { 
    if($doctors[$id_num]['name'] == 'Иванов') {
    	unset($doctors[$id_num]);
    }
}
?>

<p>После обработки:</p>

<?
echo var_dump($doctors);
?>

<textarea name="review" id="review" rows="10" cols="50" placeholder="Напишите пожалуйста отзыв своему лечащему врачу"></textarea>
<br />
<input type="submit" id="to_main_site" value="Дальше"/>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
$(function() {
	var button_To_Main_Site = $('#to_main_site');
	var review_Field = $('#review');
    button_To_Main_Site.click(function() {
    	if(review_Field.val().length == 0) {
    		confirm('А ты оставил отзыв о своем враче?');
    	}
    });
});
</script>
</body>
</html>