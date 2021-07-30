<html>
<body>
<?php
session_start();
if(isset($_SESSION['name'])){
echo $_SESSION['name']." you are successfully logged out";}
else {
echo "Please login to continue";

}
?>
<p class="forgot" ><a href="login.html">Login again</p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$('#theSubmit').on('click', function () {
    setTimeout(function(){
        window.close();                
    }, 500);               
})
<?php
session_unset();
session_destroy();
?>
</script>
</body>
</html>