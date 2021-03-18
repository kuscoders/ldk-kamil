@extends('layouts.app')

@section('content')
<style>
.tombol{
     border-radius: 40px;
 }

 
</style>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<div class="main-content">
   <section class="section">
        <div class="section-header">
            <a href="keluar/create" class="btn btn-primary" style="box-shadow: 2px 2px 0 0 darkslategray;">Tambahkan Surat Keluar</a>
            
            <div class="grid" style="padding-left: 60%;">
                <form action="{{ route('admin.surat.keluar.cari') }}" method="GET">
                    <div class="input-group-append">
                    <input type="text" class="form-control tombol" name="cari" placeholder="Cari Kegiatan" value="{{ old('cari') }}" width="100px">
                    <!-- <i class="fa fa-search"></i> -->
                        <button type="submit" class="btn tombol "><i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
        <!-- <form action="{{ route('admin.surat.keluar.cari') }}" method="GET">
            <div class="input-group-append">
            <input type="text" class="form-control" name="cari" placeholder="Cari Berdasarkan Deskripsi" value="{{ old('cari') }}" >
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> CARI
                </button>
            </div>
	    </form> -->
    <div class="card">
        <table class="table" align="center">
            <thead>
              <tr>
                  <th scope="col">ID Surat</th>
                  <th scope="col">Nomor Surat</th>
                  <th scope="col">Perihal</th>
                  <th scope="col">Kegiatan</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($surat as $no => $sr) 
                <tr>
                    <td>{{ $sr->id }}</td>
                    <td>{{ $sr->nomor_surat }}</td>
                    <td>{{ $sr->perihal }}</td>
                    <td>{{ $sr->deskripsi }}</td>
                    <td><img src="http://localhost:8000/image/{{ ucfirst($sr->thumbnail)}}" style="height: 70px; width: 50px;"></td>
                    <td> 
                        <a href="keluar/{{$sr->id}}/read" class="btn btn-primary">Lihat</a>
                    </td>                                                 
                </tr>
            @endforeach
            </tbody>
        </table>  
    </div>

   

    
        <!-- @foreach ($surat->Chunk(4) as $srChunk)
        <div class="row"> 
            @foreach ($srChunk as $surat)
                <div class="col-md-3 col-sm-12 mb-3">
                    <div class="card card-statistic-1">                                       
                        <div class="card-body">
                        <img src="http://localhost:8000/image/{{ ucfirst($surat->thumbnail)}}" style="height: 150px; width: 50%; display :block; margin : auto;">
                            <div class="card-title"><strong>{{($surat->tujuan)}}</strong></div>
                            <p style="font-size: 15px;">{{($surat->perihal)}}</p>
                            <p style="font-size: 15px;">{{($surat->deskripsi)}}</h>
                        </div>
            
                        <div class="card-footer">
                        <a href="keluar/{{$surat->id}}/read" class="btn btn-secondary" style="width: 100%; color:black">Lihat</a> -->
                        <!-- <form action="{{ route('admin.surat.keluar.destroy', $surat->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn bg-danger" onclick="return confirm('Anda yakin mau menghapus item ini?')">Hapus</button>
                        </form> -->
                        <!-- </div>
                    </div>
                </div>
            @endforeach 
        </div>
        @endforeach -->


    </section>  
    </div>
            

@endsection

