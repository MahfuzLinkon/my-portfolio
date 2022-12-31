@extends('admin.layouts.master')
@section('title')
    Profile Update
@endsection
@section('content')
<div class="row mt-3">
    <div class="col-xl-10 mx-auto">
        <!-- Personal-Information -->
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Update Your Information</h4>
                <hr/>

                <form action="{{ route('admin.profile-update', ['id'=> $profileInfo->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-3">
                        <label for="" class="col-md-3">Name</label>
                        <div class="col-md-9">
                            <input type="text" name="name" value="{{ $profileInfo->name }}" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="" class="col-md-3">Email</label>
                        <div class="col-md-9">
                            <input type="email" name="email" value="{{ $profileInfo->email }}" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="" class="col-md-3">Phone Number</label>
                        <div class="col-md-9">
                            <input type="text" name="phone" value="{{ $profileInfo->phone }}" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="" class="col-md-3">Description</label>
                        <div class="col-md-9">
                            <textarea name="description" id="" cols="30" rows="3" class="form-control">{!! $profileInfo->description !!}</textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="" class="col-md-3">Image</label>
                        <div class="col-md-9">
                            <input type="file" name="image" class="form-control">
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