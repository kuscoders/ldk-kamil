<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Gallery;
use DB;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:kader.index|kader.create|kader.edit|kader.delete|kader.show']);
    }

    public function index()
    {
        $gallery = Gallery::all();

        return view('admin.gallery.index', compact('gallery'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $fotoName = time() . "_" . $foto->getClientOriginalName();
        $path = 'gallery/';
        $foto->move($path, $fotoName);

        $gallery = Gallery::create([
            'foto'=>$fotoName,
            'keterangan'=>$request->keterangan
        ]);

        if ($gallery) {
            return redirect('admin/galeries/')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect('admin/galeries/')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit($id)
    {
        $gallery = Gallery::where('gallery_id',$id)->first();

        return view('admin.gallery.edit',compact('gallery'));
    }

    public function update(Request $request,$id)
    {
        $data = Gallery::where('gallery_id',$id)->first();

        if($request->foto != null)
        {
            Storage::disk('local')->delete('public/gallery/' . $data->foto);
            $foto = $request->file('foto');
            $fotoName = time() . "_" . $foto->getClientOriginalName();
            $path = 'gallery/';
            $foto->move($path, $fotoName);
        }
        
        $gallery = Gallery::where('gallery_id',$id)->update([
            'foto'=>$fotoName ?? $data->foto,
            'keterangan'=>$request->keterangan
        ]);

        if ($gallery) {
            return redirect('admin/galeries/')->with(['success' => 'Data Berhasil Di Update!']);
        } else {
            return redirect('admin/galeries/')->with(['error' => 'Data Gagal Di Update!']);
        }
    }

    public function delete($id)
    {
        $gallery = Gallery::where('gallery_id',$id)->first();
        Storage::disk('local')->delete('public/gallery/' . $gallery->foto);
        $galleries = DB::table('galeries')->where('gallery_id',$id)->delete();

        if ($galleries) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
