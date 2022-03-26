<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = service::all();
        return view('admin.service.index',[
            'services'=>$services,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("admin.service.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {			
        $newImageName =time()."-". $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $newImageName);
        $service = new service();
        $service->name             =  $request->name;
        $service->description      =  $request->description;
        $service->image            = $newImageName;
        $service->price_per_hour   = $request->price_per_hour;
        $service->min_hour         = $request->min_hour;
        $service->max_hour         = $request->max_hour;
        $service->save();
        return redirect()->route("service.index");
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
        $deleteService = service::find($id);
        $deleteService->destroy($id);
        return redirect()->route('service.index');
    }
    
    public function show_all_service(Request $request){
        $services = service::all();
        return view('interface.service',[
            'services'=>$services,
        ]);
    }
   
    
}
