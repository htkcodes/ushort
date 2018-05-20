<?php
// Include the database connection
require_once "db.php";
function generate_link() {

	
	$characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
	$random_string = '';
	$max = strlen($characters) - 1;
	for ($i = 0; $i < 5; $i++) {
		 $random_string .= $characters[mt_rand(0, $max)];
	}
	return $random_string;
	echo($random_string);
}
if ($_POST) {
	
	$shorten_linkr = SHORT_URL . "r/";
	
	$url = $_POST['url'];

	
	if (!empty($url)) {
		$shorten=strtolower(generate_link());
		// Create link
		$mysqli->query("INSERT INTO ushort (real_link, shorten_link)VALUES('" . $url . "','" . $shorten . "')");
		
		// Output link
		echo $shorten_linkr . $shorten;
	}

}