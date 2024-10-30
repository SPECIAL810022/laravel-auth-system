<?php

namespace App\Http\Controllers;

use App\Models\Mouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistration()
    {
        return view('registration');
    }

    public function showLogin()
    {
        return view('login');
    }
   

    public function store(Request $request)
{
    // Validate the registration data, including the image
    $request->validate([
        'name' => 'required|string|max:255',
        'number' => 'required|string|max:20',
        'email' => 'required|email|unique:mice,email',
        'age' => 'required|integer|min:0',
        'password' => 'required|string|min:2',
        'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048', // Image validation
    ]);

    // Handle file upload if an image is provided
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
    }

    // Store the new user, hashing the password and saving the image path if available
    Mouse::create([
        'name' => $request->name,
        'number' => $request->number,
        'email' => $request->email,
        'age' => $request->age,
        'password' => Hash::make($request->password),
        'image' => $imagePath, // Store the image path in the database
    ]);

    return redirect()->route('login');
}


    public function login(Request $request)
    {

        error_log('>>>>>>>>>>enter into login method');
        // Validate the login data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        
        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
         
            
           $request->session()->regenerate(); 

             return view('User_welcome');
        
        }

        // Return an error if authentication fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function LogOut(){
          // Log out the user
          error_log('>>>>>>>>>>ASIF');
    Auth::logout();
    // Invalidate the session to prevent any further access
    request()->session()->invalidate();

    // Regenerate the session token to prevent CSRF attacks
    request()->session()->regenerateToken();

    // Redirect to the login page (or any other page you prefer)
    return redirect()->route('login')->with('status', 'You have been logged out successfully.');
    }
}
