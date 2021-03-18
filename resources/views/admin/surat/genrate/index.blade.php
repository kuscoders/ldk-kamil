@extends('layouts.app')

@section('content')
<style>
.tombol{
     border-radius: 40px;
 }
</style>

<div class="main-content">
   <section class="section">
        <div class="section-header">
            <!-- <a href="genrate/create" class="btn btn-primary" style="box-shadow: 2px 2px 0 0 darkslategray;">Buat Surat</a> -->
            <!-- <a href="genrate/keluar" class="btn btn-primary" style="box-shadow: 2px 2px 0 0 darkslategray;">Surat Izin Kegiatan</a> -->
            <h1>Generate Surat</h1>
        </div>


            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fa fa-envelope text-white fa-2x"></i>
                        </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Surat</h4>
                        </div>
                    <div class="card-body">
                        <p style="color: black; font-size: 16px;"><strong>Izin Kegiatan</strong></p>
                    </div>
                    <div class="card-footer">
                        <a href="genrate/keluar" class="btn btn-secondary" style="width: 100%; color:black">Buat</a>
                    </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fa fa-envelope text-white fa-2x"></i>
                        </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Surat</h4>
                        </div>
                    <div class="card-body">
                        <p style="color: black; font-size: 16px;"><strong>Peminjaman Ruang & Alat</strong></p>
                    </div>
                    <div class="card-footer">
                        <a href="genrate/izinRuangan" class="btn btn-secondary" style="width: 100%; color:black">Buat</a>
                    </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fa fa-envelope text-white fa-2x"></i>
                        </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Surat</h4>
                        </div>
                    <div class="card-body">
                        <p style="color: black; font-size: 16px;"><strong>Undangan</strong></p>
                    </div>
                    <div class="card-footer">
                        <a href="genrate/undangan" class="btn btn-secondary" style="width: 100%; color:black">Buat</a>
                    </div>
                    </div>
                    </div>
                </div>


            </div>
    </section>  
    </div>
            

@endsection

