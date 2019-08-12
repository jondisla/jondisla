<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo="contact@johndisla.com";
    $headers = "From: ".$mail;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Locaition: index.php?mailsend");
}