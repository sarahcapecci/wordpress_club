<?php 

$dog_name = $_POST['dog_name']; // $_POST['input_name']
$dog_owner = $_POST['dog_owner'];
$dog_age = $_POST['dog_age'];


///////////////// DATABASE CONNECTION ////////////////////

$connect = mysql_connect("localhost", "root", "root");
mysql_select_db("tutorial", $connect);

$query = " INSERT INTO wp_info (ID, dog, owner, dog_age) VALUES ('NULL', '".$dog_name."', '".$dog_owner."', '".$dog_age."')";

mysql_query($query) or die(mysql_error());

header("Location:http://localhost:8888/wordpress_club");

?>