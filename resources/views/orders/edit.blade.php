<center>
     <form action="/orders/{{ $order->id }}/update" method="POST">
     @csrf
     <select name="status" id="">
          <option value="{{ $order->status }}">{{ $order->status }}</option>
           <option value="Paid">Paid</option>
           <option value="Collected">Collected</option>
           <option value="Expired">Expired</option>
     </select>
     <input type="submit" value="Update">
</form>
</center>