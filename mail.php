<?php

$nom =$_POST['nom'];
$email=$_POST['email'];
$Objet=$_POST['Objet'];
$message=$_POST['message'];
$to = "Assoumoulandry1@gmail.com";
$subject= "Mail from website";
$txt = "nom = " $.nom . "\r\n    email = " . $email . "\r\n   Objet = " . $Objet . "\r\n   message = " . $message;
$headers = "From:  noreply@OBAMELANDRY.github.io" . "\r\n" .

"CC: somebodyelse@exampe.com";
if($email!=NULL){
    mail($to,$subject,$headers);
}
header("Location:merci.html"); -->