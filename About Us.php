<?php
include('session.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
        <meta name="description" content="Eduvision aims at bridging the communication gap between students and teachers and using internet to make education fun">
        <meta name="keywords" content="E-Learning,Education,Student,Teacher,Book of the week,Communication,Eduvision">
<title>
	Learning Is Now Fun
</title>
<link rel="stylesheet" href="mysheet.css">
<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body id="Aboutus">
<div id="big_wrapper">
<header id="header">
<h1 id="logoa" align="center"> GRE Gyaan </h1>
<p id="tag_line"><q>Do something today that your future self will thank you for.</q></p>
</header>
<p>
<h3 align="right" style="color:#FF6600">Welcome, <?php echo $login_session; ?>!</h3>
</p>
<div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
            <li><a href="welcome.php">Home</a></li>
            <li>
                <a href="#">Quiz of the day <span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li><a href="quant_quiz.htm">Quants</a></li>
                    <li><a href="verb_quiz.html">Verbal</a></li>
                </ul>
            </li>
            <li>
				<a href="#">Videos <span class="arrow">&#9660;</span></a>
			
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
            <li class="current-item"><a href="About Us.php">About us</a></li>
        </ul>
    </nav>
</div>
<div id="new_div">
<section id="section">
<p><b>Being inspired by an Indian Online TV Mini Series, this portal is created by four engineering students of K. J. Somaiya College of Engineering.
We give an alternative for students who do not intend to join commercial coaching classes with exorbitantly high fees. 
Basically we aim that no student eager to do Masters is deprived of help for scoring well in GRE.</b></p> 
<br>
<h3 align="center">Website Created by:</h3>
<ul style="list-style-type:square">
<li><b>Jaydeep Shah</b></li><br>
<li><b>Mandar Limaye</b></li><br>
<li><b>Eshaan Shah</b></li><br>
<li><b>Haril Satra</b></li><br>
</ul>
<br>
<img id="img" src="DSC03552.jpg" width=50% height=50% script="display: block; margin: auto auto"/ >
<br><br><br><br><br>
<a href="https://plus.google.com/109801950479794311533" rel="Publisher">Visit us on Google+</a>
</section>
</div>
<footer id="footer" role="contentinfo">
<p>We are open to suggestions and hence would like to hear from you about anything you wish to convey to us.<br>
&copyGRE Gyaan<br>Contact:&nbsp&nbsp17thegunner[@]gmail[dot]com</p>
</footer>
</div>
</body>
</html> 