<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show()
    {
        //redirect if user has already logged
        //
        if (Auth::check()) {
            return redirect("/home");
        }
        $roles = Role::all();
        return view("auth.register")->with("roles", $roles);
    }
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        return redirect("/login")->with(
            "success",
            "Your account has been created succesfully"
        );
    }
}
