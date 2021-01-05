<?php
print_r($_POST); exit;
if(isset($_POST['username'])){
    $name=$_POST['username'];
    $email=$_POST['email'];
    $subject=$_POST['sub'];
    $message=$_POST['textarea'];


    $to='aimmanuel85@gmail.com';
    $esubject="Form submission";
    $content="Name : ".$name. "\n"."Email :" .$email."\n"."Subject :" .$subject."\n"."Message"."\n\n".$message;
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
