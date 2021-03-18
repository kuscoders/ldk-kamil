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
    width: 50px;
  }
  </style>

</head>
<body>
    <div class="main-content">
    <section class="section">
            <div class="section-header">
                <h3 align="center" style="padding: 20px;">Surat Undangan </h3>
            </div>

        

        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.surat.genrate.undangan_pdf') }}" method="post">
                    @csrf 
                    <div class="mb-3">
                    <label for="nomor" class="form-label">Nomor Surat</label>
                    <input type="nomor" class="form-control" id="nomor_surat" name="nomor_surat" value="{{old('nomor_surat')}}">
                            @error('nomor_surat')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <div class="col-md-5">
                                <label for="kepada" class="form-label">Kepada</label>
                                <select name='kepada'>
                                        <option selected>Pilih...</option>
                                        <option value='BEM'>Senin</option>
                                        <option value='DPM'>Selasa</option>
                                        <option value='Network Comunity'>Rabu</option>
                                        <option value='Programming Community'>Kamis</option>
                                        <option value='ESC'>Jum'at</option>
                                        <option value='Mapala'>Sabtu</option>
                                </select>
                        </div>
                    </div>

                    <div class="mb-3">
                    <label for="kegiatan" class="form-label">Kegiatan</label>
                    <input type="kegiatan" class="form-control" id="kegiatan" name="kegiatan" value="{{old('kegiatan')}}">
                            @error('deskripsi')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>  

                    <!-- date -->
                    <div class="mb-3">
                        <div class="col-md-5">
                                <label for="hari" class="form-label">Hari</label>
                                <select name='hari'>
                                        <option selected>Pilih...</option>
                                        <option value='Senin'>Senin</option>
                                        <option value='Selasa'>Selasa</option>
                                        <option value='Rabu'>Rabu</option>
                                        <option value='Kamis'>Kamis</option>
                                        <option value='Jum`at'>Jum'at</option>
                                        <option value='Sabtu'>Sabtu</option>
                                        <option value='Jum`at'>Jum'at</option>
                                        <option value='Ahad'>Ahad</option>
                                </select>
                        </div>
                    </div>
                    <div class="mb-3">
                    <label for="tanggal" class="form-label">tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{old('tanggal')}}">
                            @error('tangggal')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div> 
                    <div class="mb-3">
                    <label for="waktu" class="form-label">waktu</label>
                    <input type="time" class="form-control" id="waktu" name="waktu" value="{{old('waktu')}}">
                            @error('waktu')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div> 
                    <div class="mb-3">
                    <label for="tempat" class="form-label">tempat</label>
                    <input type="tempat" class="form-control" id="tempat" name="tempat" value="{{old('tempat')}}">
                            @error('tempat')
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
