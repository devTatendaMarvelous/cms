<x-dash>
            
<!-- Input Validation start -->
<section class="input-validation">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit {{ $item->name }}</h4>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        
                        
                    <form action="/menus/{{ $item->id }}/update" method="POST"class="form-horizontal" novalidate>
                              @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <h5>Name <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" value="{{ $item->name }}" class="form-control" required data-validation-required-message="This field is required">
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
                                                <input type="number" name="price" value="{{ $item->price }}" class="form-control" required data-validation-required-message="This field is required">
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
                                            <textarea name="description" id="textarea" rows="7" class="form-control"value="" required > {{ $item->description }}</textarea>
                                              @error('description')
                                             <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>
                                        <a href="/menus" type="reset" class="btn btn-danger">Cancel     </a>
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




 