@extends('admin.layouts.master')
@section('title')
    Create Multiple Image
@endsection
@section('content')
   <div class="row py-3">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="float-start">Create Multiple Image</h3>
                <a href="{{ route('about-images.index') }}" class="btn btn-primary float-end" title="Edit About">Manage</a>
            </div>
            <div class="card-body">
                <form action="{{ route('about-images.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="" class="form-label">Select Image</label>
                    <div>
                        <input type="file" name="images[]" multiple class="form-control">
                    </div>
                    <div class="mt-3">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
   </div>
@endsection