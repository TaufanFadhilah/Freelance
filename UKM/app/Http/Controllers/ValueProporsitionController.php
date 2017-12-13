<?php

namespace App\Http\Controllers;

use App\Value_Proporsition;
use Illuminate\Http\Request;
use App\UKM;
use Session;
class ValueProporsitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Value_Proporsition  $value_Proporsition
     * @return \Illuminate\Http\Response
     */
    public function show(Value_Proporsition $value_Proporsition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Value_Proporsition  $value_Proporsition
     * @return \Illuminate\Http\Response
     */
    public function edit(Value_Proporsition $value_Proporsition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Value_Proporsition  $value_Proporsition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UKM $UKM)
    {
      Value_Proporsition::where('ukm_id',$UKM->id)->update([
        'creativity' => $request->VPCreativity,
        'quality' => $request->VPQuality,
        'design' => $request->VPDesign,
      ]);
      Session::flash('status', 'Data Value Proposition Telah Diperbaharui');
      return redirect()->route('detail.UKM',['UKM' => $UKM->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Value_Proporsition  $value_Proporsition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Value_Proporsition $value_Proporsition)
    {
        //
    }
}
