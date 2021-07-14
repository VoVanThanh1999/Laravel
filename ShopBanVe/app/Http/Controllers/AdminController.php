<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.dashboard');
    }

    public function dashboard()
    {
        return view('Admin.dashboard');
    }

    public function login()
    {
        return view('Auth.login');
    }

    public function loginCheck(Request $request)
    {
        //Validate
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = User::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail', 'We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('/admin/dashboard');
            }else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }

    public function register()
    {
        return view('Auth.register');
    }

    public function registerCreate(Request $request)
    {   
        //Validate
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12',
        ]);
        //Insert data into database
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $save = $user->save();

        if($save){
            return back()->with('success', 'New User has been successfuly');
        }else{
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
}

