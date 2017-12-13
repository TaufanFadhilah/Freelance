@extends('layouts.app')
@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.0/css/buttons.dataTables.min.css">
@endsection
@section('content')
<div class="page-header">
    <h1>Daftar Seluruh UKM</h1>
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
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><i class="ti-close"></i></button>
                    <strong>Sukses!</strong> {{ session('status') }}.
                </div>
                @endif
                <a href="{{route('add.UKM')}}"><button class="btn btn-info">Tambah UKM</button></a>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <table class="table" id="dt">
                      <thead>
                        <tr>
                          <th>Foto</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Tahun Berdiri</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($datas as $row)
                          <tr>
                            <td><img src="{{url('storage/'.$row->photo)}}" class="img-thumbnail" style="max-height: 75px"></td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->address}}</td>
                            <td>{{$row->establish}}</td>
                            <td>
                              <a href="{{route('detail.UKM',['UKM' => $row->id])}}"><button class="btn btn-success">Lihat Detail</button></a>
                              <a href="{{route('delete.UKM',['UKM'=> $row->id])}}"><button class="btn btn-danger">Hapus</button></a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
@endsection
@section('js')
  {{-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8"></script> --}}
  <script src="//code.jquery.com/jquery-1.12.4.js" type="text/javascript" charset="utf-8"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.0/js/dataTables.buttons.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="//cdn.datatables.net/buttons/1.5.0/js/buttons.flash.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js" type="text/javascript" charset="utf-8"></script>
  <script src="//cdn.datatables.net/buttons/1.5.0/js/buttons.html5.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="//cdn.datatables.net/buttons/1.5.0/js/buttons.print.min.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#dt').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
  } );
  </script>
@endsection
