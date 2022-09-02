<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function auth(Request $request)
    {
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:6',
            'address' => 'required|min:6',
            'telephone' => 'required|min:6',
            'password' => 'required|required_with:c_password|same:c_password|min:6',
            'c_password' => 'min:6'
        ]);
        User::create($request->only('name', 'address', 'telephone'), [
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('login');
    }
    public function getRegister()
    {
        return view('register');
    }
}
