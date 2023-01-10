@extends('admin.layouts.master')
@section('title')
    Manage Footer
@endsection
@section('content')
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="float-start">Manage Footer</h4>
                    <a href="{{ route('footers.edit', $footer->id) }}" class="btn btn-primary float-end">Update</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>Instagram</th>
                                <th>Linkedin</th>
                                <th>GitHub</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $footer->phone }}</td>
                                <td>{{ $footer->email }}</td>
                                <td>{{ $footer->facebook }}</td>
                                <td>{{ $footer->twitter }}</td>
                                <td>{{ $footer->instagram }}</td>
                                <td>{{ $footer->linkedin }}</td>
                                <td>{{ $footer->github }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection