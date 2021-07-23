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
        $match_details = DB::table('match_details')->orderBy('id','DESC')->get();
        
        return view('MatchDetail.index', compact('match_details'));
    }

    public function create()
    {
        $matchs = DB::select("SELECT t1.* FROM v_matches as t1 WHERE t1.id NOT IN (SELECT t2.id_match FROM match_details as t2)");

        return view('MatchDetail.create', compact('matchs'));
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
        $data = [
            'match_details' => $match_details,
            'IdMatch' => $id,
            'length' => count($match_details)
        ];
        return view('MatchDetail.match_details')->with(array('data'=>$data));
    }

    public function createdByIdMatch($id){
        $match = DB::table('v_matches')->where('id', $id)->get();
        $name = $match[0]->name;
        $data = [
            'name' => $name,
            'IdMatch' => $id,
         
        ];
         return view('MatchDetail.created_by_id')->with(array('data'=>$data));
    }

    public function insertByIdMatch(Request $request){
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

        $match_details = DB::table('match_details')->where('id_match',$request->id_match)->get();       
        $data = [
            'match_details' => $match_details,
            'IdMatch' => $request->id_match,
            'length' => count($match_details)
        ];
        return view('MatchDetail.match_details')->with(array('data'=>$data));
    }



}
