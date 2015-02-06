<?php
/*
Template Name: Create template
*/
?>
<h4>2. So-so: Create and insert data in the Database.</h4>
<ol>
	<li>Create table through /phpmyadmin</li>
	<li>Add the fields in MYSQL</li>
	<li>Add data using a form</li>
	<li>Get data using PHP</li>
</ol>
<form class="margin-t-20" action="<?php echo get_template_directory_uri(); ?>/dog_saver.php" method="POST">
	<label class="block" for="">Dog Name</label>
	<input type="text" name="dog_name">
	<label class="block" for="">Dog's Owner</label>
	<input type="text" name="dog_owner">
	<label class="block" for="">Dog's Age</label>
	<input type="number" name="dog_age">
	<input class="block" type="submit" value="Save this DOG!">
</form>

<h3>Where dem dogs at?</h3>
	<ul>
		<?php 
		$connect = mysql_connect("localhost", "root", "root"); // mysql_connect('host', 'username', 'password')
		mysql_select_db("tutorial", $connect); // ("database_name", $connection_variable)
		
		// Query the DB to a limit of 5 results
		$query = "SELECT * FROM wp_info ORDER BY id desc LIMIT 3"; // play around with these!
		
		$result = mysql_query($query);

		// Displays the results as list items
		while($row = mysql_fetch_assoc($result)) {
			echo "<li class='margin-t-10'>".$row['dog']. " is owned by " .$row['owner'];

			if ($row['dog_age']) {
				echo " and is ".$row['dog_age']." years old</li>";
			} else {
				echo "</li>";
			}
			
		}
		mysql_close();
		?>
	</ul>