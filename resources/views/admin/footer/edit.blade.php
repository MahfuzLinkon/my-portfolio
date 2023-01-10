@extends('admin.layouts.master')
@section('title')
    Update Footer
@endsection
@section('content')
    <div class="row mt-3">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="float-start">Update Footer</h4>
                    <a href="{{ route('footers.edit', $footer->id) }}" class="btn btn-primary float-end">Update</a>
                </div>
                <div class="card-body">

                    <form action="{{ route('footers.update', $footer->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <label for="" class="col-md-3">Phone</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $footer->phone }}" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Email</label>
                            <div class="col-md-9">
                                <input type="email" value="{{ $footer->email }}" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Facebook</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $footer->facebook }}" name="facebook" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Twitter</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $footer->twitter }}" name="twitter" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Linkedin</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $footer->linkedin }}" name="linkedin" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">GitHub</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $footer->github }}" name="github" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Instagram</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $footer->instagram }}" name="instagram" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" value="Update" class="btn btn-primary">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection