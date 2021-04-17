<?php 
    $conn = mysqli_connect('localhost', 'root', 'root', 'pizza');
	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}
?>