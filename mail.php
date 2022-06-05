<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "lalitkumar9710888@gmail.com";
$subject = "Mail From website local";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: lalitkumar971088@gmail.com" . "\r\n";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
else{
    alert("failed")
}
// //redirect
// header("Location:thankyou.html");
?>