<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UKM;
use App\Estimation;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = UKM::all();
        $small = UKM::where('category',1)->get();
        $medium = UKM::where('category',2)->get();
        $high = UKM::where('category',3)->get();
        $estimation = Estimation::first();

        return view('home',[
          'smallUKM' => $small,
          'mediumUKM' => $medium,
          'highUKM' => $high,
          'totalIndustries' => $estimation->total,
          'smallEstimation' => $estimation->small,
          'mediumEstimation' => $estimation->medium,
          'highEstimation' => $estimation->high,
        ]);
    }
}
