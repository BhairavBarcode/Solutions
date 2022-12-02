<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$message= $_POST['message'];
$to = "bhairavproduct123@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Phone =" . $phone . "\r\n Subject =" . $subject;
$headers = "From: noreply@bhairavbarcode.com" . "\r\n" .
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:contact.html");
?>