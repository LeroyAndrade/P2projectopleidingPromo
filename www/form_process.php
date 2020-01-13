<?php
session_start();
$errors = array();
 
// Eerst de data opschonen 
$naam = filter_var($_GET['naam'], FILTER_SANITIZE_STRING);
$mail = filter_var($_GET['mail'], FILTER_SANITIZE_EMAIL);
$onderwerp = filter_var($_GET['onderwerp'], FILTER_SANITIZE_NUMBER_INT);
$stelVraag = filter_var($_GET['stelVraag'], FILTER_SANITIZE_STRING);

if(empty($naam)){
    // Naam is leeg
    $errors['naam'] = 'Uw naam is niet ingevuld, dit veld is verplicht.';
}
 
// Valideren of dit het formaat van een email-adres heeft
if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
    // Ongeldige email
    $errors['email'] = 'Uw email adres is niet juist ingevuld.';
}

if(empty($onderwerp)){
    // Ondw is leeg
    $errors['onderwerp'] = 'Het onderwerp is niet ingevuld, dit veld is verplicht.';
}
 
// Valideren of dit een getal is
if(!filter_var($stelVraag, FILTER_VALIDATE_INT)){ 
    // Geen geldig getal
    $errors['leeftijd'] = 'Er is geen bericht ingevoerd.'; 
}

if (!empty($naam) && !empty($mail))
{
    /*
$email_to = $_GET['email'];
$email_from = 'JOUW E_MAIL ADRES';
$subject = 'Verificatie The Wall';
 */
// Hier maken we een heel kort email bericht
require("login.php");
}else {
        echo "false";
     echo $_GET['naam'];
         }


?>