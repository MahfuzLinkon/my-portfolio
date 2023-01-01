@extends('admin.layouts.master')
@section('title')
    Change password
@endsection
@section('content')
<div class="row mt-3">
    <div class="col-xl-8 mx-auto">
        <!-- Personal-Information -->
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Change your password</h4>
                <hr/>

                <form action="{{ route('admin.password-update') }}" method="POST" >
                    @csrf
                    <div class="row mt-3">
                        <label for="" class="col-md-3">Old Password</label>
                        <div class="col-md-9">
                            <input type="password" name="old_password" class="form-control">
                            <div class="mt-2">
                                @error('old_password')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="" class="col-md-3">New Password</label>
                        <div class="col-md-9">
                            <input type="password" name="password" class="form-control">
                            <div class="mt-2">
                                @error('password')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="" class="col-md-3">Confirm Password</label>
                        <div class="col-md-9">
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <label for="" class="col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!-- Personal-Information -->
    </div> <!-- end col-->
</div>
<!-- end row -->
@endsection