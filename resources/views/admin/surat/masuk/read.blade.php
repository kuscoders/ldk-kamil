@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
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
            <div class="card-body">
                    <div class="mb-3">
                    <img src="http://localhost:8000/image/{{ ucfirst($sr->thumbnail)}}" style="height: 50%; width: 50%; display: block; margin: auto;">
                    </div>   

                    <div class="mb-3"> Asal Surat :
                    <h5>{{$sr->asal}}</h5>
                    </div>

                    <div class="mb-3"> Nomor Surat :
                    <h5>{{$sr->nomor_surat}}  </h5>
                    </div>

                    <div class="mb-3"> Agenda :
                    <h5>{{$sr->deskripsi}}</h5>
                    </div>

                    

                          <form action="{{ route('admin.surat.masuk.destroy', $sr->id) }}" method="POST">
                             @csrf
                             @method('DELETE')
                             <button class="btn tombol fa fa-trash" style="width: 20%; color: red; box-shadow: 2px 2px 1px 1px darkslategray;" onclick="return confirm('Anda yakin mau menghapus item ini?')">Hapus</button>
                             <a href="read/edit" class="btn btn tombol fa fa-pencil-alt" style="width: 20%; color: blue; box-shadow: 2px 2px 1px 1px darkslategray;">Edit</a>
                            </form>
                    
            </div>
            
        </div>


        </section>  
    </div>

</body>
</html>
    
    



@endsection

