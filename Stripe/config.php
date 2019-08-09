<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

	$stripeDetails = array(
		"secretKey" => "sk_test_pS1NMxukICEvafOXZTpzyhnO00VTCx5FSJ",
		"publishableKey" => "pk_test_c4E7OWOgEy2tU1NnMA5exYBI009SmWnWdc"
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);
?>
