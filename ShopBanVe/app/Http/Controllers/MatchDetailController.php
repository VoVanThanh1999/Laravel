<?php

namespace App\Http\Controllers;

use DB;
use App\Models\MatchDetail;
use App\Models\VMatch;
use Illuminate\Http\Request;


class MatchDetailController extends Controller
{
    public function index()
    {
        $match_details = DB::table('match_details')->get();
        return view('MatchDetail.index', compact('match_details'));
    }

    public function create()
    {
        return view('MatchDetail.create');
    }

    public function store(Request $request)
    {
        DB::table('match_details')->insert([
            'id' => $request->id,
            'A_number_of_empty_seats' => $request->A_number_of_empty_seats,
            'A_number_of_seats_purchased' => $request->A_number_of_seats_purchased,
            'A_price' => $request->A_price,
            'B_number_of_empty_seats' => $request->B_number_of_empty_seats,
            'B_number_of_seats_purchased' => $request->B_number_of_seats_purchased,
            'B_price' => $request->B_price,
            'id_match' => $request->id_match,
        ]);
        return redirect('/admin/matchdetails');
    }

    public function edit($id)
    {
        $match_detail = DB::table('match_details')->where('id', $id)->first();
        return view('MatchDetail.edit', compact('match_detail'));
    }

    public function update(Request $request)
    {
        DB::table('match_details')->where('id', $request->id)->update([
            'id' => $request->id,
            'A_number_of_empty_seats' => $request->A_number_of_empty_seats,
            'A_number_of_seats_purchased' => $request->A_number_of_seats_purchased,
            'A_price' => $request->A_price,
            'B_number_of_empty_seats' => $request->B_number_of_empty_seats,
            'B_number_of_seats_purchased' => $request->B_number_of_seats_purchased,
            'B_price' => $request->B_price,
            'id_match'=> $request->id_match,
        ]);

        return redirect('/admin/matchdetails');
    }

    public function delete($id)
    {
        DB::table('match_details')->where('id', $id)->delete();
        return redirect('/admin/matchdetails');
    }

    public static function findMatchById($id){
        $order = DB::table('v_matches')->where('id', $id)->get();
        return $order;
    }

    public function getByIdMatch($id){
        $match_details = DB::table('match_details')->where('id_match', $id)->get();
        return view('MatchDetail.index', compact('match_details'));
    }
}
