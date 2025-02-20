@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-6 col-12 mb-4">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>1000</h3>
                <p>Pengunjung Harian</p>
            </div>
            <a href="#"class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-6 col-12 mb-4">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>100</h3>
                <p>Ulasan Museum</p>
            </div>
            <a href="#"class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
@endsection
