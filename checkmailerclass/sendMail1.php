<?php
require_once './class.phpmailer.php';
$email = new PHPMailer();
$email->From      = 'akhtar.rafique@gmail.com';
$email->FromName  = 'Akhtar Rafiq';
$email->Subject   = 'Subject For Aitchison College Website is down';
$email->Body      = 'Body For Aitchison college Website is down.';
$email->AddAddress( 'akhtar_rafiq2000@yahoo.com' );
//$email->AddAttachment( "/path/to/file" , "filename.ext", 'base64', 'application/octet-stream' );
if (isset($_FILES['uploaded_file']) &&
    $_FILES['uploaded_file']['error'] == UPLOAD_ERR_OK) {
    $mail->AddAttachment($_FILES['uploaded_file']['tmp_name'],
                         $_FILES['uploaded_file']['name']);
}
echo $email->Send();

/*
$email = new PHPMailer();
$email->From      = 'akhtar.rafique@gmail.com';
$email->FromName  = 'Akhtar Rafiq';
$email->Subject   = '<table><tr><th>MY First Email</th></tr></table>';
$email->Body      = $bodytext;
$email->AddAddress( 'web@aitchison.edu.pk' );

$file_to_attach = 'PATH_OF_YOUR_FILE_HERE';

//$email->AddAttachment( $file_to_attach , 'NameOfFile.pdf' );
echo $email->From;
echo "Akhtar Rafiq";
//echo $email->Send();
mail("akhtar_rafiq2000@yahoo.com", "Aitchison Website is Down", "Aitchison Website is Down from 26th", "From: akhtar.rafique@gmail.com");
*/
?>