<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$config['PayPalMode']			= 'sandbox'; // sandbox or live
$config['PayPalApiUsername'] 	= 'jb-us-seller_api1.paypal.com'; //PayPal API Username
$config['PayPalApiPassword'] 	= 'WX4WTU3S8MY44S7F'; //Paypal API password
$config['PayPalApiSignature']   = 'AFcWxV21C7fd0v3bYYYRCpSSRl31A7yDhhsPUU2XhtMoZXsWHFxu-RWy'; //Paypal API Signature
$config['PayPalCurrencyCode']   = 'USD'; //Paypal Currency Code
$config['PayPalReturnURL'] 		= 'http://localhost/paypal/process.php'; //Point to process.php page
$config['PayPalCancelURL'] 		= 'http://localhost/paypal/cancel_url.php'; //Cancel URL if user clicks cancel


