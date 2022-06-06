

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = 2;									
	$mail->isSMTP();											
	$mail->Host	 = 'smtp.gmail.com;';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'lalitkumar971088@gmail.com';				
	$mail->Password = 'Maurya@123';						
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;

	$mail->setFrom('.com', 'Name');		
	$mail->addAddress('lalitkumar9710888@gmail.com');
	// $mail->addAddress('receiver2@gfg.com', 'Name');
	
	$mail->isHTML(true);								
	$mail->Subject = 'New User Details';
	$mail->Body = $txt;
	// $mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
