
<?php     


       ini_set('SMTP','localhost');
ini_set('smtp_port',25);

$to_email = 'kamlapurisurendra1419@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: noreply @ company . com';
mail($to_email,$subject,$message,$headers);
?>
