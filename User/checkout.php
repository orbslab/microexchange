<?php
	require '../app/start.php';

	if(!isset($_POST['product'] && $_POST['price'])) {
		die();
	}

	$product = $_POST['product'];
	$price = $_POST['price'];
	$shipping = 2.00;

	$total = $price + $shipping;

?>