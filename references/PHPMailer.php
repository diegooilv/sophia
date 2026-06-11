<?php
# https://github.com/PHPMailer/PHPMailer
# https://phpmailer.github.io/PHPMailer/classes/PHPMailer-PHPMailer-PHPMailer.html
# https://mailtrap.io/blog/phpmailer/

# Utilização de IA para Debug no MailService.php - GPT-5.5 (OpenAI), não estará na versão final.
# "error_log('Mailer error: ' . $e->getMessage());"

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true); // Habilita exceções

// Configuração SMTP
$mail->isSMTP();
$mail->Host = 'live.smtp.mailtrap.io'; // Servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'your_username'; // Nome de usuário do Mailtrap
$mail->Password = 'your_password'; // Senha do Mailtrap
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Configuração do remetente e destinatário
$mail->setFrom('from@example.com', 'Nome do Remetente');
$mail->addAddress('recipient@example.com', 'Nome do Destinatário');

// Envio de e-mail em texto simples
$mail->isHTML(false); // Define o formato do e-mail como texto simples
$mail->Subject = 'Assunto do E-mail';
$mail->Body = 'Conteúdo da mensagem em texto simples';

// Envia o e-mail
if (!$mail->send()) {
    echo 'A mensagem não pôde ser enviada. Erro: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada com sucesso';
}