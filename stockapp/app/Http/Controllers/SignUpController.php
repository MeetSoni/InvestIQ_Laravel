<?php

namespace App\Http\Controllers;

use App\Models\customers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;




class SignUpController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  */
    // public function index()
    // {
    //     //
    //     return view('pages.signUp');
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    //     $validated = $request->validate([
    //         'fname' => 'required',
    //         'lname' => 'required',
    //         'email' => 'required',
    //         'password' => 'required'


    //     ]);

    //     customers::create($request->all());
    //     return redirect('home');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(customers $customers)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(customers $customers)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, customers $customers)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(customers $customers)
    // {
    //     //
    // }


    public function login(){
        return view('pages.login');
    }

    public function loginPost(Request $request){
        $validated = $request->validate([
            
            'email' => 'required',
            'password' => 'required'


        ]);


        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect('home');
           
        }
        return view('pages.login')->with(['login_error', 'Invalid credentials. Please try again.']);
      

    }


    public function signUp(){
        return view('pages.signUp');
    }

    public function signUpPost(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email', // Ensure email is unique
            'password' => 'required'
        ]);
    
        // Check if the email already exists
        $existingUser = User::where('email', $request->email)->first();
    
        if ($existingUser) {
            // Handle the case where the email already exists
            return redirect()->back()->withInput()->withErrors(['email' => 'Email already exists']);
        }
    
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password); // Hash the password before saving
    
        $user = User::create($data);
        // return redirect('home');
        if(!$user){
            return redirect('signUp')->with("error","Registration failed try again");
        }
        return redirect('home')->with("Success","Registration  done");

    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');

    }
}
