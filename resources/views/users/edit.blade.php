<x-dash>
<!-- Main Content -->
<section class="content agent">
  
    <div class="container-fluid ">        
        
        <div class="row clearfix">
            <div class="col-lg-10 col-md-12">
                <div class="card p-4">
                    <div class="header">
                         <h2>Edit {{ $user->name }}
               
                </h2>
                   
                    </div>
                    <div class="body">
                        
                          
                            <form action="/users/{{ $user->id }}/update" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="text" name="name"class="form-control" value="{{ $user->name }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        
                                            <select name="role" class="form-control show-tick">
                                                <option value="{{ $user->role }}">{{ $user->role }}</option>
                                                <option value="SuperAdmin">SuperAdmin</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Chef">Chef</option>
                                                <option value="Teller">Teller</option>
                                            </select>
                                        
                                    </div>
                                  
                                    <div class="col-sm-12">
                                        <button type="submit" class="col-sm-12 btn btn-primary btn-round">Submit</button>
                                       
                                    </div>
                                </div>   
                            </form>
                                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
</x-dash>