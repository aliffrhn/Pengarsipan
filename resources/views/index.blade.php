@extends('master')

@section('title', 'index')

@section('grandtitle', 'Dashboard')
@section('subtitle', 'Activity')

@section('breadkiri', 'Home')
@section('breadkanan', 'Dashboard')

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>150</h3>

        <p>Surat Masuk</p>
      </div>
      <div class="icon">
        <i class="ion ion-arrow-down-c"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>200</sup></h3>

        <p>Surat Keluarr</p>
      </div>
      <div class="icon">
        <i class="ion ion-arrow-up-c"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- <div class="col-lg-3 col-xs-6"> -->
    <!-- small box -->
    <!-- <div class="small-box bg-red">
      <div class="inner">
        <h3>65</h3>

        <p>Unique Visitors</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div> -->
</div>
@endsection
