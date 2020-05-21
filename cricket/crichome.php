<!doctype html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 100, 0, 0.5), rgba(0, 0, 0, 0.5)), url("#");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

table#table1 th {
background-color: black;
color: white;
text-align:center;
}

table#table1 td {
text-align:center;

}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

#mySidenav a {
  position: absolute;
  left: 0px;
  transition: 0.3s;

  padding: 15px;
  width: 200px;
  text-decoration: none;
  font-size: 20px;
  
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 50px;
}


#user {
  top: 20px;
  background-color: yellowgreen;
  color: white;
}

#admin {
  top: 80px;
  background-color: yellow;
  color: black;
}

#live {
  top: 140px;
  background-color: tomato;
  color: white;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 1500px;
  margin-left:100px;
  margin-right:100px;
  background-color: white; opacity: 0.9;
  text-align: left;
  font-family: 'Proxima Nova Soft', 'Helvetica Neue', sans-serif;
}

.icon-bar {
  position: fixed;
  top: 70%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

.main {
  max-width: auto;
  margin-left: 100px;;
}


.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  margin-left :30px;
  margin-right :50px;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}


.active,
.demo:hover {
  opacity: 1;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
  
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: white;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}


/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}


/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
</style>
</head>
<body style="font-family:'Proxima Nova Soft', 'Helvetica Neue', sans-serif; background-repeat: no-repeat;  background-attachment: fixed;2" background="icc.jpg">

<div class="icon-bar">
  <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://twitter.com/" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="https://www.linkedin.com/" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="https://www.youtube.com/" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">PLAY BALL</h1>
    <p>The all in one cricket manager for the underdog cricket league</p>
    <a href="about.html"><button>About PLAY BALL</button></a>
  </div>
</div>

<div id="mySidenav" class="sidenav">

<a href="User.html" id="user">User Login</a>
<a href="AdminLogin.html" id="admin">Admin Login</a>
<a href="livesc.html" id="live">Live Scorecard</a>
</div>


<br><br>
<center>
<div class="slideshow-container" style="width:60%;">
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="ipl.jpg" style="width:70%">
   <div class="text">Get the latest IPL updates here</div>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="icc2.jpg" style="width:70%">
   <div class="text">Indian World Cup squad for 2019</div>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="cwc.png" style="width:70%">
   <div class="text">World Cup 2019 Schedule</div>
  <div class="text"></div>
</div>

</div></center>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<br><br>


<div class="main">
<div class="row">
  <a href="https://www.gqindia.com/content/vivo-ipl-2019-winner-prediction-who-will-win-the-indian-premier-league-season-12-ipl-2019-playoffs-and-ipl-finals-winner-prediction/" style="color:black;">

  <div class="column">
    <div class="content">
      <img src="ipl.jpg" alt="IPL Trophy" style="width:100%">
      <h3>Champion Prediction</h3>
      <p>Find out which teams are favorites to win IPL 2019. Can CSK defend their title for the second time?</p>
    </div>
  </div>
    </a>

  <div class="column">
    <div class="content">
    <img src="ashok.jpg" alt="Ashok Dinda" style="width:100%;">
    <p><b>Ashok Dinda, the run machine</b></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="dharma.jpg" alt="Dharmshala Cricket Ground" style="width:100%">
      <h3>Dharmshala Cricket Ground</h3>
      <p></p>
    </div>
  </div>
 
</div>
<!-- END MAIN -->
</div>


<div class="card">
<div style="margin:25px">
<br>

<?php
$conn = mysqli_connect("localhost","root","","dbms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//$mt=$_POST['mtid'];
$one="1";
$mt="m123";
$b=$mt.$one;
$sel = "select scorecard,overs,bts1nm,bts2nm,blnm from $b"; 
$result = mysqli_query($conn,$sel);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result)) {
	$src=$row['scorecard'];
	$over=$row['overs'];
	$at1=$row['bts1nm'];
	$at2=$row['bts2nm'];
	$ol=$row['blnm'];
}

$wick="select sum(wickets) from $b";
$result1 = mysqli_query($conn,$wick);
$rows = mysqli_fetch_assoc($result1);
	$wic=$rows['sum(wickets)'];
echo '<h3>MatchID : '.$mt.'</h3>';
echo '<h4>Team Name : NushAgile</h4>';
echo '<table id="table1" align="center" style="width:90%; border-spacing:10px; border-collapse:collapse;">

<tr>
<th><br>Scorecard<br><br></th>
<th>Wickets<br></th>
<th>Overs Completed<br></th>
<th>Batsman On Strike<br></th>
<th>Non-Strike<br></th>
<th>Bowler<br></th>
</	tr>';
	echo '<tr>';
	echo '<td><br>'.$src.'</td>';
	echo '<td><br>'.$wic.'</td>';
	echo '<td><br>'.$over.'</td>';
	echo '<td><br>'.$at1.'</td>';
	echo '<td><br>'.$at2.'</td>';
	echo '<td><br>'.$ol.'</td>';
	echo '</tr>';
	echo '</table><br><br>';
}
	
	//echo '<a href="scoreupdate.html"><button type="submit">Score Update</button></a>';
	
	echo '<br>';
	
$two="2";
$mt="m123";
$c=$mt.$two;
	
	$sell = "select scorecard,overs,bts1nm,bts2nm,blnm from $c"; 
$resultt = mysqli_query($conn,$sell);
if(mysqli_num_rows($resultt)>0)
{
while($roww = mysqli_fetch_assoc($resultt)) {
	$src=$roww['scorecard'];
	$over=$roww['overs'];
	$at1=$roww['bts1nm'];
	$at2=$roww['bts2nm'];
	$ol=$roww['blnm'];
}

$wick1="select sum(wickets) from $b";
$result11 = mysqli_query($conn,$wick1);
$rowss = mysqli_fetch_assoc($result11);
	$wic1=$rowss['sum(wickets)'];
//echo '<h3>MatchID : '.$mt.'</h3>';
echo '<h4>Team Name : Pheonix</h4>';
echo '<h4>Team Name : Pheonix</h4>';
echo '<table id="table1" align="center" style="width:90%; border-spacing:10px; border-collapse:collapse;">
<tr>
<th><br>Scorecard<br><br></th>
<th>Wickets<br></th>
<th>Overs Completed<br></th>
<th>Batsman On Strike<br></th>
<th>Non-Strike<br></th>
<th>Bowler<br></th>
</	tr>';
	echo '<tr>';
	echo '<td><br>'.$src.'</td>';
	echo '<td><br>'.$wic1.'</td>';
	echo '<td><br>'.$over.'</td>';
	echo '<td><br>'.$at1.'</td>';
	echo '<td><br>'.$at2.'</td>';
	echo '<td><br>'.$ol.'</td>';
	echo '</tr>';
	echo '</table><br><br>';
}
else
{
	//echo '<h3>MatchID : '.$mt.'</h3>';
echo '<h4>Team Name : Pheonix</h4>';
echo '<table id="table1" align="center" style="width:90%; border-spacing:10px; border-collapse:collapse;">

<tr>
<th><br>Scorecard<br><br></th>
<th>Wickets<br></th>
<th>Overs Completed<br></th>
<th>Batsman On Strike<br></th>
<th>Non-Strike<br></th>
<th>Bowler<br></th>
</	tr>';
	echo '<h3>Pheonix Yet to Bat</h3>';
	echo '</table><br><br>';
}
	mysqli_close($conn);
?>
<br><br>
</div></div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>