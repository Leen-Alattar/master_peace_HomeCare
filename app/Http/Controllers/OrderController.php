<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\User;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $orders = order::all();
        return view('admin.order.index',[
            'orders'=>$orders,
        ]);
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
        //
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
        $deleteorder = service::find($id);
        $deleteorder->destroy($id);
        return redirect()->route('order.index');
    }
    public function book_now(Request $request){
        
        $service = service::find($request->id );
        return view('interface.single-service',[
          'service' => $service    
        ]);
        
    }
    public function store_booking (Request $request)
    {
        // "id" => "2"
        // "num_of_hours" => "3"
        // "num_of_workers" => "3"
        // "date" => "2022-03-31"
        // "time" => "16:52"
        // "notes" => "lolo"
        $numOfHour = (int)$request->num_of_hours;
        $numOfWorker =(int) $request->num_of_workers;
        $price_per_hour =(int)$request->price_per_hour;
        $total_price =($numOfHour*$numOfWorker*$price_per_hour);
     
        
        
        $order = new order();
        $order->user_id          = Auth::id();
        $order->service_id	     = $request->id;
        $order->num_of_hours     = $numOfHour;
        $order->num_of_workers   = $numOfWorker;
        $order->location         = $request->location;
        $order->date             = $request->date;
        $order->time             = $request->time;
        $order->total_price      = $total_price;
        $order->notes            = $request->notes;
        $order->save();
        return redirect()->route("home");
    }
    
    public function show_all_booking(Request $request){
      
        $orders = DB::table("orders")
        ->join("services",'services.id','=','orders.service_id')
        ->where("user_id",Auth::id())
        ->get();
        return view('interface.profile',[
          'orders' => $orders   
        ]);
        
    }

}