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
                <form action="{{ route('admin.surat.masuk.update', $sr->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                    <label for="id" class="form-label">ID Surat</label>
                    <input type="id" class="form-control" id="id" name="id" 
                        value="{{old('id') ? old('id') : $sr->id}}" disabled>
                            @error('id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                    <label for="nomor" class="form-label">Asal</label>
                    <input type="nomor" class="form-control" id="asal" name="asal"
                        value="{{old('asal') ? old('asal') : $sr->asal}}">
                            @error('asal')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                    <label for="jenisSurat" class="form-label">Nomor Surat</label>
                    <input type="nomor_surat" class="form-control" id="nomor_surat" name="nomor_surat"
                        value="{{old('nomor_surat') ? old('nomor_surat') : $sr->nomor_surat}}">
                            @error('nomor_surat')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-3 col-md-5">
                    <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
                    <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk"
                        value="{{old('tgl_masuk') ? old('tgl_masuk') : $sr->tgl_masuk}}">
                            @error('tgl_masuk')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>     
                    <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="deskripsi" class="form-control" id="deskripsi" name="deskripsi"
                        value="{{old('deskripsi') ? old('deskripsi') : $sr->deskripsi}}">
                            @error('deskripsi')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                    <label for="thumbnail">Upload Gambar</label>
                    <input type="file" class="form-control-file" id="thumbnail" name="thumbnail"
                        value="{{old('thumbnail') ? old('thumbnail') : $sr->thumbnail}}">

                            @error('thumbnail')  
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                  
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

