@extends('admin.layouts.master')
@section('title')
    Manage About
@endsection
@section('content')
   <div class="row py-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="float-start">Manage About</h3>
                <a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-primary float-end" title="Edit About"><i class="uil-edit"></i></a>
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Long Title</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{ $about->title }}</td>
                                <td>{{ $about->long_title }}</td>
                                <td>{{ $about->short_description }}</td>
                                <td>{!! $about->long_description !!}</td>
                                <td>
                                    <img src="{{ asset($about->image) }}" alt="" style="height: 80px; width:80x;">
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   </div>
@endsection