<?php

namespace App\Http\Controllers;

use App\Models\User;

use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function index()
    {
        $users = DB::table('users')->get();
        return view('User.index', compact('users')); //['users' => $users]
    }

    public function create()
    {
        return view('User.create');
    }
    public function store(Request $request)
    {
        DB::table('users')->insert([
            'id' => $request->id,
            'name'=> $request->name,
            'email'=> $request->email,
            'password' => Hash::make($request->password),
            'phone'=>$request->phone,
            'avatar'=>$request->avatar
             
        ]);
        return redirect('/admin/users');
    }

    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('User.edit', compact('user'));
    }

    public function update(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([
            'id' => $request->id,
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=>$request->password,
            'phone'=>$request->phone,
            'avatar'=>$request->avatar
        ]);

        return redirect('/admin/users');
    }

    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/admin/users');
    }
}
