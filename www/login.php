<?php

//vertel locaties
$hostname='localhost';
$username='root';
$password='';
$database='rooster';
 
//bereid query voor
$connection = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);

//verbinding quert uitvoeren
try {
    $connection = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Verbinding is gemaakt!";
} catch(PDOException $e) {
    echo 'Fout bij database verbinding: ' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
}



//bereid query voor
$query = "SELECT
naam, onderwerp, email, stelVraag FROM email;";

/*
$name       = @trim(stripslashes($_GET['naam'])); 
$from       = @trim(stripslashes($_GET['email'])); 
$subject    = @trim(stripslashes($_GET['onderwerp'])); 
$message    = @trim(stripslashes($_GET['stelVraag'])); 
$to         = 'Leroy_Andrade@Hotmail.NL';
*/
/*
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: {$naam} <{$mail}>\r\n";
$headers .= "Reply-To: <{$mail}>\r\n";
$headers .= "Subject: {$onderwerp}\r\n";
$headers .= "X-Mailer: PHP/".phpversion()."\r\n";
*/
try{
    $statement = $connection->query($query);
   }
    catch (PDOException $e)
    {        
    echo 'Fout bij SQL query:<br>' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
    }


//roep code op


foreach ($statement as $row)
{
$to = $mail;
$subject=$onderwerp;
$message = $stelVraag;
$headers  = "From: Verstuurder <Leroy_Andrade@Hotmail.NL>\r\n";
$headers  .= "Reply-To: $mail\r\n";
$headers  .= "Content-type: text/html\r\n";
$headers  .= "Bericht: Geslaagd\r\n";
     
    
  //  $message =$row['stelVraag'];
        
mail($to, $subject, $message, $headers);

} 
?>