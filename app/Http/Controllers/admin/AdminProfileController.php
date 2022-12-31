<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function adminProfile(){
        $userId = Auth::user()->id;
        $profileInfos = User::find($userId);
        return view('admin.profile.index', [
            'profileInfos' => $profileInfos,
        ]);
    }

    public function adminProfileEdit($id){
        return view('admin.profile.edit', [
            'profileInfo' => User::find($id),
        ]);
    }

    public function adminProfileUpdate(Request $request, $id){
        User::updateAdminProfile($request, $id);
        return redirect()->route('admin.profile')->with('success', 'Profile updated Successfully');
    }









}
