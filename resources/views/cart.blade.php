<x-app>
     

    <div class="mt-5"></div>

   <div class="containe r">
     <div id="cart-wrap " style="width:100%; padding:5%;">
      <!-- (B) PRODUCTS LIST -->

      <div class="  card"  style="max-width:65%; float:left;">
          <div id="cart-products" class="row ">
         

      </div>

      </div>
     

         

          <!-- (C) CURRENT CART -->
       <form action="/orders/create" method="POST"   style="width:20%; min-width:500px; float:right;">
                @csrf
                
            <div id="cart-items" class="row">
                <input type="text" class="order">
            </div>
      </form>


       
   </div>
</x-app>
