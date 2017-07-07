<?php
try
{
$server="localhost";
$database="pdo";
$username="root";
$password="";
$dsn="mysql:host=$server;dbname=$database";
$connect=new PDO($dsn,$username,$password);
return $connect;
}
catch(PDOException $error)
{
	echo 'Error In Connect';
}
?>