@extends('admin.layouts.master')
@section('title')
    Project Manage Page
@endsection

@section('content')
    <div class="row mt-3">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Project Manage</h3>
                    <a href="{{ route('projects.create') }}" class="btn btn-primary float-end">Create</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Location</th>
                                <th>Link</th>
                                <th>Finish Date</th>
                                <th>Description</th>
                                <th>image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->category->name }}</td>
                                <td>{{ $project->location }}</td>
                                <td>{{ $project->link }}</td>
                                <td>{{ $project->finish_date }}</td>
                                <td width="20%">{!! Str::words($project->description, 20, '...') !!}</td>
                                <td>
                                    <img src="{{ asset($project->image) }}" style="height: 80px; width:80px" alt="">
                                </td>
                                <td>{{ $project->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-info"><i class="uil-edit"></i></a>
                                    <form method="post" onsubmit="return confirm('Are you sure want to delete this?')" style="display: inline-block" action="{{ route('projects.destroy', $project->id) }}">
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