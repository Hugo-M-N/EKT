<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {

        // Crear objeto
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Username = $_ENV['EMAIL_USER'];
        $mail->Password = $_ENV['EMAIL_PASS'];

        $mail->setFrom('registro@ekt.com');
        $mail->addAddress($this->email, $this->nombre);
        $mail->Subject = 'Confirma tu cuenta';

        // Cuerpo del correo
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<hmtl>';
        $contenido .= '<h1 class="logo">EKT</h1>';
        $contenido .= '<h2>Confirma tu cuenta</h2>';
        $contenido .= '<p>Hola ' . $this->nombre . ', tu cuenta ha sido registrada correctamente.</p>';
        $contenido .= '<p>Por motivos de seguridad necesitamos que confirmes la cuenta, si tu no creaste la cuenta puedes ignorar este mensaje.</p>';
        $contenido .= '<a href="'. $_ENV['HOST'] . '/confirmar-cuenta?token=' . $this->token . '">Confirmar Cuenta</a>';
        $contenido .= '<style>';
        $contenido .= '</style>';
        $contenido .= '</hmtl>';
        $mail->Body = $contenido;

        // Enviar mail
        $mail->send();
    }
}