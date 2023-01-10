@extends('admin.layouts.master')
@section('title')
    Manage Message
@endsection
@section('content')
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="">Manage Message</h4>
                </div>
                <div class="card-body">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                            <tr class="{{ $message->status == 1 ? 'bg-info' : 'bg-white' }} text-black">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->phone }}</td>
                                <td>{{ $message->subject }}</td>
                                <td>{{ $message->message }}</td>
                                <td>
                                    <a href="{{ route('read.message', ['id'=>$message->id]) }}" title="{{ $message->status == 1 ? 'Mark as read' : 'Mark as unread' }}" class="btn btn-success"><i class="uil-{{ $message->status == 1 ? 'envelope' : 'envelope-check' }}"></i></a>
                                    <a href="{{ route('delete.message', ['id'=>$message->id]) }}" class="btn btn-danger"><i class="uil-trash"></i></a>
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