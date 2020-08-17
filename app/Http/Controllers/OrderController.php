<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Item;

class OrderController extends Controller
{
    public function __construt($value='')
    {
       $this->middleware('role:admin')->except('store');
       $this->middleware('role:customer')->only('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::all();
        // dd($items);
        return view ('backend.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->notes);
        $cartArr=json_decode($request->shop_data);
        $total=0;
        foreach ($cartArr as $row) {
            if ($row->discount) {
            $total+=($row->discount * $row->qty);
            }
            else{
            $total+=($row->price * $row->qty);
            }
        }
        $order=new Order;
        $order->voucherno= uniqid() ; //output unique id
        $order->orderdate= date('Y-m-d');
        $order->user_id= Auth::id(); //auth id
        $order->note= $request->notes;
        $order->total= $total;
        $order->save(); //only saved into order table

        //save into order_detail
        foreach ($cartArr as $row) {
            $order->items()->attach($row->id,['qty'=>$row->qty]);
        }

        return 'Successfully!';


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order=Order::find($id);
        $items=Item::all();
        return view ('backend.orders.show', compact('order','items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
