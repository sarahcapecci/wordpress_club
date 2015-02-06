<?php
/*
Template Name: AJAX template
*/
?>
<h4>3. So-so: Get data from database using AJAX</h4>
<p>So you want to be all fancy and get only the info of the dogs you click on... Ok, no problem.</p>
<ol>
	<li>JS: Ajax Function (scripts.js)</li> 
	<li>PHP: Retrieve Info (let_the_dog_out.php)</li>
	<li>JS: Display Info and Call the function (scripts.js)</li>
	<li>Get happy.</li>
</ol>

<h3>Pick your dog:</h3>

<?php 
$connect = mysql_connect("localhost", "root", "root"); // mysql_connect('host', 'username', 'password')
mysql_select_db("tutorial", $connect); // ("database_name", $connection_variable)

// Query the DB to a limit of 5 results
$query = "SELECT * FROM wp_info ORDER BY id desc LIMIT 3"; // play around with these!

$result = mysql_query($query);
	while($row = mysql_fetch_assoc($result)) {
		echo "<li class='pointer doggy margin-t-10' data-id='".$row['id']."'>".$row['dog']. "</li>";
	}

mysql_close();
?>

<div id='selected-dog'>
	<h3>This dog is out!</h3>
	<p>Name: <span id="dog-name"></span></p>
	<p>Owner: <span id="dog-owner"></span></p>
	<p id="dog-age">Age: <span></span></p>
</div>