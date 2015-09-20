<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 19.09.2015
 * Time: 1:08
 */
require_once('/modules/feedback/PHPMailerAutoload.php');
class mod_feedback {
	protected $_post;
	//SEND MAIL SMTP
	protected $_SMTP = array(
			"host" => 'fin', // SMTP сервер пример(smtp.host.com)
			"debug" => 2, // Уровень логирования
			"auth" => false, // Авторизация на сервере SMTP. Если ее нет - false
			"port" => '25', // Порт SMTP сервера
			"username" => '2z.dizayn@gmail.com', // Логин запрашиваемый при авторизации на SMTP сервере пример (mail@host.com)
			"password" => '', // Пароль
			"addreply" => '2z.dizayn@gmail.com', // Почта для ответа
		//"secure" => 'ssl', // Тип шифрования. Например ssl или tls
			"mail_title" => 'Заголовок вашего письма!', // Заголовок письма
			"mail_name" => 'Имя отправителя' // Имя отправителя
	);
	public function __construct($post){
			$this->_post = $post;
			$this->sendMail();
	}
	private function sendMail(){
		try{
			$mail = new PHPMailer(true); // Создаем экземпляр класса PHPMailer

			$mail->IsSMTP(); // Указываем режим работы с SMTP сервером
			$mail->Host       = $this->_SMTP['host'];  // Host SMTP сервера: ip или доменное имя
			$mail->SMTPDebug  = $this->_SMTP['debug'];  // Уровень журнализации работы SMTP клиента PHPMailer
			$mail->SMTPAuth   = $this->_SMTP['auth'];  // Наличие авторизации на SMTP сервере
			$mail->Port       = $this->_SMTP['port'];  // Порт SMTP сервера
			$mail->SMTPSecure = $this->_SMTP['secure'];  // Тип шифрования. Например ssl или tls
			$mail->CharSet="UTF-8";  // Кодировка обмена сообщениями с SMTP сервером
			$mail->Username   = $this->_SMTP['username'];  // Имя пользователя на SMTP сервере
			$mail->Password   = $this->_SMTP['password'];  // Пароль от учетной записи на SMTP сервере
			$mail->AddAddress('whoto@example.com', 'John Doe');  // Адресат почтового сообщения
			$mail->AddReplyTo($this->_SMTP['addreply'], 'First Last');  // Альтернативный адрес для ответа
			$mail->SetFrom($this->_SMTP['username'], $this->_SMTP['mail_title']);  // Адресант почтового сообщения
			$mail->Subject = htmlspecialchars($this->_SMTP['mail_title']);  // Тема письма
			$mail->MsgHTML('Текст сообщения!'); // Текст сообщения
			$mail->Send();
			return 1;
		}catch (phpmailerException $e){
			return $e->errorMessage();
		}
	}
}