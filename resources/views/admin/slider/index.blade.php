@extends('admin.layouts.master')
@section('title')
    Manage Slider
@endsection

@section('content')
   <div class="row py-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="float-start">Manage Slider</h3>
                <a href="{{ route('sliders.create') }}" class="btn btn-primary float-end">Create</a>
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Created By</th>
                            <th>Short Description</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $slider->title }}</td>
                                <td>{{ $slider->user->name }}</td>
                                <td>{{ $slider->short_description }}</td>
                                <td>{{ $slider->status == 1 ? 'Publishes' : 'Unpublished' }}</td>
                                <td>
                                    <img src="{{ asset($slider->image) }}" alt="" style="height: 80px; width:80x;">
                                </td>
                                <td>
                                    <a href="" class="btn btn-success"><i class="uil-arrow-up"></i></a>
                                    <a href="" class="btn btn-info"><i class="uil-edit"></i></a>
                                    <a href="" class="btn btn-danger"><i class="uil-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   </div>
@endsection