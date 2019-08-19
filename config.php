<?php

	$conn=mysqli_connect('localhost','root','','justsend');
	if(!$conn){
		echo $conn->error;
	}
	else{
		//echo"connected successfully";
	}
?>