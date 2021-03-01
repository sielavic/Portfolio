<meta http-equiv='refresh' content='3; url=https://sielavic.site/contact.html'>
<meta charset="UTF-8" />
<?php

	if (isset($_POST['miniusername']) && $_POST['miniusername'] != "")//если существует атрибут NAME и он не пустой то создаем переменную для отправки сообщения
		$name = $_POST['miniusername'];
	else die ("Не заполнено поле \"Имя\"");//если же атрибут пустой или не существует то завершаем выполнение скрипта и выдаем ошибку пользователю.

	if (isset($_POST['miniemail']) && $_POST['miniemail'] != "") //тут все точно так же как и в предыдушем случае
		$email = $_POST['miniemail'];
	else die ("Не заполнено поле \"Email\"");

	if (isset($_POST['message']) && $_POST['message'] != "") 
		$body = $_POST['message'];
	else die ("Не заполнено поле \"Сообщение\"");
	 


	$address = "stas.tutov.89@mail.ru";//адрес куда будет отсылаться сообщение для администратора
    
	$mes = "Email: $email\n";
    $mes    .= "Имя:$name";
//	$mes .= "E-mail: $email \n";
 //	$mes .= "Тема: $sub \n";
 //	$mes .= "Текст: $body"; 
 	
	$send = mail ($address,$mes, $body);//собственно сам вызов функции отправки сообшения на сервере

	if ($send) //проверяем, отправилось ли сообщение
		echo "Сообщение отправлено успешно! Перейти на <a href='https://sielavic.site/contact.html'>sielavic.site</a>, если вас не перенаправило вручную.";
	else 
		echo "Ошибка, сообщение не отправлено! Возможно, проблемы на сервере";
		 
?>