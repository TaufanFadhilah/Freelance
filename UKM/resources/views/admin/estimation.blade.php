@extends('layouts.app')
@section('content')
  <div class="page-header">
      <h1>Pengaturan Estimasi</h1>
      <ol class="breadcrumb">
          <li><a href="index.php">Estimasi</a></li>
      </ol>
  </div>
  <div class="content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body" style="padding: 20px;">
                  @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><i class="ti-close"></i></button>
                      <strong>Sukses!</strong> {{ session('status') }}.
                  </div>
                  @endif
                  <div class="panel panel-default">
                    <form enctype="multipart/form-data" action="{{route('update.Estimation',['Estimation' => $datas->id])}}" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group">
                          <label>Estimasi jumlah UKM</label>
                          <input type="number" name="total" class="form-control" value="{{$datas->total}}" required>
                      </div>
                      <div class="form-group">
                          <label>Klaster UKM kecil</label>
                          <input type="number" name="small" class="form-control" value="{{$datas->small}}" required>
                      </div>
                      <div class="form-group">
                          <label>Klaster UKM sedang</label>
                          <input type="number" name="medium" class="form-control" value="{{$datas->medium}}" required>
                      </div>
                      <div class="form-group">
                          <label>Klaster UKM besar</label>
                          <input type="number" name="high" class="form-control" value="{{$datas->high}}" required>
                      </div>
                      <button type="submit" class="btn btn-warning">Simpan</button>
                    </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
@endsection
