@extends('layouts.app')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Gallery</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-file-image"></i> Edit Gallery</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/galeries/update/'.$gallery->gallery_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="foto" class="font-weight-bold">Foto</label>
                                    <br>
                                    <img src="{{url('gallery/'.$gallery->foto)}}" class="w-50 mt-2 mb-2" alt="">
                                    <input type="file" name="foto" id="foto" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="keterangan" class="font-weight-bold">Keterangan</label>
                                    <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" required>{{$gallery->keterangan}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                                        UPDATE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop