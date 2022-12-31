@extends('auth.layouts.master')

@section('title')
    Sign up
@endsection

@section('content')
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-lg-5">
                <div class="card">
                    <!-- Logo-->
                    <div class="card-header pt-3 pb-3 text-center bg-primary">
                        <a href="index.html">
                            {{-- <span><img src="assets/images/logo.png" alt="" height="18"></span> --}}
                            <a href="{{ route('front.home') }}" class="text-black fw-bold display-6"><i>Linkon's</i><span class="text-white">Yard</span></a>
                        </a>
                    </div>

                    <div class="card-body p-3">
                        
                        <div class="text-center w-75 m-auto mb-3">
                            <h4 class="text-dark-50 text-center mt-0 fw-bold">Sign Up, here</h4>
                        </div>

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="fullname" class="form-label col-lg-3">Full Name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="name" id="fullname" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="emailaddress" class="form-label col-lg-3">Email address</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="email" name="email" id="emailaddress" required placeholder="Enter your email">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="phone" class="form-label col-lg-3">Phone Number</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" name="phone" id="phone" placeholder="Enter your phone number" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="form-label col-lg-3">Password</label>
                                <div class="col-lg-9">
                                    <div class="input-group input-group-merge">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password_confirmation" class="form-label col-lg-3">Confirm password</label>
                                <div class="col-lg-9">
                                    <div class="input-group input-group-merge">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Enter your password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="form-label col-lg-3"></label>
                                <div class="col-lg-9">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                        <label class="form-check-label" for="checkbox-signup">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 text-center">
                                <button class="btn btn-primary" type="submit"> Sign Up </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Already have account? <a href="{{ route('login') }}" class="text-muted ms-1"><b>Log In</b></a></p>
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
@endsection