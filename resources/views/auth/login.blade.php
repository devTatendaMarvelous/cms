<x-app>

<section id="login">
    <div class="container-fluid">
        <div class="row full-height-vh">
            <div class="col-12 d-flex align-items-center justify-content-center gradient-aqua-marine">
                <div class="card px-4 py-2 box-shadow-2 width-400">
                    <div class="card-header text-center">
                        <img src="../app-assets/img/logos/logo-color-big.png" alt="company-logo" class="mb-3" width="80">
                        <h4 class="text-uppercase text-bold-400 grey darken-1">Login</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <form method="POST" action="{{ route('login') }}">
                                     @csrf
                                <div class="form-group">
                                    <div class="col-md-12">
                                        {{-- <input type="email" class="form-control" name="inputEmail"  required > --}}
                                         <input id="email" type="email" id="inputEmail"class="form-control @error('email') is-invalid @enderror  form-control-lg" name="email" value="{{ old('email') }}"placeholder="Email Address"  required email autocomplete="email" >

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        {{-- <input type="password" class="form-control " name="inputPass"  required> --}}

                                        <input  type="password"  id="inputPass"class="form-control @error('password') is-invalid @enderror form-control-lg" name="password" required autocomplete="current-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>

                                

                                <div class="form-group">
                                    <div class="text-center col-md-12">
                                        <button type="submit" class="btn btn-danger px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer grey darken-1">
                        
                        <div class="text-center">Don't have an account? <a href="/register"><b>Signup</b></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




</x-app>