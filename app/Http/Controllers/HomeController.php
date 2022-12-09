<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
          if(auth()->user()->role=='Client'){
            return redirect('/orders/client');
        }else{
            $orders=Order::all();
            $totalOrders=count($orders);
            $totalRevenue=0;
            
            foreach($orders as $order){
               
                if($order['status']!='Pending'){
                    $totalRevenue+= $order['amount'];
                }
                
            }
            
              return view('home')
              ->with('totalRevenue',$totalRevenue)
              ->with('totalOrders',$totalOrders);
        }
    }
}
