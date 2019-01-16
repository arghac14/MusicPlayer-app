<?php

//if(isset($_POST['audiosub'])){
	$target_file=$_FILES['audio']['name'];
	$target_dir="uploads/".$target_file;
	move_uploaded_file($_FILES['audio']['tmp_name'], $target_dir);
	if(move_uploaded_file($_FILES['audio']['tmp_name'],$target_dir)){
		echo "Something went wrong!!";
	}




?>