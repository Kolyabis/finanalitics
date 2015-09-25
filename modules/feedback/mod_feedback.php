<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 19.09.2015
 * Time: 1:08
 */
require_once('PHPMailerAutoload.php');
class mod_feedback {
	protected $_post;
    private	$_mail;
	//SEND MAIL SMTP
	protected $_SMTP = array(
			"host" => 'finanalitics/', // SMTP сервер пример(smtp.host.com)
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
        $this->_mail = new PHPMailer(true);
        $this->_mail->IsSMTP();
        $this->_mail->Host = $this->_SMTP['host'];
        $this->_mail->SMTPAuth = $this->_SMTP['auth'];
        $this->_mail->Port = $this->_SMTP['port'];
        $this->_mail->SetFrom($this->_SMTP['username'], $this->_SMTP['mail_title']);
        $this->_mail->CharSet = "UTF-8";
        $this->_mail->AddAddress($this->_SMTP['username'], "Получатель");
        $this->_mail->IsHTML(true);
        $this->_mail->Subject = htmlspecialchars($this->_SMTP['mail_title']);  // Тема письма
        $this->_mail->MsgHTML('Текст сообщения!'); // Текст сообщения
        try{
            $this->_mail->Send();
        }catch (phpmailerException $e) {
            return $e->errorMessage();
        }
	}
}