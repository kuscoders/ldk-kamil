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
            <a href="masuk/create" class="btn btn-primary">Tambahkan Surat Masuk</a>
            <div class="grid" style="padding-left: 60%;">
                <form action="{{ route('admin.surat.masuk.cari') }}" method="GET">
                    <div class="input-group-append">
                    <input type="text" class="form-control tombol" name="cari" placeholder="asal" value="{{ old('cari') }}" width="100px">
                        <button type="submit" class="btn"><i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
        <table class="table" align="center">
            <thead>
              <tr>
                  <th scope="col">Asal</th>
                  <th scope="col">Nomor Surat</th>
                  <th scope="col">Tanggal Masuk</th>
                  <th scope="col">Kegiatan</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($sr as $no => $surat) 
                <tr>
                    <td>{{ $surat->asal }}</td>
                    <td>{{ $surat->nomor_surat }}</td>
                    <td>{{ $surat->tgl_masuk }}</td>
                    <td>{{ $surat->deskripsi }}</td>
                    <td><img src="http://localhost:8000/image/{{ ucfirst($surat->thumbnail)}}" style="height: 70px; width: 50px;"></td>
                    <td> 
                        <a href="masuk/{{$surat->id}}/read" class="btn btn-primary">Lihat</a>
                    </td>                                                 
                </tr>
            @endforeach
            </tbody>
        </table>  
    </div>

        <!-- @foreach ($sr->Chunk(4) as $srChunk)
        <div class="row"> 
            @foreach ($srChunk as $sr)
                <div class="col-md-3 col-sm-12 mb-3">
                    <div class="card card-statistic-1">                                       
                        <div class="card-body">
                        <img src="http://localhost:8000/image/{{ ucfirst($sr->thumbnail)}}" style="height: 150px; width: 50%; display :block; margin : auto;">
                            <div class="card-title"><strong>{{($sr->asal)}}</strong></div>
                            <p style="font-size: 15px;">{{($sr->deskripsi)}}</h>
                        </div>
            
                        <div class="card-footer">
                        <a href="masuk/{{$sr->id}}/read" class="btn btn-secondary" style="width: 100%; color: black;">Lihat</a>
                       
                                
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
        @endforeach -->

    </section>  
    </div>
            

@endsection

