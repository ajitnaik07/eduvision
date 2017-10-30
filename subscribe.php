<?php
$time=time();
if(isset($_POST['subscribe'])!=""){
$cardno=$_POST['cardno'];
$ccv=$_POST['ccv'];
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("eceb", $connection);
$query = mysql_query("select * from credit_card where cardno='$cardno' AND ccv='$ccv'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$fname=$_POST['fname'];
$lname=$_POST['lname']; 
$email=$_POST['email']; 
$username=$_POST['username'];
$password=$_POST['password']; 
$insert=mysql_query("insert into login VALUES('$fname','$lname','$username','$password','$email','$cardno','$time')");
if($insert){
header("location:/eceb/success.html");
}
else{
die(mysql_error());
}
}
else{
	echo "<h3>Invalid Card Details</h3>";
}
}
?>