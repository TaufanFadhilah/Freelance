@extends('layouts.app')
@section('content')
<div class="page-header">
    <h1>Detail UKM</h1>
    <ol class="breadcrumb">
        <li><a href="index.php">UKM</a></li>
        <li class="active">Detail UKM</li>
    </ol>
</div>
<div class="content-wrap">
  <div class="row">
      <div class="col-md-12">
          <div class="panel panel-default">
              <div class="panel-body" style="padding:20px">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><i class="ti-close"></i></button>
                    <strong>Sukses!</strong> {{ session('status') }}.
                </div>
                @endif
                <div class="col-md-4">
                  <img src="{{url('storage/'.$datas->photo)}}" class="img-thumbnail img-responsive">
                </div>
                <div class="col-md-8">
                  <h3>{{$datas->name}}</h3>
                  <div class="list-group">
                    <h4 class="list-group-item-heading">Alamat</h4>
                    <p class="list-group-item-text">{{$datas->address}}</p>
                  </div>
                  <div class="list-group">
                    <h4 class="list-group-item-heading">Tahun Berdiri</h4>
                    <p class="list-group-item-text">{{$datas->establish}}</p>
                  </div>
                  <div class="list-group">
                    <h4 class="list-group-item-heading">Kategory</h4>
                    <p class="list-group-item-text">
                      @if ($datas->category == 1)
                        UKM Kecil
                      @elseif ($datas->category == 2)
                        UKM Sedang
                      @elseif ($datas->category == 3)
                        UKM Besar
                      @endif
                    </p>
                  </div>
                  <div class="list-group">
                    <button class="btn btn-warning" data-toggle="modal" data-target="#InfoModal">Ubah Informasi</button>
                    <a href="{{route('isValid.UKM',['UKM' => $datas->id])}}">
                      <button class="btn btn-primary">
                        @if ($datas->isValid == 0)
                          Jadikan UKM ini VALID
                        @else
                          Jadikan UKM ini TIDAK VALID
                        @endif
                      </button>
                    </a>
                  </div>
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Pemasaran
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                          <table class="table">
                            <tr>
                              <td>Jumlah penjualan per bulan</td>
                              <td>{{number_format($datas->Marketing->selling)}}</td>
                            </tr>
                            <tr>
                              <td>Harga jual per lusin</td>
                              <td>Rp. {{number_format($datas->Marketing->price)}}</td>
                            </tr>
                            <tr>
                              <td>Tingkat promosi</td>
                              <td>
                                @if ($datas->Marketing->promotion == 1)
                                  Sangat Rendah
                                @elseif ($datas->Marketing->promotion == 2)
                                  Rendah
                                @elseif ($datas->Marketing->promotion == 3)
                                  Biasa
                                @elseif ($datas->Marketing->promotion == 4)
                                  Tinggi
                                @elseif ($datas->Marketing->promotion == 5)
                                  Sangat Tinggi
                                @endif
                              </td>
                            </tr>
                            <tr>
                              <td>Tingkat kesulitan pemasaran</td>
                              <td>
                                @if ($datas->Marketing->hardnest == 1)
                                  Sangat Rendah
                                @elseif ($datas->Marketing->hardnest == 2)
                                  Rendah
                                @elseif ($datas->Marketing->hardnest == 3)
                                  Biasa
                                @elseif ($datas->Marketing->hardnest == 4)
                                  Tinggi
                                @elseif ($datas->Marketing->hardnest == 5)
                                  Sangat Tinggi
                                @endif
                              </td>
                            </tr>
                            <tr>
                              <td>Sistem Pemasaran</td>
                              <td>{{$datas->Marketing->marketing_system}}</td>
                            </tr>
                            <tr>
                              <td colspan="2">
                                <button class="btn btn-warning" data-toggle="modal" data-target="#MarketingModal">Ubah Data Pemasaran</button>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Value Proposition
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                          <table class="table">
                            <tr>
                              <td>Tingkat kreatifitas</td>
                              <td>
                                @if ($datas->value_Proporsition->creativity == 1)
                                  Sangat Rendah
                                @elseif ($datas->value_Proporsition->creativity == 2)
                                  Rendah
                                @elseif ($datas->value_Proporsition->creativity == 3)
                                  Biasa
                                @elseif ($datas->value_Proporsition->creativity == 4)
                                  Tinggi
                                @elseif ($datas->value_Proporsition->creativity == 5)
                                  Sangat Tinggi
                                @endif
                              </td>
                            </tr>
                            <tr>
                              <td>Tingkat kualitas</td>
                              <td>
                                @if ($datas->value_Proporsition->quality == 1)
                                  Sangat Rendah
                                @elseif ($datas->value_Proporsition->quality == 2)
                                  Rendah
                                @elseif ($datas->value_Proporsition->quality == 3)
                                  Biasa
                                @elseif ($datas->value_Proporsition->quality == 4)
                                  Tinggi
                                @elseif ($datas->value_Proporsition->quality == 5)
                                  Sangat Tinggi
                                @endif
                              </td>
                            </tr>
                            <tr>
                              <td>Tingkat disain</td>
                              <td>
                                @if ($datas->value_Proporsition->design == 1)
                                  Sangat Rendah
                                @elseif ($datas->value_Proporsition->design == 2)
                                  Rendah
                                @elseif ($datas->value_Proporsition->design == 3)
                                  Biasa
                                @elseif ($datas->value_Proporsition->design == 4)
                                  Tinggi
                                @elseif ($datas->value_Proporsition->design == 5)
                                  Sangat Tinggi
                                @endif
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2"><button class="btn btn-warning" data-toggle="modal" data-target="#VPModal">Ubah Value Proposition</button></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Produksi
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                          <table class="table">
                            <tr>
                              <td>Harga Bahan Baku per Kg</td>
                              <td>Rp. {{number_format($datas->Production->cost)}}</td>
                            </tr>
                            <tr>
                              <td>Biaya Tenaga Kerja per Lusin</td>
                              <td>Rp. {{number_format($datas->Production->labor_cost)}}</td>
                            </tr>
                            <tr>
                              <td>Metoda/jenis mesin rajut</td>
                              <td>{{$datas->Production->method}}</td>
                            </tr>
                            <tr>
                              <td>Jumlah mesin</td>
                              <td>{{$datas->Production->total_machine}}</td>
                            </tr>
                            <tr>
                              <td>Tingkat kompetensi tenaga kerja</td>
                              <td>
                                @if ($datas->Production->competence == 1)
                                  Sangat Rendah
                                @elseif ($datas->Production->competence == 2)
                                  Rendah
                                @elseif ($datas->Production->competence == 3)
                                  Biasa
                                @elseif ($datas->Production->competence == 4)
                                  Tinggi
                                @elseif ($datas->Production->competence == 5)
                                  Sangat Tinggi
                                @endif
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">
                                <button class="btn btn-warning" data-toggle="modal" data-target="#ProductionModal">Ubah Data Produksi</button>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                            Partner
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                          <table class="table">
                            <tr>
                              <td colspan="2"><b>Suplayer</b></td>
                            </tr>
                            <tr>
                              <td>Tingkat kenaikan harga bahan baku</td>
                              <td>
                                @if ($datas->Partner->suplayer_increment == 1)
                                  Sangat Rendah
                                @elseif ($datas->Partner->suplayer_increment == 2)
                                  Rendah
                                @elseif ($datas->Partner->suplayer_increment == 3)
                                  Biasa
                                @elseif ($datas->Partner->suplayer_increment == 4)
                                  Tinggi
                                @elseif ($datas->Partner->suplayer_increment == 5)
                                  Sangat Tinggi
                                @endif
                              </td>
                            </tr>
                            <tr>
                              <td>Tingkat ketersediaan pasukan bahan baku</td>
                              <td>
                                @if ($datas->Partner->suplayer_availability == 1)
                                  Sangat Rendah
                                @elseif ($datas->Partner->suplayer_availability == 2)
                                  Rendah
                                @elseif ($datas->Partner->suplayer_availability == 3)
                                  Biasa
                                @elseif ($datas->Partner->suplayer_availability == 4)
                                  Tinggi
                                @elseif ($datas->Partner->suplayer_availability == 5)
                                  Sangat Tinggi
                                @endif
                              </td>
                            </tr>
                            <tr>
                              <td>Jumlah minimal order</td>
                              <td>{{$datas->Partner->suplayer_min_order}}</td>
                            </tr>
                            <tr>
                              <td>Tingkat akses dengan pabrikan</td>
                              <td>
                                @if ($datas->Partner->suplayer_access == 1)
                                  Sangat Rendah
                                @elseif ($datas->Partner->suplayer_access == 2)
                                  Rendah
                                @elseif ($datas->Partner->suplayer_access == 3)
                                  Biasa
                                @elseif ($datas->Partner->suplayer_access == 4)
                                  Tinggi
                                @elseif ($datas->Partner->suplayer_access == 5)
                                  Sangat Tinggi
                                @endif
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2"><b>Distributor</b></td>
                            </tr>
                            <tr>
                              <td>Frewensi order per bulan</td>
                              <td>{{$datas->Partner->distributor_frequency}}</td>
                            </tr>
                            <tr>
                              <td>Biaya pengiriman kg</td>
                              <td>Rp. {{number_format($datas->Partner->distributor_send_cost)}}</td>
                            </tr>
                            <tr>
                              <td>Wilayah distribusi</td>
                              <td>{{$datas->Partner->distributor_area}}</td>
                            </tr>
                            <tr>
                              <td>Tingkat keluhan pelanggan</td>
                              <td>
                                @if ($datas->Partner->distributor_complaint == 1)
                                  Sangat Rendah
                                @elseif ($datas->Partner->distributor_complaint == 2)
                                  Rendah
                                @elseif ($datas->Partner->distributor_complaint == 3)
                                  Biasa
                                @elseif ($datas->Partner->distributor_complaint == 4)
                                  Tinggi
                                @elseif ($datas->Partner->distributor_complaint == 5)
                                  Sangat Tinggi
                                @endif
                              </td>
                            </tr>
                            <tr>
                              <td>Tingkat ketepatan pembayaran</td>
                              <td>
                                @if ($datas->Partner->distributor_accuracy == 1)
                                  Sangat Rendah
                                @elseif ($datas->Partner->distributor_accuracy == 2)
                                  Rendah
                                @elseif ($datas->Partner->distributor_accuracy == 3)
                                  Biasa
                                @elseif ($datas->Partner->distributor_accuracy == 4)
                                  Tinggi
                                @elseif ($datas->Partner->distributor_accuracy == 5)
                                  Sangat Tinggi
                                @endif
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2"><button class="btn btn-warning" data-toggle="modal" data-target="#PartnerModal">Ubah Partner</button></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Keuangan
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                          <table class="table">
                            <tr>
                              <td>Biaya Produksi per Bulan</td>
                              <td>Rp. {{number_format($datas->Finance->cost)}}</td>
                            </tr>
                            <tr>
                              <td>Pendapatan/omset per bulan</td>
                              <td>Rp. {{number_format($datas->Finance->income)}}</td>
                            </tr>
                            <tr>
                              <td>Keuntungan per Bulan</td>
                              <td>Rp. {{number_format($datas->Finance->profit)}}</td>
                            </tr>
                            <tr>
                              <td colspan="2"><button class="btn btn-warning" data-toggle="modal" data-target="#FinanceModal">Ubah Keuangan</button></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
@include('admin.modalUKM')
@endsection
@section('js')
  <script type="text/javascript">
    $('.collapse').collapse()
    $('#InfoModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })
    $('#VPModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })
    $('#MarketingModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })
    $('#PartnerModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })
    $('#ProductionModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })
    $('#FinanceModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })
  </script>
@endsection
