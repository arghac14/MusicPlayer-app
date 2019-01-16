<?php
 session_start();

  $_SESSION['plname'];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Xen Music Player</title>
	<meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style1.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	 <script src="https://cdn.jsdelivr.net/npm/bubbly-bg@0.2.3/dist/bubbly-bg.js"></script>
  <script>bubbly({colorStart: "#111",
    colorStop: "#422",
    bubbleFunc: () => `hsla(0, 100%, 50%, ${Math.random() * 0.25})`
});</script>
	<div id="openPlaylistPage" style="display:">
	<center>
		
		<h1>Your Playlist : <?php echo $_SESSION['plname']; ?></h1><hr>
		<form action="createPage.php" method="POST" enctype="multipart/form-data">
		<div style="background:rgba(0,0,0,0.4); height: 150px; width: 300px">
		<p>Add your music: </p><input id="sub1" type="file" name="audio"><br> <input id="sub2" type="submit" name="audiosub" value=" +  Add to list"></form>
 		</div>     
       <!--  <p>Click on the songs to play <span class="glyphicon glyphicon-play"></span></p> -->
	<?php
	$conn=mysqli_connect("localhost","root","","");
	if(!$conn){
		die("connection failed".mysqli_connect_error());
	}
	$sql="CREATE DATABASE music9";
	mysqli_query($conn,$sql);
	$conn=mysqli_connect("localhost","root","","music9");
	if(!$conn){
		die("connection failed".mysqli_connect_error());
	}
    $sql1="CREATE TABLE songs(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, songs VARCHAR(40) NOT NULL)";
	mysqli_query($conn,$sql1);
	
	$target_file=$_FILES['audio']['name'];
	$target_dir="uploads/".$target_file;
	move_uploaded_file($_FILES['audio']['tmp_name'], $target_dir);
	if($target_dir!="uploads/"){
	$sql2="INSERT INTO songs (songs) VALUES ('$target_dir')";
	mysqli_query($conn,$sql2);
    }
	
	
	$sql4="SELECT * FROM songs";
	$result=mysqli_query($conn,$sql4);	

	if(isset($_POST['del'])){
		$sql5="DELETE FROM songs";
		//$sql6="UPDATE songs SET id=0";
		mysqli_query($conn,$sql5);
		//mysqli_query($conn,$sql6);
	}
	
mysqli_close($conn);
	?>
		<hr>
		<div id="box1" style="color: rgba(241, 169, 160, 1) ; background:rgba(0,0,0,0.7);">
			<table class="table table-hover">
				<thead>
					<tr>
						<th><p style="padding-left: 130px"><b style="font-size: 30px"><span class="glyphicon glyphicon-option-vertical"></span> Sl No. </b></p></th>
						<th><p style="padding-right: 80px; font-size: 30px">Song <span class="glyphicon glyphicon-music"></span></p></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
				<?php
						while($row=mysqli_fetch_assoc($result)){
						echo "<tr>";
						?>
						<td><?php echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['id'];?></td>
						<td><?php echo'<a href="playit.php?name='.$row['songs'].'">'.'<span class="glyphicon glyphicon-play"> </span>'.'</a>'." ".$row['songs'];?></td>
						<?php
						echo "</tr>";
					}
					?> 
					</tr>

				</tbody>
			</table>
			</div>
			<form method="POST"> 
				<input style="
      width: 240px;
  height: 40px;
  background: rgb(203,96,179); 
background: -moz-linear-gradient(top, rgba(203,96,179,1) 0%, rgba(173,18,131,1) 50%, rgba(222,71,172,1) 100%); background: -webkit-linear-gradient(top, rgba(203,96,179,1) 0%,rgba(173,18,131,1) 50%,rgba(222,71,172,1) 100%);  Chrome10-25,Safari5.1-6 
background: linear-gradient(to bottom, rgba(203,96,179,1) 0%,rgba(173,18,131,1) 50%,rgba(222,71,172,1) 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cb60b3', endColorstr='#de47ac',GradientType=0 ); 
  border: none;
  position: relative;
  border-bottom: 4px solid #2b8bc6;
  color: #fbfbfb;
  border-radius: 200px 200px 200px 200px;
  font-weight: 600;
  font-family: 'Open Sans', sans-serif;
  text-shadow: 1px 1px 1px rgba(0,0,0,.4);
  font-size: 12px;
  text-align: middle;
  text-indent: 5px;
  box-shadow: 0px 3px 0px 0px rgba(0,0,0,.2);
  cursor: pointer;

  display: block;
  margin: 0 auto;
  margin-bottom: 20px;" id="del" type="submit" name="del" value="Press twice to Delete the playlist">
				</form>
		
	</center>
</div>

	
</body>
</html>