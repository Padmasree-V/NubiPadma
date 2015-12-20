<?php
/*
*/


include 'functions.php';

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{

$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
$subject = stripslashes($_POST['subject']);
$message = stripslashes($_POST['message']);


$error = '';



if(!$error)
{
$conn=new mysqli("localhost","root","","reg")or die("unable to connect");
/*$mail = mail(WEBMASTER_EMAIL, $subject, $message,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());*/
	//$sql= "insert into registration ('name','email','comments') values ('$name','$email','$subject')";
	$sql= "INSERT INTO `registration`(`id`, `name`, `email`) VALUES (NULL,'$name','$email')";
$result = mysql_query($sql,$conn);
if($conn->query($sql))
{
echo "details inserted successfully";
}

if($sql)
{
echo 'OK';
}

}


}
?>
