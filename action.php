<?php

if(isset($_POST['first_name'])){
    $first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
	$type=$_POST['type'];
    $message=$_POST['message'];

	$to='aimmanuel85@gmail.com';
    $esubject="Form submission";
    $content="Name : ".$first_name. "\n"."Email :" .$email."\n"."Subject :" .$type."\n"."Message"."\n\n".$message;
    $headers="From : " .$email;


    if(mail($to,$esubject,$content,$headers))
    {
        echo "<h1> Sent Successfully! Thank You"."".$name."\n"."Bye</h1>";
    }
    else
    {
        echo "Something went wrong";
    }
   
}
?>
