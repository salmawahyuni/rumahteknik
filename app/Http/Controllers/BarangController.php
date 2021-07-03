<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtBarang = Barang::all();
                return view('Admin.Barang', compact('dtBarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Create-Barang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $nm = $request->gambar;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

            $dtBarang = new Barang;
            $dtBarang->kodebarang = $request->kodebarang;
            $dtBarang->namabarang = $request->namabarang;
            $dtBarang->stok = $request->stok;
            $dtBarang->kondisi = $request->kondisi;
            $dtBarang->harga = $request->harga;
            $dtBarang->spesifikasi = $request->spesifikasi;
            $dtBarang->gambar = $namaFile;

            $nm->move(public_path().'/img', $namaFile);
            $dtBarang->save();

        // Barang::create([
        //     'kodebarang'=>$request->kodebarang,
        //     'namabarang'=>$request->namabarang,
        //     'stok'=>$request->stok,
        //     'kondisi'=>$request->kondisi,
        //     'harga'=>$request->harga,
        //     'spesifikasi'=>$request->spesifikasi,
        //     'gambar'=>$request->gambar
        // ]);

        return redirect('barang')->with('success', 'Data Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtBarang = Barang::findorfail($id);
        return view('Admin.Edit-Barang', compact ('dtBarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $ubah = Barang::findorfail($id);
        $awal = $ubah->gambar;

        $dtBarang = [
            'kodebarang' => $request['kodebarang'],
            'namabarang'=>$request['namabarang'],
            'stok'=>$request['stok'],
            'kondisi'=>$request['kondisi'],
            'harga'=>$request['harga'],
            'spesifikasi'=>$request['spesifikasi'],
            'gambar'=> $awal,
        ];
        $request->gambar->move(public_path().'/img', $awal);
        $ubah->update($dtBarang);
        
        // $dtBarang = Barang::findorfail($id);
        // $dtBarang->update($request->all());

        return redirect('barang')->with('success', 'Perubahan Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $hapus = Barang::findorfail($id);

        $file = public_path('/img/').$hapus->gambar;
        //cek jika ada gambar
        if (file_exists($file)){
            //maka hapus file d folder public/img
            @unlink($file);
        }
        
        // $dtBarang = Barang::findorfail($id);
        // $dtBarang->delete();
        $hapus->delete();
        return back()->with('info', 'Data Dihapus!');
    }

    public function informasi()
    {
        $dtBarang = Barang::all();
        return view('Mahasiswa.InfoBarang', compact('dtBarang'));
    }
}
