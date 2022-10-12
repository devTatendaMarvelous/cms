<!DOCTYPE html>
<html>
  <head>
    <title>Simple JS Cart</title>

    <!-- (A) CSS + JS -->
    <link rel="stylesheet" href="{{ asset('cart.css') }}">

    <script src="cart.js"></script>
  </head>
  <body>
    <div id="cart-wrap">
      <!-- (B) PRODUCTS LIST -->
    
       <div id="cart-products">
         

      </div>
     

      <!-- (C) CURRENT CART -->
       <form action="/orders/create" method="POST" style="min-height: 500px; min-width:500px">
        @csrf
        
      <div id="cart-items">
        <input type="text" class="order">
      </div>
      </form>
    </div>
  </body>
</html>
