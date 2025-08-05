<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Car;

use App\Models\Organization;



class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
    }

    


public function showRegisterForm()
{
    return view('register');
}

public function register(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed'
    ]);

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();

    return redirect('/login')->with('success', 'Registration successful. Please login.');
}




public function organizationCars(Request $request)
{
    // Optional: Only show cars added by this organization, if you track user_id
    // $cars = Car::where('user_id', Auth::id())->get();

    $cars = Car::orderBy('created_at', 'desc')->get(); // all cars

    return view('organization', compact('cars'));
}



public function showOrganizations()
{
    $organizations = Organization::all();
    return view('licensed_organization', compact('organizations'));
}




}
