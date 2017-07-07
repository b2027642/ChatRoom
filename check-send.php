<?php
session_start();
include "Connection.php";
$sql="INSERT INTO `pdo`.`chat` (`id` ,`username` ,`text`)VALUES (NULL , ?, ?);";
$result=$connect->prepare($sql);
$result->bindValue(1,$_SESSION["user"]);
$result->bindValue(2,$_POST["msg"]);
$result->execute();
?>