<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function view($id)
    {
        $users = User::find($id);
        return view('frontend.user_profile.view', compact('users'));
    }
    // public function editUser($id)
    // {
    //     $users = User::find($id);
    //     return view('admin.users.edit', compact('users'));
    // }
    // public function updateUser(Request $request, $id)
    // {
    //     $users = User::find($id);
    //     $users->role_as = $request->input('role_as');
    //     // $users->name = $request->input('name');
    //     // $users->lname = $request->input('lname');
    //     // $users->email = $request->input('email');
    //     // $users->phone = $request->input('phone');
    //     // $users->address1 = $request->input('address1');
    //     // $users->address2 = $request->input('address2');
    //     // $users->city = $request->input('city');
    //     // $users->state = $request->input('state');
    //     // $users->country = $request->input('country');
    //     // $users->zip = $request->input('zip');
    //     $users->update();
    //     return redirect('/users')->with('status', "User Updated Successfully");
    // }
}
