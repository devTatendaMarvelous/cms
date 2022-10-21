<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Paynow\Payments\Paynow;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;


class PaymentsController extends Controller
{
    function index(){

        return view('paynow');
        
    }
        private function CreateHash($values, $IntegrationKey) {
        $string = "";
           
        foreach($values as $key=>$value) {
            if( strtoupper($key) != "HASH" ){
                $string .= $value;
            }
        }
        
        $string .= $IntegrationKey;
        $hash = hash("sha512", $string);

        return strtoupper($hash);
    }


    public function makeExpressPayment(Request $request)
    {
      $integrationKey=" a7d9adfb-ae65-4bbb-8a89-64667f01b98d";
      $items = [
          [
              "name" => "Bread",
              "price"=> 1.00],
          [
              "name" => "Beans",
              "price"=> 2.00
          ]
       ];

        
        $paynow_rate = 110;

        // You can grab email from user like so: Auth::user()->email
        $user_email = "thetechiam@gmail.com";
      
        // You can grab phone number from request like so: $request->phone_number
        $phone_number = "0784657168";
        $wallet_name = "ecocash";
      


        $paynow = new \Paynow\Payments\Paynow(
            "15364",
            $integrationKey,
            "http://127.0.0.1:8000/makepayments/",
            "http://127.0.0.1:8000/makepayments/",
        );

        // Create Payments
        $invoice_name = "Invoice " . time();
        $payment = $paynow->createPayment($invoice_name, $user_email);
        $total=0;
        // Add some products
        foreach ($items as $item) {
            $price= floatval($item["price"]) * $paynow_rate;
            $total+=$price;
            $payment->add($item["name"], $price);
            
        }
        
         
       
        // Detect platform and send payment
        if (strpos($phone_number, '071') === 0) {
            $wallet_name = "onemoney";
        }

        if (strpos($phone_number, '073') === 0) {
            $wallet_name = "telecash";
        }
        
$hashed=$this->CreateHash([$wallet_name,$phone_number,'regsb',$total, 'http://127.0.0.1:8000/makepayments/','http://127.0.0.1:8000/makepayments/',$user_email,'Message' ], $integrationKey);
        $response = $paynow->sendMobile($payment,$hashed);

        dd($response);

        // Check transaction success
        if ($response->success()) {


            $timeout = 9;
            $count = 0;

            while (true) {
                sleep(3);
                // Get the status of the transaction
                // Get transaction poll URL
                $pollUrl = $response->pollUrl();
                $status = $paynow->pollTransaction($pollUrl);
                //Check if paid
                if ($status->paid()) {
                    // Yay! Transaction was paid for
                    // You can update transaction status here
                    // Then route to a payment successful page
                }



                $count++;



                if ($count > $timeout) {
                    // Timeout reached
                    // Notify user here
                }
            }
        }


        // Payment failed
        // Route to payment failed page
        
    }

}

