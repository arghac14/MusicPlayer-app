
<?php
	
	session_start();
		
	 if(isset($_POST['submit'])){
	
		// if(!empty($_GET['playlistName'])){
		// 	if($_SERVER['REQUEST_METHOD']=='POST'){
				$plname=$_POST['playlistName'];
				$_SESSION['plname']=$plname;
		// 	}
	 }
	
?>
<!doctype html>
<html lang="en">
<head> 

	<title>Xen Music Player</title>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>

<div id="mainpage" style="display: ">
	<div class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header"><h2 id="navbar-brand" style="color: white">Xen Music Player</h2></div>
				<div class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.html" style="font-size: 20px"><span class="glyphicon glyphicon-music"></span> Home </a></li>
					<li><a href="createPage.php" style="font-size: 20px"><span class="glyphicon glyphicon-heart"></span> My Playlist </a></li>
					<li><a href="#" style="font-size: 20px"><span class="glyphicon glyphicon-headphones"></span> Radio </a></li>
					<li><a href="pages/profilepage/profileargha.html" style="font-size: 20px">About author <span class="glyphicon glyphicon-user"></span></a></li>
				</div>
			</div>
		</div>
	<br>
	<div id="slide" class="container-fluid">
		<div id="myCarousel" class="carousel slide" data-riding="carousel" data-interval="2000">
			<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="2" class="active"></li>
			</ol>

		<div class="carousel-inner">
			<div class="item active">
				<img id="carImage" src="images/2.jpg" style="padding-right: 100px">
				<div class="carousel-caption">
					<h2>Listen to your favourite songs</h2>
				</div>
			</div>
			<div class="item">
				<img id="carImage" src="images/11.jpg"  style="padding-right: 100px" >
				<div class="carousel-caption">
					<h2>Create your own playlist</h2>
				</div>

			</div>
			<div class="item">
				<img id="carImage" src="images/6.jpg"  style="padding-right: 100px">
				<div class="carousel-caption">
					<h2>Customize your playlist</h2>
				</div>

			</div>
		</div>
		 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
   			 <span class="glyphicon glyphicon-chevron-left" style="color:black"></span>
  	  		 <span class="sr-only">Previous</span>
  		</a>
 		 <a class="right carousel-control" href="#myCarousel" data-slide="next">
  		     <span class="glyphicon glyphicon-chevron-right" style="color:black"></span>
   		    <span class="sr-only">Next</span>
 		 </a>
	 </div>
	</div>
	<hr>
	<div class="container-fluid">
	<div id="menu">
		<center>
		<button id="b1" onclick="createPlaylist()">Create playlist&nbsp&nbsp&nbsp&nbsp</button><button id="b2" onclick="openPlaylist()">&nbsp&nbsp&nbsp&nbspOpen playlist</button>
		
		</center>
	</div>
	</div>

</div>
<div id="createPlaylistPage" style="display: none">

	<center>
		<h1>Create Your Playlist</h1><hr><br><br><br><br>
		<div id="box">
		<form  method="POST">
		<br><br><p>Playlist Name:</p><input id="pname" type="text" name="playlistName" size="30%" placeholder="   Enter the name of your playlist here.."><br><br>
		<input id="sub" type="submit" name="submit" value="Create playlist">
		</div>
	</center>


</div>

</div>
<div id="openPlaylistPage" style="display:none">
	<center>
		<h1>Your Playlist :</h1><hr><br><br><br><br>
		<div id="box1">
			

		</div>
	</center>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bubbly-bg@0.2.3/dist/bubbly-bg.js"></script>
  <script>bubbly({colorStart: "#111",
    colorStop: "#422",
    bubbleFunc: () => `hsla(0, 100%, 50%, ${Math.random() * 0.25})`
});</script>
</body>