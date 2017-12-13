<?php

namespace App\Http\Controllers;

use App\Finance;
use App\Marketing;
use App\Production;
use App\UKM;
use Illuminate\Http\Request;
use Session;
class FinanceController extends Controller
{
    public function refresh(UKM $UKM)
    {
      $marketing = Marketing::where('ukm_id', $UKM->id)->take(1)->get();
      $production = Production::where('ukm_id', $UKM->id)->get();
      $cost = ($marketing[0]->selling * $production[0]->cost) + ($marketing[0]->selling * $production[0]->labor_cost);
      $income = $marketing[0]->selling * $marketing[0]->price;
      $profit = $income - $cost;
      return Finance::where('ukm_id', $UKM->id)->update([
        'cost' => $cost,
        'income' => $income,
        'profit' => $profit
      ]);
    }

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
     * @param  \App\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function show(Finance $finance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function edit(Finance $finance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UKM $UKM)
    {
        Finance::where('ukm_id',$UKM->id)->update([
          'cost' => $request->FinanceCost,
          'income' => $request->FinanceIncome,
          'profit' => $request->FinanceProfit,
        ]);
        Session::flash('status', 'Data Keuangan Telah Diperbaharui');
        return redirect()->route('detail.UKM',['UKM' => $UKM->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Finance $finance)
    {
        //
    }
}
