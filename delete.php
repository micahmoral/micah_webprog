<?php

$delete_id = $_GET['id'];
mysql_connect('localhost','root');
mysql_select_db('message');

$query = "DELETE from mess where id = '$delete_id'";
$result = mysql_query($query);
header('location:viewMessage.php');

?>
