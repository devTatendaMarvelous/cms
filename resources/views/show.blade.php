<center><h2><strong>You Ordered: </strong></h2>
@forelse ($order as $item)
     {{ $item }} <br> <br>
@empty
     
@endforelse


</center>
<hr>
<center><form action="/orders/pay" method="POST">
@csrf
<input type="hidden" name="order" value="{{ $items }}">
<h2><strong>And It Costs</strong></h2>
<strong>ZWL$ </strong><input type="text" name="amount" value="{{ $amount }}" readonly><br><br>
<label for=""><h2><strong>Enter Ecocash Number To Buy</strong></h2></label>
<input type="text" name="number" placeholder="Ecocash Number Here">
@error('number')
          {{ $message }}
     @enderror
<input type="submit" value="Buy">

</form></center>
