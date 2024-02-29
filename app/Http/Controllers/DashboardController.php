<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{

    public function index(){
        return view('backend.profile');
    }

public function profile_update(Request $request){
   $request->validate([
    'oldpass' => 'required',
    'password' =>'required|confirmed',
    'password_confirmation' =>'required ',
   ]);

   if(Hash::check($request->oldpass, Auth::user()->password)){
        Auth::user()->update([
            'password' =>  Hash::make($request->password),
        ]);
        return redirect(route('home'))->with('changed', 'Password Changed Successfully');
   }
   else{
        return back()->with('notmatch' , 'Password not match!');
   }
}





}
