<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>orders</title>
</head>
<body>
   <center>

     <form action="/orders/" method="get">
         
          <label for=""><h1>Search for an order</h1></label>
          <input type="text" name="search" placeholder="Enter Order Number ">
          
          <input type="submit" value="Search">
          <br><hr><br>
     </form>
       <table>
          <thead>
               <tr>
                    <td>Name</td>
                    <td>Order Number</td>
                    <td>Ecocash Number</td>
                    <td>Food</td>
                    <td>Cost</td>
                    <td>Status</td>
                    <td>Action</td>

               </tr>
          </thead>
          <tbody>
               @forelse ($orders as $order )
                    <tr>
                         <td>{{ $order->user }}</td>
                          <td>{{ $order->refno }}</td>
                           <td>{{ $order->number }}</td>
                            <td>{{ $order->order }}</td>
                             <td>{{ $order->amount }}</td>
                              <td>{{ $order->status }}</td>
                              <td><a href="/orders/{{ $order->id }}/edit">Edit</a></td>
                    </tr>
               @empty
                     <h4>No Data Found</h4>
                     
               @endforelse
          </tbody>
     </table>
   </center>

   <script>
  
     //    setTimeout(() => {
     //        location.reload();
     //    }, 3000);
        
</script>
</body>
</html>