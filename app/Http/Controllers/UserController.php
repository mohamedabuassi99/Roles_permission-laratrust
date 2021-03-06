<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //specify
    public function __construct()
    {

        $this->middleware(['role:super_admin']);// no one can access . just admin
    }


    public function index()
    {

        $users = User::all();
        return view('users.index',compact('users'));
    }
    public function edit(User $user){

        return view('users.edit',compact('user'));
    }

    public function update(Request $request,User $user)
    {
        $request->validate([
            'name'=>'required',
            'roles'=>'required|array|min:1'
        ]);

    $requestData = $request->except('email');
    $user->update($requestData);
    $user->syncRoles($request->roles);
    return redirect()->route('users.index');
    }
}
