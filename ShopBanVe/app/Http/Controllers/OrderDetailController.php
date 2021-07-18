<?php

namespace App\Http\Controllers;
use DB;
use App\Models\OrderDetail;
use App\Models\VMatch;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index(){
        $order_details = DB::table('order_details')->get();


        return view('OrderDetail.index', compact('order_details')); 
    }

    public function create()
    {
        return view('OrderDetail.create');
    }

    public function store(Request $request)
    {
        DB::table('order_details')->insert([
            'id' => $request->id,
            'status' => $request->status,
            'id_order' => $request->id_order,
            'id_match' => $request->id_match,
            'quantity' => $request->quantity,
            'type_chair' => $request->type_chair,
            'price' => $request->price,
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d"),
        ]);
        return redirect('/admin/orderdetails');
    }

    public function edit($id)
    {
        $order_detail = DB::table('order_details')->where('id', $id)->first();
        return view('OrderDetail.edit', compact('order_detail'));
    }

    public function update(Request $request)
    {
        DB::table('order_details')->where('id', $request->id)->update([
           
            'status' => $request->status,
            'quantity' => $request->quantity,
            'type_chair' => $request->type_chair,
            'price' => $request->price,
            'created_at' => $request->created_at,
            'updated_at' => $request->created_at,
        ]);

        return redirect('/admin/orderdetails');
    }

    public function delete($id)
    {
        DB::table('order_details')->where('id', $id)->delete();
        return redirect('/admin/orderdetails');
    }

    public static function findOrderById($id) {
        $order = DB::table('orders')->where('id', $id)->get();
        return $order;
    }

    public static function findMatchById($id){
        $order = DB::table('v_matches')->where('id', $id)->get();
        return $order;
    }
}
