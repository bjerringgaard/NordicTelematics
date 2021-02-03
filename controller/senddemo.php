<?php
include 'functions.php';
$modtager = 'pl@egeteknik.dk';

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$from = $_POST['email'];
	$company = $_POST['company'];
	$phone = $_POST['phone'];
	$demotype = $_POST['demotype'];

	$subject = "FYSISK DEMO: " . $company;
	$body = "
FYSISK DEMO bestilt af: 
{$name} 
fra {$company}

KONTAKT INFO:
Email: {$from} 
Telefon: {$phone}

DEMOTYPE:
{$demotype}
";
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'websmtp.simply.com';
	$mail->Port = 587;
	$mail->SMTPAuth = true;
	$mail->Username = 'bestildemo@egeteknik.dk';
	$mail->Password = 'ynf73axx';
	$mail->setFrom('bestildemo@egeteknik.dk', 'FYSISK DEMO');
	$mail->addAddress($modtager);
	$mail->Subject = $subject;
	$mail->Body    = $body;
	$mail->send();

	redirect_to("/includes/fysiskdemo");
}

elseif(isset($_POST['online'])){
	$from = $_POST['email'];
	$demotype = $_POST['demotype'];
	$name = $_POST['name'];
	$company = $_POST['company'];
	$phone = $_POST['phone'];
	
	$subject = "ONLINE DEMO: " . $company;
	$body = "
ONLINE DEMO bestilt af: 
{$name} 
fra {$company}

KONTAKT INFO:
Email: {$from} 
Telefon: {$phone}

DEMOTYPE:
{$demotype}
";

	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'websmtp.simply.com';
	$mail->Port = 587;
	$mail->SMTPAuth = true;
	$mail->Username = 'bestildemo@egeteknik.dk';
	$mail->Password = 'ynf73axx';
	$mail->setFrom('bestildemo@egeteknik.dk', 'ONLINE DEMO');
	$mail->addAddress($modtager);
	$mail->Subject = $subject;
	$mail->Body    = $body;
	$mail->send();

	redirect_to("/includes/onlinedemo");
}
?>