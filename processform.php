<?php

$email = test_input($_POST['email']);
$concern = test_input($_POST['concern']);

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$concernlength = strlen($concern);

// $emailvalidation = "[a-zA-Z0-9-]{1,}@([a-zA-Z\.])?[a-zA-Z]{1,}\.[a-zA-Z]{1,4}";
$emailvalidation = "/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/  ";

if(preg_match($emailvalidation, $email) !== 1) {
	echo("Please enter a valid email for replies");
}

elseif(empty($concern)==true || $concernlength<10){
	echo("What was it that you wanted to tell me? Enter it in the comment section!");
}

else{
	echo(" Thank you for your feedback! Any questions or concerns needing response from me will be sent to the email you provided, " .$email);
	mail("SmartFool@mailinator.com", "You have mail from a visitor!", $concern);
}