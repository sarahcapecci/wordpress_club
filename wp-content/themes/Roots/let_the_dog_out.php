<?php 
$dog_id = $_POST['dogParam'];

$data = array();

$db_link = mysql_connect("localhost", "root", "root");
mysql_select_db("tutorial", $db_link);

$query = "SELECT * FROM wp_info WHERE id = $dog_id ";

$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_assoc($result)) {
	$data['dog_name'] = $row['dog'];
	$data['dog_owner'] = $row['owner'];
	$data['dog_age'] = $row['dog_age'];
}

echo json_encode($data);

?>