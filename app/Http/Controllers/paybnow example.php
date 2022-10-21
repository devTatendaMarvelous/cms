<?php


$phone = $_POST["phone_number"]; // Sanitize data
$platform = "";

$user_email = filter_var($_POST['user_email'], FILTER_SANITIZE_EMAIL);
$invoice_name = "Invoice " . time();

$cart_id = $_POST['cart_id'];   // Sanitize id
$products = $this->get_cart_products($cart_id);


// Initialize Paynow
$paynow = new Paynow\Payments\Paynow(
    'INTEGRATION_ID',
    'INTEGRATION_KEY',
    'http://example.com/gateways/paynow/update',
    'http://example.com/return?gateway=paynow'
);

// Create Payments
$invoice_name = "Invoice " . time();
$payment = $paynow->createPayment($invoice_name, $user_email);

// Add some products
foreach($products as $product){
     $payment->add($product->name, $product->price);
}

// Detect platform and send payment
if(str_starts_with($phone, '071')){
     $platform= "onemoney";
}else if(str_starts_with($phone, '073')){
    $platform = "telecash";
}else{
    $platform = "ecocash";
}

$response = $paynow->sendMobile($payment, $phone, $platform);

// Check transaction success
if($response->success()) {
    // Get transaction poll URL
    $pollUrl = $response->pollUrl();

    

     $timeout = 9;
     $count = 0;

     while(true){
         sleep(3);
         // Get the status of the transaction
         $status = $paynow->pollTransaction($pollUrl);



         //Check if paid
         if($status->paid()){
           // Yay! Transaction was paid for
           // Save transactions to database and grant access
          }
        
          $count++;

          if ($count > $timeout){
             // Timeout reached
           }
      }
}

// Transaction failed
