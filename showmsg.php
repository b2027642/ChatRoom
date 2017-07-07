<?php


include "Connection.php";

$sql = "select * from chat";
$result= $connect->query($sql);

foreach ($result as $rows)
{
	# code...

	echo $rows ["username"]. " : " . $rows["text"]."<br>" ;
}
?>