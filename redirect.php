<?php
require_once "system/db.php";

$r = make_safe($_GET['r']);

$links = $mysqli->query("SELECT real_link,id FROM ushort WHERE shorten_link='" . $r . "'");

if ($links->num_rows > 0) {
	$link = $links->fetch_assoc();
	
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: " . $link['real_link']);
} else {
	// Link does not exists - Redirect to frontpage
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: /");
}

exit;
?>