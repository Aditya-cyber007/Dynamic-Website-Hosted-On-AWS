<html>

<head>
  
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  <title>logout</title>
</head>

<?php 
session_start();
$prog=$_POST['prog'];
$lang=$_POST['lang'];


echo "<h3> Hello ".$_SESSION['name']."</h3>";
$fp = fopen($_SESSION['app_num'].$lang, 'w');

fwrite($fp,$prog );  
fclose($fp);  
echo "Your responce is recorded successfully";
?>
<body>
<p class="sign" align="center"><u><a href="logout.php">Logout Now!</p></u>
</body>
</html>
