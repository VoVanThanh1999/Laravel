<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
  
    public function index()
    {
        $images = DB::table('images')->orderBy('id','DESC')->get();
        return view('Image.index', compact('images'));
    }

    public function create()
    {
        return view('Image.create');
    }

    public function store(Request $request)
    {
        // $request->validate($request, ['file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
        $file_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('upload/images',  $file_name );

        DB::table('images')->insert([
            'id' => $request->id,
            'image' => $file_name ,
        ]);

        return redirect('admin/images');
    }

    public function edit($id)
    {
        $image = DB::table('images')->where('id', $id)->first();
        return view('Image.edit', compact('image'));
    }

    public function update(Request $request)
    {   
        if ($request->file('image') == null){
            DB::table('images')->where('id', $request->id)->update([
                'id' => $request->id,
                'image' => '',
            ]);
        }else{
            $file_name = $request->file('image')->getClientOriginalName();
            $request->file('image')->move('upload/images',  $file_name );
            DB::table('images')->where('id', $request->id)->update([
                'id' => $request->id,
                'image' => $file_name ,
            ]);
        }
        return redirect('/admin/images');
    }

    public function delete($id)
    {
        DB::table('images')->where('id', $id)->delete();
        return redirect('/admin/images');
    }
}
