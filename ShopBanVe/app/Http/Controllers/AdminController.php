<?php

namespace App\Http\Controllers;
use DB;
use App\Models\User;
use App\Models\VMatch;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    public function index()
    {
        return view('Admin.dashboard');
    }

    public function dashboard(){
        
      
        $getAllMatches = DB::table('v_matches')
        ->count();

        $getMatchThanCurrentDate = DB::select('SELECT count(id) as count FROM `v_matches` WHERE date_start > CURRENT_TIME');

        $totalNumberTicketSold = DB::table('orders')
        ->count();

        $users = DB::table('users')
        ->count();


        $a=array($getAllMatches, $getMatchThanCurrentDate[0]->count, $totalNumberTicketSold, $users);
        

       

     return view('Admin.dashboard', compact("a"));
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

    public function getAllMatch(){
        return view('Dashboard.dashboard', compact('getAllMatches'));
    }
}

