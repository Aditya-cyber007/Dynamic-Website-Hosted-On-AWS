<?php

$name=$_POST['name'];
$pass=$_POST['pass'];
$email=$_POST['email'];
echo"Hii ".$name;

$file = fopen ("details.txt", 'a+');
$s=fread($file,filesize("details.txt"));
$pos = strpos ($s, $email);
if(!$pos){

$f = fopen("app_num.txt", 'r');
$j_a_n=fread($f, filesize("app_num.txt"));
fclose($f);
$f = fopen("app_num.txt", 'w');
$text = $name."::".$pass."::".$email."::".$j_a_n."::"."\r\n";
$j_a_n=$j_a_n + 1;
fwrite($f,$j_a_n);
fwrite($file, $text);
fclose($file);
fclose($f);
echo "Your data submitted successfully<br>";

}
else{

echo "You are already registered";

}
echo "<a href=login.html>Click Here to login</a>";
?>