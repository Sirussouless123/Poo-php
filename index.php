<?php

// spl_autoload_register(function ($class){
//     $path = dirname(__DIR__).'/'.str_replace('\\','/',$class).'.php';
//         if (file_exists($path)){
//                 require $path;
//         }
// });

require './vendor/autoload.php';

use \Class\Paypal\Payment as paypalPayment  ;

use \Class\Stripe\Payment;


$paymentPaypal = new paypalPayment ();

$paymentStripe = new Payment();

var_dump($paymentPaypal, $paymentStripe);
