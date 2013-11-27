<?php

	$con = mysql_connect('localhost','root');
	mysql_select_db("message");

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];


	mysql_query ("INSERT into mess (name,email,message,date_posted) VALUES('$name','$email','$message',CURRENT_DATE())");

	if($con){
		echo "Entered data successfully!!:)";
	}else{
		echo "failed";
	}

?>
<br>
<a href="viewMessage.php"><button>View</button>
