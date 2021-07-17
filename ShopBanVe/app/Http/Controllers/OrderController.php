<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = DB::table('orders')->get();
        return view('Order.index', compact('orders')); 
    }

    public function create()
    {
        return view('Order.create');
    }

    public function store(Request $request)
    {
        DB::table('orders')->insert([
             
            'status' => 0,
            'full_name' => $request->full_name,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'id_card' => $request->id_card,
            'phone' => $request->phone,
            'email' => $request->email
        ]);
        return redirect('/admin/orders');
    }

    public function edit($id)
    {
        $order = DB::table('orders')->where('id', $id)->first();
        return view('Order.edit', compact('order'));
    }

    public function update(Request $request)
    {
        DB::table('orders')->where('id', $request->id)->update([
            'id' => $request->id,
            'status' => $request->status,
            'full_name' => $request->full_name,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'id_card' => $request->id_card,
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        return redirect('/admin/orders');
    }

    public function delete($id)
    {
        DB::table('orders')->where('id', $id)->delete();
        return redirect('/admin/orders');
    }
}
