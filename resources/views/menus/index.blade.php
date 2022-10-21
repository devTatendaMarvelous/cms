<x-dash>
     <!-- Zero configuration table -->
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <h2 class="card-title">Available Food And Beverage Items</h2>
                    </div>
                </div>
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                       
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Created By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $menuItems as $item )
                                     <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>${{ $item->price }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->createdBy }}</td>
                                    <td>
                                          <a class="success p-0" href="/menus/{{ $item->id }}/edit" data-original-title="" title="Edit">
                                            <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                        </a>
                                        
                                        <a class="danger p-0" href="/menus/{{ $item->id }}/delete" data-original-title="" title="Delete">
                                            <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                                        </a>
                                    </td>
                                </tr>

                                @empty
                                     
                                @endforelse



                            </tbody>
                            <tfoot>
                                <tr>
                                     <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Created By</th>
                                    <th>Action</th>
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

</x-dash>