@extends('admin.layouts.master')
@section('title')
    Project Edit Page
@endsection

@section('content')
    <div class="row mt-3">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Project  Edit</h3>
                    <a href="{{ route('projects.index') }}" class="btn btn-primary float-end">Manage</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <label for="" class="col-md-3">Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" value="{{ $project->name }}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Category Name</label>
                            <div class="col-md-9">
                                <select name="category_id" id="" class="form-control">
                                   @foreach ($categories as $category)
                                   <option value="{{ $category->id }}" {{ $project->category_id ==  $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                                   @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Locaiton</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $project->location }}" class="form-control" name="location">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Project Link</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $project->link }}" class="form-control" name="link">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Finish Date</label>
                            <div class="col-md-9">
                                <input type="date" value="{{ $project->finish_date }}" class="form-control" name="finish_date">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="image">
                                <img src="{{ asset($project->image) }}" style="height: 80px; width:80px" alt="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Description</label>
                            <div class="col-md-9">
                                <textarea name="description" id="editor1"  class="form-control" cols="30" rows="3">{!! $project->description !!}</textarea>
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="Update Project">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection