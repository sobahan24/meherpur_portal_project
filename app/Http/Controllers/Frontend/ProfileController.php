<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function viewProfile($id)
    {
        $users = User::find($id);
        if($users->id == Auth::user()->id)
        {
            return view('frontend.user_profile.view', compact('users'));
        }else{
            return redirect('/')->with('status', "You are not Authentic User");
        }
    }

    public function updateProfile(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->lname = $request->input('lname');
        $users->email = $request->input('email');
        $users->phone = $request->input('phone');
        $users->address1 = $request->input('address1');
        $users->address2 = $request->input('address2');
        $users->city = $request->input('city');
        $users->state = $request->input('state');
        $users->country = $request->input('country');
        $users->zip = $request->input('zip');
        $users->update();
        return redirect('/')->with('status', "Profile Updated Successfully");
    }
}
