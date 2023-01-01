<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function adminPasswordChange(){
        return view('admin.profile.change-pass');
    }

    public function adminPasswordUpdate(Request $request){
        // $request->validate()
        $this->validate($request,[
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        // return Auth::id();
        $userPass = Auth::user()->password;
        // return $user->password;
        if(Hash::check($request->old_password, $userPass )){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('admin.profile')->with('success', 'Password Updated Successfully');
        }else{
            return redirect()->back()->with('error', 'Old password does not match');
        }
    }







}
