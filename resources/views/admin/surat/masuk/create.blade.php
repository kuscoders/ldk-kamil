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
                <h3 align="center" style="padding: 20px;">Tambahkan Surat</h3>
            </div>

        

        <div class="card">
            <div class="card-body">
                <form action="/admin/surat/masuk" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- <div class="mb-3">
                    <label for="id" class="form-label">ID Surat</label>
                    <input type="id" class="form-control" id="id" name="id" value="{{old('id')}}">
                            @error('id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div> -->
                    <div class="mb-3">
                    <label for="nomor" class="form-label">Asal</label>
                    <input type="nomor" class="form-control" id="asal" name="asal" value="{{old('asal')}}">
                            @error('asal')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                    <label for="jenisSurat" class="form-label">Nomor Surat</label>
                    <input type="jenisSurat" class="form-control" id="nomor_surat" name="nomor_surat" value="{{old('nomor_surat')}}">
                            @error('nomor_surat')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="col-md-5">
                        <div class="mb-3">
                        <label for="desc" class="form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" value="{{old('tgl_masuk')}}">
                                @error('tgl_masuk')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>     

                    <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="deskripsi" class="form-control" id="deskripsi" name="deskripsi" value="{{old('deskripsi')}}">
                            @error('deskripsi')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                    <label for="thumbnail">Upload Gambar</label>
                    <input type="file" class="form-control-file" id="thumbnail" name="thumbnail" value="{{old('thumbnail')}}">
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

