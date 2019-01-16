<!DOCTYPE html>
<html>
<head>
	<title>play</title>
	<style type="text/css">
		#aud{
			position: absolute;
			left: 30%;
			top: 30%;
			background: ; 
			height: 350px;
			width: 525px;
			background:url("images/9.jpg");
			opacity: 0.7;
		}
		#tit{
			position: absolute;
			left: 26.6%;
			top: 19%;
		    color:rgba(241, 169, 160, 1);
  			font-weight: 600;
  			font-family: 'Open Sans', sans-serif;
  			text-shadow: 1px 1px 1px rgba(0,0,0,.4);
  			font-size: 22px;
 		    text-align: middle;
  			text-indent: 5px;
  			padding-left: 130px;
		}
		audio:hover, audio:focus, audio:active
			{
				background-color: #95B9C7;
		-webkit-box-shadow: 15px 15px 30px rgba(0,0, 0, 0.9);
		-moz-box-shadow: 15px 15px 30px rgba(0,0, 0, 0.9);
		box-shadow: 15px 15px 30px rgba(0,0, 0, 0.9);
		-webkit-transform: scale(1.05);
		-moz-transform: scale(1.05);
		transform: scale(1.05);
			}

	</style>
</head>
<body style="">
	<script src="https://cdn.jsdelivr.net/npm/bubbly-bg@0.2.3/dist/bubbly-bg.js"></script>
  <script>bubbly({colorStart: "#111",
    colorStop: "#422",
    bubbleFunc: () => `hsla(0, 100%, 50%, ${Math.random() * 0.25})`
});</script>
	
	<p id="tit"><b> Song: </b><i><?php echo $_GET['name']?></i></p>
<audio id="aud"  controls >

	
  <source src="<?php echo $_GET['name']?>">
 </audio> 
</body>
</html>

