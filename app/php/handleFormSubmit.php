<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["c_name"]==""||$_POST["c_email"]==""||$_POST["c_message"]==""){
echo "Please fill out all fields";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['c_email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid email";
}
else{

$subject = $_POST['c_name']

$message = $_POST['c_message'];

$headers = 'From:'. $email . "\r\n"; // Sender's Email
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("vatter.cw@gmail.com", $subject, $message, $headers);
echo "Thank you for the email! You've made my day!";
}
}
}
?>