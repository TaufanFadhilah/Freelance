@extends('layouts.app')

@section('content')
  <div class="page-header">
      <h1>Beranda <small>Selamat datang kembali <span class="text-primary">Admin</span></small></h1>
      <ol class="breadcrumb">
          <li><a href="{{route('home')}}">Beranda</a></li>
      </ol>
  </div>
  <div class="content-wrap">  <!--START: Content Wrap-->
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">UKM Kecil</h3>
                </div>
                <div class="panel-body">
                    <div class="clearfix">
                        <canvas id="chart1" height="462" width="924" style="width: 352px; height: 176px;"></canvas>
                        <p>Jumlah UKM Kecil {{count($smallUKM)}}</p>
                        <p>Klaster UKM Kecil {{number_format($smallEstimation)}} %</p>
                        <a href="{{route('profil.UKM',['cat' => 1])}}"><button class="btn btn-success">Lihat profil UKM kecil</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">UKM Sedang</h3>
                </div>
                <div class="panel-body">
                    <div class="clearfix">
                        <canvas id="chart2" height="462" width="924" style="width: 352px; height: 176px;"></canvas>
                        <p>Jumlah UKM Sedang {{count($mediumUKM)}}</p>
                        <p>Klaster UKM Sedang {{number_format($mediumEstimation)}} %</p>
                        <a href="{{route('profil.UKM',['cat' => 2])}}"><button class="btn btn-success">Lihat profil UKM sedang</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">UKM Besar</h3>
                </div>
                <div class="panel-body">
                    <div class="clearfix">
                        <canvas id="chart3" height="462" width="924" style="width: 352px; height: 176px;"></canvas>
                        <p>Jumlah UKM Besar {{count($highUKM)}}</p>
                        <p>Klaster UKM Besar {{number_format($highEstimation)}} %</p>
                        <a href="{{route('profil.UKM',['cat' => 3])}}"><button class="btn btn-success">Lihat profil UKM besar</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Estimasi</h3>
                </div>
                <div class="panel-body">
                    <div class="clearfix">
                        <table class="table">
                          <tr>
                            <td>Total Industri</td>
                            <td>{{number_format($totalIndustries)}}</td>
                          </tr>
                          <tr>
                            <td colspan="2">
                              <a href="{{route('profil.UKM',['cat' => 4])}}"><button class="btn btn-success">Lihat profil UKM keseluruhan</button></a>
                            </td>
                          </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
@endsection
@section('js')
  <script type="text/javascript">
  $( document ).ready(function() {
      var ctx3 = document.getElementById("chart1").getContext("2d");
      var data3 = [
        @foreach ($smallUKM as $row)
        {
          value: {{$row->Finance->profit}},
          color:"#da4f46",
          highlight: "#da4f46",
          label: "{{$row->name}}"
        },
        @endforeach
      ]
      var myPieChart = new Chart(ctx3).Pie(data3,{
          segmentShowStroke : true,
          segmentStrokeColor : "#fff",
          segmentStrokeWidth : 0,
          animationSteps : 100,
      tooltipCornerRadius: 0,
          animationEasing : "easeOutBounce",
          animateRotate : true,
          animateScale : false,
          legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
          responsive: true
      });

  });
  $( document ).ready(function() {
      var ctx3 = document.getElementById("chart2").getContext("2d");
      var data3 = [
        @foreach ($mediumUKM as $row)
        {
          value: {{$row->Finance->profit}},
          color: "#fbd000",
          highlight: "#fbd000",
          label: "{{$row->name}}"
        },
        @endforeach
      ]
      var myPieChart = new Chart(ctx3).Pie(data3,{
          segmentShowStroke : true,
          segmentStrokeColor : "#fff",
          segmentStrokeWidth : 0,
          animationSteps : 100,
      tooltipCornerRadius: 0,
          animationEasing : "easeOutBounce",
          animateRotate : true,
          animateScale : false,
          legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
          responsive: true
      });

  });
  $( document ).ready(function() {
      var ctx3 = document.getElementById("chart3").getContext("2d");
      var data3 = [
        @foreach ($highUKM as $row)
        {
          value: {{$row->Finance->profit}},
          color: "#00a6e2",
          highlight: "#00a6e2",
          label: "{{$row->name}}"
        },
        @endforeach
      ]
      var myPieChart = new Chart(ctx3).Pie(data3,{
          segmentShowStroke : true,
          segmentStrokeColor : "#fff",
          segmentStrokeWidth : 0,
          animationSteps : 100,
      tooltipCornerRadius: 0,
          animationEasing : "easeOutBounce",
          animateRotate : true,
          animateScale : false,
          legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
          responsive: true
      });

  });
  </script>
  <script type="text/javascript" src="{{asset('plugins/chartjs/Chart.min.js')}}"></script>
@endsection
