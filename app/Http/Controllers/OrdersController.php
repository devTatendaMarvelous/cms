<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=User::join('orders','orders.user','=','users.id')->get();
      
        //latest()->filter(request(['search']))->get(); dd($orders);
      return view('orders.index')->with('orders',$orders);
    }

    public function client()
    {
        $orders=User::join('orders','orders.user','=','users.id')->where('user',auth::user()->id)->get();
      
        //latest()->filter(request(['search']))->get(); dd($orders);
      return view('client.orders')->with('orders',$orders);
    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('show')
        ->with('order',explode(',',request()->order))
        ->with('amount',request()->total)
        ->with('items',request()->order);
    }

     public function pay()
    {
        $order=request()->validate([
            
            'number'=>'required',
            'amount'=>'required',
             'order'=>'required',
            
        ]);
        $order['user']=auth()->user()->id;
        $order['status']='Pending';
        $order['refno']='CMS'.str::random(4);
        
        Order::create($order);
        
        return view('paynow')->with('order',$order);


    }

     public function paid()
    {
        $transaction['status']='Paid';
        $transaction['paymentRef']=request()->paymentRef;
       $order= Order::where('refno',request()->refno)->get();
      
       Order::find($order[0]['id'])->update($transaction);
        return redirect('home');


    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order=Order::find($id);
        return view('orders.edit')->with('order',$order);
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
       $order=Order::find($id);
      if($order->status=='Paid'){
         $order->status=$request->input('status');
       $order->save();
      }
        return redirect('orders');

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
