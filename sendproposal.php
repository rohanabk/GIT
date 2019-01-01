<?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './admin/PHPMailer\src\Exception.php';
require './admin/PHPMailer\src\PHPMailer.php';
require './admin/PHPMailer\src\SMTP.php';

$name = $_POST['name'];
$email = $_POST['email'];
$usn = $_POST['usn'];
$desc = $_POST['description'];

$tfile = $_FILES['proposal']['tmp_name'];
$file_ext=strtolower(end(explode('.',$_FILES['proposal']['name'])));

$info = array();
$infonames = array();
$count=0;
if(file_exists($_FILES['info']['tmp_name'][0]) || is_uploaded_file($_FILES['info']['tmp_name'][0])) {
	$count = count($_FILES['info']['name']);
	for ($i=0; $i <$count ; $i++) { 

		$info[$i] = $_FILES["info"]["tmp_name"][$i];
		$infonames[$i] = $_FILES["info"]["name"][$i];
	}
}
$mail = new PHPMailer(TRUE);

try {
   
   $mail->setFrom($email, $name);
   $mail->addAddress('******@****.com', 'yourname');
   $mail->Subject = 'Proposal';
   $mail->Body = "From: ".$name." Email: ".$email." USN".$usn." ".$desc;
   
   $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = TRUE;
   $mail->SMTPSecure = 'tls';
   $mail->Username = '******@****.com';
   $mail->Password = '**********';   
   $mail->Port = 587;
   $mail->AddReplyTo($email, $name);
   
   $mail->addAttachment($tfile, "proposal.".$file_ext);
   if($count>0){
   	for ($i=0; $i <$count ; $i++){
   			$mail->addAttachment($info[$i], $infonames[$i]);
   	}
   }

   $mail->send();
   header("Location: proposal.php?success=true");
}
catch (Exception $e)
{
	header("Location: proposal.php?success=false");
    echo $e->errorMessage();
}
catch (\Exception $e)
{
	header("Location: proposal.php?success=false");
    echo $e->getMessage();
}

?>