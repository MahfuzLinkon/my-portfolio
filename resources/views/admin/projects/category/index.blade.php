@extends('admin.layouts.master')
@section('title')
    Project Category Manage Page
@endsection

@section('content')
    <div class="row mt-3">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Project Category</h3>
                    <a href="{{ route('project-categories.create') }}" class="btn btn-primary float-end">Create</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('project-categories.edit', $category->id) }}" class="btn btn-info"><i class="uil-edit"></i></a>
                                    <form method="post" onsubmit="return confirm('Are you sure want to delete this?')" style="display: inline-block" action="{{ route('project-categories.destroy', $category->id) }}">
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