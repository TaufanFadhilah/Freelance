<?php

namespace App\Http\Controllers;

use App\Estimation;
use Session;
use Illuminate\Http\Request;

class EstimationController extends Controller
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
        return view('admin/estimation',[
          'datas' => Estimation::first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Resposnse
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estimation  $estimation
     * @return \Illuminate\Http\Response
     */
    public function show(Estimation $estimation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estimation  $estimation
     * @return \Illuminate\Http\Response
     */
    public function edit(Estimation $estimation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estimation  $estimation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estimation $estimation)
    {
        $estimation = $estimation->get();
        $estimation[0]->total = $request->total;
        $estimation[0]->small = $request->small;
        $estimation[0]->medium = $request->medium;
        $estimation[0]->high = $request->high;
        $estimation[0]->save();
        Session::flash('status', 'Data Estimasi Telah Diperbaharui');
        return redirect()->route('Estimation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estimation  $estimation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estimation $estimation)
    {
        //
    }
}
