@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
  .input{
    width: 1000px;
  }
  .tombol{
     border-radius: 40px;
  }
 
  </style>

</head>
<body>
    <div class="main-content">
    <section class="section">
            <div class="section-header">
                <h3 align="center" style="padding: 20px;">Detil Surat</h3>
            </div>

            <div class="card">
                    <div class="card-header">
                        <img src="http://localhost:8000/image/{{ ucfirst($surat->thumbnail)}}" style="height: 50%; width: 50%; display: block; margin: auto;">
                    </div> 
            <div class="card-body">
                
                    <div class="mb-3">
                    <h5>Nomor Surat : {{$surat->nomor_surat}}  </h5>
                    </div>

                    <div class="mb-3"> Perihal :
                    <h5>{{$surat->perihal}}</h5>
                    </div>

                    <div class="mb-3"> Kegiatan :
                    <h5>{{$surat->deskripsi}}</h5>
                    </div>  

                    <div class="mb-3"> Ditujukan Kepada :
                    <h5>{{$surat->tujuan}}</h5>
                    </div>  

                    <!-- <a href="read/edit" class="btn btn-info">Edit</a> -->
                      <form action="{{ route('admin.surat.keluar.destroy', $surat->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn fa fa-trash tombol " style="width: 20%; color: red; box-shadow: 2px 2px 1px 1px darkslategray;" onclick="return confirm('Anda yakin mau menghapus item ini?')">Hapus</button>
                            <a href="read/edit" class="btn fa fa-pencil-alt tombol" style="width: 20%; color: blue; box-shadow: 2px 2px 0 0 darkslategray;">Edit</a>
                        </form>
            </div>         
        </div>
        </section>  
    </div>
</body>
</html>
    
    



@endsection

