<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	print_r($_GET['keywords']);
}

if (isset($_SESSION['url'])) {
		print_r($_SESSION['url']);
	}	
?>