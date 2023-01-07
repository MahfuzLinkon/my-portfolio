@extends('admin.layouts.master')
@section('title')
    Project Category Edit Page
@endsection

@section('content')
    <div class="row mt-3">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Project Category Edit</h3>
                    <a href="{{ route('project-categories.index') }}" class="btn btn-primary float-end">Manage</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('project-categories.update', $category->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <label for="" class="col-md-3">Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <label for=""><input type="radio" value="1" {{ $category->status == 1 ? 'checked' : '' }} name="status"> Published</label>
                                <label for=""><input type="radio" value="0" class="ms-2" {{ $category->status == 0 ? 'checked' : '' }} name="status"> Unpublished</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="Update Category">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection