<?php
	require '../vendor/autoload.php';

	define('SITE_URL', 'http://localhost/Micro Exchange/User');

	$paypal = new \PayPal\Rest\ApiContext(
		new \PayPal\Auth\OAuthTokenCredential(
			'AbzOmWnbVeMYA3CPwcU-KQAvJUCjATC-mhGAzGS1JK1a5IRBiaZNjQog-2nszkRjV097OGNdC4ROx_Eq',
			'ENGMjuP2FFGgsW9kcgVV29XWH4rrovm-8grpqSvx7f3_0KGPszGBn9Qt_W5wHChoRNOl9dZ1uaWITFHv'
		)
	)
?>