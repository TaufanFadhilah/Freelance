
{{-- Modal Info --}}
<div class="modal fade" id="InfoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ubah Info {{$datas->name}}</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="{{route('update.UKM',['UKM'=>$datas->id])}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="UKMName" value="{{$datas->name}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
              <textarea name="UKMAddress" class="form-control">{{$datas->address}}</textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tahun Berdiri</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="UKMEstablish" value="{{$datas->establish}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Kategory</label>
            <div class="col-sm-10">
              <select class="form-control" name="UKMCategory">
                <option value="1" @if ($datas->category == 1)
                  selected
                @endif>UKM Kecil</option>
                <option value="2" @if ($datas->category == 2)
                  selected
                @endif>UKM Sedang</option>
                <option value="3" @if ($datas->category == 3)
                  selected
                @endif>UKM Besar</option>
              </select>
            </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 control-label">Foto</label>
              <div class="col-sm-10">
                <input type="file" name="photo" value="{{$datas->photo}}">
                <p class="help-block">Masukan foto UKM</p>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
      </form>
    </div>
  </div>
</div>
{{-- End Modal Info --}}


{{-- Modal Marketing --}}
<div class="modal fade" id="MarketingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ubah Data Pemasaran</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="{{route('update.Marketing',['UKM'=>$datas->id])}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Jumlah Penjualan per Bulan</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="MarketingSelling" value="{{$datas->Marketing->selling}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Harga Jual per lusin</label>
            <div class="col-sm-10">
              <input type="number" class="form-control"  name="MarketingPrice"  value="{{$datas->Marketing->price}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tingkat Promosi/Strategi</label>
            <div class="col-sm-10">
              <select class="form-control" name="MarketingPromotion">
                <option value="1" @if ($datas->Marketing->promotion == 1)
                  selected
                @endif>Sangat Rendah</option>
                <option value="2" @if ($datas->Marketing->promotion == 2)
                  selected
                @endif>Rendah</option>
                <option value="3" @if ($datas->Marketing->promotion == 3)
                  selected
                @endif>Biasa</option>
                <option value="4" @if ($datas->Marketing->promotion == 4)
                  selected
                @endif>Tinggi</option>
                <option value="5" @if ($datas->Marketing->promotion == 5)
                  selected
                @endif>Sangat Tinggi</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tingkat kesulitan pemasaran</label>
            <div class="col-sm-10">
              <select class="form-control" name="MarketingHardnest">
                <option value="1" @if ($datas->Marketing->hardnest == 1)
                  selected
                @endif>Sangat Rendah</option>
                <option value="2" @if ($datas->Marketing->hardnest == 2)
                  selected
                @endif>Rendah</option>
                <option value="3" @if ($datas->Marketing->hardnest == 3)
                  selected
                @endif>Biasa</option>
                <option value="4" @if ($datas->Marketing->hardnest == 4)
                  selected
                @endif>Tinggi</option>
                <option value="5" @if ($datas->Marketing->hardnest == 5)
                  selected
                @endif>Sangat Tinggi</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Sistem pemasaran</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="MarketingSystem" value="{{$datas->Marketing->marketing_system}}">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
      </form>
    </div>
  </div>
</div>
{{-- End Modal Marketing --}}

{{-- Modal VP --}}
<div class="modal fade" id="VPModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ubah Data Value Proposition</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="{{route('update.VP',['UKM'=>$datas->id])}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tingkat kreatifitas</label>
            <div class="col-sm-10">
              <select class="form-control" name="VPCreativity">
                <option value="1" @if ($datas->Value_Proporsition->creativity == 1)
                  selected
                @endif>Sangat Rendah</option>
                <option value="2" @if ($datas->Value_Proporsition->creativity == 2)
                  selected
                @endif>Rendah</option>
                <option value="3" @if ($datas->Value_Proporsition->creativity == 3)
                  selected
                @endif>Biasa</option>
                <option value="4" @if ($datas->Value_Proporsition->creativity == 4)
                  selected
                @endif>Tinggi</option>
                <option value="5" @if ($datas->Value_Proporsition->creativity == 5)
                  selected
                @endif>Sangat Tinggi</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tingkat kualitas</label>
            <div class="col-sm-10">
              <select class="form-control" name="VPQuality">
                <option value="1" @if ($datas->Value_Proporsition->quality == 1)
                  selected
                @endif>Sangat Rendah</option>
                <option value="2" @if ($datas->Value_Proporsition->quality == 2)
                  selected
                @endif>Rendah</option>
                <option value="3" @if ($datas->Value_Proporsition->quality == 3)
                  selected
                @endif>Biasa</option>
                <option value="4" @if ($datas->Value_Proporsition->quality == 4)
                  selected
                @endif>Tinggi</option>
                <option value="5" @if ($datas->Value_Proporsition->quality == 5)
                  selected
                @endif>Sangat Tinggi</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tingkat disain</label>
            <div class="col-sm-10">
              <select class="form-control" name="VPDesign">
                <option value="1" @if ($datas->Value_Proporsition->design == 1)
                  selected
                @endif>Sangat Rendah</option>
                <option value="2" @if ($datas->Value_Proporsition->design == 2)
                  selected
                @endif>Rendah</option>
                <option value="3" @if ($datas->Value_Proporsition->design == 3)
                  selected
                @endif>Biasa</option>
                <option value="4" @if ($datas->Value_Proporsition->design == 4)
                  selected
                @endif>Tinggi</option>
                <option value="5" @if ($datas->Value_Proporsition->design == 5)
                  selected
                @endif>Sangat Tinggi</option>
              </select>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
      </form>
    </div>
  </div>
</div>
{{-- End Modal VP --}}

{{-- Modal Production --}}
<div class="modal fade" id="ProductionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ubah Data Produksi</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="{{route('update.Production',['UKM'=>$datas->id])}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Harga Bahan Baku per Kg</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="ProductionCost" value="{{$datas->Production->cost}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Biaya Tenaga Kerja per Lusin</label>
            <div class="col-sm-10">
              <input type="number" class="form-control"  name="ProductionLaborCost" value="{{$datas->Production->labor_cost}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Metoda/jenis mesin rajut</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="ProductionMethod"value="{{$datas->Production->method}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Jumlah mesin</label>
            <div class="col-sm-10">
              <input type="number" class="form-control"  name="ProductionMachine" value="{{$datas->Production->total_machine}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tingkat kompetensi tenaga kerja</label>
            <div class="col-sm-10">
              <select class="form-control" name="ProductionCompetence">
                <option value="1" @if ($datas->Production->competence == 1)
                  selected
                @endif>Sangat Rendah</option>
                <option value="2" @if ($datas->Production->competence == 2)
                  selected
                @endif>Rendah</option>
                <option value="3" @if ($datas->Production->competence == 3)
                  selected
                @endif>Biasa</option>
                <option value="4" @if ($datas->Production->competence == 4)
                  selected
                @endif>Tinggi</option>
                <option value="5" @if ($datas->Production->competence == 5)
                  selected
                @endif>Sangat Tinggi</option>
              </select>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
      </form>
    </div>
  </div>
</div>
{{-- End Modal Production --}}

{{-- Modal Partner --}}
<div class="modal fade" id="PartnerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ubah Data Partner</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="{{route('update.Partner',['UKM'=>$datas->id])}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label class="col-sm-2 col-sm-push-2 control-label"><b>Suplayer</b></label>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tingkat kenaikan harga bahan baku</label>
            <div class="col-sm-10">
              <select class="form-control" name="PartnerSupIncrement">
                <option value="1" @if ($datas->Partner->suplayer_increment == 1)
                  selected
                @endif>Sangat Rendah</option>
                <option value="2" @if ($datas->Partner->suplayer_increment == 2)
                  selected
                @endif>Rendah</option>
                <option value="3" @if ($datas->Partner->suplayer_increment == 3)
                  selected
                @endif>Biasa</option>
                <option value="4" @if ($datas->Partner->suplayer_increment == 4)
                  selected
                @endif>Tinggi</option>
                <option value="5" @if ($datas->Partner->suplayer_increment == 5)
                  selected
                @endif>Sangat Tinggi</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tingkat ketersediaan pasukan bahan baku</label>
            <div class="col-sm-10">
              <select class="form-control" name="PartnerSupAvailability">
                <option value="1" @if ($datas->Partner->suplayer_availability == 1)
                  selected
                @endif>Sangat Rendah</option>
                <option value="2" @if ($datas->Partner->suplayer_availability == 2)
                  selected
                @endif>Rendah</option>
                <option value="3" @if ($datas->Partner->suplayer_availability == 3)
                  selected
                @endif>Biasa</option>
                <option value="4" @if ($datas->Partner->suplayer_availability == 4)
                  selected
                @endif>Tinggi</option>
                <option value="5" @if ($datas->Partner->suplayer_availability == 5)
                  selected
                @endif>Sangat Tinggi</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Jumlah minimal order</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="PartnerSupMinimOrder" value="{{$datas->Partner->suplayer_min_order}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tingkat akses dengan pabrikan</label>
            <div class="col-sm-10">
              <select class="form-control" name="PartnerSupAccess">
                <option value="1" @if ($datas->Partner->suplayer_access == 1)
                  selected
                @endif>Sangat Rendah</option>
                <option value="2" @if ($datas->Partner->suplayer_access == 2)
                  selected
                @endif>Rendah</option>
                <option value="3" @if ($datas->Partner->suplayer_access == 3)
                  selected
                @endif>Biasa</option>
                <option value="4" @if ($datas->Partner->suplayer_access == 4)
                  selected
                @endif>Tinggi</option>
                <option value="5" @if ($datas->Partner->suplayer_access == 5)
                  selected
                @endif>Sangat Tinggi</option>
              </select>
            </div>
          </div>
          {{-- START DISTRIBUTOR --}}
          <div class="form-group">
            <label class="col-sm-2 col-sm-push-2 control-label"><b>Distributor</b></label>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Frewensi order per bulan</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="PartnerDisFrequency" value="{{$datas->Partner->distributor_frequency}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Biaya pengiriman kg</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="PartnerDisSendCost" value="{{$datas->Partner->distributor_send_cost}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Wilayah distribusi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="PartnerDisArea" value="{{$datas->Partner->distributor_area}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tingkat keluhan pelanggan</label>
            <div class="col-sm-10">
              <select class="form-control" name="PartnerDisComplaint">
                <option value="1" @if ($datas->Partner->distributor_accuracy == 1)
                  selected
                @endif>Sangat Rendah</option>
                <option value="2" @if ($datas->Partner->distributor_accuracy == 2)
                  selected
                @endif>Rendah</option>
                <option value="3" @if ($datas->Partner->distributor_accuracy == 3)
                  selected
                @endif>Biasa</option>
                <option value="4" @if ($datas->Partner->distributor_accuracy == 4)
                  selected
                @endif>Tinggi</option>
                <option value="5" @if ($datas->Partner->distributor_accuracy == 5)
                  selected
                @endif>Sangat Tinggi</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tingkat ketepatan pembayaran</label>
            <div class="col-sm-10">
              <select class="form-control" name="PartnerDisAccuracy">
                <option value="1">Sangat Rendah</option>
                <option value="2">Rendah</option>
                <option value="3">Biasa</option>
                <option value="4">Tinggi</option>
                <option value="5">Sangat Tinggi</option>
              </select>
            </div>
          </div>
          {{-- END DISTRIBUTOR --}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
      </form>
    </div>
  </div>
</div>
{{-- End Modal Partner --}}
{{-- START Finance --}}
<div class="modal fade" id="FinanceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ubah Data Keuangan</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="{{route('finance.update',['UKM' =>$datas->id])}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Biaya Produksi per Bulan</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="FinanceCost" value="{{$datas->Finance->cost}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Pendapatan/omset per bulan</label>
            <div class="col-sm-10">
              <input type="number" class="form-control"  name="FinanceIncome" value="{{$datas->Finance->income}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Keuntungan per Bulan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="FinanceProfit"value="{{$datas->Finance->profit}}">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
      </form>
    </div>
  </div>
</div>
{{-- END Finance --}}
