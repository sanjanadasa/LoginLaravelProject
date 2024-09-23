<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            
        ]);
        $profilePicture = null;

        if (request()->hasFile('profile_picture')) {
            // Store the uploaded file in the 'uploads' directory inside 'public'
            $profilePicture = request()->file('profile_picture')->store('image', 'public');
        }

        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' =>$profilePicture, // Save the profile picture path
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showHomeForm()
    {
        return view('home');
    }
    public function usermenu()
    {

         // Fetch users from the database
         $users = User::all(); // or use paginate() for better handling of large data sets
        
         // Pass the users to the view
         return view('usermenu', ['users' => $users]);
    }
    public function getAllUsers()
    {
        $users = User::select('id', 'name', 'email','image')->get();
         return response()->json($users);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
