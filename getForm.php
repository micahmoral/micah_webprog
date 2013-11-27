<?php
mysql_connect('localhost','root') && mysql_select_db('message');
function getdata(){
	$data = "SELECT * from mess ";
	$get=mysql_query($data);
	$list=array();
	if($row=mysql_num_rows($get)>0){
		while($getd=mysql_fetch_assoc($get)){
			$list[]=$getd;
		}
		

	}
	return $list;
}



?>
