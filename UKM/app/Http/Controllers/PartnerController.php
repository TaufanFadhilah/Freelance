<?php

namespace App\Http\Controllers;

use App\Partner;
use App\UKM;
use Illuminate\Http\Request;
use Session;
class PartnerController extends Controller
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
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UKM $UKM)
    {
        Partner::where('ukm_id',$UKM->id)->update([
          'suplayer_increment' => $request->PartnerSupIncrement,
          'suplayer_availability' => $request->PartnerSupAvailability,
          'suplayer_min_order' => $request->PartnerSupMinimOrder,
          'suplayer_access' => $request->PartnerSupAccess,
          'distributor_frequency' => $request->PartnerDisFrequency,
          'distributor_send_cost' => $request->PartnerDisSendCost,
          'distributor_area' => $request->PartnerDisArea,
          'distributor_complaint' => $request->PartnerDisComplaint,
          'distributor_accuracy' => $request->PartnerDisAccuracy,
        ]);
        Session::flash('status', 'Data Partner Telah Diperbaharui');
        return redirect()->route('detail.UKM',['UKM' => $UKM->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        //
    }
}
