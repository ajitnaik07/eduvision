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
            <li ><a href="welcome.php">Home</a></li>
            <li>
                <a href="#">Quiz of the day<span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li><a href="quant_quiz.php">Quants</a></li>
                    <li><a href="verb_quiz.php">Verbal</a></li>
                </ul>
            </li>
            <li class="current-item">
				<a href="#">Videos<span class="arrow">&#9660;</span></a>
			
				<ul class="sub-menu">
					<li class="current-item"><a href="intro.php">Introduction</a></li>
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
<br><br>
<div class="container">
<br><br>
<ul style="list-style-type:disc">
<li><a href="1_General_Introduction.mp4">General Introduction</li>
<li><a href="2_Whats_on_the_GRE.mp4">What's on the GRE?</li>
<li><a href="3_Math_Section_Breakdown.mp4">Math Section Breakdown</li>
<li><a href="4_Verbal_Section_Breakdown.mp4">Verbal Section Breakdown</li>
</ul>
</div>
<br>
<footer id="footer" role="contentinfo">
<p>We are open to suggestions and hence would like to hear from you about anything you wish to convey to us.<br>
&copyGRE Gyaan<br>Contact:&nbsp&nbsp17thegunner[@]gmail[dot]com</p>
<br>
</footer>
</div>
</body>
</html> 