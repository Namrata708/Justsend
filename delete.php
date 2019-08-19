<?php
//get the session
require 'config.php';
error_reporting(E_ALL);
 if(isset($_POST['submit'])){
 	$code=$_POST['code'];
 	echo $code;

  	$delete=mysqli_query($conn,"DELETE FROM message where codeg='$code'");
  	if($delete){
  		$files = glob($code. '/*');
  		foreach($files as $file){
    	//Make sure that this is a file and not a directory.
    		if(is_file($file)){
        		//Use the unlink function to delete the file.
        		unlink($file);
   			 }
		}
  		rmdir($code);
  		
  	echo "<script language='Javascript'>";
		 		echo "document.location.replace('./index.php')";//go to user page
		 		echo "</script>";
		 		

  	}else{
  		echo $conn->error;
  	}
  	

 }
?>