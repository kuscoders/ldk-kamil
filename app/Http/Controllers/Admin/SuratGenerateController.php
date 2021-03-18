<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\suratGenerate;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use PDF;

class SuratGenerateController extends Controller
{
    // public function choose()
    // {
    //     $genrate = suratGenerate::latest()->get();
    //     return view('admin.surat.genrate.choose', compact('genrate'));
    // }
    public function index()
    {
        $genrate = suratGenerate::latest()->get();
        return view('admin.surat.genrate.index',compact("genrate"));
    }

    //izin Kegiatan
    public function keluar(Request $request)
    {
        // dd($request->all());
        $genrate = suratGenerate::latest()->get();
        return view('admin.surat.genrate.keluar', compact('genrate'));
    }
    public function keluar_pdf(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        
        $pdf = PDF::loadview('admin.surat.genrate.keluar_pdf',['data'=>$data]);
        return $pdf->stream();
    }

    //izin Ruang dan Alat
    public function izinRuangan(Request $request)
    {
        // dd($request->all());
        $genrate = suratGenerate::latest()->get();
        return view('admin.surat.genrate.izinRuangan', compact('genrate'));
    }
    public function izinRuangan_pdf(Request $request)
    {
        // dd($request->all());
        $data1 = $request->all();
        
        $pdf = PDF::loadview('admin.surat.genrate.izinRuangan_pdf',['data1'=>$data1]);
        return $pdf->stream();
    }

    //undangan
    public function undangan(Request $request)
    {
        // dd($request->all());
        $genrate = suratGenerate::latest()->get();
        return view('admin.surat.genrate.undangan', compact('genrate'));
    }
    public function undangan_pdf(Request $request)
    {
        // dd($request->all());
        $data2 = $request->all();
        
        $pdf = PDF::loadview('admin.surat.genrate.undangan_pdf',['data2'=>$data2]);
        return $pdf->stream();
    }





    // public function read($id)
    // {
    //     $genrate = suratGenerate::findOrfail($id);
    //     return view('admin.surat.genrate.read', compact('genrate'));
    // }
    // public function create()
    // {
    //     $genrate = suratGenerate::latest()->get();
    //     return view('admin.surat.genrate.create', compact('genrate'));
    // }
    // public function store(Request $request)
    // {
    //     // dd($request)->all();
    //     $this->validate($request, [
    //         // 'id' => 'required|max:10|min:1',
    //         'nomor_surat' => 'required|max:10|min:1',
    //         'perihal' => 'required|max:255',
    //         'deskripsi' => 'required|max:255',
    //         'tujuan' => 'required|max:255',
    //         'tgl' => 'required|max:255',
    //         'thumbnail' => 'mimes:jpeg, jpg, png',
    //     ]);

    //     $imgName = $request->thumbnail->getClientOriginalName() . '-' . time()
    //                             . '.' . $request->thumbnail->extension();

    //     $request->thumbnail->move(public_path('image'), $imgName);

    //     $simpn = suratGenerate::create([
    //         // 'id' => $request->input('id'),
    //         'nomor_surat' => $request->input ('nomor_surat'),
    //         'perihal' => $request->input ('perihal'),
    //         'deskripsi' => $request->input ('deskripsi'),
    //         'tujuan' => $request->input ('tujuan'),
    //         'tgl' => $request->input ('tgl'),
    //         'thumbnail' => $imgName,
    //     ]);

    //     if($simpn){
    //         return redirect()->route('admin.surat.genrate.index')->with(['success' => 'Data Berhasil Disimpan!']);
    //     } else {
    //         return redirect()->route('admin.surat.genrate.index')->with(['error' => 'Data Gagal Disimpan!']);
    //     }
    // }
    // public function edit($id)
    // {
    //     $genrate = suratGenerate::findOrfail($id);
    //     return view('admin.surat.genrate.edit', compact('genrate'));
    // }
    // public function update(Request $request, $id)
    // {
    //     // dd($request)->all();
    //     $this->validate($request, [
    //         // 'id' => 'required|max:10|min:1',
    //         'nomor_surat' => 'required|max:10|min:1',
    //         'perihal' => 'required|max:255',
    //         'deskripsi' => 'required|max:255',
    //         'tujuan' => 'required|max:255',
    //         'tgl' => 'required|max:255',
    //         'thumbnail' => 'mimes:jpeg, jpg, png',
    //     ]);

    //     $imgName = $request->thumbnail->getClientOriginalName() . '-' . time()
    //                             . '.' . $request->thumbnail->extension();

    //     $request->thumbnail->move(public_path('image'), $imgName);

    //     $genrate = suratGenerate::findOrfail($id);
    //     $genrate->update([
    //         // 'id' => $request->input('id'),
    //         'nomor_surat' => $request->input ('nomor_surat'),
    //         'perihal' => $request->input ('perihal'),
    //         'deskripsi' => $request->input ('deskripsi'),
    //         'tujuan' => $request->input ('tujuan'),
    //         'tgl' => $request->input ('tgl'),
    //         'thumbnail' => $imgName,
    //     ]);          

    //     if($genrate){
    //         return redirect()->route('admin.surat.genrate.read', compact('genrate', 'id'))->with(['success' => 'Data Berhasil Disimpan!']);
    //     } else {
    //         return redirect()->route('admin.surat.genrate.read', compact('genrate', 'id'))->with(['error' => 'Data Gagal Disimpan!']);
    //     }
    // }
    // public function destroy(Request $request, $id)
    // {
    //     // dd($request)->all();
    //     $genrate = suratGenerate::findOrFail($id)->delete();

    //     if($genrate){
    //         return redirect()->route('admin.surat.genrate.index')->with(['success' => 'Data Telah Dihapus    !']);
    //     } else {
    //         return redirect()->route('admin.surat.genrate.index')->with(['error' => 'Data Gagal Disimpan!']);
    //     }
    // }
    // public function cari(Request $request)
    //     {
    //         $genrate = suratGenerate::latest()->when(request()->cari, function ($genrate) {
    //             $genrate = $genrate->where('perihal', 'like', '%' . request()->cari . '%');
    //         })->paginate(10);
    
    //         return view('admin.surat.genrate.index', compact('genrate'));
        
    //     }

    // public function cetak_pdf(Request $request)
    // {
        
    //     $genrate = suratGenerate::all();

    //     $pdf = PDF::loadview('admin.surat.genrate.pdf',['genrate'=>$genrate]);
    //     return $pdf->stream();
    // }

    // public function smpn(Request $request)
    // {
    //     dd($request)->all();
    //     $this->validate($request, [
    //         'tempat' => 'required|max:10|min:1',
    //         'nomor_surat' => 'required|max:10|min:1',
    //         'perihal' => 'required|max:255',
    //         'kepada' => 'required|max:255',
    //         'kegiatan' => 'required|max:255',
    //         'tgl' => 'required|max:255',
    //     ]);

    //     $simpn = suratGenerate::create([
    //         // 'id' => $request->input('id'),
    //         'nomor_surat' => $request,
    //         'perihal' => $request,
    //         'deskripsi' => $request,
    //         'tujuan' => $request,
    //         'tgl' => $request,
    //     ]);

    //     if($simpn){
    //         return redirect()->route('admin.surat.genrate.index')->with(['success' => 'Data Berhasil Disimpan!']);
    //     } else {
    //         return redirect()->route('admin.surat.genrate.index')->with(['error' => 'Data Gagal Disimpan!']);
    //     }
    // }



    // public function cetak($id)
    // {
    //     $genrate = suratGenerate::findOrfail($id);
    //     return view('admin.surat.genrate.cetak', compact('genrate'));
    // }
}
    

