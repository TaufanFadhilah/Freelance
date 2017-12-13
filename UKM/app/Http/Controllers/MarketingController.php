<?php

namespace App\Http\Controllers;

use App\Marketing;
use App\UKM;
use Illuminate\Http\Request;

use Session;
class MarketingController extends Controller
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
     * @param  \App\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function show(Marketing $marketing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function edit(UKM $UKM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UKM $UKM)
    {
        Marketing::where('ukm_id',$UKM->id)->update([
          'selling' => $request->MarketingSelling,
          'price' => $request->MarketingPrice,
          'promotion' => $request->MarketingPromotion,
          'hardnest' => $request->MarketingHardnest,
          'marketing_system' => $request->MarketingSystem,
        ]);
        // $finance = new FinanceController();
        // $finance->refresh($UKM);
        Session::flash('status', 'Data Pemasaran Telah Diperbaharui');
        return redirect()->route('detail.UKM',['UKM' => $UKM->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marketing $marketing)
    {
        //
    }
}
