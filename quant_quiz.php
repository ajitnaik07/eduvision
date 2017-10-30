<?php
include('session.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width">
        <meta name="description" content="Eduvision aims at bridging the communication gap between students and teachers and using internet to make education fun">
        <meta name="keywords" content="E-Learning,Education,Student,Teacher,Book of the week,Communication,Eduvision">
<title>
	Learning Is Now Fun
</title>
<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
<link rel="stylesheet" href="mysheet.css">
<script type="text/javascript" src="jquery-2.1.4.min.js">
</script>
<script>
var a=0;
$(document).ready(function(){
  
  $("#upload").click(function(){
  window.alert("You have scored " +a+ "/5");
  });
  
  $("#12").click(function(){
  a=a+1;
  });
  
  $("#21").click(function(){
  a=a+1;
  });
  
  $("#32").click(function(){
  a=a+1;
  });
  
  $("#42").click(function(){
  a=a+1;
  });
  
  $("#52").click(function(){
  a=a+1;
  });
});
</script>
</head>
<body id="Home">
<div id="big_wrapper">
<header id="header" role="banner">
<h1 id="logop" align="center"> GRE Gyaan </h1><br><br>
<p id="tag_line"><q>Do something today that your future self will thank you for.</q></p>
</header>
<p>
<h3 align="right" style="color:#FF6600">Welcome, <?php echo $login_session; ?>!</h3>
</p>
<div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
            <li><a href="welcome.php">Home</a></li>
            <li class="current-item">
                <a href="#">Quiz of the day<span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li class="current-item"><a href="quant_quiz.php">Quants</a></li>
                    <li><a href="verb_quiz.php">Verbal</a></li>
                </ul>
            </li>
            <li>
				<a href="#">Videos<span class="arrow">&#9660;</span></a>
			
				<ul class="sub-menu">
					<li><a href="intro.php">Introduction</a></li>
                    <li><a href="quant.php">Quants</a></li>
                    <li><a href="verbal.php">Verbal</a></li>
					<li><a href="awa.php">AWA</a></li>
                </ul>
			</li>
			<li>
				<a href="">My account<span class="arrow">&#9660;</span></a>
				<ul class="sub-menu">
					<li><a href="profile.php">Profile</a></li>
					<li><a href="history.php">Transaction History</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
			
			</li>
            <li><a href="About Us.php">About us</a></li>
        </ul>
    </nav>
</div>
<br>
<div id="formwrapper">
<form name="quant_quiz" method="post" action="">
<br><br>
<H3 align="center">Quantitative Comparison</H3>
<br><br>
<p><b>1.</b>  n is an integer >0</p>
<table>
<tr>
<th>Quantity A</th>
<th>Quantity B</th>
</tr>
<tr>
<td>1/n + n</td>
<td>2</td>
<tr>
</table>
<input type="radio" name="1" id="11" required> A. The quantity A is greater<br>
<input type="radio" name="1" id="12" required> B. The quantity B is greater<br>
<input type="radio" name="1" id="13" required> C. Both are equal<br>
<input type="radio" name="1" id="14" required> D. The relationship cannot be determined without further information
<br><br><br>
<p><b>2.</b>  The average (arithmetic mean) of four numbers is 36</p>
<table>
<tr>
<th>Quantity A</th>
<th>Quantity B</th>
</tr>
<tr>
<td>The sum of the same four numbers</td>
<td>140</td>
<tr>
</table>
<input type="radio" name="2" id="21" required> A. The quantity A is greater<br>
<input type="radio" name="2" id="22" required> B. The quantity B is greater<br>
<input type="radio" name="2" id="23" required> C. Both are equal<br>
<input type="radio" name="2" id="24" required> D. The relationship cannot be determined without further information
<br><br><br>
<p><b>3.</b>  </p>
<table>
<tr>
<th>Quantity A</th>
<th>Quantity B</th>
</tr>
<tr>
<td>The diagonal of a rectangle</td>
<td>Half the perimeter of the same rectangle</td>
<tr>
</table>
<input type="radio" name="3" id="31" required> A. The quantity A is greater<br>
<input type="radio" name="3" id="32" required> B. The quantity B is greater<br>
<input type="radio" name="3" id="33" required> C. Both are equal<br>
<input type="radio" name="3" id="34" required> D. The relationship cannot be determined without further information
<br><br><br>
<p><b>4.</b>    x + y = 5 & y - x = 3 </p>
<table>
<tr>
<th>Quantity A</th>
<th>Quantity B</th>
</tr>
<tr>
<td>   x   </td>
<td>   y   </td>
<tr>
</table>
<input type="radio" name="4" id="41" required> A. The quantity A is greater<br>
<input type="radio" name="4" id="42" required> B. The quantity B is greater<br>
<input type="radio" name="4" id="43" required> C. Both are equal<br>
<input type="radio" name="4" id="44" required> D. The relationship cannot be determined without further information
<br><br><br>
<p><b>5.</b>  </p>
<table>
<tr>
<th>Quantity A</th>
<th>Quantity B</th>
</tr>
<tr>
<td>    + 7   </td>
<td>sqrt(36 + 49)</td>
<tr>
</table>
<input type="radio" name="5" id="51" required> A. The quantity A is greater<br>
<input type="radio" name="5" id="52" required> B. The quantity B is greater<br>
<input type="radio" name="5" id="53" required> C. Both are equal<br>
<input type="radio" name="5" id="54" required> D. The relationship cannot be determined without further information
<br><br><br>
<br>
<input type="Submit" value="Submit" id="upload"><br><br>
</div>
</form>
<br>
<footer id="footer" role="contentinfo">
<p>We are open to suggestions and hence would like to hear from you about anything you wish to convey to us.<br>
&copyGRE Gyaan<br>Contact:&nbsp&nbsp17thegunner[@]gmail[dot]com</p>
</footer>
</div>
</body>
</html> 