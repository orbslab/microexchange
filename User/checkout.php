<?php
	
	use PayPal\Api\Payer;
	use PayPal\Api\Item;
	use PayPal\Api\ItemList;
	use PayPal\Api\Details;
	use PayPal\Api\Amount;
	use PayPal\Api\Transaction;
	use PayPal\Api\RedirectUrls;
	use PayPal\Api\Payment;

	require '../app/start.php';

	if(!isset($_POST['product']) && !isset($_POST['price'])) {
		die();
	}

	$product = $_POST['product'];
	$price = $_POST['price'];
	$shipping = 2.00;

	$total = $price + $shipping;

	$payer = new Payer();
	$payer->setPaymentMethod('paypal');

	$item = new Item();
	$item->setName($product)
			->setCurrency('GBP')
			->setQuantity(1)
			->setPrice($price);

	$itemList = new ItemList();
	$itemList->setItems([$item]);

	$details = new Details();
	$details->setShipping($shipping)
			->setSubtotal($price);

	$amount = new Amount();
	$amount->setCurrency('GBP')
			->setTotal($total)
			->setDetails($details);

	$transaction = new Transaction();
	$transaction->setAmount($amount)
			->setItemList($itemList)
			->setDescription('Buy Trafic')
			->setInvoiceNumber(uniqid());

	$redirectUrls = new RedirectUrls();
	$redirectUrls->setReturnUrl('http://localhost/Micro%20Exchange/User/pay.php?success=true')
			->setCancelUrl('http://localhost/Micro%20Exchange/User/pay.php?success=true');

	$payment = new Payment();
	$payment->setIntent('sale')
			->setPayer($payer)
			->setRedirectUrls($redirectUrls)
			->setTransactions([$transaction]);


	try {
		$payment->create($paypal);
	} catch(Exception $e) {
		die($e);
	}

	$approvalUrl = $payment->getApprovalLink();

	header("Location: {$approvalUrl}");

?>