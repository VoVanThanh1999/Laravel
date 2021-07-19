<?php

namespace App\Http\Controllers;
use DB;
use App\Models\VMatch;
use App\Models\MatchDetail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage()
    {
        $v_matches = DB::table('v_matches')->get();
        return view('UserHome.HomePage.index', compact('v_matches'));
    }

    public function cart()
    {
        $v_matches = DB::table('v_matches')->get();
        $match_details = DB::table('match_details')->get();

        $arr = array($v_matches, $match_details);
        return view('UserHome.Cart.cart', compact('arr'));
    }
}
