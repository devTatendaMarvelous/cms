<x-client>
          <section id="minimal-statistics-bg">
  <div class="row">
    <div class="col-12 mt-3 mb-1">
      <h2 class="content-header">Order Created Now Follow The Instructions Below To Make The Payment</h2>
      
    </div>
  </div>
  <div class="row match-height">
    
    <div class=" col-8">
      <div class="card bg-info">
        <div class="card-body">
          <div class="px-3 py-3">
            <div class="r ow text-white">
              
               
                <h1 class="pt-1 text-center mb-4 text-white"><strong>Payment Instructions</strong></h1>
              
             
             <ol class="px-5">
             <li>Copy the Order Reference below:  <!-- The text field -->
             <center class="row"><div class="col-3"></div><input type="text" class="form-control col-5 mb-1" value="{{$order['refno']}}" id="myInput">
               <!-- The button used to copy the text -->
               <button onclick="myFunction()" class=" btn gradient-orange-amber text-white col-2 ml-1 mb-1">Copy text</button> </center>
             </li>
             <li>Take note of the amount you have to pay  <em> (${{ $order['amount'] }})</em></li>
             <li>Click the buy now button below</li>
             <li>Enter all the transaction  details requested and click Paynow</li>
             <li>Choose payment method <em>(<strong>ie ecocash or onemoney</strong>) </em> and click make payment</li>
             <li>Enter the number for pay and click confirm payment. <br> a pop up will appear on your phone requesting for a pin</li>
             <li>You will be redirected to the Paynow Transaction page.<br>copy the Transaction ID and come back to this page. </li>
             <li>enter the Transaction Id from Paynow into the Texbox below and click paid to confirm your payment</li>
             
             </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <div class="container">
    
        
             <center> <div class="align-center">
               <a href='https://www.paynow.co.zw/Payment/BillPaymentLink/?q=aWQ9MTUzNzMmYW1vdW50PTAuMDAmYW1vdW50X3F1YW50aXR5PTAuMDAmZjE9Jmw9MA%3d%3d' target='_blank'><i class="icon-pointe r text-white font-large-2 float-left btn gradient-orange-amber">BUY NOW</i></a>
                
              </div>
              </center>
     
   
  </div>
</section>

<section id="minimal-statistics-bg">
  
  <div class="row match-height mt-5">
    
    <div class=" col-8">
      <div class="card bg-info">
        <div class="card-body">
          <div class="px-3 py-3">
            <div class="r ow text-white">
              
               
                <h1 class="pt-1 text-center mb-4 text-white"><strong>Enter Transaction Id Here</strong></h1>
                    <form action="/orders/paid" method="POST">
                    @csrf
                         <input type="hidden" name="refno" class="form-control col-5 mb-1" value="{{$order['refno']}}" id="myInput">
                              <center class="row"><div class="col-3"></div><input name="paymentRef"type="text" class="form-control col-5 mb-1" required>
                              @error('paymentRef')
                              <p class="text-danger"><em>{{$message}}</em></p>
                              @enderror
                              <!-- The button used to copy the text -->
                              <input type="submit" value="Paid"class=" btn gradient-orange-amber text-white text-center col-2 ml-1 mb-1"></center>
                    </form>
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  
</section>
        <script>
        function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert("Copied the text: " + copyText.value);
} </script>
</x-client>
        