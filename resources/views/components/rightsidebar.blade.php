 <aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block"><a class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
      <div class="side-nav notification-sidebar-content">
        <div class="row">
          <div class="col-12 mt-1">
               <h3><strong>Account Settings</strong></h3>
            <ul class="nav nav-tabs">
              <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="base-tab1" href="#activity-tab" aria-expanded="true" class="nav-link active"><strong>Account Details</strong></a></li>
              <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="base-tab2" href="#settings-tab" aria-expanded="false" class="nav-link"><strong>Security</strong></a></li>
            </ul>
            <div class="tab-content">
              <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1" class="tab-pane active">
                <div id="activity-timeline" class="col-12 timeline-left">
                  <h6 class="mt-1 mb-3 text-bold-400">Edit Your Details</h6>
                  <div class="timeline">
                    <form action="/profile/{{ auth::user()->id }}/edit" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="input-group input-lg">
                                <label for="">Change Profile Picture</label>
                                   <input id="File" type="file" class="form-control" name="photo" placeholder="Password" >
                                   
                              </div>
                              <div class="input-group input-lg">
                                   <input id="email" type="name" placeholder="Email" value="{{ Auth::user()->name }}"class="form-control  @error('email') is-invalid @enderror" name="name" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                   
                              </div>
                               <div class="input-group input-lg">
                                   <input id="email" type="email" placeholder="Email" value="{{ Auth::user()->email }}"class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                   
                              </div>

                              <div class="footer text-center">
                                   <input type="submit" value="Update"  class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">
                              </div>
                         </form>  
                  </div>
                </div>
              </div>
              <div id="settings-tab" aria-labelledby="base-tab2" class="tab-pane">
                <div id="settings" class="col-12">
                  <h6 class="mt-1 mb-3 text-bold-400">Change Password</h6>
                         <div class="slim_scroll">
                <div class="card">
                    <h6>Change Password</h6>
                         <form action="/profile/{{ auth::user()->id }}/password " method="POST" enctype="multipart/form-data">
                              @csrf
                              
                              <div class="input-group input-lg">
                                   <input id="email" type="password" placeholder="Password" value=""class="form-control  @error('email') is-invalid @enderror" name="password" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                   
                              </div>
                               <div class="input-group input-lg">
                                   <input id="email" type="password" placeholder="Confirm Password" value=""class="form-control  @error('email') is-invalid @enderror" name="password2" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                   
                              </div>

                              <div class="footer text-center">
                                   <input type="submit" value="Update"  class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">
                              </div>
                         </form>        
                </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </aside>