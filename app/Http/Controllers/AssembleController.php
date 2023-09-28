<?php

namespace App\Http\Controllers;

use App\Models\Assemble;
use Illuminate\Http\Request;

class AssembleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assemble = Assemble::get();
        return view('front.assemble',compact('assemble'));
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
            'chasis_parts' => $request->chasis_parts,
            'engine_parts' => $request->engine_parts,
            'air_filter' => $request->air_filter,
            'fuel_filter'  => $request->fuel_filter,
            'drive_belt' => $request->drive_belt,
            'fuel_injector'  => $request->fuel_injector,
            'fuel_pump'  => $request->fuel_pump,
            'tensioner_idelers_&_dampers' => $request->tensioner_idelers,
            'oil_filter' => $request->oil_filter,
            'cv_joint' => $request->cv_joint,
            'wheel_bearings_and_hubs' => $request->wheel_bearings_and_hubs,
            'tranaxle_fluid' => $request->tranaxle_fluid,
            'brake_caliper' => $request->brake_caliper,
            'brake_pads'  => $request->brake_pads,
            'brake_shoe' => $request->brake_shoe,
            'steering' => $request->steering,
            'full_jdm_suspension_kit' => $request->full_jdm_suspension_kit,
            'body_full_kit_price'  => $request->body_full_kit_price,
            'dashboard_and_electronics' => $request->dashboard_and_electronics,
            
        );
        $create = Assemble::create($data);
        return back()->with('success','Ready to Assemble!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assemble  $assemble
     * @return \Illuminate\Http\Response
     */
    public function show(Assemble $assemble)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assemble  $assemble
     * @return \Illuminate\Http\Response
     */
    public function edit(Assemble $assemble)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assemble  $assemble
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assemble $assemble)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assemble  $assemble
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assemble $assemble)
    {
        //
    }
}
