@extends('admin.layouts.master')
@section('title')
    Profile
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <h4 class="page-title">Profile</h4>
            </div>
        </div>
    </div>
    <!-- end page title --> 


    <div class="row">
        <div class="col-sm-12">
            <!-- Profile -->
            <div class="card bg-primary">
                <div class="card-body profile-user-box">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="avatar-lg">
                                        <img src="{{ asset($profileInfos->image == null ? 'uploads/images/no-image.jpg' : $profileInfos->image) }}" alt="" class="img-thumbnail">
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <h4 class="mt-1 mb-1 text-white">{{ $profileInfos->name }}</h4>
                                        <p class="font-13 text-white-50"> 
                                            @if ($profileInfos->role_type == 1)
                                                Admin
                                            @elseif ($profileInfos->role_type == 2)
                                                Modarator
                                            @elseif ($profileInfos->role_type == 3)
                                                User
                                            @endif
                                        </p>

                                        {{-- <ul class="mb-0 list-inline text-light">
                                            <li class="list-inline-item me-3">
                                                <h5 class="mb-1 text-white">$ 25,184</h5>
                                                <p class="mb-0 font-13 text-white-50">Total Revenue</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-1 text-white">5482</h5>
                                                <p class="mb-0 font-13 text-white-50">Number of Orders</p>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-sm-4">
                            <div class="text-center mt-sm-0 mt-3 text-sm-end">
                                <a href="{{ route('admin.profile-edit', ['id'=>$profileInfos->id ]) }}" type="button" class="btn btn-light">
                                    <i class="mdi mdi-account-edit me-1"></i> Update Profile
                                </a>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row -->

                </div> <!-- end card-body/ profile-user-box-->
            </div><!--end profile/ card -->
        </div> <!-- end col-->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-xl-12">
            <!-- Personal-Information -->
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-3">Information</h4>
                    <p class="text-muted font-13">
                        {{ $profileInfos->description == null ? 'Update your profile information.' : $profileInfos->description }}
                    </p>

                    <hr/>

                    <div class="text-start">
                        <p class="text-muted"><strong>Full Name :</strong> <span class="ms-2">{{ $profileInfos->name }}</span></p>

                        <p class="text-muted"><strong>Mobile :</strong><span class="ms-2">{{ $profileInfos->phone }}</span></p>

                        <p class="text-muted"><strong>Email :</strong> <span class="ms-2">{{ $profileInfos->email }}</span></p>

                        {{-- <p class="text-muted"><strong>Location :</strong> <span class="ms-2">USA</span></p> --}}

                    </div>
                </div>
            </div>
            <!-- Personal-Information -->

        </div> <!-- end col-->
    </div>
    <!-- end row -->
@endsection