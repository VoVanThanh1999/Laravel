<?php

namespace App\Http\Controllers;
use DB;
use App\Models\VMatch;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage()
    {
        $v_matches = DB::table('v_matches')->get();
        return view('UserHome.HomePage.index', compact('v_matches'));
    }
}
