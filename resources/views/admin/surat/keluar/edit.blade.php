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
  </style>

</head>
<body>
    <div class="main-content">
    <section class="section">
            <div class="section-header">
                <h3 align="center" style="padding: 20px;">Edit Surat</h3>
            </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.surat.keluar.update', $surat->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf   
                    @method('PUT')
                    <div class="mb-3">
                    <label for="id" class="form-label">ID Surat</label>     
                    <input type="id" class="form-control" id="id" name="id" 
                        value="{{old('id') ? old('id') : $surat->id}}" disabled>
                    </div>
                    <div class="mb-3">
                    <label for="nomor" class="form-label">Nomor Surat</label>
                    <input type="nomor" class="form-control" id="nomor_surat" name="nomor_surat" 
                        value="{{old('nomor_surat') ? old('nomor_surat') : $surat->nomor_surat}}">
                           
                    </div>
                    <div class="mb-3">
                    <label for="jenisSurat" class="form-label">Perihal</label>
                    <input type="jenisSurat" class="form-control" id="perihal" name="perihal" 
                        value="{{old('perihal') ? old('perihal') : $surat->perihal}}">
                            
                    </div>
                    <div class="mb-3">
                    <label for="desc" class="form-label">Kegiatan</label>
                    <input type="desc" class="form-control" id="deskripsi" name="deskripsi" 
                        value="{{old('deskripsi') ? old('deskripsi') : $surat->deskripsi}}">
                    </div>     

                    
                    <div class="mb-3">
                    <label for="tujuan" class="form-label">Tujuan</label>
                    <input type="tujuan" class="form-control" id="tujuan" name="tujuan" 
                        value="{{old('tujuan') ? old('tujuan') : $surat->tujuan}}">
                    </div>  
                    
                    <!-- <div class="mb-3">
                    <label for="desc" class="form-label">File</label>
                    <!-- <input type="desc" class="form-control" id="file" name="file"  -->
                        <!-- <img src="http://localhost:8000/image/{{ ucfirst($surat->thumbnail)}}" style="height: 200px; width: 200px;">
                    </div>    --> 

                    <div class="form-group">
                    <label for="thumbnail">Upload Gambar</label>
                    <input type="file" class="form-control-file" id="thumbnail" name="thumbnail"
                        value="{{old('thumbnail') ? old('thumbnail') : $surat->thumbnail}}">
                            <!-- @error('thumbnail')  
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror      -->
                    </div>


                    <button type="submit" class="btn btn-primary">submit</button>
            </form>
            </div>
        </div>


        </section>  
    </div>

</body>
</html>

@endsection

