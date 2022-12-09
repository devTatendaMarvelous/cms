<x-client>
     <!-- Zero configuration table -->
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <h2 class="card-title">Your Orders</h2>
                    </div>
                </div>
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                       
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                     <td>Name</td>
                                    <td>Order Number</td>
                                    <td>Ecocash Number</td>
                                    <td>Food</td>
                                    <td>Cost</td>
                                    <td>Status</td>
                                    <td>Date Created</td>
                                </tr>
                            </thead>
                            <tbody>
                                 @forelse ($orders as $order )
                    <tr>
                         <td>{{ $order->name }}</td>
                          <td>{{ $order->refno }}</td>
                           <td>{{ $order->number }}</td>
                            <td>{{ $order->order }}</td>
                             <td>{{ $order->amount }}</td>
                              <td>{{ $order->status }}</td>
                              <td>
                                 {{ $order->created_at }}
                              </td>
                              
                    </tr>
                                </tr>

                                @empty
                                     
                                @endforelse



                            </tbody>
                            <tfoot>
                                <tr>
                                     <td>Name</td>
                                    <td>Order Number</td>
                                    <td>Ecocash Number</td>
                                    <td>Food</td>
                                    <td>Cost</td>
                                    <td>Status</td>
                                    <td>Date Created</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Zero configuration table -->

            </div>
          </div>
        </div>

        

      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

</x-client>