<?php
$conn=mysqli_connect('localhost','root','','project');
if(mysqli_connect_error()){
	Die('error in connecting to database');
}
global $conn;
?>