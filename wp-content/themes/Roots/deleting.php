<?php
/*
Template Name: Delete template
*/
?>
<h2>4. Easy: Delete data for good!</h2>
<p>Ain't nobody got time for dogs.</p>

<h3>Delete your dog:</h3>
<ul>
 <?php 
 $connect = mysql_connect("localhost", "root", "root"); // mysql_connect('host', 'username', 'password')
 mysql_select_db("tutorial", $connect); // ("database_name", $connection_variable)
 
 // Query the DB to a limit of 5 results
 $query = "SELECT * FROM wp_info ORDER BY id desc LIMIT 3"; // play around with these!
 
 $result = mysql_query($query);
 	while($row = mysql_fetch_assoc($result)) {
 		echo "<li class='pointer doggy-gone margin-t-10' data-id='".$row['id']."'>".$row['dog']. "</li><span class='gone'></span>";
 	}

 mysql_close();
 ?>
 </ul>
