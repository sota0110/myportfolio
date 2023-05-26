<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/autoload.php';

mb_language("japanese");
mb_internal_encoding("UTF-8");

$mail = new PHPMailer(true);

$mail->CharSet = "iso-2022-jp";
$mail->Encoding = "7bit";

$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'souta.sumii@gmail.com';
$mail->Password   = 'wfzvwexkixoedere';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
$mail->Port = 587; 

// 差出人
$mail->setFrom($_POST["email"], mb_encode_mimeheader($_POST["name"])); 
// 宛先
$mail->addAddress('souta.sumii@gmail.com', mb_encode_mimeheader("住井奏太")); 

$mail->isHTML(true);
//メール表題（タイトル）
$mail->Subject = mb_encode_mimeheader('ポートフォリオからのお問い合わせ'); 
//本文（HTML用）
$mail->Body  = mb_convert_encoding($_POST["comment"],"JIS","UTF-8");  
//テキスト表示の本文
$mail->AltBody = mb_convert_encoding($_POST["comment"],"JIS","UTF-8"); 

$mail->send();