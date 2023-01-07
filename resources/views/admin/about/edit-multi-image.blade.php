@extends('admin.layouts.master')
@section('title')
    Edit Multiple Image
@endsection
@section('content')
   <div class="row py-3">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="float-start">Edit Multiple Image</h3>
                <a href="{{ route('about-images.index') }}" class="btn btn-primary float-end" title="Edit About">Manage</a>
            </div>
            <div class="card-body">
                <form action="{{ route('about-images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <label for="" class="form-label">Select Image</label>
                    <div>
                        <input type="file" name="images[]" class="form-control">
                        <img src="{{ asset($image->image) }}" style="height: 80px; width:80px;" alt="">
                    </div>
                    <div class="mt-3">
                        <input type="submit" value="Update" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>
   </div>
@endsection