<x-client>
<!-- Main Content -->
<section class="content agent">
  
    <div class="container-fluid ">        
        
        <div class="row clearfix">
            <div class="col-lg-10 col-md-12">
                <div class="card p-4">
                    <div class="header text-center">
                         <h2>Send Us Feedback </h2>
                   
                    </div>
                    <div class="body">
                        
                          
                            <form action="/feedbacks/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            
                                            <textarea name="feedback" id=""  class="form-control col-12" cols="30" rows="10" placeholder="Feedback"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Attach File <em>(optional)</em></label>
                                            <input type="file" name="file" class="form-control col-12" placeholder="Email">
                                        </div>
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
</x-client>