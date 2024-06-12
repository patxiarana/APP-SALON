<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;
class Email
{
    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {
        //Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'a91969de70f46f';
        $mail->Password = '41be879d3c1a7a';
        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com' , 'AppSalon.com');
        $mail->Subject = "Confirma tu cuenta" ; 

        //Set html 
        $mail->isHTML(TRUE) ; 
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
$contenido .= "<p><strong>Hola " . $this->nombre . "</strong>. Has creado tu cuenta en appsalon. Solo debes confirmarla presionando el siguiente enlace:</p>";
$contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>confirmar cuenta</a></p>";
$contenido .= "</html>" ; 

$mail->Body = $contenido ; 
//debuguear($mail) ;
//Enviar el email
$mail->send() ; 
}
}
