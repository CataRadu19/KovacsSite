<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$telephone = $_POST['tel'];
$adresa = $_POST['adresa'];
$int1 = $_POST ['int1'];
$int2 = $_POST ['int2'];
$int3 = $_POST ['int3'];
$int4 = $_POST ['int4'];
$int5 = $_POST ['int5'];
$int6 = $_POST ['int6'];
$int7 = $_POST ['int7'];
$int8 = $_POST ['int8'];
$int9 = $_POST ['int9'];
$int10 = $_POST ['int10'];
$int11 = $_POST ['int11'];
$int12 = $_POST ['int12'];
$int13 = $_POST ['int13'];
$int14 = $_POST ['int14'];


$email_from = ['crcata19@yahoo.com'];

$email_subject = "Cerere adoptie Noua";

$email_body = "Nume: $name.\n".
              "Email: $visitor_email.\n".
              "Telefon: $telephone.\n".
              "Adresa: $adresa.\n".
              "Nume caine: $message.\n".
              "Raspunsuri: $int1.\n".
              "$int1.\n".
              "$int2.\n".
              "$int3.\n".
              "$int4.\n".
              "$int5.\n".
              "$int6.\n".
              "$int7.\n".
              "$int8.\n".
              "$int9.\n".
              "$int10.\n".
              "$int11.\n".
              "$int12.\n".
              "$int13.\n".
              "$int14.\n";


$to = "asoc.saveandsmile@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply to: $visitor_email \r\n";

mail ($to,$email_subject,$email_body,$headers);

header("Location: formular.html");

?>
