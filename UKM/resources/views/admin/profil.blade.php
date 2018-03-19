@extends('layouts.app')
@section('content')
<div class="page-header">
    <h1>Profil UKM {{$profil}}</h1>
    <ol class="breadcrumb">
        <li><a href="index.php">UKM</a></li>
        <li class="active">Seluruh UKM</li>
    </ol>
</div>
<div class="content-wrap">
  <div class="row">
      <div class="col-md-12">
          <div class="panel panel-default">
              <div class="panel-body" style="padding:20px">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Rata Rata UKM {{$profil}}</h3>
                    <table class="table">
                      <tr>
                        <td colspan="2"><b>Pemasaran</b></td>
                      </tr>
                      <tr>
                        <td>Jumlah penjualan per bulan</td>
                        <td>{{$marketingSelling}}</td>
                      </tr>
                      <tr>
                        <td>Harga jual per lusin</td>
                        <td>Rp.{{number_format($marketingPrice)}}</td>
                      </tr>
                      <tr>
                        <td>Tingkat promosi</td>
                        <td>
                          @if ($marketingPromotion == 1)
                            Sangat Rendah
                          @elseif ($marketingPromotion == 2)
                            Rendah
                          @elseif ($marketingPromotion == 3)
                            Biasa
                          @elseif ($marketingPromotion == 4)
                            Tinggi
                          @elseif ($marketingPromotion == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>Tingkat kesulitan pemasaran</td>
                        <td>
                          @if ($marketingHardnest == 1)
                            Sangat Rendah
                          @elseif ($marketingHardnest == 2)
                            Rendah
                          @elseif ($marketingHardnest == 3)
                            Biasa
                          @elseif ($marketingHardnest == 4)
                            Tinggi
                          @elseif ($marketingHardnest == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>Sistem Pemasaran</td>
                        <td>@foreach ($marketingSystem as $row)
                          {{$row[0]->marketing->marketing_system}},
                        @endforeach</td>
                      </tr>
                      <tr>
                        <td colspan="2"><b>Value Proposition</b></td>
                      </tr>
                      <tr>
                        <td>Tingkat kreatifitas</td>
                        <td>
                          @if ($VPCreativity == 1)
                            Sangat Rendah
                          @elseif ($VPCreativity == 2)
                            Rendah
                          @elseif ($VPCreativity == 3)
                            Biasa
                          @elseif ($VPCreativity == 4)
                            Tinggi
                          @elseif ($VPCreativity == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>Tingkat kualitas</td>
                        <td>
                          @if ($VPQuality == 1)
                            Sangat Rendah
                          @elseif ($VPQuality == 2)
                            Rendah
                          @elseif ($VPQuality == 3)
                            Biasa
                          @elseif ($VPQuality == 4)
                            Tinggi
                          @elseif ($VPQuality == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>Tingkat disain</td>
                        <td>
                          @if ($VPDesign == 1)
                            Sangat Rendah
                          @elseif ($VPDesign == 2)
                            Rendah
                          @elseif ($VPDesign == 3)
                            Biasa
                          @elseif ($VPDesign == 4)
                            Tinggi
                          @elseif ($VPDesign == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2"><b>Produksi</b></td>
                      </tr>
                      <tr>
                        <td>Harga bahan baku per kg</td>
                        <td>Rp.{{number_format($productionCost)}}</td>
                      </tr>
                      <tr>
                        <td>Biaya tenaga kerja per lusin</td>
                        <td>Rp.{{number_format($productionLaborCost)}}</td>
                      </tr>
                      <tr>
                        <td>Metoda/jenis mesin rajut</td>
                        <td>
                          @foreach ($productionMethod as $row)
                            {{$row[0]->production->method}},
                          @endforeach
                        </td>
                      </tr>
                      <tr>
                        <td>Jumlah mesin</td>
                        <td>{{$productionTotalMachine}}</td>
                      </tr>
                      <tr>
                        <td>Tingkat kompetensi tenaga kerja</td>
                        <td>
                          @if ($productionCompetence == 1)
                            Sangat Rendah
                          @elseif ($productionCompetence == 2)
                            Rendah
                          @elseif ($productionCompetence == 3)
                            Biasa
                          @elseif ($productionCompetence == 4)
                            Tinggi
                          @elseif ($productionCompetence == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2"><b>Partner : Suplayer</b></td>
                      </tr>
                      <tr>
                        <td>Tingkat kenaikan harga bahan baku</td>
                        <td>
                          @if ($partnerSupInc == 1)
                            Sangat Rendah
                          @elseif ($partnerSupInc == 2)
                            Rendah
                          @elseif ($partnerSupInc == 3)
                            Biasa
                          @elseif ($partnerSupInc == 4)
                            Tinggi
                          @elseif ($partnerSupInc == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>Tingkat ketersediaan pasukan bahan baku</td>
                        <td>
                          @if ($partnerSupAvailability == 1)
                            Sangat Rendah
                          @elseif ($partnerSupAvailability == 2)
                            Rendah
                          @elseif ($partnerSupAvailability == 3)
                            Biasa
                          @elseif ($partnerSupAvailability == 4)
                            Tinggi
                          @elseif ($partnerSupAvailability == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>Jumlah minimal order</td>
                        <td>{{$partnerSupMinOrder}}</td>
                      </tr>
                      <tr>
                        <td>Tingkat akses dengan pabrikan</td>
                        <td>
                          @if ($partnerSupAccess == 1)
                            Sangat Rendah
                          @elseif ($partnerSupAccess == 2)
                            Rendah
                          @elseif ($partnerSupAccess == 3)
                            Biasa
                          @elseif ($partnerSupAccess == 4)
                            Tinggi
                          @elseif ($partnerSupAccess == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2"><b>Partner : Distributor</b></td>
                      </tr>
                      <tr>
                        <td>Frekwensi order per bulan per bulan</td>
                        <td>{{$partnerDisFrequency}}</td>
                      </tr>
                      <tr>
                        <td>Biaya pengiriman kg</td>
                        <td>Rp. {{number_format($partnerDisSendCost)}}</td>
                      </tr>
                      <tr>
                        <td>Wilayah distribusi</td>
                        <td>
                          @foreach ($partnerDisArea as $row)
                            {{$row[0]->partner->distributor_area}},
                          @endforeach
                        </td>
                      </tr>
                      <tr>
                        <td>Tingkat keluhan pelanggan</td>
                        <td>
                          @if ($partnerDisComplaint == 1)
                            Sangat Rendah
                          @elseif ($partnerDisComplaint == 2)
                            Rendah
                          @elseif ($partnerDisComplaint == 3)
                            Biasa
                          @elseif ($partnerDisComplaint == 4)
                            Tinggi
                          @elseif ($partnerDisComplaint == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2"><b>Keuangan</b></td>
                      </tr>
                      <tr>
                        <td>Biaya produksi per bulan</td>
                        <td>Rp.{{number_format($financeCost)}}</td>
                      </tr>
                      <tr>
                        <td>Pendapatan/omset per bulan</td>
                        <td>Rp.{{number_format($financeIncome)}}</td>
                      </tr>
                      <tr>
                        <td>Keuntungan per bulan</td>
                        <td>Rp.{{number_format($financeProfit)}}</td>
                        {{-- <td>Rp.{{number_format($financeIncome - $financeCost)}}</td> --}}
                      </tr>
                    </table>
                    <hr>
                    <h3>Total Profil UKM {{$profil}}</h3>
                    <table class="table">
                      <tr>
                        <td colspan="2"><b>Pemasaran</b></td>
                      </tr>
                      <tr>
                        <td>Jumlah penjualan per bulan</td>
                        <td>{{$marketingSelling * $profilTotal * $profilCat / 100}}</td>
                      </tr>
                      <tr>
                        <td>Harga jual per lusin</td>
                        <td>Rp.{{number_format($marketingPrice * $profilTotal * $profilCat / 100)}}</td>
                      </tr>
                      <tr>
                        <td>Tingkat promosi</td>
                        <td>
                          @if ($marketingPromotion == 1)
                            Sangat Rendah
                          @elseif ($marketingPromotion == 2)
                            Rendah
                          @elseif ($marketingPromotion == 3)
                            Biasa
                          @elseif ($marketingPromotion == 4)
                            Tinggi
                          @elseif ($marketingPromotion == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>Tingkat kesulitan pemasaran</td>
                        <td>
                          @if ($marketingHardnest == 1)
                            Sangat Rendah
                          @elseif ($marketingHardnest == 2)
                            Rendah
                          @elseif ($marketingHardnest == 3)
                            Biasa
                          @elseif ($marketingHardnest == 4)
                            Tinggi
                          @elseif ($marketingHardnest == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>Sistem Pemasaran</td>
                        <td>@foreach ($marketingSystem as $row)
                          {{$row[0]->marketing->marketing_system}},
                        @endforeach</td>
                      </tr>
                      <tr>
                        <td colspan="2"><b>Value Proposition</b></td>
                      </tr>
                      <tr>
                        <td>Tingkat kreatifitas</td>
                        <td>
                          @if ($VPCreativity == 1)
                            Sangat Rendah
                          @elseif ($VPCreativity == 2)
                            Rendah
                          @elseif ($VPCreativity == 3)
                            Biasa
                          @elseif ($VPCreativity == 4)
                            Tinggi
                          @elseif ($VPCreativity == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>Tingkat kualitas</td>
                        <td>
                          @if ($VPQuality == 1)
                            Sangat Rendah
                          @elseif ($VPQuality == 2)
                            Rendah
                          @elseif ($VPQuality == 3)
                            Biasa
                          @elseif ($VPQuality == 4)
                            Tinggi
                          @elseif ($VPQuality == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>Tingkat disain</td>
                        <td>
                          @if ($VPDesign == 1)
                            Sangat Rendah
                          @elseif ($VPDesign == 2)
                            Rendah
                          @elseif ($VPDesign == 3)
                            Biasa
                          @elseif ($VPDesign == 4)
                            Tinggi
                          @elseif ($VPDesign == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2"><b>Produksi</b></td>
                      </tr>
                      <tr>
                        <td>Harga bahan baku per kg</td>
                        <td>Rp.{{number_format($productionCost * $profilTotal * $profilCat / 100)}}</td>
                      </tr>
                      <tr>
                        <td>Biaya tenaga kerja per lusin</td>
                        <td>Rp.{{number_format($productionLaborCost * $profilTotal * $profilCat / 100)}}</td>
                      </tr>
                      <tr>
                        <td>Metoda/jenis mesin rajut</td>
                        <td>
                          @foreach ($productionMethod as $row)
                            {{$row[0]->production->method}},
                          @endforeach
                        </td>
                      </tr>
                      <tr>
                        <td>Jumlah mesin</td>
                        <td>{{$productionTotalMachine * $profilTotal * $profilCat / 100}}</td>
                      </tr>
                      <tr>
                        <td>Tingkat kompetensi tenaga kerja</td>
                        <td>
                          @if ($productionCompetence == 1)
                            Sangat Rendah
                          @elseif ($productionCompetence == 2)
                            Rendah
                          @elseif ($productionCompetence == 3)
                            Biasa
                          @elseif ($productionCompetence == 4)
                            Tinggi
                          @elseif ($productionCompetence == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2"><b>Partner : Suplayer</b></td>
                      </tr>
                      <tr>
                        <td>Tingkat kenaikan harga bahan baku</td>
                        <td>
                          @if ($partnerSupInc == 1)
                            Sangat Rendah
                          @elseif ($partnerSupInc == 2)
                            Rendah
                          @elseif ($partnerSupInc == 3)
                            Biasa
                          @elseif ($partnerSupInc == 4)
                            Tinggi
                          @elseif ($partnerSupInc == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>Tingkat ketersediaan pasukan bahan baku</td>
                        <td>
                          @if ($partnerSupAvailability == 1)
                            Sangat Rendah
                          @elseif ($partnerSupAvailability == 2)
                            Rendah
                          @elseif ($partnerSupAvailability == 3)
                            Biasa
                          @elseif ($partnerSupAvailability == 4)
                            Tinggi
                          @elseif ($partnerSupAvailability == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>Jumlah minimal order</td>
                        <td>{{$partnerSupMinOrder * $profilTotal * $profilCat / 100}}</td>
                      </tr>
                      <tr>
                        <td>Tingkat akses dengan pabrikan</td>
                        <td>
                          @if ($partnerSupAccess == 1)
                            Sangat Rendah
                          @elseif ($partnerSupAccess == 2)
                            Rendah
                          @elseif ($partnerSupAccess == 3)
                            Biasa
                          @elseif ($partnerSupAccess == 4)
                            Tinggi
                          @elseif ($partnerSupAccess == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2"><b>Partner : Distributor</b></td>
                      </tr>
                      <tr>
                        <td>Frekwensi order per bulan</td>
                        <td>{{$partnerDisFrequency * $profilTotal * $profilCat / 100}}</td>
                      </tr>
                      <tr>
                        <td>Biaya pengiriman kg</td>
                        <td>Rp. {{number_format($partnerDisSendCost * $profilTotal * $profilCat / 100)}}</td>
                      </tr>
                      <tr>
                        <td>Wilayah distribusi</td>
                        <td>@foreach ($partnerDisArea as $row)
                          {{$row[0]->partner->distributor_area}},
                        @endforeach</td>
                      </tr>
                      <tr>
                        <td>Tingkat keluhan pelanggan</td>
                        <td>
                          @if ($partnerDisComplaint == 1)
                            Sangat Rendah
                          @elseif ($partnerDisComplaint == 2)
                            Rendah
                          @elseif ($partnerDisComplaint == 3)
                            Biasa
                          @elseif ($partnerDisComplaint == 4)
                            Tinggi
                          @elseif ($partnerDisComplaint == 5)
                            Sangat Tinggi
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2"><b>Keuangan</b></td>
                      </tr>
                      <tr>
                        <td>Biaya produksi per bulan</td>
                        <td>Rp.{{number_format($financeCost * $profilTotal * $profilCat / 100)}}</td>
                      </tr>
                      <tr>
                        <td>Pendapatan/omset per bulan</td>
                        <td>Rp.{{number_format($financeIncome * $profilTotal * $profilCat / 100)}}</td>
                      </tr>
                      <tr>
                        <td>Keuntungan per bulan</td>
                        {{-- <td>Rp.{{number_format($financeProfit * $profilTotal * $profilCat / 100)}}</td> --}}
                        <td>Rp.{{number_format(($financeIncome * $profilTotal * $profilCat / 100) - ($financeCost * $profilTotal * $profilCat / 100))}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
@endsection
