<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$phone= $_POST['phone']
$to = "dimitraamanta@gmail.com";
$subject = "Mail From website";
$txt ="name = ". $name . "\r\n  email = " . $email . "\r\n message =" . $message.
"\r\n Phone =". $phone;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>