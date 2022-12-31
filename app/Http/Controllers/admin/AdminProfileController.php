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
        $profileInfo = User::find($userId);
        return view('admin.profile.index', [
            'profileInfo' => $profileInfo,
        ]);
    }










}
