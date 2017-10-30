<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: welcome.php");
}
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
</head>
<body id="Home">
<div id="big_wrapper">
<header id="header" role="banner">
<h1 id="logop" align="center"> GRE Gyaan </h1><br><br>
<p id="tag_line"><q>Do something today that your future self will thank you for.</q></p>
</header>
<div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
            <li><a href="index.html">Home</a></li>
            <li>
                <a href="#">Quiz of the day<span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li><a href="quant_quiz.htm">Quants</a></li>
                    <li><a href="verb_quiz.html">Verbal</a></li>
                </ul>
            </li>
            <li>
				<a href="#">Videos<span class="arrow">&#9660;</span></a>
			
				<ul class="sub-menu">
					<li><a href="intro.html">Intro</a></li>
                    <li><a href="quant.html">Quants</a></li>
                    <li><a href="verbal.html">Verbal</a></li>
					<li><a href="awa.html">AWA</a></li>
                </ul>
			</li>
			<li class="current-item">
				<a href="">My account<span class="arrow">&#9660;</span></a>
				<ul class="sub-menu">
					<li class="current-item"><a href="myaccount.php">Login</a></li>
                    <li><a href="subscribe.html">Subscribe</a></li>
                </ul>
			
			</li>
            <li><a href="AboutUs.html">About us</a></li>
        </ul>
    </nav>
</div>
<br><br>
<div id="loginform" align="center">
<form name="Login" action="" method="post" autocomplete>
<br><br><br><br>
Username: <input type="text" name="username" placeholder="Enter username" autofocus><br><br>
Password: <input type="password" name="password"  placeholder="Enter password"><br><br>
<span><?php echo $error; ?></span>
<input type="Submit" value="Submit" id="upload" name="submit">
<input type="Reset" value="Reset" id="upload">
<br><br>
</form>
</div>
</div>
</html>