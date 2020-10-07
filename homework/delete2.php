<?php

$conn = new mysqli('localhost','root','','blog')
or die("cannot connect");



if (isset($_GET['id'])) 
{
	$id = $_GET['id'];
	mysqli_query($conn, "DELETE FROM teacher WHERE id=$id");
	 
	header('location: index2.php');
}



?>