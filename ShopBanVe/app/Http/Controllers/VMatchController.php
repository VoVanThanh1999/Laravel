<?php

namespace App\Http\Controllers;

use DB;
use App\Models\VMatch;

use Illuminate\Http\Request;

class VMatchController extends Controller
{
    public function index()
    {
        $v_matchs = DB::table('v_matches')->get();
        return view('VMatch.index', compact('v_matchs'));
    }

    public function create()
    {
        return view('VMatch.create');
    }

    public function store(Request $request)
    {
        

        DB::table('v_matches')->insert([
            'id' => $request->id,
            'name' => $request->name,
            'date_start' => $request->date_start,
            'image' => $request->image,
            'information' => $request->information,
        ]);

        return redirect('/admin/vmatches');
    }

    public function edit($id)
    {
        $v_match = DB::table('v_matches')->where('id', $id)->first();
        return view('VMatch.edit', compact('v_match'));
    }

    public function update(Request $request)
    {
        DB::table('v_matches')->where('id', $request->id)->update([
            'id' => $request->id,
            'name' => $request->name,
            'date_start' => $request->date_start,
            'image' => $request->image,
            'information' => $request->information,
        ]);

        return redirect('/admin/vmatches');
    }

    public function delete($id)
    {
        DB::table('v_matches')->where('id', $id)->delete();
        return redirect('/admin/vmatches');
    }
}
