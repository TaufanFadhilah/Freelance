<?php

namespace App\Http\Controllers;

use App\UKM;
use App\Finance;
use App\Marketing;
use App\Production;
use App\Estimation;
use App\Value_Proporsition;
use App\Partner;
use Illuminate\Http\Request;
use Validator;
use Storage;
use Session;
class UKMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UKM::all();
        return view('admin/list',[
          'datas' => $data
        ]);
    }

    public function ShowCat($cat)
    {
        $data = UKM::where('category', $cat)->get();
        return view('admin/list',[
          'datas' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/addUKM');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validator::make($request->all(), [
        //       'photo' => 'required|image|max:10240'
        // ])->validate();
        if($request->photo){
          $path = $request->photo->store('UKM', 'public');
        }else{
          $path = 'UKM/default.png';
        }

        $ukm = UKM::create([
          'name' => $request->name,
          'address' => $request->address,
          'establish' => $request->establish,
          'category' => $request->category,
          'photo' => $path
        ]);
        Finance::create(['ukm_id' => $ukm->id]);
        Marketing::create(['ukm_id' => $ukm->id]);
        Production::create(['ukm_id' => $ukm->id]);
        Value_Proporsition::create(['ukm_id' => $ukm->id]);
        Partner::create(['ukm_id' => $ukm->id]);
        Session::flash('status', 'UKM Telah Ditambahkan');
        return redirect()->route('listAll.UKM');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UKM  $uKM
     * @return \Illuminate\Http\Response
     */
    public function show(UKM $UKM)
    {
        //$data = UKM::first()->get();
        return view('admin/detailUKM',[
          'datas' => $UKM
        ]);
    }

    public function setValid(UKM $UKM)
    {

      if ($UKM->isValid == 0) {
        $UKM->isValid = 1;
      }else{
        $UKM->isValid = 0;
      }
      $UKM->save();
      return redirect(route('detail.UKM',['UKM' => $UKM->id]));
    }

    public function profil($cat)
    {
      $data = UKM::where(['category' => $cat, 'isValid' => 1])->get();
      //$data = UKM::where('category',$cat)->get();
      $profil = Estimation::first();
      if($cat == 1){
        $profilCat = $profil->small;
        $profilName = 'Kecil';
      }else if($cat == 2){
        $profilCat = $profil->medium;
        $profilName = 'Sedang';
      }else if($cat == 3){
        $profilCat = $profil->high;
        $profilName = 'Besar';
      }else if($cat == 4){
        $data = UKM::all();
        $profilCat = 100;
        $profilName = 'Keseluruhan';
      }
      return view('admin/profil',[
        'profil' => $profilName,
        'profilTotal' => $profil->total,
        'profilCat' => $profilCat,
        'marketingSelling' => $data->avg('Marketing.selling'),
        'marketingPrice' => $data->avg('Marketing.price'),
        'marketingPromotion' => ceil($data->avg('Marketing.promotion')),
        'marketingHardnest' => ceil($data->avg('Marketing.hardnest')),
        'marketingSystem' => $data->groupBy('marketing.marketing_system'),
        'VPCreativity' => ceil($data->avg('Value_Proporsition.creativity')),
        'VPQuality' => ceil($data->avg('Value_Proporsition.quality')),
        'VPDesign' => ceil($data->avg('Value_Proporsition.design')),
        'productionCost' => $data->avg('Production.cost'),
        'productionLaborCost' => $data->avg('Production.labor_cost'),
        'productionTotalMachine' => ceil($data->avg('Production.total_machine')),
        'productionCompetence' => ceil($data->avg('Production.competence')),
        'productionMethod' => $data->groupBy('Production.method'),
        'partnerSupInc' => ceil($data->avg('Partner.suplayer_increment')),
        'partnerSupAvailability' => ceil($data->avg('Partner.suplayer_availability')),
        'partnerSupMinOrder' => $data->avg('Partner.suplayer_min_order'),
        'partnerSupAccess' => ceil($data->avg('Partner.suplayer_access')),
        'partnerDisFrequency' => $data->avg('Partner.distributor_frequency'),
        'partnerDisSendCost' => $data->avg('Partner.distributor_send_cost'),
        'partnerDisComplaint' => ceil($data->avg('Partner.distributor_complaint')),
        'partnerDisArea' => $data->groupBy('Partner.distributor_area'),
        'financeCost' => $data->avg('Finance.cost'),
        'financeIncome' => $data->avg('Finance.income'),
        'financeProfit' => $data->avg('Finance.profit')
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UKM  $uKM
     * @return \Illuminate\Http\Response
     */
    public function edit(UKM $uKM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UKM  $uKM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UKM $UKM)
    {
        if($request->photo){
          $path = $request->photo->store('UKM', 'public');
          Storage::disk('public')->delete($UKM->photo);
        }else{
          $path = $UKM->photo;
        }
        UKM::find($UKM->id)->update([
          'name' => $request->UKMName,
          'address' => $request->UKMAddress,
          'establish' => $request->UKMEstablish,
          'category' => $request->UKMCategory,
          'photo' => $path
        ]);
        Session::flash('status', 'Data Informasi Telah Diperbaharui');
        return redirect()->route('detail.UKM',['UKM' => $UKM->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UKM  $uKM
     * @return \Illuminate\Http\Response
     */
    public function destroy(UKM $UKM)
    {
        if($UKM->photo != 'UKM/default.png'){
          Storage::disk('public')->delete($UKM->photo);
        }
        $UKM->delete();
        Session::flash('status', 'UKM Telah Dihapus');
        return redirect()->route('listAll.UKM');
    }
}
