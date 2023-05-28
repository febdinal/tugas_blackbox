<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register():  \Illuminate\Contracts\View\View  
    {
        return view('register');
    }

    public function login():  \Illuminate\Contracts\View\View  
    {
        return view('login');
    }

    public function register_post (Request $request): RedirectResponse
     {
        
        $this->validate($request, [  
            'name' => 'required|string|max:100',  
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed|min:6',  
        ]);  

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ]);


        return redirect()->route('login')  
                ->with('success', 'Create user successfully!');  

    }

    public function login_post (Request $request): RedirectResponse
    {

        $validator = Validator::make($request->post(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        
        if (Auth::attempt($validator->validated())) {
            Auth::user();

            auth()->attempt($validator->validate());

            return redirect()->route('crud.index')->with('success', 'Login successfully!');
        }
        
        return redirect()->route('login')  
            ->with('error', 'Wrong email or password!');  

    }

    public function logout (): RedirectResponse 
    {
        auth()->guard('web')->logout();

        return redirect()->route('login')  
             ->with('success', 'Logout successfully');  
    }
}
