<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Datatables;


class SuratController extends Controller
{
    public function index()
    {
        $surat = Surat::latest()->get();

        // dd(Surat::latest()->get());
        return view('admin.surat.keluar.index',compact("surat"));
    }
    public function datajson()
    {
        return Datatables::of(Surat::all())->make(true);
    }

    public function read($id)
    {
        $surat = Surat::findOrfail($id);
        return view('admin.surat.keluar.read', compact("surat"));
    }

    public function create()
    {
        $surat = Surat::latest()->get();
        return view('admin.surat.keluar.create', compact("surat"));
    }

    public function store(Request $request)
    {
        // dd($request);
        // dd($request->thumbnail);
        $this->validate($request, [
            // 'id' => 'required|max:10|min:1',
            'nomor_surat' => 'required|max:10|min:1',
            'perihal' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'tujuan' => 'required|max:255',
            'thumbnail' => 'mimes:jpeg, jpg, png',
        ]);

        $imgName = $request->thumbnail->getClientOriginalName() . '-' . time()
                                . '.' . $request->thumbnail->extension();

        $request->thumbnail->move(public_path('image'), $imgName);

        $simpn = Surat::create([
            // 'id' => $request->input('id'),
            'nomor_surat' => $request->input ('nomor_surat'),
            'perihal' => $request->input ('perihal'),
            'deskripsi' => $request->input ('deskripsi'),
            'tujuan' => $request->input ('tujuan'),
            'thumbnail' => $imgName,
        ]);

        if($simpn){
            return redirect()->route('admin.surat.keluar.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('admin.surat.keluar.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Request $request, $id)
    {
       
        $surat = Surat::findOrfail($id);
        return view('admin.surat.keluar.edit', compact('surat'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());

        $this->validate($request, [
            // 'id' => 'required|max:10|min:1',
            'nomor_surat' => 'required|max:10|min:1',
            'perihal' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'tujuan' => 'required|max:255',
            'thumbnail' => 'mimes:jpeg, jpg, png',
        ]);        
        $imgName = $request->thumbnail->getClientOriginalName() . '-' . time()
                                . '.' . $request->thumbnail->extension();

        $request->thumbnail->move(public_path('image'), $imgName);
        
        $surat = Surat::findOrfail($id);  

            $surat->update([
                // 'id' => $request->input('id'),
                'nomor_surat' => $request->input ('nomor_surat'),
                'perihal' => $request->input ('perihal'),
                'deskripsi' => $request->input ('deskripsi'),
                'tujuan' => $request->input ('tujuan'),
                'thumbnail' => $imgName,
            ]);
    
        if($surat){
            return redirect()->route('admin.surat.keluar.read', compact('surat', 'id'))->with(['success' => 'Data Berhasil Diubah!']);
        } else {
            return redirect()->route('admin.surat.keluar.read', compact('surat', 'id'))->with(['error' => 'Data Gagal Diubah!']);
        }
    }

    public function destroy(Request $request, $id)
    {
        // dd($request->all());
        $surat = Surat::findOrFail($id)->delete();

        if($surat){
            return redirect()->route('admin.surat.keluar.index')->with(['success' => 'Data Telah Dihapus!']);
        } else {
            return redirect()->route('admin.surat.keluar.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
    public function cari(Request $request)
    {
        // dd($request)->all();
     $surat = Surat::latest()->when(request()->cari, function ($surat) {
        $surat = $surat->where('deskripsi', 'like', '%' . request()->cari . '%');
            })->paginate(10);
        return view('admin.surat.keluar.index',compact("surat"));
    }
    
}
