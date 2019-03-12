<?php 
	//Принемаем почтовые данные
	$whatever=$_POST['whatever'];
	$user_name=$_POST["user_name"];
	$email=$_POST["email"];
	$user_messege=$_POST['user_messege'];

	// На какой ящик посылать письмо 

	$to = "gooruu13@gmail.com";

	//Тема письма

	$subject = "Заявка с моего сайта";

	//Сообщение письма

	$message = "  
		Имя пользователя: ".htmlspecialchars($user_name)." <br />
		Email: ".htmlspecialchars($email)." <br />
		Сообщение: ".htmlspecialchars($user_messege).;

	// Отпровляем письмо при помощи функции mail

	$headers = "From: newworks.sl <pupik@newworks.sl>\r\nContent-type: text/ html; charset=UTF-8 \r\n";
	mail ($to, $subject, $message, $headers);
	header('Location: thanks.html');
	exit();
 ?>