<?php
session_start();
//echo $_GET["mail"];
$emailRecipient = $_GET['mail'];
$subject=$_GET['onderwerp'];
$message=$_GET['stelVraag'];
$headers='FROM: Leroy_Andrade@yahoo.com';
mail($_GET['mail'], $_GET['onderwerp'], $_GET['stelVraag'], 'FROM: Leroy_Andrade@yahoo.com');

if(@mail($emailRecipient, $subject, $message, $headers))
{
  echo "E-Mail succesvol verstuurd";
}else{
  echo "E-Mail niet verstuurd, probeer het later opnieuw";
}
 ?>
