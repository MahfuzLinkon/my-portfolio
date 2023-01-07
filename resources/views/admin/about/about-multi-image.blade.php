@extends('admin.layouts.master')
@section('title')
    Manage Multiple Image
@endsection
@section('content')
   <div class="row py-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="float-start">Manage Multiple Image</h3>
                <a href="{{ route('about-images.create') }}" class="btn btn-primary float-end" title="Edit About">Create</a>
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($images as $image)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $image->status == 1 ? 'Published' : 'Unpublished' }}</td>
                            <td>
                                <img src="{{ asset($image->image) }}" style="height: 80px; width:80px;" alt="">
                            </td>
                            <td>
                                <a href="{{ route('multi-image.status', ['id' => $image->id]) }}" class="btn btn-{{ $image->status == 1 ? 'warning' : 'success' }}" title="Change Status"><i class="uil-arrow-{{ $image->status == 1 ? 'down' : 'up' }}"></i></a>
                                <a href="{{ route('about-images.edit', $image->id) }}" class="btn btn-primary"><i class="uil-edit"></i></a>
                                <form method="post" onsubmit="return confirm('Are you sure want to delete this?')" style="display: inline-block" action="{{ route('about-images.destroy', $image->id) }}">
                                    @csrf 
                                    @method('delete')
                                    <button class="btn btn-danger"><i class="uil-trash"></i></button>
                                </form>
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