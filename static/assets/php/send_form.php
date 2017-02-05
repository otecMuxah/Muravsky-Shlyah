<?
$fio= $_POST['fio'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$adres= $_POST['adres'];
$millet= $_POST['millet'];
$other= $_POST['other'];
$username= $_POST['username'];
$useremail= $_POST['user-email'];
$emailTo = 'g35x@ukr.net'; //Сюда введите Ваш email
$body = "$fio \n\n$phone\n\n$email \n\n$adres \n\n$millet \n\n$other \n\n$username \n\n$useremail";
$headers = "Content-Type: text/plain; charset=utf-8\r\n".'From: MySite <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $emailTo;
mail($emailTo, "Mshlyah proposal", $body, $headers);
$emailSent = true;
?>