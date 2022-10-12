<center><h2><strong>Name: </strong>{{ $item->name }}</h2></center>
<hr>
<center><h4><strong>Description: </strong>{{ $item->description }}</h4></center>
<hr>
<center><h4><strong>Price: </strong>{{ $item->price }}</h4></center>
<hr>
<center><h4><strong>Availability: </strong>{{ $item->status }}</h4></center>
<hr>
<center><h4>Buy {{ $item->name }}</h4></center>

<center><form action="/menus/{{ $item->id }}/buy">
@csrf

<label for="">Quantity</label>
<input type="number" name="quantity" value="1">
@error('quantity')
          {{ $message }}
     @enderror
<label for="">Ecocash Number</label>
<input type="text" name="number" placeholder="Ecocash Number Here">
@error('number')
          {{ $message }}
     @enderror
<input type="submit" value="Buy">

</form></center>
