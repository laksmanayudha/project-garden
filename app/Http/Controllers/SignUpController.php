<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SignUpController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('signup', [ 'roles' => $roles ]);
    }

    public function signup(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'role_id' => ['required', 'exists:roles,id'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $credentials['password'] = bcrypt($credentials['password']);

        User::create($credentials);

        Alert::success('Success!', 'Success to create your account.');
        
        return redirect('/login');
    }
}
