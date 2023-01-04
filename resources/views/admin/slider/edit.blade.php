@extends('admin.layouts.master')
@section('title')
    Edit Slider
@endsection

@section('content')
   <div class="row py-3">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="float-start">Edit Slider</h3>
                <a href="{{ route('sliders.index') }}" class="btn btn-primary float-end">Manage</a>
            </div>
            <div class="card-body">
                <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <label for="title" class="col-md-3">Title</label>
                        <div class="col-md-9">
                            <input type="text" name="title" value="{{ $slider->title }}" id="title" class="form-control">
                            <div class="mt-2">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="link" class="col-md-3">Link</label>
                        <div class="col-md-9">
                            <input type="text" name="link" value="{{ $slider->link }}" id="link" class="form-control">
                            <div class="mt-2">
                                @error('link')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="image" class="col-md-3">Image</label>
                        <div class="col-md-9">
                            <input type="file" name="image" id="image" class="form-control">
                            <img src="{{ asset($slider->image) }}" alt="" style="height: 80px; width:80x;">
                            <div class="mt-2">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="short_description" class="col-md-3">Short Description</label>
                        <div class="col-md-9">
                            <textarea name="short_description" id="short_description" cols="30" rows="3" class="form-control">{{ $slider->short_description }}</textarea>
                            <div class="mt-2">
                                @error('short_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="" class="col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-success" value="Update Slider">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   </div>
@endsection