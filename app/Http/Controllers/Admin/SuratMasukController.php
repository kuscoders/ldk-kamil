<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\suratMasuk;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;


class SuratMasukController extends Controller
{
    public function index(){
        $sr = suratMasuk::Latest()->get();
        return view('admin.surat.masuk.index',compact('sr'));
    }

    public function create(){
        $sr = suratMasuk::Latest()->get();
        return view('admin.surat.masuk.create', compact('sr'));
    }

    public function store(Request $request){
        // dd($request)->all();
        $this->validate($request, [
            // 'id' => 'required|max:10|min:1',
            'asal' => 'required|max:255|min:1',
            'nomor_surat' => 'required|max:10|min:1',
            'tgl_masuk' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'thumbnail' => 'mimes:jpeg, jpg, png',
        ]);

        $imgName = $request->thumbnail->getClientOriginalName() . '-' . time()
                                    . '.' . $request->thumbnail->extension();

        $request->thumbnail->move(public_path('image'), $imgName);

        $simpn = suratMasuk::create([
            // 'id' => $request->input('id'),
            'asal' => $request -> input ('asal'),
            'nomor_surat' => $request->input ('nomor_surat'),
            'tgl_masuk' => $request->input ('tgl_masuk'),
            'deskripsi' => $request->input ('deskripsi'),
            'thumbnail' => $imgName,
        ]);

        if($simpn){
            return redirect()->route('admin.surat.masuk.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('admin.surat.masuk.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function read($id)
    {
        $sr = suratMasuk::findOrfail($id);
        return view('admin.surat.masuk.read',compact('sr'));
    }
    public function edit($id)
    {
        $sr = suratMasuk::findOrfail($id);
        return view('admin.surat.masuk.edit',compact('sr'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());

        $this->validate($request, [
            // 'id' => 'required|max:10|min:1',
            'asal' => 'required|max:50|min:1',
            'nomor_surat' => 'required|max:10|min:1',
            'tgl_masuk' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'thumbnail' => 'mimes:jpeg, jpg, png',
        ]);        
        $imgName = $request->thumbnail->getClientOriginalName() . '-' . time()
                                . '.' . $request->thumbnail->extension();

        $request->thumbnail->move(public_path('image'), $imgName);
        
        $sr = suratMasuk::find($id);  

            $sr->update([
                // 'id' => $request->input('id'),
                'asal' => $request->input ('asal'),
                'nomor_surat' => $request->input ('nomor_surat'),
                'tgl_masuk' => $request->input ('tgl_masuk'),
                'deskripsi' => $request->input ('deskripsi'),
                'thumbnail' => $imgName,
            ]);
    
        if($sr){
            return redirect()->route('admin.surat.masuk.read', compact('sr', 'id'))->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('admin.surat.masuk.read', compact('sr', 'id'))->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function destroy(Request $request, $id)
    {
        // dd($request->all());
        $sr = suratMasuk::findOrFail($id)->delete();

        if($sr){
            return redirect()->route('admin.surat.masuk.index')->with(['success' => 'Data Telah Dihapus    !']);
        } else {
            return redirect()->route('admin.surat.masuk.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function cari(Request $request)
        {
            $sr = suratMasuk::latest()->when(request()->cari, function ($sr) {
                $sr = $sr->where('asal', 'like', '%' . request()->cari . '%');
            })->paginate(10);
    
            return view('admin.surat.masuk.index', compact('sr'));
        
        }

}
