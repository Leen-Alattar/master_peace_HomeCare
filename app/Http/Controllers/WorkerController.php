<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Worker;
use Illuminate\Support\Facades\DB;



class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //$services = service::all();
        $workers = DB::table("services")
                   ->join("workers","service_id",'=','services.id')
                   ->select('workers.*','services.name as service_name')
                   ->get();
        
        return view('admin.worker.index',[
            'workers'=>$workers,
            // 'services'=>$services,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = service::all();
        return view('admin.worker.add', [
            'services'=>$services,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   			
        // dd($request);
        // dd($request->image);
        $newImageName =time()."-". $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $newImageName);
        $worker = new worker();
        $worker->name             =  $request->name;
        $worker->image            = $newImageName;
        $worker->age              = $request->age;
        $worker->nationality      = $request->nationality;
        $worker->phone            = $request->phone;
        $worker->service_id	      = $request->service_id;
        $worker->status            = $request->status;
        $worker->save();
        return redirect()->route("worker.index");
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
        $deleteWorker = worker::find($id);
        $deleteWorker->destroy($id);
        return redirect()->route('worker.index');
    }
    public function join_worker (Request $request){
        $services = service::all();
        return view('interface.joinus',[
            'services'=>$services,
        ]);
        
        
    }
    public function store_worker(Request $request)
    {   			
        // dd($request);
        //  dd($request->file('image'));

        $newImageName =time()."-". $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $newImageName);
        $worker = new worker();
        $worker->name             =  $request->name;
        $worker->image            = $newImageName;
        $worker->age              = $request->age;
        $worker->nationality      = $request->nationality;
        $worker->phone            = $request->phone;
        $worker->service_id	      = $request->service_id;
        $worker->status            = 0;
        $worker->save();
        return redirect()->route("home");
    }
}
