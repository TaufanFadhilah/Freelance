<?php

namespace App\Http\Controllers;

use App\Production;
use App\UKM;
use Illuminate\Http\Request;
use Session;

class ProductionController extends Controller
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
     * @param  \App\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function show(Production $production)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function edit(Production $production)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UKM $UKM)
    {
      Production::where('ukm_id',$UKM->id)->update([
        'cost' => $request->ProductionCost,
        'labor_cost' => $request->ProductionLaborCost,
        'method' => $request->ProductionMethod,
        'total_machine' => $request->ProductionMachine,
        'competence' => $request->ProductionCompetence,
      ]);
      // $finance = new FinanceController();
      // $finance->refresh($UKM);
      Session::flash('status', 'Data Produksi Telah Diperbaharui');
      return redirect()->route('detail.UKM',['UKM' => $UKM->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function destroy(Production $production)
    {
        //
    }
}
