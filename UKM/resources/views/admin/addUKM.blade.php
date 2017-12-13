@extends('layouts.app')
@section('content')
  <div class="page-header">
      <h1>Tambah UKM</h1>
      <ol class="breadcrumb">
          <li><a href="index.php">UKM</a></li>
          <li class="active">Tambah UKM</li>
      </ol>
  </div>
  <div class="content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body" style="padding: 20px;">
                  <div class="panel panel-default">
                    <form enctype="multipart/form-data" action="{{route('create.UKM')}}" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group">
                          <label>Nama UKM</label>
                          <input type="text" name="name" class="form-control" placeholder="Nama UKM" required>
                      </div>
                      <div class="form-group">
                          <label>Alamat</label>
                          <textarea name="address" class="form-control" placeholder="Alamat" required></textarea>
                      </div>
                      <div class="form-group">
                          <label>Tahun Berdiri</label>
                          <input type="number" name="establish" class="form-control" placeholder="Tahun Berdiri"  required>
                      </div>
                      <div class="form-group">
                          <label>Kategori</label>
                          <select class="form-control" name="category">
                            <option value="1">UKM Kecil</option>
                            <option value="2">UKM Sedang</option>
                            <option value="3">UKM Besar</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Foto</label>
                          <input type="file" name="photo">
                          <p class="help-block">Masukan foto UKM</p>
                      </div>
                      <button type="submit" class="btn btn-info">Tambah</button>
                    </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
@endsection
