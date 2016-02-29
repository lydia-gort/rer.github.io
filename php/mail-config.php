<?php

/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$tel = htmlspecialchars($_POST["tel"]);
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);

/* Ваш адрес и тема сообщения */
$address = "lydia-gort@mail.ru";
$sub = "Сообщение с сайта Арт-сфера";

/* Формат письма */
$mes = "Сообщение с сайта Арт-сфера.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Телефон отправителя: $tel
Текст сообщения:
$message";


if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n"; 
if (mail($address, $sub, $mes, "Content-type: text/plain; charset=\"utf-8\"\n $from")) {
	header('Refresh: 5; URL=http://artel/contact.html');
	echo 'Письмо отправлено, через 5 секунд вы вернетесь на сайт "Арт-сфера"';}
else {
	header('Refresh: 5; URL=http://artel/contact.html');
	echo 'Письмо не отправлено, через 5 секунд вы вернетесь на страницу контактов сайта "Арт-сфера"';}
}
exit; /* Выход без сообщения, если поле bezspama чем-то заполнено */
?>