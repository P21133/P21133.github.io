<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "dimitraamanta@gmail.com";
$subject = "Mail From website";
$txt ="name = ". $name . "\r\n  email = " . $email . "\r\n essage =" . $message.
"\r\n Phone =". $phone;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>