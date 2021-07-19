<?php

namespace App\Http\Controllers;

use App\Mail\DemoEmail;
use App\Mail\TestMail;
use DB;

use App\Models\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            'phone' => $request->phone,
            'email' => $request->email,
            'created_at' => $request->created_at,
            'id_match' => $request->id_match,
            'numOfChairA' => $request->numOfChairA,
            'numOfChairB' => $request->numOfChairB,
            'totalMoneyChairA' => $request->totalMoneyChairA,
            'totalMoneyChairB' => $request->totalMoneyChairB,
            'totalPrice' => $request->totalPrice
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
        
        $details = [
            'title' => 'mail from surside Media',
            'body' => 'this is for testing mail using gmail.com'
        ];
        Mail::to("boss.nt1999@gmail.com")->send(new TestMail($details));

       
        DB::table('orders')->where('id', $request->id)->update([
            'id' => $request->id,
            'status' => $request->status,
            'full_name' => $request->full_name,
            'address1' => $request->address1,
            'address2' => $request->address2,
          
            'phone' => $request->phone,
            'email' => $request->email,
            'updated_at' =>gmdate('Y-m-d h:i:s \G\M\T'),
            'id_match' => $request->id_match,
            'numOfChairA' => $request->numOfChairA,
            'numOfChairB' => $request->numOfChairB,
            'totalMoneyChairA' => $request->totalMoneyChairA,
            'totalMoneyChairB' => $request->totalMoneyChairB,
            'totalPrice' => $request->totalPrice
        ]);

        return redirect('/admin/orders');
    }

    public function delete($id)
    {
        DB::table('orders')->where('id', $id)->delete();
        return redirect('/admin/orders');
    }
}
