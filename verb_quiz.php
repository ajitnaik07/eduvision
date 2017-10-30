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
  
  $("#11").click(function(){
  a=a+1;
  });
  
  $("#24").click(function(){
  a=a+1;
  });
  
  $("#35").click(function(){
  a=a+1;
  });
  
  $("#44").click(function(){
  a=a+1;
  });
  
  $("#55").click(function(){
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
                    <li><a href="quant_quiz.php">Quants</a></li>
                    <li class="current-item"><a href="verb_quiz.php">Verbal</a></li>
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
<H3 align="center">Sentence Completion</H3>
<p><b>1.</b>Medical professionals have begun to warn the public about so-called "superbugs" that thrive in operating rooms: the overuse of antibiotics has rendered these organisms _________ standard treatments.</p>
<br>
<input type="radio" name="v1" value="A" id="11">A. impervious to <br>
<input type="radio" name="v1" value="B" id="12">B. qualified for <br>
<input type="radio" name="v1" value="C" id="13">C. abounding in <br>
<input type="radio" name="v1" value="D" id="14">D. conducive to<br>
<input type="radio" name="v1" value="E" id="15">E. replete with<br>
<br><br>
<p><b>2.</b>After losing his job, Willie became increasingly combative, interacting with even his closest acquaintances in a _________ manner.</p>
<br>
<input type="radio" name="v2" value="A" id="21">A. perfunctory<br>
<input type="radio" name="v2" value="B" id="22">B. supercilious<br>
<input type="radio" name="v2" value="C" id="23">C. slovenly<br>
<input type="radio" name="v2" value="D" id="24">D. pugnastic<br>
<input type="radio" name="v2" value="E" id="25">E. transient<br>
<br><br>
<p><b>3.</b>The harmonies created by the children's choir were so ________ that even the most hardened observers felt soothed and contented.</p>
<br>
<input type="radio" name="v3" value="A" id="31">A. syncopated<br>
<input type="radio" name="v3" value="B" id="32">B. strident<br>
<input type="radio" name="v3" value="C" id="33">C. cacophonous<br>
<input type="radio" name="v3" value="D" id="34">D. fraternal<br>
<input type="radio" name="v3" value="E" id="35">E. euphonious<br>
<br><br>
<p><b>4.</b>After graduating from high school, Warren was made responsible for running his father's company; it was unusual for one so young to be _________ with so much responsibility.</p>
<br>
<input type="radio" name="v4" value="A" id="41">A. fascinated<br>
<input type="radio" name="v4" value="B" id="42">B. refined<br>
<input type="radio" name="v4" value="C" id="43">C. afflicted<br>
<input type="radio" name="v4" value="D" id="44">D. entrusted<br>
<input type="radio" name="v4" value="E" id="45">E. popular<br>
<br><br>
<p><b>5.</b>While hiking through the forest, Sylvie noticed a _________ of wildlife, much less than she had observed during her previous outing.</p>
<br>
<input type="radio" name="v5" value="A" id="51">A. compendium<br>
<input type="radio" name="v5" value="B" id="52">B. plethora<br> 
<input type="radio" name="v5" value="C" id="53">C. miscellany<br>
<input type="radio" name="v5" value="D" id="54">D. surfeit<br>
<input type="radio" name="v5" value="E" id="55">E. paucity<br>
<br><br>
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