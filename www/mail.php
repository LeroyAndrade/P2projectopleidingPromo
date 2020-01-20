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
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
    body{
      width:80vw;
      margin: 50vh 50vw;
    }
    article{
      margin: 0 auto;
    }
    </style>
    <title></title>
  </head>
  <body>
    <section>
      <article>
          <img src="./splash/meisje.png" width="100" height="100" alt="meisje">
          <p> Vanwege enorme drukte zullen wij binnen drie dagen contact met je opnemen.</p>
      </article>
    </section>

  </body>
</html>
