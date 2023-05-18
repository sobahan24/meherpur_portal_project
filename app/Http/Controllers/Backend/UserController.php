<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
    public function viewUser($id)
    {
        $users = User::find($id);
        return view('admin.users.view', compact('users'));
    }
    public function editUser($id)
    {
        $users = User::find($id);
        return view('admin.users.edit', compact('users'));
    }
    public function updateUser(Request $request, $id)
    {
        $users = User::find($id);
        $users->role_as = $request->input('role_as');
        $users->update();
        return redirect('/users')->with('status', "User Updated Successfully");
    }

    public function destroyUser($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/users')->with('status', "User Deleted Successfully");
    }

}
