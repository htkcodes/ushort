<?php
require_once "config.php";
$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

function make_safe($variable)
{
	global $mysqli;
	
	$data = @unserialize($variable);
	if ($data !== false) {
		
	} else {
		$variable = $mysqli->real_escape_string(trim($variable));
	}
	
	return $variable;
}