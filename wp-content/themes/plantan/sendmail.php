<?php

require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');


if (isset($_POST["name"])) { $person_name = htmlspecialchars($_POST["name"]);}
if (isset($_POST["phone"])) { $person_phone = htmlspecialchars($_POST["phone"]);}
if (isset($_POST["mail"])) { $person_mail = htmlspecialchars($_POST["mail"]);}
if (isset($_POST["message"])) { $person_message = htmlspecialchars($_POST["message"]);}


$url_google_api = 'https://www.google.com/recaptcha/api/siteverify';
$secret = '6LeeeuAZAAAAAEnI-oe0Q804siVvNCOlPZZjTzuP';
$query = $url_google_api.'?secret='.$secret.'&response='.$_POST['grecaptcha'].'&remoteip='.$_SERVER['REMOTE_ADDR'];
$data = json_decode(file_get_contents($query), true); // записываем полученные данные в виде ассоциативного массива
$score = $data['score']; // оценка Google recaptcha v3, от 0.1 до 0.9, где 0.9 означает "точно не спам"

// print_r($data);

// if($data['success']) {
	if(($person_name != '') && ($person_phone != '')) {

		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->CharSet = 'UTF-8';
		$mail->Host = 'smtp.yandex.ru';
		$mail->SMTPAuth = true;
		$mail->Username = 's.i.sidorovkrd@yandex.ru';
		$mail->Password = 'sidder13';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;
		$mail->setFrom('s.i.sidorovkrd@yandex.ru');

		// $mail->addAddress('s.i.sidorovkrd@yandex.ru');
		$mail->addAddress('syd.phoenix@gmail.com');
		$mail->addAddress('plasmida@mail.ru');

		$mail->isHTML(true);
		$mail->Subject = 'Новая заявка Листовая диагностика';
		$mail->Body = '<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Новая заявка Листовая диагностика</title>
		</head>
		<body>
		<table width="100%" cellpadding="0" cellspacing="0"><tr><td>
		<table id="top-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><p style="margin: 5px 0; padding-left: 10px;">От кого: '. $person_name .'</p></td></tr></table>

		<table id="bottom-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><p style="margin: 5px 0; padding-left: 10px;">Адрес почты: '.$person_mail.'</p></td></tr></table>

		<table id="bottom-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><p style="margin: 5px 0; padding-left: 10px;">Телефон: '.$person_phone.'</p></td></tr></table>

		<table id="bottom-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><p style="margin: 5px 0; padding-left: 10px;">Сообщение: '.$person_message.'</p></td></tr></table>

		</tr></td>
		</table>
		</body>
		</html>';

		// Результат
		if(!$mail->send()) {
			echo 'error';
		} else {
			echo 'ok';
		}
	// }
}


?>
