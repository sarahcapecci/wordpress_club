<?php 
$doggy_id = $_POST['dogParam'];

$db_link = mysql_connect("localhost", "root", "root");
mysql_select_db("tutorial", $db_link);

$query = "DELETE FROM wp_info WHERE id = $doggy_id";

mysql_query($query) or die(mysql_error());

echo " is gone for good thanks to you.";

?>