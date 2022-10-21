<x-dash>
            
<!-- Input Validation start -->
<section class="input-validation">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Menu</h4>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        
                        
                    <form action="/menus/store" method="POST"class="form-horizontal" novalidate enctype="multipart/form-data">
                              @csrf
                            <div class="row">
                                   {{-- <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <h5>Meal Photo <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="photo" class="form-control" >
                                        </div>
                                      
                                        
                                    </div> --}}
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <h5>Name <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required">
                                        </div>
                                        @error('name')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>
                                   <input type="hidden" name="createdBy" value="{{ auth::user()->name }}" readonly>
                                   
                                    <div class="form-group">
                                        <h5>Price<span class="required">*</span></h5>
                                        <div class="controls">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="number" name="price"  class="form-control" required data-validation-required-message="This field is required">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                               
                                            </div>
                                                @error('price')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Description <span class="required">*</span></h5>
                                        <div class="controls">
                                            <textarea name="description" id="textarea" class="form-control" required placeholder="Description"></textarea>
                                              @error('description')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>
                                        <button type="reset" class="btn btn-danger">Reset <i class="fa fa-refresh position-right"></i></button>
                                    </div>
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




 