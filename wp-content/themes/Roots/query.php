<?php
/*
Template Name: New template
*/
?>

<div>
	<h2>Keep calm and Query on</h2>
</div>

<h4>1. Easy: show me blog posts from other database!</h4>
<p>There's a WordPress class to do so. It makes it easier! Yay, WordPress!</p>
<?php 
$mydb = new wpdb('root','root','youth','localhost'); // wpdb('username', 'password', 'database_name', 'host');

$rows = $mydb->get_results("SELECT post_title, guid, post_date FROM wp_posts WHERE post_type = 'post'");
echo "<ul>";
foreach ($rows as $obj) :
	$new_date = date("F j, Y", strtotime($obj->post_date));
	echo "<li><a class='black-link' href=".$obj->guid." target='_blank'><h4>".$obj->post_title."</h4></a>";
	echo "<p>".$new_date."</p></li>";
endforeach;
echo "</ul>";
 ?>


 <a href="http://codex.wordpress.org/Class_Reference/wpdb" target="_blank">More information here</a>