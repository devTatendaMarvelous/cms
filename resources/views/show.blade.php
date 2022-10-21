
     <x-client>
               <!--Basic Table Starts-->

<!--Basic Table Ends-->



     <center mt-4><h2><strong>You Ordered: </strong></h2>
@forelse ($order as $item)
     {{ $item }} <br> 
@empty
     
@endforelse


</center>
<hr>
<center>
     <div class="row">
          <div class="col-12">
               <div class="col-4">
               <div class="col-8">
                     <form action="/orders/pay" method="POST">
@csrf
<input type="hidden" name="order" value="{{ $items }}">
<h6><strong></strong></h6>
<label for=""><h6><strong>And It Costs</strong></h6></label><br>
<strong>ZWL$ </strong><input type="text" name="amount" class="form-control text-center" value="{{ $amount }}" readonly><br><br>
<label for=""><h6><strong>Enter Phone Number To Create Order</strong></h6></label>
<input type="text" class="form-control text-center" name="number" placeholder="Phone Number Here">
@error('number')
          {{ $message }}
     @enderror
     <br>
               <input type="submit" class="form-control btn btn-primary"  value="Create Order" onclick="emptyCart()">

</form>
               </div>
          </div>
          </div>
     </div>
    

</center>

 <script >
     const emptyCart = () => {
  cart.items = {};
      localStorage.removeItem("cart");
      cart.list();
}
 </script></x-client>