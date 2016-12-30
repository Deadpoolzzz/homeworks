<?php 
$colors = [
	'red',
	'green',
	'gray',
	'yellow',
	'pink'
];
if (isset($_POST['colors'])) {
	setcookie('color', $_POST['colors'], time() + 30, "/");
	$_COOKIE['color'] = $_POST['colors'];
} else
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : 'white';

 ?>