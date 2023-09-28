<?php

namespace App\Http\Controllers;

use App\Models\Homeser;
use Illuminate\Http\Request;

class HomeserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeservice = Homeser::get();
        return view('front.homeservice',compact('homeservice'));
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
        $data = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'location' => $request->location,
            'select_service' => $request->select_service,
            
        );
        $create = Homeser::create($data);
        return back()->with('success','Service booked successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homeser  $homeser
     * @return \Illuminate\Http\Response
     */
    public function show(Homeser $homeser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homeser  $homeser
     * @return \Illuminate\Http\Response
     */
    public function edit(Homeser $homeser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homeser  $homeser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homeser $homeser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homeser  $homeser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homeser $homeser)
    {
        //
    }
}
