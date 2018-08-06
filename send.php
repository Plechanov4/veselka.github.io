<html>
<head>
<title>Форма заявки с сайта</title>
</head>
<body>
<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) and !isset($_POST['email'])){
?> <form action="send.php" method="post">
<input type="text" name="fio" placeholder="Укажите ФИО" required>
<input type="text" name="email" placeholder="Укажите e-mail" required>
<input type="submit" value="Отправить">
</form> <?php
} else {
//показываем форму
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
if (mail("Veselka032@yandex.ru
", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: Veselka032@yandex.ru
 \r\n")){ 
echo "Сообщение успешно отправлено"; 
} else { 
echo "При отправке сообщения возникли ошибки";
}
}
ini_set('display_errors','On');
error_reporting('E_ALL');
?>
</body>
</html>