<?php
$conn=mysql_connect("localhost","root","") or die(mysql_error());
$sdb=mysql_select_db("eceb",$conn) or die(mysql_error());
if(isset($_POST['passchange'])!=""){
$oldpass=$_POST['oldpass'];
$newpass=$_POST['newpass']; 
$connnewpass=$_POST['connewpass'];
$update=mysql_query("UPDATE login SET password='$newpass' WHERE password='$oldpass'");
if($update){
header("location:/eceb/welcome.php");
}
else{
die(mysql_error());
}
}
?>